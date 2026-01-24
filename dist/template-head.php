<head>
	<meta charset="UTF-8">
	<title><?php echo htmlspecialchars($page_title, ENT_QUOTES); ?></title>
	<link rel="shortcut icon" href="<?php echo htmlspecialchars($favicon, ENT_QUOTES); ?>" type="image/x-icon">
	<meta name="author" content="<?php echo htmlspecialchars($meta_author, ENT_QUOTES); ?>">
	<meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES); ?>">
	<meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords, ENT_QUOTES); ?>">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="<?php echo htmlspecialchars($og_title, ENT_QUOTES); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars($og_description, ENT_QUOTES); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>">
	<meta property="og:site_name" content="<?php echo htmlspecialchars($og_site_name, ENT_QUOTES); ?>">
	<meta property="og:locale" content="pl_PL">
	<meta property="og:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES); ?>">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo htmlspecialchars($twitter_title, ENT_QUOTES); ?>">
	<meta name="twitter:description" content="<?php echo htmlspecialchars($twitter_description, ENT_QUOTES); ?>">

	<!-- Schema.org JSON-LD -->
	<script type="application/ld+json">
	<?php echo json_encode($schema_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>
	</script>

	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/odometer-theme-default.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
