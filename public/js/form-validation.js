/**
 * public/js/form-validation.js
 * Form Validation JavaScript
 * 
 * Kancelaria Adwokacka Adwokat Katarzyna Maj
 * 
 * Handles:
 * - Client-side form validation
 * - Real-time validation feedback
 * - Phone number formatting
 * - Character counting
 * - CSRF token handling
 * - AJAX form submission
 * 
 * @version 1.0.0
 */

'use strict';

// ============================================
// FORM VALIDATION CONFIGURATION
// ============================================

const FormValidation = {
    // Validation rules
    rules: {
        name: {
            required: true,
            minLength: 2,
            maxLength: 100,
            pattern: /^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ\s-]+$/,
            messages: {
                required: 'Imię i nazwisko jest wymagane',
                minLength: 'Imię i nazwisko musi mieć minimum 2 znaki',
                maxLength: 'Imię i nazwisko nie może przekraczać 100 znaków',
                pattern: 'Podaj prawidłowe imię i nazwisko'
            }
        },
        email: {
            required: true,
            email: true,
            maxLength: 255,
            messages: {
                required: 'Adres email jest wymagany',
                email: 'Podaj prawidłowy adres email',
                maxLength: 'Adres email nie może przekraczać 255 znaków'
            }
        },
        phone: {
            required: false,
            pattern: /^(\+48)?[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}$/,
            messages: {
                pattern: 'Podaj prawidłowy numer telefonu (np. 502 319 645)'
            }
        },
        subject: {
            required: true,
            messages: {
                required: 'Wybierz temat sprawy'
            }
        },
        message: {
            required: true,
            minLength: 20,
            maxLength: 2000,
            messages: {
                required: 'Wiadomość jest wymagana',
                minLength: 'Wiadomość musi zawierać minimum 20 znaków',
                maxLength: 'Wiadomość nie może przekraczać 2000 znaków'
            }
        },
        rodo: {
            required: true,
            messages: {
                required: 'Musisz wyrazić zgodę na przetwarzanie danych'
            }
        }
    },
    
    // CSS classes
    classes: {
        valid: 'is-valid',
        invalid: 'is-invalid',
        validated: 'was-validated',
        error: 'error-message',
        success: 'success-message'
    }
};

// ============================================
// UTILITY FUNCTIONS
// ============================================

/**
 * Show error message
 * @param {HTMLElement} element - Input element
 * @param {string} message - Error message
 */
function showError(element, message) {
    const formGroup = element.closest('.mb-3') || element.parentElement;
    if (!formGroup) return;
    
    // Remove success state
    element.classList.remove(FormValidation.classes.valid);
    
    // Add error state
    element.classList.add(FormValidation.classes.invalid);
    
    // Show or update error message
    let errorElement = formGroup.querySelector(`.${FormValidation.classes.error}`);
    if (!errorElement) {
        errorElement = document.createElement('small');
        errorElement.className = `text-danger ${FormValidation.classes.error}`;
        errorElement.setAttribute('role', 'alert');
        formGroup.appendChild(errorElement);
    }
    errorElement.textContent = message;
}

/**
 * Show success state
 * @param {HTMLElement} element - Input element
 */
function showSuccess(element) {
    const formGroup = element.closest('.mb-3') || element.parentElement;
    if (!formGroup) return;
    
    // Remove error state
    element.classList.remove(FormValidation.classes.invalid);
    
    // Add success state
    element.classList.add(FormValidation.classes.valid);
    
    // Remove error message
    const errorElement = formGroup.querySelector(`.${FormValidation.classes.error}`);
    if (errorElement) {
        errorElement.remove();
    }
}

/**
 * Clear validation state
 * @param {HTMLElement} element - Input element
 */
function clearValidation(element) {
    element.classList.remove(FormValidation.classes.valid);
    element.classList.remove(FormValidation.classes.invalid);
    
    const formGroup = element.closest('.mb-3') || element.parentElement;
    if (formGroup) {
        const errorElement = formGroup.querySelector(`.${FormValidation.classes.error}`);
        if (errorElement) {
            errorElement.remove();
        }
    }
}

// ============================================
// VALIDATION FUNCTIONS
// ============================================

/**
 * Validate required field
 * @param {string} value - Field value
 * @returns {boolean} True if valid
 */
function validateRequired(value) {
    return value && value.trim().length > 0;
}

/**
 * Validate email
 * @param {string} email - Email to validate
 * @returns {boolean} True if valid
 */
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

/**
 * Validate phone (Polish format)
 * @param {string} phone - Phone to validate
 * @returns {boolean} True if valid
 */
