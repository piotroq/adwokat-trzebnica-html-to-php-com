# Architektura Projektu

## Model: Include-based Template System
```
public/index.php (Front Controller)
  ├── includes/seo-head.php (Meta tags)
  ├── includes/header.php (Navbar)
  ├── views/[page].php (Page content)
  ├── includes/footer.php
  └── includes/scripts.php (JS)
```

## Flow Żądania
```
1. User visits: http://site.com/about
2. public/index.php handles routing
3. loads includes/seo-head.php
4. loads includes/header.php
5. loads views/about.php (content)
6. loads includes/footer.php
7. loads includes/scripts.php
8. Return HTML
```

## Komponenty (Reusable)

Każdy component: `includes/component-name.php`
```php
<?php
// includes/card-service.php
function renderServiceCard($title, $icon, $description, $link) {
  ?>
  <div class="card-service">
    <i class="<?php echo htmlspecialchars($icon); ?>"></i>
    <h3><?php echo htmlspecialchars($title); ?></h3>
    <p><?php echo htmlspecialchars($description); ?></p>
    <a href="<?php echo htmlspecialchars($link); ?>">Dowiedz się więcej →</a>
  </div>
  <?php
}
```

## Bezpieczeństwo

1. **XSS Protection**: `htmlspecialchars()` na wszystkich outputs
2. **CSRF**: Token w formularzach
3. **Input Validation**: Validation trait
4. **Error Handling**: Try-catch blocks

