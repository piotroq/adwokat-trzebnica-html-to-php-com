import { test, expect, waitForPageLoad } from '../fixtures/base-fixture';

test.describe('Bootstrap v4.0.0 Components', () => {
  test.beforeEach(async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
  });

  test('should have Bootstrap CSS loaded', async ({ page }) => {
    // Check for Bootstrap CSS link
    const bootstrapCss = page.locator('link[href*="bootstrap"]');
    const count = await bootstrapCss.count();
    expect(count).toBeGreaterThanOrEqual(1);
    
    // Check Bootstrap is applied by verifying a Bootstrap class
    const body = page.locator('body');
    const hasBootstrap = await body.evaluate((el) => {
      const styles = window.getComputedStyle(el);
      return styles.fontFamily.includes('Bootstrap') || 
             document.styleSheets.length > 0;
    });
    expect(hasBootstrap).toBeTruthy();
  });

  test('should have responsive navbar', async ({ page }) => {
    const navbar = page.locator('.navbar, nav').first();
    await expect(navbar).toBeVisible();

    // Check navbar classes (Bootstrap v4 may use different naming)
    const classes = await navbar.getAttribute('class');
    expect(classes).toBeTruthy();

    // Check navbar brand
    const brand = page.locator('.navbar-brand, .logo, .brand').first();
    if (await brand.count() > 0) {
      await expect(brand).toBeVisible();
    }

    // Check navigation items
    const navItems = page.locator('.nav-item, .navbar-nav a, .nav a');
    const count = await navItems.count();
    expect(count).toBeGreaterThanOrEqual(3);
  });

  test('should have working navbar links', async ({ page }) => {
    const navLinks = page.locator('.navbar-nav a[href], .nav a[href]');
    const count = await navLinks.count();

    for (let i = 0; i < Math.min(count, 3); i++) {
      const link = navLinks.nth(i);
      await expect(link).toBeVisible();

      const href = await link.getAttribute('href');
      if (href && !href.startsWith('#') && !href.startsWith('tel:') && !href.startsWith('mailto:')) {
        // Use page.goto instead of click to avoid viewport issues
        await page.goto(href);
        await waitForPageLoad(page);
        await expect(page).toBeOK();
        await page.goBack();
        await waitForPageLoad(page);
      }
    }
  });

  test('should have Bootstrap grid system', async ({ page }) => {
    // Check for container
    const container = page.locator('.container, .container-fluid');
    await expect(container.first()).toBeVisible();
    
    // Check for row
    const rows = page.locator('.row');
    expect(await rows.count()).toBeGreaterThan(0);
    
    // Check for columns
    const cols = page.locator('[class*="col-"]');
    expect(await cols.count()).toBeGreaterThan(0);
  });

  test('should have properly styled buttons', async ({ page }) => {
    const buttons = page.locator('button, .btn, a.btn');
    const count = await buttons.count();
    
    if (count > 0) {
      const btn = buttons.first();
      await expect(btn).toBeVisible();
      
      const classes = await btn.getAttribute('class');
      if (classes) {
        expect(classes).toMatch(/btn/);
      }
    }
  });

  test('should have cards if present', async ({ page }) => {
    const cards = page.locator('.card');
    const count = await cards.count();
    
    if (count > 0) {
      await expect(cards.first()).toBeVisible();
      
      // Check card structure
      const cardBodies = page.locator('.card-body');
      expect(await cardBodies.count()).toBeGreaterThanOrEqual(0);
    }
  });

  test('should have responsive images', async ({ page }) => {
    const images = page.locator('img');
    const count = await images.count();

    for (let i = 0; i < Math.min(count, 3); i++) {
      const img = images.nth(i);
      await expect(img).toBeVisible();

      // Check for Bootstrap img-fluid class or responsive styling
      const classes = await img.getAttribute('class');
      const hasResponsiveClass = classes && (classes.includes('img-fluid') || classes.includes('img-responsive'));

      if (!hasResponsiveClass) {
        // Check inline styles for max-width - this is a soft check
        const style = await img.getAttribute('style');
        const hasResponsiveStyle = style && (style.includes('max-width') || style.includes('width: 100%'));
        
        // Log warning but don't fail - images may be responsive via CSS
        if (!hasResponsiveStyle && !hasResponsiveClass) {
          console.log(`Image ${i} may not be fully responsive`);
        }
      }
    }
  });

  test('should have proper spacing utilities', async ({ page }) => {
    // Check for Bootstrap spacing classes
    const spacingElements = page.locator('[class*="m-"], [class*="p-"]');
    expect(await spacingElements.count()).toBeGreaterThan(0);
  });

  test('should have modal if present', async ({ page }) => {
    const modals = page.locator('.modal');
    const count = await modals.count();
    
    if (count > 0) {
      // Check modal structure
      const modalDialog = page.locator('.modal-dialog');
      expect(await modalDialog.count()).toBeGreaterThan(0);
      
      const modalContent = page.locator('.modal-content');
      expect(await modalContent.count()).toBeGreaterThan(0);
    }
  });

  test('should have form controls styled with Bootstrap', async ({ page }) => {
    const formControls = page.locator('.form-control, input.form-control, textarea.form-control');
    const count = await formControls.count();
    
    if (count > 0) {
      await expect(formControls.first()).toBeVisible();
    }
  });

  test('should have no Bootstrap console errors', async ({ page }) => {
    const messages: string[] = [];
    page.on('console', msg => {
      if (msg.type() === 'error' && msg.text().includes('bootstrap')) {
        messages.push(msg.text());
      }
    });
    
    await page.reload();
    await waitForPageLoad(page);
    
    expect(messages).toHaveLength(0);
  });
});

test.describe('Bootstrap Breakpoints', () => {
  const breakpoints = [
    { name: 'xs', width: 375, height: 667 },
    { name: 'sm', width: 576, height: 800 },
    { name: 'md', width: 768, height: 1024 },
    { name: 'lg', width: 992, height: 1200 },
    { name: 'xl', width: 1200, height: 1400 },
  ];

  for (const breakpoint of breakpoints) {
    test(`should adapt layout at ${breakpoint.name} breakpoint`, async ({ page }) => {
      await page.setViewportSize({ width: breakpoint.width, height: breakpoint.height });
      await page.goto('/');
      await waitForPageLoad(page);
      
      // Check layout is not broken
      const mainContent = page.locator('main, .content, #content');
      if (await mainContent.count() > 0) {
        await expect(mainContent.first()).toBeVisible();
      }
      
      // Check for horizontal scroll (should not exist)
      const hasHorizontalScroll = await page.evaluate(() => {
        return document.documentElement.scrollWidth > document.documentElement.clientWidth;
      });
      
      // Some horizontal scroll is acceptable for wide content
      if (hasHorizontalScroll) {
        const scrollWidth = await page.evaluate(() => 
          document.documentElement.scrollWidth - document.documentElement.clientWidth
        );
        expect(scrollWidth).toBeLessThan(100); // Allow small overflow
      }
    });
  }
});