function validatePhone(phone) {
    const re = /^(\+48)?[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}$/;
    return re.test(phone);
}

/**
 * Validate minimum length
 * @param {string} value - Value to validate
 * @param {number} min - Minimum length
 * @returns {boolean} True if valid
 */
function validateMinLength(value, min) {
    return value && value.length >= min;
}

/**
 * Validate maximum length
 * @param {string} value - Value to validate
 * @param {number} max - Maximum length
 * @returns {boolean} True if valid
 */
function validateMaxLength(value, max) {
    return !value || value.length <= max;
}

/**
 * Validate pattern
 * @param {string} value - Value to validate
 * @param {RegExp} pattern - Pattern to match
 * @returns {boolean} True if valid
 */
function validatePattern(value, pattern) {
    return !value || pattern.test(value);
}

/**
 * Validate single field
 * @param {string} fieldName - Field name
 * @param {string} value - Field value
 * @returns {object} Validation result
 */
function validateField(fieldName, value) {
    const rule = FormValidation.rules[fieldName];
    if (!rule) return { valid: true };
    
    // Required validation
    if (rule.required && !validateRequired(value)) {
        return {
            valid: false,
            message: rule.messages.required
        };
    }
    
    // Skip other validations if not required and empty
    if (!validateRequired(value) && !rule.required) {
        return { valid: true };
    }
    
    // Email validation
    if (rule.email && !validateEmail(value)) {
        return {
            valid: false,
            message: rule.messages.email
        };
    }
    
    // Phone validation
    if (rule.phone && !validatePhone(value)) {
        return {
            valid: false,
            message: rule.messages.phone || rule.messages.pattern
        };
    }
    
    // Min length validation
    if (rule.minLength && !validateMinLength(value, rule.minLength)) {
        return {
            valid: false,
            message: rule.messages.minLength
        };
    }
    
    // Max length validation
    if (rule.maxLength && !validateMaxLength(value, rule.maxLength)) {
        return {
            valid: false,
            message: rule.messages.maxLength
        };
    }
    
    // Pattern validation
    if (rule.pattern && !validatePattern(value, rule.pattern)) {
        return {
            valid: false,
            message: rule.messages.pattern
        };
    }
    
    return { valid: true };
}

/**
 * Validate entire form
 * @param {HTMLFormElement} form - Form to validate
 * @returns {object} Validation result
 */
function validateForm(form) {
    const errors = [];
    const formData = new FormData(form);
    
    // Validate each field
    for (const [fieldName, rule] of Object.entries(FormValidation.rules)) {
        const value = formData.get(fieldName);
        const result = validateField(fieldName, value);
        
        if (!result.valid) {
            errors.push({
                field: fieldName,
                message: result.message
            });
        }
    }
    
    return {
        valid: errors.length === 0,
        errors: errors
    };
}

// ============================================
// PHONE FORMATTING
// ============================================

/**
 * Format phone number
 * @param {string} phone - Phone number
 * @returns {string} Formatted phone number
 */
function formatPhone(phone) {
    // Remove all non-digits
    const digits = phone.replace(/\D/g, '');
    
    // Format as +48 XXX XXX XXX
    if (digits.length > 9) {
        return '+48 ' + digits.slice(-9).replace(/(\d{3})(\d{3})(\d{3})/, '$1 $2 $3');
    } else if (digits.length === 9) {
        return digits.replace(/(\d{3})(\d{3})(\d{3})/, '$1 $2 $3');
    }
    
    return phone;
}

/**
 * Initialize phone formatting
 */
function initPhoneFormatting() {
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            const formatted = formatPhone(e.target.value);
            e.target.value = formatted;
        });
        
        input.addEventListener('blur', function(e) {
            // Validate on blur
            const result = validateField('phone', e.target.value);
            if (!result.valid && e.target.value) {
                showError(e.target, result.message);
            } else {
                clearValidation(e.target);
            }
        });
    });
}

// ============================================
// CHARACTER COUNTER
// ============================================

/**
 * Initialize character counter
 */
function initCharCounter() {
    const textareas = document.querySelectorAll('textarea[minlength][maxlength]');
    
    textareas.forEach(textarea => {
        const maxLength = parseInt(textarea.getAttribute('maxlength'));
        const counter = document.createElement('small');
        counter.className = 'text-muted d-block mt-1 text-end';
        counter.id = `charCount-${textarea.id}`;
        textarea.parentNode.appendChild(counter);
        
        function updateCounter() {
            const length = textarea.value.length;
            counter.textContent = `${length}/${maxLength}`;
            
            if (length > maxLength) {
                counter.classList.add('text-danger');
            } else {
                counter.classList.remove('text-danger');
            }
        }
        
        textarea.addEventListener('input', updateCounter);
        updateCounter(); // Initial count
    });
}

