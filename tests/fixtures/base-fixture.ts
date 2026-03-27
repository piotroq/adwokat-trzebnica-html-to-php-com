import { test as base, expect, Page } from '@playwright/test';

/**
 * Base fixture with common utilities and helpers
 */
export interface Fixtures {
  page: Page;
}

export const test = base.extend<Fixtures>({
  page: async ({ page }, use) => {
    // Set default viewport for desktop tests
    await page.setViewportSize({ width: 1920, height: 1080 });
    await use(page);
  },
});

export { expect };

// Common page paths
export const PAGES = {
  HOME: '/index.php',
  ABOUT: '/o-mnie.php',
  SERVICES: '/oferta.php',
  CIVIL_LAW: '/prawo-cywilne.php',
  INHERITANCE_LAW: '/prawo-spadkowe.php',
  CRIMINAL_DEFENSE: '/obrona-w-sprawach-karnych.php',
  FAQ: '/faq-pytania.php',
  CONTACT: '/kontakt.php',
  PRIVACY_POLICY: '/polityka-prywatnosci-rodo.html',
};

// Navigation menu items
export const MENU_ITEMS = [
  { name: 'Strona Główna', path: '/index.php' },
  { name: 'O mnie', path: '/o-mnie.php' },
  { name: 'Oferta', path: '/oferta.php' },
  { name: 'FAQ & Pytania', path: '/faq-pytania.php' },
  { name: 'Kontakt', path: '/kontakt.php' },
];

// Service submenu items - using .php extensions
export const SERVICE_SUBMENU = [
  { name: 'Prawo Cywilne', path: '/prawo-cywilne.php' },
  { name: 'Prawo Spadkowe', path: '/prawo-spadkowe.php' },
  { name: 'Obrona w Sprawach Karnych', path: '/obrona-w-sprawach-karnych.php' },
];

// Helper function to wait for page to be fully loaded
export async function waitForPageLoad(page: Page) {
  await page.waitForLoadState('networkidle');
  await page.waitForTimeout(1000); // Additional wait for animations
}

// Helper function to check Bootstrap components
export async function checkBootstrapComponent(page: Page, selector: string, componentType: string) {
  const element = page.locator(selector);
  await expect(element).toBeVisible();
  
  // Check for Bootstrap classes
  const classes = await element.getAttribute('class');
  expect(classes).toContain('bootstrap');
  
  return element;
}
