# Refactoring Best Practices - Kancelaria Adwokacka Website

## When to Refactor

### Code Smells to Watch For
- Duplicate code in multiple places
- Functions longer than 50 lines
- Deep nesting (>3 levels)
- Magic numbers/strings
- Poor naming
- Inconsistent patterns
- Performance bottlenecks

## HTML Refactoring

### Extract Reusable Components
**Before:**
```html
<!-- Repeated card structure -->
<div class="card">
  <div class="card-body">
    <i class="fas fa-users fa-3x"></i>
    <h3>Prawo Rodzinne</h3>
    <p>Rozwody, alimenty...</p>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <i class="fas fa-file-contract fa-3x"></i>
    <h3>Prawo Spadkowe</h3>
    <p>Spadki, testamenty...</p>
  </div>
</div>
```

**After (create template function):**
```javascript
// js/components/service-card.js
const createServiceCard = ({ icon, title, description, link }) => `
  <div class="card service-card shadow-sm h-100">
    <div class="card-body text-center">
      <i class="${icon} fa-3x mb-3 text-primary" aria-hidden="true"></i>
      <h3 class="card-title h5">${title}</h3>
      <p class="card-text">${description}</p>
      <a href="${link}" class="btn btn-outline-primary">
        Dowiedz się więcej
      </a>
    </div>
  </div>
`;

// Usage
const services = [
  {
    icon: 'fas fa-users',
    title: 'Prawo Rodzinne',
    description: 'Rozwody, alimenty, władza rodzicielska',
    link: '/prawo-rodzinne.html'
  },
  // ...more services
];

const servicesHTML = services.map(createServiceCard).join('');
document.getElementById('services-container').innerHTML = servicesHTML;
```

### Semantic Structure
**Before:**
```html
<div class="header">
  <div class="menu">...</div>
</div>
<div class="content">...</div>
<div class="footer">...</div>
```

**After:**
```html
<header class="site-header">
  <nav class="main-nav" aria-label="Main navigation">...</nav>
</header>
<main id="main-content">...</main>
<footer class="site-footer">...</footer>
```

## CSS Refactoring

### Use CSS Variables
**Before:**
```css
.header {
  background-color: #1e3a5f;
  color: #ffffff;
}

.button {
  background-color: #1e3a5f;
  color: #ffffff;
}

.footer {
  background-color: #1e3a5f;
  color: #ffffff;
}
```

**After:**
```css
:root {
  --color-primary: #1e3a5f;
  --color-white: #ffffff;
}

.header,
.button,
.footer {
  background-color: var(--color-primary);
  color: var(--color-white);
}
```

### Extract Common Patterns
**Before:**
```css
.service-card {
  padding: 2rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.testimonial-card {
  padding: 2rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}
```

**After:**
```css
/* Base card styles */
.card-base {
  padding: var(--spacing-lg);
  border-radius: var(--border-radius);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-normal);
}

.service-card,
.testimonial-card {
  @extend .card-base; /* Or use class in HTML */
}

/* Or use utility classes */
<div class="p-4 rounded shadow-sm transition-transform">
```

### Mobile-First Consolidation
**Before:**
```css
.container {
  width: 100%;
  padding: 1rem;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
    padding: 1.5rem;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
    padding: 2rem;
  }
}

@media (min-width: 1200px) {
  .container {
    width: 1170px;
    padding: 2rem;
  }
}
```

**After (Use Bootstrap):**
```html
<!-- Let Bootstrap handle it -->
<div class="container px-3 px-md-4">
```

## JavaScript Refactoring

### Extract Functions
**Before:**
```javascript
document.getElementById('contactForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;
  
  if (name.length < 2) {
    alert('Name too short');
    return;
  }
  
  if (!email.includes('@')) {
    alert('Invalid email');
    return;
  }
  
  if (message.length < 20) {
    alert('Message too short');
    return;
  }
  
  try {
    const response = await fetch('/api/contact', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ name, email, message })
    });
    
    if (response.ok) {
      alert('Success!');
    } else {
      alert('Error!');
    }
  } catch (error) {
    alert('Network error!');
  }
});
```

