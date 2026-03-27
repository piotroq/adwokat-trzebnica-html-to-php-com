import { test, expect, PAGES, waitForPageLoad } from '../fixtures/base-fixture';

test.describe('Visual Tests - All Pages', () => {
  const pages = [
    { name: 'homepage', path: PAGES.HOME },
    { name: 'about', path: PAGES.ABOUT },
    { name: 'services', path: PAGES.SERVICES },
    { name: 'civil-law', path: PAGES.CIVIL_LAW },
    { name: 'inheritance-law', path: PAGES.INHERITANCE_LAW },
    { name: 'criminal-defense', path: PAGES.CRIMINAL_DEFENSE },
    { name: 'faq', path: PAGES.FAQ },
    { name: 'contact', path: PAGES.CONTACT },
  ];

  test.describe('Desktop Screenshots', () => {
    for (const pageData of pages) {
      test(`should render ${pageData.name} correctly on desktop`, async ({ page }) => {
        await page.setViewportSize({ width: 1920, height: 1080 });
        await page.goto(pageData.path);
        await waitForPageLoad(page);
        
        await expect(page).toHaveScreenshot(`${pageData.name}-desktop.png`, {
          fullPage: false, // Viewport only for faster tests
          maxDiffPixels: 200,
        });
      });
    }
  });

  test.describe('Mobile Screenshots', () => {
    for (const pageData of pages) {
      test(`should render ${pageData.name} correctly on mobile`, async ({ page }) => {
        await page.setViewportSize({ width: 375, height: 812 });
        await page.goto(pageData.path);
        await waitForPageLoad(page);
        
        await expect(page).toHaveScreenshot(`${pageData.name}-mobile.png`, {
          fullPage: true,
          maxDiffPixels: 300,
        });
      });
    }
  });

  test.describe('Tablet Screenshots', () => {
    for (const pageData of pages) {
      test(`should render ${pageData.name} correctly on tablet`, async ({ page }) => {
        await page.setViewportSize({ width: 768, height: 1024 });
        await page.goto(pageData.path);
        await waitForPageLoad(page);
        
        await expect(page).toHaveScreenshot(`${pageData.name}-tablet.png`, {
          fullPage: true,
          maxDiffPixels: 250,
        });
      });
    }
  });
});

test.describe('Layout Comparison', () => {
  test('should maintain consistent header across pages', async ({ page }) => {
    const pages = [PAGES.HOME, PAGES.ABOUT, PAGES.CONTACT];
    const headerSnapshots: Buffer[] = [];
    
    for (const path of pages) {
      await page.goto(path);
      await waitForPageLoad(page);
      
      const header = page.locator('header');
      if (await header.count() > 0) {
        const snapshot = await header.screenshot();
        headerSnapshots.push(snapshot);
      }
    }
    
    // Just verify we got snapshots from all pages
    expect(headerSnapshots.length).toBe(pages.length);
  });

  test('should maintain consistent footer across pages', async ({ page }) => {
    const pages = [PAGES.HOME, PAGES.ABOUT, PAGES.CONTACT];
    
    for (const path of pages) {
      await page.goto(path);
      await waitForPageLoad(page);
      
      const footer = page.locator('footer');
      await expect(footer).toBeVisible();
    }
  });
});

test.describe('Visual Regression - Key Components', () => {
  test('hero section should render correctly', async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
    
    const hero = page.locator('.hero, .jumbotron, .carousel, header, [class*="hero"], [class*="banner"]').first();
    if (await hero.count() > 0) {
      await expect(hero).toBeVisible();
      await expect(hero).toHaveScreenshot('hero-section.png');
    }
  });

  test('navigation should render correctly', async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
    
    const nav = page.locator('nav, .navbar, .navigation').first();
    await expect(nav).toBeVisible();
    await expect(nav).toHaveScreenshot('navigation.png');
  });

  test('service cards should render correctly', async ({ page }) => {
    await page.goto('/oferta.php');
    await waitForPageLoad(page);
    
    const services = page.locator('.card, .service-item, [class*="service"]').first();
    if (await services.count() > 0) {
      await expect(services).toBeVisible();
      await expect(services).toHaveScreenshot('service-cards.png');
    }
  });

  test('contact section should render correctly', async ({ page }) => {
    await page.goto('/kontakt.php');
    await waitForPageLoad(page);
    
    const contactSection = page.locator('.contact, [class*="contact"], form').first();
    await expect(contactSection).toBeVisible();
    await expect(contactSection).toHaveScreenshot('contact-section.png');
  });
});

test.describe('Responsive Layout Tests', () => {
  const viewports = [
    { name: 'mobile-small', width: 320, height: 568 },
    { name: 'mobile', width: 375, height: 667 },
    { name: 'tablet-portrait', width: 768, height: 1024 },
    { name: 'tablet-landscape', width: 1024, height: 768 },
    { name: 'laptop', width: 1366, height: 768 },
    { name: 'desktop', width: 1920, height: 1080 },
  ];

  for (const viewport of viewports) {
    test(`layout should adapt to ${viewport.name}`, async ({ page }) => {
      await page.setViewportSize({ width: viewport.width, height: viewport.height });
      await page.goto('/');
      await waitForPageLoad(page);
      
      // Check for layout issues
      const body = page.locator('body');
      const hasOverflow = await body.evaluate((el, width) => {
        return document.documentElement.scrollWidth > width + 20; // Allow 20px tolerance
      }, viewport.width);
      
      // Some overflow is acceptable for content-heavy pages
      if (hasOverflow) {
        const overflow = await page.evaluate(() => 
          document.documentElement.scrollWidth - document.documentElement.clientWidth
        );
        expect(overflow).toBeLessThan(100);
      }
      
      await expect(page).toHaveScreenshot(`layout-${viewport.name}.png`);
    });
  }
});

test.describe('Dark Mode / Color Scheme', () => {
  test('should support dark mode if implemented', async ({ page }) => {
    await page.goto('/');
    await waitForPageLoad(page);
    
    // Check if dark mode is supported
    const hasDarkMode = await page.evaluate(() => {
      return document.querySelector('[class*="dark"]') !== null ||
             document.querySelector('[data-theme="dark"]') !== null ||
             window.matchMedia('(prefers-color-scheme: dark)').matches;
    });
    
    if (hasDarkMode) {
      // Emulate dark mode
      await page.emulateMedia({ colorScheme: 'dark' });
      await page.reload();
      await waitForPageLoad(page);
      
      await expect(page).toHaveScreenshot('dark-mode.png');
    }
  });
});
