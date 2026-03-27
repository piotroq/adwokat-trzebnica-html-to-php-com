import { defineConfig, devices } from '@playwright/test';

/**
 * Playwright configuration for adwokat-trzebnica-html-to-php project
 * Testing against PHP built-in server at http://localhost:8000
 */
export default defineConfig({
  testDir: './tests',
  fullyParallel: false, // Sequential execution for better debugging
  forbidOnly: !!process.env.CI,
  retries: process.env.CI ? 2 : 1,
  workers: 1, // Single worker for visual tests
  reporter: [
    ['html', { open: 'never' }],
    ['json', { outputFile: 'playwright-report/results.json' }],
    ['list', { printSteps: true }]
  ],
  use: {
    baseURL: 'http://localhost:8000',
    trace: 'on-first-retry',
    screenshot: 'only-on-failure',
    video: 'retain-on-failure',
    actionTimeout: 10000,
    navigationTimeout: 30000,
  },
  outputDir: 'test-results/',
  timeout: 60000, // 60s timeout for visual tests
  expect: {
    timeout: 5000,
    toHaveScreenshot: {
      maxDiffPixels: 100,
      threshold: 0.2,
    },
  },
  projects: [
    // Desktop browsers
    {
      name: 'chromium',
      use: { 
        ...devices['Desktop Chrome'],
        viewport: { width: 1920, height: 1080 },
      },
    },
    {
      name: 'firefox',
      use: { ...devices['Desktop Firefox'] },
    },
    // Mobile viewports
    {
      name: 'mobile-chrome',
      use: { 
        ...devices['Pixel 5'],
        viewport: { width: 375, height: 812 },
      },
    },
    {
      name: 'mobile-safari',
      use: { ...devices['iPhone 12'] },
    },
    // Tablet
    {
      name: 'tablet',
      use: {
        ...devices['iPad Pro'],
        viewport: { width: 1024, height: 768 },
      },
    },
  ],
  webServer: {
    command: 'php -S localhost:8000 -t dist',
    url: 'http://localhost:8000',
    reuseExistingServer: !process.env.CI,
    timeout: 10000,
  },
});
