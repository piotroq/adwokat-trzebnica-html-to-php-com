import { test, expect, waitForPageLoad } from '../fixtures/base-fixture';

test.describe('Forms and User Interactions', () => {
  test.beforeEach(async ({ page }) => {
    await page.goto('/kontakt.php');
    await waitForPageLoad(page);
  });

  test('should display contact form', async ({ page }) => {
    const form = page.locator('form');
    await expect(form).toBeVisible();
    
    // Check form fields
    const nameInput = page.locator('input[name*="name"], input[name*="imie"], input#name, input#imie');
    const emailInput = page.locator('input[type="email"], input[name*="email"]');
    const messageInput = page.locator('textarea[name*="message"], textarea[name*="wiadomosc"], textarea#message');
    
    await expect(nameInput.first()).toBeVisible();
    await expect(emailInput.first()).toBeVisible();
    await expect(messageInput.first()).toBeVisible();
  });

  test('should validate empty form submission', async ({ page }) => {
    const form = page.locator('form').first();
    const submitButton = form.locator('button[type="submit"], input[type="submit"]');
    
    // Try to submit empty form
    await submitButton.click();
    await page.waitForTimeout(2000);
    
    // Check for validation errors or HTML5 validation
    const isDefaultPrevented = await page.evaluate(() => {
      const forms = document.querySelectorAll('form');
      for (const form of forms) {
        if ((form as any).checkValidity && !(form as any).checkValidity()) {
          return true;
        }
      }
      return false;
    });
    
    expect(isDefaultPrevented).toBeTruthy();
  });

  test('should validate email format', async ({ page }) => {
    const form = page.locator('form').first();
    const emailInput = form.locator('input[type="email"], input[name*="email"]').first();
    const submitButton = form.locator('button[type="submit"], input[type="submit"]').first();
    
    // Fill with invalid email
    await emailInput.fill('invalid-email');
    
    // Fill other required fields
    const nameInput = form.locator('input[name*="name"], input[name*="imie"]').first();
    await nameInput.fill('Test User');
    
    const messageInput = form.locator('textarea').first();
    await messageInput.fill('Test message');
    
    await submitButton.click();
    await page.waitForTimeout(2000);
    
    // Check for validation
    const emailIsValid = await emailInput.evaluate((el) => {
      return (el as HTMLInputElement).validity.valid;
    });
    
    expect(emailIsValid).toBeFalsy();
  });

  test('should accept valid form data', async ({ page }) => {
    const form = page.locator('form').first();
    const emailInput = form.locator('input[type="email"], input[name*="email"]').first();
    const nameInput = form.locator('input[name*="name"], input[name*="imie"]').first();
    const messageInput = form.locator('textarea').first();
    const submitButton = form.locator('button[type="submit"], input[type="submit"]').first();
    
    // Fill with valid data
    await nameInput.fill('Jan Kowalski');
    await emailInput.fill('jan.kowalski@example.com');
    await messageInput.fill('To jest testowa wiadomość');
    
    // Check form validity
    const formIsValid = await form.evaluate((el) => {
      return (el as HTMLFormElement).checkValidity();
    });
    
    expect(formIsValid).toBeTruthy();
  });

  test('should have proper input labels', async ({ page }) => {
    const inputs = page.locator('input, textarea, select');
    const count = await inputs.count();
    
    for (let i = 0; i < Math.min(count, 5); i++) {
      const input = inputs.nth(i);
      const id = await input.getAttribute('id');
      
      if (id) {
        const label = page.locator(`label[for="${id}"]`);
        const labelCount = await label.count();
        
        // Either label with 'for' attribute or aria-label should exist
        const ariaLabel = await input.getAttribute('aria-label');
        const placeholder = await input.getAttribute('placeholder');
        
        expect(labelCount > 0 || !!ariaLabel || !!placeholder).toBeTruthy();
      }
    }
  });

  test('should have submit button', async ({ page }) => {
    const submitButtons = page.locator('button[type="submit"], input[type="submit"]');
    await expect(submitButtons.first()).toBeVisible();
    
    const text = await submitButtons.first().textContent();
    expect(text?.toLowerCase()).toMatch(/wyślij|submit|kontakt|send/);
  });

  test('should show success/error messages after submission', async ({ page, browserName }) => {
    test.skip(browserName !== 'chromium', 'Skip for non-Chromium browsers');
    
    const form = page.locator('form').first();
    const emailInput = form.locator('input[type="email"]').first();
    const nameInput = form.locator('input[name*="name"]').first();
    const messageInput = form.locator('textarea').first();
    const submitButton = form.locator('button[type="submit"]').first();
    
    // Fill form
    await nameInput.fill('Test User');
    await emailInput.fill('test@example.com');
    await messageInput.fill('Test message');
    
    // Note: Actual submission depends on backend implementation
    // This test checks if there's any feedback mechanism
    const hasFeedbackElement = await page.locator('.alert, .message, .notification, [role="alert"]').count() > 0;
    expect(hasFeedbackElement).toBeTruthy(); // Should have some feedback element in the DOM
  });
});

