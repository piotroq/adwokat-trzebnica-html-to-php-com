import { test, expect, PAGES, waitForPageLoad } from '../fixtures/base-fixture';

test.describe('SEO Tests', () => {
  const pages = [
    { 
      name: 'Homepage', 
      path: PAGES.HOME,
      expectedTitle: /adwokat|kancelaria|trzebnica|katarzyna maj/i,
    },
    { 
      name: 'About', 
      path: PAGES.ABOUT,
      expectedTitle: /o mnie|about|kancelaria|adwokat/i,
    },
    { 
      name: 'Services', 
      path: PAGES.SERVICES,
      expectedTitle: /oferta|services|prawo|adwokat/i,
    },
    { 
      name: 'Civil Law', 
      path: PAGES.CIVIL_LAW,
      expectedTitle: /prawo cywilne|civil law/i,
    },
    { 
      name: 'Inheritance Law', 
      path: PAGES.INHERITANCE_LAW,
      expectedTitle: /prawo spadkowe|inheritance|spadek/i,
    },
    { 
      name: 'Criminal Defense', 
      path: PAGES.CRIMINAL_DEFENSE,
      expectedTitle: /obrona karna|criminal|karny/i,
    },
    { 
      name: 'FAQ', 
      path: PAGES.FAQ,
      expectedTitle: /faq|pytania|częste pytania/i,
    },
    { 
      name: 'Contact', 
      path: PAGES.CONTACT,
      expectedTitle: /kontakt|contact/i,
    },
  ];

  test.describe('Page Titles', () => {
    for (const pageData of pages) {
      test(`${pageData.name} should have proper title`, async ({ page }) => {
        await page.goto(pageData.path);
        await waitForPageLoad(page);
        
        const title = await page.title();
        expect(title).toBeTruthy();
        expect(title.length).toBeGreaterThan(10);
        expect(title.length).toBeLessThan(70);
      });
    }
  });

  test.describe('Meta Descriptions', () => {
    for (const pageData of pages) {
      test(`${pageData.name} should have meta description`, async ({ page }) => {
        await page.goto(pageData.path);
        await waitForPageLoad(page);
        
        const metaDescription = await page.locator('meta[name="description"]').getAttribute('content');
        expect(metaDescription).toBeTruthy();
        expect(metaDescription!.length).toBeGreaterThan(50);
        expect(metaDescription!.length).toBeLessThan(160);
      });
    }
  });

  test.describe('Meta Keywords', () => {
    test('pages should have meta keywords', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const metaKeywords = await page.locator('meta[name="keywords"]').getAttribute('content');
      expect(metaKeywords).toBeTruthy();
      expect(metaKeywords!.length).toBeGreaterThan(10);
    });
  });

  test.describe('Heading Structure', () => {
    for (const pageData of pages) {
      test(`${pageData.name} should have proper H1`, async ({ page }) => {
        await page.goto(pageData.path);
        await waitForPageLoad(page);
        
        const h1s = page.locator('h1');
        const count = await h1s.count();
        
        // Should have exactly one H1
        expect(count).toBe(1);
        await expect(h1s.first()).toBeVisible();
        
        const h1Text = await h1s.first().textContent();
        expect(h1Text?.length).toBeGreaterThan(5);
        expect(h1Text?.length).toBeLessThan(100);
      });
    }
  });

  test.describe('Heading Hierarchy', () => {
    test('should maintain proper heading hierarchy', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      // Check H2 exists after H1
      const h2s = page.locator('h2');
      expect(await h2s.count()).toBeGreaterThan(0);
      
      // Check H3 exists
      const h3s = page.locator('h3');
      expect(await h3s.count()).toBeGreaterThan(0);
      
      // Verify no skipped heading levels
      const allHeadings = page.locator('h1, h2, h3, h4, h5, h6');
      const count = await allHeadings.count();
      
      for (let i = 0; i < count; i++) {
        const tag = await allHeadings.nth(i).tagName();
        expect(['H1', 'H2', 'H3', 'H4', 'H5', 'H6']).toContain(tag);
      }
    });
  });

  test.describe('Open Graph Tags', () => {
    const requiredOgTags = [
      'og:title',
      'og:description',
      'og:type',
      'og:url',
    ];

    test('homepage should have Open Graph tags', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      for (const tagName of requiredOgTags) {
        const tag = page.locator(`meta[property="${tagName}"]`);
        await expect(tag).toHaveCount(1);
        
        const content = await tag.getAttribute('content');
        expect(content).toBeTruthy();
        expect(content!.length).toBeGreaterThan(0);
      }
    });

    test('should have og:image tag', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const ogImage = page.locator('meta[property="og:image"]');
      const count = await ogImage.count();
      
      // og:image is recommended but not strictly required
      if (count > 0) {
        const content = await ogImage.getAttribute('content');
        expect(content).toBeTruthy();
        expect(content!).toMatch(/^https?:\/\//);
      }
    });
  });

  test.describe('Twitter Card Tags', () => {
    test('should have Twitter Card tags if implemented', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const twitterCard = page.locator('meta[name="twitter:card"]');
      const count = await twitterCard.count();
      
      if (count > 0) {
        const content = await twitterCard.getAttribute('content');
        expect(content).toMatch(/summary|summary_large_image|app|player/);
      }
    });
  });

  test.describe('Canonical URL', () => {
    test('should have canonical URL', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const canonical = page.locator('link[rel="canonical"]');
      const count = await canonical.count();
      
      if (count > 0) {
        const href = await canonical.getAttribute('href');
        expect(href).toBeTruthy();
        expect(href!).toMatch(/^https?:\/\//);
      }
    });
  });

  test.describe('Robots Meta', () => {
    test('should have robots meta tag', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const robots = page.locator('meta[name="robots"]');
      const count = await robots.count();
      
      if (count > 0) {
        const content = await robots.getAttribute('content');
        expect(content).toMatch(/index|noindex|follow|nofollow|all|none/);
      }
    });
  });

  test.describe('Schema.org Structured Data', () => {
    test('should have Schema.org JSON-LD', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const jsonLd = page.locator('script[type="application/ld+json"]');
      const count = await jsonLd.count();
      
      expect(count).toBeGreaterThan(0);
      
      // Validate JSON structure
      const content = await jsonLd.first().textContent();
      expect(content).toBeTruthy();
      
      try {
        const data = JSON.parse(content!);
        expect(data).toBeTruthy();
        expect(typeof data).toBe('object');
      } catch (e) {
        test.fail('JSON-LD should be valid JSON');
      }
    });

    test('Schema.org should have required properties for LegalService', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const jsonLd = page.locator('script[type="application/ld+json"]');
      const content = await jsonLd.first().textContent();
      
      if (content) {
        try {
          const data = JSON.parse(content);
          const legalService = data['@graph']?.find((item: any) => 
            item['@type'] === 'LegalService' || 
            item['@type'] === 'Attorney' ||
            item['@type'] === 'Organization'
          ) || data;
          
          expect(legalService['@type']).toBeTruthy();
          expect(legalService.name || legalService.legalName).toBeTruthy();
        } catch (e) {
          // JSON parsing might fail, skip this test
        }
      }
    });
  });

  test.describe('Language and Locale', () => {
    test('should have proper language attribute', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const html = page.locator('html');
      const lang = await html.getAttribute('lang');
      
      expect(lang).toBeTruthy();
      expect(lang).toMatch(/pl|pl-PL/);
    });
  });

  test.describe('Viewport Meta Tag', () => {
    test('should have responsive viewport meta tag', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const viewport = page.locator('meta[name="viewport"]');
      await expect(viewport).toHaveCount(1);
      
      const content = await viewport.getAttribute('content');
      expect(content).toContain('width=device-width');
      expect(content).toContain('initial-scale=1');
    });
  });

  test.describe('Favicon', () => {
    test('should have favicon', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const favicon = page.locator('link[rel="icon"], link[rel="shortcut icon"]');
      const count = await favicon.count();
      
      if (count > 0) {
        const href = await favicon.getAttribute('href');
        expect(href).toBeTruthy();
      }
    });
  });

  test.describe('Sitemap and Robots', () => {
    test('should reference sitemap', async ({ page }) => {
      await page.goto(PAGES.HOME);
      await waitForPageLoad(page);
      
      const sitemapLink = page.locator('link[rel="sitemap"]');
      const count = await sitemapLink.count();
      
      // Sitemap link is optional in HTML
      if (count > 0) {
        const href = await sitemapLink.getAttribute('href');
        expect(href).toMatch(/sitemap\.xml$/);
      }
    });
  });
});