// ============================================
// FORM SUBMISSION
// ============================================

/**
 * Handle form submission
 * @param {Event} e - Submit event
 */
async function handleFormSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    const formSuccess = document.getElementById('formSuccess');
    const formError = document.getElementById('formError');
    const validationSummary = document.getElementById('validationSummary');
    const validationErrors = document.getElementById('validationErrors');
    
    // Reset previous states
    if (formSuccess) formSuccess.classList.add('d-none');
    if (formError) formError.classList.add('d-none');
    if (validationSummary) validationSummary.classList.add('d-none');
    if (validationErrors) validationErrors.innerHTML = '';
    
    // Validate form
    const validation = validateForm(form);
    
    if (!validation.valid) {
        // Show validation errors
        form.classList.add(FormValidation.classes.validated);
        
        // Show individual field errors
        validation.errors.forEach(error => {
            const field = form.querySelector(`[name="${error.field}"]`);
            if (field) {
                showError(field, error.message);
            }
        });
        
        // Show summary
        if (validationSummary && validationErrors) {
            validation.errors.forEach(error => {
                const li = document.createElement('li');
                li.textContent = error.message;
                validationErrors.appendChild(li);
            });
            validationSummary.classList.remove('d-none');
        }
        
        return;
    }
    
    // Check honeypot (anti-spam)
    const honeypot = form.querySelector('[name="website"]');
    if (honeypot && honeypot.value) {
        // Bot detected - silently fail
        console.log('Spam detected');
        return;
    }
    
    // Show loading state
    submitBtn.disabled = true;
    if (btnText) btnText.classList.add('d-none');
    if (btnLoading) btnLoading.classList.remove('d-none');
    
    try {
        // Prepare form data
        const formData = new FormData(form);
        
        // Add AJAX header
        const headers = {
            'X-Requested-With': 'XMLHttpRequest'
        };
        
        // Submit form via AJAX
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: headers
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Show success message
            if (formSuccess) {
                formSuccess.classList.remove('d-none');
                formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            
            // Reset form
            form.reset();
            
            // Clear validation states
            form.querySelectorAll('.is-valid, .is-invalid').forEach(el => {
                el.classList.remove('is-valid', 'is-invalid');
            });
        } else {
            // Show error message
            if (formError) {
                formError.querySelector('div').textContent = data.message || 'Coś poszło nie tak. Spróbuj ponownie.';
                formError.classList.remove('d-none');
                formError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    } catch (error) {
        console.error('Form submission error:', error);
        
        // Show error message
        if (formError) {
            formError.classList.remove('d-none');
            formError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    } finally {
        // Reset button state
        submitBtn.disabled = false;
        if (btnText) btnText.classList.remove('d-none');
        if (btnLoading) btnLoading.classList.add('d-none');
    }
}

// ============================================
// REAL-TIME VALIDATION
// ============================================

/**
 * Initialize real-time validation
 */
function initRealTimeValidation() {
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            // Validate on blur
            input.addEventListener('blur', function() {
                const fieldName = this.name;
                if (!fieldName) return;
                
                const result = validateField(fieldName, this.value);
                
                if (!result.valid) {
                    showError(this, result.message);
                } else if (this.value.trim()) {
                    showSuccess(this);
                }
            });
            
            // Clear error on input
            input.addEventListener('input', function() {
                if (this.classList.contains(FormValidation.classes.invalid)) {
                    const result = validateField(this.name, this.value);
                    if (result.valid) {
                        clearValidation(this);
                    }
                }
            });
        });
        
        // Handle form submission
        form.addEventListener('submit', handleFormSubmit);
    });
}

// ============================================
// CSRF TOKEN HANDLING
// ============================================

/**
 * Get CSRF token from form
 * @param {HTMLFormElement} form - Form element
 * @returns {string|null} CSRF token
 */
function getCsrfToken(form) {
    const tokenInput = form.querySelector('input[name="csrf_token"]');
    return tokenInput ? tokenInput.value : null;
}

// ============================================
// INITIALIZATION
// ============================================

/**
 * Initialize all form validation features
 */
function initFormValidation() {
    initPhoneFormatting();
    initCharCounter();
    initRealTimeValidation();
    
    console.log('Form validation initialized');
}

// ============================================
// DOM READY
// ============================================

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initFormValidation);
} else {
    initFormValidation();
}

// ============================================
// EXPORT FOR MODULE USAGE
// ============================================

if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        FormValidation,
        validateField,
        validateForm,
        formatPhone,
        showError,
        showSuccess,
        clearValidation
    };
}
