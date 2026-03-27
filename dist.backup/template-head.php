<?php
// Template for head section
$page_title = isset($page_title) ? $page_title : "Adwokat Katarzyna Maj | Kancelaria Prawna | Trzebnica, Wrocław";
$page_description = isset($page_description) ? $page_description : "Kancelaria Adwokacka Katarzyna Maj - kompleksowa pomoc prawna w sprawach cywilnych, spadkowych i karnych. Profesjonalna obsługa prawa.";
$page_keywords = isset($page_keywords) ? $page_keywords : "adwokat Trzebnica, adwokat Wrocław, pomoc prawna, prawo cywilne, prawo spadkowe, obrona karna";
$page_url = isset($page_url) ? $page_url : "https://adwokat-trzebnica.com/";
$page_image = isset($page_image) ? $page_image : "https://adwokat-trzebnica.com/assets/img/logo/logo-2.png";
$page_service_name = isset($page_service_name) ? $page_service_name : "Kancelaria Adwokacka Katarzyna Maj";
$page_service_description = isset($page_service_description) ? $page_service_description : "Kompleksowa pomoc prawna w szerokim zakresie spraw.";
$page_schema_type = isset($page_schema_type) ? $page_schema_type : "Usługi prawne";
?>
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">
	<meta name="author" content="themexriver">
	<meta name="description" content="<?php echo $page_description; ?>">
	<meta name="keywords" content="<?php echo $page_keywords; ?>">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="<?php echo $page_title; ?>">
	<meta property="og:description" content="<?php echo $page_description; ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $page_url; ?>">
	<meta property="og:site_name" content="Kancelaria Adwokacka Katarzyna Maj">
	<meta property="og:locale" content="pl_PL">
	<meta property="og:image" content="<?php echo $page_image; ?>">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $page_title; ?>">
	<meta name="twitter:description" content="<?php echo $page_description; ?>">

	<!-- Schema.org JSON-LD -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "LegalService",
		"@id": "<?php echo $page_url; ?>",
		"name": "<?php echo $page_service_name; ?>",
		"description": "<?php echo $page_service_description; ?>",
		"url": "<?php echo $page_url; ?>",
		"image": "<?php echo $page_image; ?>",
		"priceRange": "$$",
		"telephone": "+48502319645",
		"email": "biuro@adwokat-trzebnica.com",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "ul. Ignacego Daszyńskiego 67/4",
			"addressLocality": "Trzebnica",
			"postalCode": "55-100",
			"addressCountry": "PL"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "51.3094",
			"longitude": "17.0633"
		},
		"areaServed": [
			{
				"@type": "City",
				"name": "Trzebnica"
			},
			{
				"@type": "City",
				"name": "Wrocław"
			},
			{
				"@type": "State",
				"name": "Dolnośląskie"
			}
		],
		"hasOfferCatalog": {
			"@type": "OfferCatalog",
			"name": "<?php echo $page_schema_type; ?>",
			"itemListElement": [
				{
					"@type": "Offer",
					"itemOffered": {
						"@type": "Service",
						"name": "Prawo cywilne",
						"description": "Kompleksowa pomoc w sprawach cywilnych, umowach, roszczeniach, windykacji"
					}
				},
				{
					"@type": "Offer",
					"itemOffered": {
						"@type": "Service",
						"name": "Prawo spadkowe",
						"description": "Sprawy spadkowe, testamenty, zachowki, działy spadku"
					}
				},
				{
					"@type": "Offer",
					"itemOffered": {
						"@type": "Service",
						"name": "Obrona w sprawach karnych",
						"description": "Reprezentacja w postępowaniu karnym, obrona oskarżonego"
					}
				},
				{
					"@type": "Offer",
					"itemOffered": {
						"@type": "Service",
						"name": "Prawo rodzinne",
						"description": "Rozwody, alimenty, władza rodzicielska"
					}
				},
				{
					"@type": "Offer",
					"itemOffered": {
						"@type": "Service",
						"name": "Prawo pracy",
						"description": "Sprawy pracownicze, umowy, zwolnienia"
					}
				}
			]
		},
		"provider": {
			"@type": "Attorney",
			"name": "Katarzyna Maj",
			"jobTitle": "Adwokat",
			"memberOf": {
				"@type": "Organization",
				"name": "Okręgowa Rada Adwokacka we Wrocławiu"
			}
		},
		"openingHoursSpecification": {
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": [
				"Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday"
			],
			"opens": "09:00",
			"closes": "17:00"
		}
	}
	</script>

	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/nouislider.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>