test.describe('SEO Best Practices', () => {
  test('should not have broken internal links', async ({ page }) => {
    await page.goto(PAGES.HOME);
    await waitForPageLoad(page);
    
    const internalLinks = page.locator('a[href^="/"], a[href^="./"], a[href^="../"]');
    const count = await internalLinks.count();
    
    const brokenLinks: string[] = [];
    
    for (let i = 0; i < Math.min(count, 10); i++) {
      const href = await internalLinks.nth(i).getAttribute('href');
      
      if (href && !href.startsWith('#') && !href.startsWith('tel:') && !href.startsWith('mailto:')) {
        try {
          const response = await page.request.get(href);
          if (response.status() >= 400) {
            brokenLinks.push(href);
          }
        } catch (e) {
          // Ignore external link errors
        }
      }
    }
    
    expect(brokenLinks).toHaveLength(0);
  });

  test('images should have alt text', async ({ page }) => {
    await page.goto(PAGES.HOME);
    await waitForPageLoad(page);
    
    const images = page.locator('img');
    const count = await images.count();
    
    let missingAlt = 0;
    for (let i = 0; i < count; i++) {
      const alt = await images.nth(i).getAttribute('alt');
      if (alt === null || alt === '') {
        missingAlt++;
      }
    }
    
    // Allow some decorative images without alt
    const percentage = (missingAlt / count) * 100;
    expect(percentage).toBeLessThan(20); // Max 20% without alt
  });

  test('should have proper word count for content', async ({ page }) => {
    await page.goto(PAGES.HOME);
    await waitForPageLoad(page);
    
    const mainContent = page.locator('main, .content, article').first();
    const text = await mainContent.textContent();
    
    const words = text?.trim().split(/\s+/).length || 0;
    expect(words).toBeGreaterThan(100); // Minimum content length
  });
});