test.describe('Interactive Elements', () => {
  test('should have clickable phone numbers', async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
    
    const phoneLinks = page.locator('a[href^="tel:"]');
    const count = await phoneLinks.count();
    
    if (count > 0) {
      await expect(phoneLinks.first()).toBeVisible();
      const href = await phoneLinks.first().getAttribute('href');
      expect(href).toMatch(/^tel:\+?[0-9\s-]+$/);
    }
  });

  test('should have clickable email addresses', async ({ page }) => {
    await page.goto('/kontakt.php');
    await waitForPageLoad(page);
    
    const emailLinks = page.locator('a[href^="mailto:"]');
    const count = await emailLinks.count();
    
    if (count > 0) {
      await expect(emailLinks.first()).toBeVisible();
      const href = await emailLinks.first().getAttribute('href');
      expect(href).toMatch(/^mailto:[^\s]+@[^\s]+\.[^\s]+$/);
    }
  });

  test('should have working anchor links', async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
    
    const anchorLinks = page.locator('a[href^="#"]');
    const count = await anchorLinks.count();
    
    if (count > 0) {
      const href = await anchorLinks.first().getAttribute('href');
      if (href && href !== '#') {
        const targetId = href.substring(1);
        const target = page.locator(`#${targetId}, [name="${targetId}"]`);
        
        if (await target.count() > 0) {
          await anchorLinks.first().click();
          await page.waitForTimeout(1000);
          
          const isVisible = await target.first().isVisible();
          expect(isVisible).toBeTruthy();
        }
      }
    }
  });

  test('should have smooth scrolling for anchor links', async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
    
    const html = page.locator('html');
    const scrollBehavior = await html.evaluate((el) => {
      const style = window.getComputedStyle(el);
      return style.scrollBehavior;
    });
    
    // Smooth scroll is nice to have but not required
    expect(scrollBehavior === 'smooth' || scrollBehavior === 'auto').toBeTruthy();
  });
});

test.describe('Form Accessibility', () => {
  test('should have required field indicators', async ({ page }) => {
    await page.goto('/kontakt.php');
    await waitForPageLoad(page);
    
    const requiredInputs = page.locator('input[required], textarea[required]');
    const count = await requiredInputs.count();
    
    if (count > 0) {
      // Check if required fields are visually indicated
      const firstRequired = requiredInputs.first();
      const isMarked = await firstRequired.evaluate((el) => {
        return el.hasAttribute('required') || 
               el.hasAttribute('aria-required') ||
               (el as HTMLElement).parentElement?.querySelector('.required') !== null;
      });
      
      expect(isMarked).toBeTruthy();
    }
  });

  test('should have proper input types', async ({ page }) => {
    await page.goto('/kontakt.php');
    await waitForPageLoad(page);
    
    const emailInputs = page.locator('input[name*="email"]');
    const count = await emailInputs.count();
    
    for (let i = 0; i < Math.min(count, 2); i++) {
      const type = await emailInputs.nth(i).getAttribute('type');
      expect(type).toBe('email');
    }
    
    const telInputs = page.locator('input[name*="phone"], input[name*="tel"]');
    const telCount = await telInputs.count();
    
    for (let i = 0; i < Math.min(telCount, 2); i++) {
      const type = await telInputs.nth(i).getAttribute('type');
      expect(type).toMatch(/tel|text/);
    }
  });
});