**After:**
```javascript
// Validation module
const validators = {
  name: (value) => value.length >= 2,
  email: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
  message: (value) => value.length >= 20
};

const validateForm = (formData) => {
  const errors = {};
  
  Object.entries(validators).forEach(([field, validator]) => {
    const value = formData.get(field);
    if (!validator(value)) {
      errors[field] = `Invalid ${field}`;
    }
  });
  
  return {
    isValid: Object.keys(errors).length === 0,
    errors
  };
};

// API module
const api = {
  async submitContact(data) {
    const response = await fetch('/api/contact', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data)
    });
    
    if (!response.ok) {
      throw new Error(`HTTP ${response.status}`);
    }
    
    return response.json();
  }
};

// UI module
const ui = {
  showErrors(errors) {
    Object.entries(errors).forEach(([field, message]) => {
      const element = document.getElementById(`${field}-error`);
      if (element) element.textContent = message;
    });
  },
  
  showSuccess(message) {
    // Show success message
  },
  
  showError(message) {
    // Show error message
  }
};

// Event handler
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('contactForm')?.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const validation = validateForm(formData);
    
    if (!validation.isValid) {
      ui.showErrors(validation.errors);
      return;
    }
    
    try {
      await api.submitContact(Object.fromEntries(formData));
      ui.showSuccess('Wiadomość wysłana pomyślnie!');
      e.target.reset();
    } catch (error) {
      console.error('Submission error:', error);
      ui.showError('Wystąpił błąd. Spróbuj ponownie.');
    }
  });
});
```

### Use Async/Await
**Before:**
```javascript
fetch('/api/data')
  .then(response => response.json())
  .then(data => {
    processData(data);
  })
  .catch(error => {
    console.error(error);
  });
```

**After:**
```javascript
const fetchData = async () => {
  try {
    const response = await fetch('/api/data');
    const data = await response.json();
    processData(data);
  } catch (error) {
    console.error('Fetch error:', error);
  }
};
```

### Remove Magic Numbers
**Before:**
```javascript
if (scrollY > 300) {
  showScrollTopButton();
}

setTimeout(() => {
  hideMessage();
}, 3000);
```

**After:**
```javascript
const SCROLL_THRESHOLD = 300; // px
const MESSAGE_DISPLAY_DURATION = 3000; // ms

if (scrollY > SCROLL_THRESHOLD) {
  showScrollTopButton();
}

setTimeout(() => {
  hideMessage();
}, MESSAGE_DISPLAY_DURATION);
```

### Event Delegation
**Before:**
```javascript
document.querySelectorAll('.btn').forEach(btn => {
  btn.addEventListener('click', handleClick);
});
```

**After:**
```javascript
// Single event listener for all buttons
document.addEventListener('click', (e) => {
  if (e.target.matches('.btn')) {
    handleClick(e);
  }
});
```

## Performance Refactoring

### Debounce Expensive Operations
```javascript
// Utility
const debounce = (func, wait) => {
  let timeout;
  return (...args) => {
    clearTimeout(timeout);
    timeout = setTimeout(() => func.apply(this, args), wait);
  };
};

// Usage
const handleSearch = debounce((query) => {
  // Expensive search operation
}, 300);

searchInput.addEventListener('input', (e) => {
  handleSearch(e.target.value);
});
```

### Lazy Loading
```javascript
// Before: Load all images immediately
const images = document.querySelectorAll('img');

// After: Lazy load with Intersection Observer
const lazyLoadImages = () => {
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        imageObserver.unobserve(img);
      }
    });
  });
  
  document.querySelectorAll('img[data-src]').forEach(img => {
    imageObserver.observe(img);
  });
};
```

## Accessibility Refactoring

### Add ARIA Labels
**Before:**
```html
<button onclick="openMenu()">
  <i class="fas fa-bars"></i>
</button>
```

**After:**
```html
<button 
  onclick="openMenu()" 
  aria-label="Otwórz menu"
  aria-expanded="false"
  aria-controls="main-menu"
>
  <i class="fas fa-bars" aria-hidden="true"></i>
</button>
```

### Improve Form Accessibility
**Before:**
```html
<input type="text" placeholder="Email">
```

**After:**
```html
<label for="email-input">Adres email</label>
<input 
  type="email" 
  id="email-input"
  name="email"
  placeholder="jan.kowalski@example.com"
  required
  aria-required="true"
  aria-describedby="email-help"
>
<small id="email-help">Podaj swój adres email kontaktowy</small>
```

## Refactoring Checklist

Before refactoring:
- [ ] All tests pass
- [ ] Code is backed up / committed
- [ ] You understand what the code does
- [ ] You have a clear goal for refactoring

During refactoring:
- [ ] Make small, incremental changes
- [ ] Test after each change
- [ ] Keep functionality the same
- [ ] Improve one aspect at a time

After refactoring:
- [ ] All tests still pass
- [ ] No new bugs introduced
- [ ] Code is more maintainable
- [ ] Documentation updated
- [ ] Performance same or better

## Red Flags

Stop and reconsider if:
- Breaking existing functionality
- Making code more complex
- Increasing bundle size significantly
- Reducing performance
- Breaking accessibility
- Introducing security issues

---

**Refactoring Goal**: Make code cleaner, more maintainable, and easier to understand without changing behavior.
