<?php
$firm_name = 'Kancelaria Adwokacka Adwokat Katarzyna Maj';
$firm_name_short = 'Kancelaria Adwokacka Katarzyny Maj';
$lawyer_name = 'Katarzyna Maj';
$lawyer_title = 'Adwokat';
$city_primary = 'Trzebnica';
$city_secondary = 'Wrocław';
$region_primary = 'Dolny Śląsk';
$region_secondary = 'Wielkopolska';
$address_street = 'ul. Ignacego Daszyńskiego 67/4';
$postal_code = '55-100';
$address_city = $city_primary;
$phone_display = '+48 502 319 645';
$phone_link = '+48502319645';
$email = 'biuro@adwokat-trzebnica.com';
$site_url = 'https://adwokat-trzebnica.com';
$site_domain = 'www.adwokat-trzebnica.com';
$favicon = 'assets/img/logo/ficon.png';
$logo_main = 'assets/img/logo/logo-2.png';
$logo_mobile = 'assets/img/logo/logo-1.png';
$footer_logo = 'assets/img/logo/flogo-1.png';
$meta_author = $firm_name;
$page_title = $firm_name . ' | Adwokat ' . $city_primary . ', ' . $city_secondary;
$meta_description = 'Kancelaria Adwokacka Adwokat Katarzyna Maj w Trzebnicy i Wrocławiu. Prawo cywilne, spadkowe, obrona w sprawach karnych, porady prawne i umowy. Zadzwoń: ' . $phone_display . '.';
$meta_keywords = 'adwokat Trzebnica, kancelaria adwokacka Trzebnica, adwokat Wrocław, prawo cywilne, prawo spadkowe, obrona w sprawach karnych, porady prawne, kancelaria adwokacka Dolny Śląsk, adwokat Katarzyna Maj';
$og_title = $page_title;
$og_description = 'Profesjonalna pomoc prawna w Trzebnicy, Wrocławiu i na Dolnym Śląsku. Prawo cywilne, spadkowe, obrona karna, porady prawne. Zadzwoń: ' . $phone_display . '.';
$og_url = $site_url;
$og_site_name = $firm_name;
$og_image = $site_url . '/assets/img/logo/logo-2.png';
$twitter_title = $firm_name;
$twitter_description = 'Adwokat Trzebnica i Wrocław. Prawo cywilne, spadkowe, obrona w sprawach karnych, porady prawne. Tel: ' . $phone_display . '.';
$google_maps_key = getenv('GOOGLE_MAPS_KEY') ?: '';
$current_year = date('Y');

$header_cta_label = 'Bezpłatna konsultacja';
$header_cta_button = 'Skontaktuj się';
$header_cta_link = 'kontakt.html';
$footer_cta_title = 'Bezpłatna konsultacja';
$footer_cta_button = 'Skontaktuj się';
$footer_cta_small_button = 'Umów spotkanie';
$footer_cta_link = 'kontakt.html';

$main_menu = [
	[
		'label' => 'Strona Główna',
		'href' => 'index.php',
	],
	[
		'label' => 'O mnie',
		'href' => 'o-mnie.html',
	],
	[
		'label' => 'Oferta',
		'href' => 'oferta.html',
		'children' => [
			[
				'label' => 'Prawo cywilne',
				'href' => 'prawo-cywilne.html',
			],
			[
				'label' => 'Prawo spadkowe',
				'href' => 'prawo-spadkowe.html',
			],
			[
				'label' => 'Obrona w sprawach karnych',
				'href' => 'obrona-w-sprawach-karnych.html',
			],
		],
	],
	[
		'label' => 'FAQ & Pytania',
		'href' => 'faq-pytania.html',
	],
	[
		'label' => 'Kontakt',
		'href' => 'kontakt.html',
	],
];

$social_links = [
	[
		'label' => 'Facebook',
		'icon' => 'fab fa-facebook-f',
		'href' => '#',
	],
	[
		'label' => 'LinkedIn',
		'icon' => 'fab fa-linkedin',
		'href' => '#',
	],
	[
		'label' => 'YouTube',
		'icon' => 'fab fa-youtube',
		'href' => '#',
	],
];

$slides = [
	[
		'background' => 'assets/img/slider/s4.jpg',
		'tagline' => 'Adwokat Trzebnica • Wrocław • Dolny Śląsk',
		'headline' => "Kancelaria Adwokacka\nAdwokat {$lawyer_name}",
		'buttons' => [
			[
				'label' => 'Zobacz ofertę',
				'href' => 'oferta.html',
			],
			[
				'label' => 'Skontaktuj się',
				'href' => 'kontakt.html',
			],
		],
	],
	[
		'background' => 'assets/img/slider/s4.jpg',
		'tagline' => 'Prawo cywilne i spadkowe',
		'headline' => "Rzetelna analiza\nJasna strategia działania",
		'buttons' => [
			[
				'label' => 'Prawo cywilne',
				'href' => 'prawo-cywilne.html',
			],
			[
				'label' => 'Prawo spadkowe',
				'href' => 'prawo-spadkowe.html',
			],
		],
	],
	[
		'background' => 'assets/img/slider/s4.jpg',
		'tagline' => 'Obrona w sprawach karnych',
		'headline' => "Szybka reakcja\nSkuteczna obrona",
		'buttons' => [
			[
				'label' => 'Obrona karna',
				'href' => 'obrona-w-sprawach-karnych.html',
			],
			[
				'label' => 'Zadzwoń teraz',
				'href' => 'tel:' . $phone_link,
			],
		],
	],
];

$about_counters = [
	[
		'icon' => 'flaticon-mace',
		'count' => '2016',
		'suffix' => 'r.',
		'label' => 'Rok założenia kancelarii',
	],
	[
		'icon' => 'flaticon-balance',
		'count' => '2',
		'suffix' => '+',
		'label' => 'Główne miasta obsługi',
	],
	[
		'icon' => 'flaticon-teamwork',
		'count' => '3',
		'suffix' => '+',
		'label' => 'Kluczowe specjalizacje',
	],
	[
		'icon' => 'flaticon-worldwide',
		'count' => '100',
		'suffix' => '%',
		'label' => 'Zaangażowanie w sprawy Klientów',
	],
];

$service_boxes = [
	[
		'title' => 'Prawo cywilne',
		'text' => 'Sprawy o zapłatę, odszkodowania, zniesienie współwłasności, analiza i sporządzanie umów oraz reprezentacja w sporach sądowych.',
		'href' => 'prawo-cywilne.html',
		'image' => 'assets/img/service/ser1.jpg',
		'icon' => 'far fa-chart-bar',
		'delay' => '0ms',
	],
	[
		'title' => 'Prawo spadkowe',
		'text' => 'Dziedziczenie, zachowek, dział spadku, testamenty i oświadczenia spadkowe prowadzone w sposób jasny i zrozumiały.',
		'href' => 'prawo-spadkowe.html',
		'image' => 'assets/img/service/ser2.jpg',
		'icon' => 'fas fa-hospital-alt',
		'delay' => '300ms',
	],
	[
		'title' => 'Obrona w sprawach karnych',
		'text' => 'Obrona na każdym etapie postępowania karnego, od czynności Policji po sąd i postępowanie wykonawcze.',
		'href' => 'obrona-w-sprawach-karnych.html',
		'image' => 'assets/img/service/ser3.jpg',
		'icon' => 'fas fa-users',
		'delay' => '600ms',
	],
	[
		'title' => 'Porady prawne i umowy',
		'text' => 'Indywidualne konsultacje, opinie prawne, negocjacje i przygotowanie dokumentów zapewniających bezpieczeństwo prawne.',
		'href' => 'oferta.html',
		'image' => 'assets/img/service/ser4.jpg',
		'icon' => 'far fa-clone',
		'delay' => '900ms',
	],
];

$case_studies = [
	[
		'id' => 'case1',
		'title' => "Prawo cywilne\nRoszczenia i umowy",
		'href' => 'prawo-cywilne.html',
		'image' => 'assets/img/case/cl1.jpg',
	],
	[
		'id' => 'case2',
		'title' => "Prawo spadkowe\nDziedziczenie i zachowek",
		'href' => 'prawo-spadkowe.html',
		'image' => 'assets/img/case/cl2.jpg',
	],
	[
		'id' => 'case3',
		'title' => "Obrona karna\nPostępowanie przygotowawcze",
		'href' => 'obrona-w-sprawach-karnych.html',
		'image' => 'assets/img/case/cl3.jpg',
	],
	[
		'id' => 'case4',
		'title' => "Porady prawne\nNegocjacje i mediacje",
		'href' => 'oferta.html',
		'image' => 'assets/img/case/cl4.jpg',
	],
];

$call_to_action_tagline = 'Doświadczenie od 2016 roku';
$call_to_action_title = 'Potrzebujesz wsparcia adwokata?';
$call_to_action_phone = $phone_display;

$feature_highlight = [
	'prefix' => '',
	'count' => '100',
	'text' => 'Poufność, rzetelność i pełne zaangażowanie w każdej sprawie prowadzonej przez kancelarię.',
];

$skill_bars = [
	[
		'title' => 'prawo cywilne',
		'percent' => '70%',
		'class' => 'Rx-width-70',
	],
	[
		'title' => 'prawo spadkowe',
		'percent' => '42%',
		'class' => 'Rx-width-42',
	],
	[
		'title' => 'obrona karna',
		'percent' => '91%',
		'class' => 'Rx-width-91',
	],
	[
		'title' => 'porady i umowy',
		'percent' => '80%',
		'class' => 'Rx-width-80',
	],
];

$how_steps = [
	[
		'number' => '01',
		'title' => 'Poznanie sprawy',
		'text' => 'Rozmowa, analiza dokumentów i określenie realnych możliwości prawnych oraz celów Klienta.',
		'image' => 'assets/img/feature/hw1.jpg',
	],
	[
		'number' => '02',
		'title' => 'Strategia działania',
		'text' => 'Opracowanie planu, dobór środków prawnych i przedstawienie jasnych kroków postępowania.',
		'image' => 'assets/img/feature/hw2.jpg',
	],
	[
		'number' => '03',
		'title' => 'Prowadzenie sprawy',
		'text' => 'Reprezentacja przed sądami i urzędami, sporządzanie pism oraz stała komunikacja z Klientem.',
		'image' => 'assets/img/feature/hw3.jpg',
	],
	[
		'number' => '04',
		'title' => 'Finalizacja i wsparcie',
		'text' => 'Zamknięcie sprawy, omówienie skutków prawnych i dalsze wsparcie przy realizacji decyzji.',
		'image' => 'assets/img/feature/hw4.jpg',
	],
];

$testimonials = [
	[
		'quote' => 'Szybka reakcja i jasne wyjaśnienia pozwoliły mi spokojnie przejść przez sprawę spadkową. Polecam z całego serca.',
		'name' => 'Klientka z Trzebnicy',
		'role' => 'sprawa spadkowa',
	],
	[
		'quote' => 'Profesjonalna obsługa i konkretne działania w sprawie cywilnej. Wszystko prowadzone z dużym wyczuciem.',
		'name' => 'Klient z Wrocławia',
		'role' => 'prawo cywilne',
	],
	[
		'quote' => 'Rzetelna obrona i bardzo dobra komunikacja na każdym etapie postępowania karnego.',
		'name' => 'Klient indywidualny',
		'role' => 'obrona karna',
	],
	[
		'quote' => 'Świetne przygotowanie umów i szybkie wyjaśnienie ryzyk prawnych. Współpraca na najwyższym poziomie.',
		'name' => 'Przedsiębiorca',
		'role' => 'obsługa firm',
	],
];

$call_action_items = [
	[
		'icon' => 'fas fa-map-marker-alt',
		'text' => $address_street . ', ' . $postal_code . ' ' . $address_city,
		'title' => 'Adres kancelarii',
	],
	[
		'icon' => 'flaticon-smartphone',
		'text' => $phone_display,
		'title' => 'Telefon',
		'href' => 'tel:' . $phone_link,
	],
	[
		'icon' => 'flaticon-email',
		'text' => $email,
		'title' => 'E-mail',
		'href' => 'mailto:' . $email,
	],
	[
		'icon' => 'flaticon-shout',
		'text' => $site_domain,
		'title' => 'Strona internetowa',
		'href' => $site_url,
	],
	[
		'icon' => 'flaticon-schedule',
		'text' => 'Umów konsultację',
		'title' => 'Kontakt',
		'href' => 'kontakt.html',
	],
];

$service_slider_items = [
	[
		'title' => "Porady prawne i analiza umów",
		'text' => 'Profesjonalne konsultacje, opinie prawne oraz przygotowanie umów i pism procesowych.',
		'image' => 'assets/img/service/sr2.jpg',
		'icon' => 'flaticon-courthouse',
	],
	[
		'title' => "Sprawy o zapłatę i windykacja",
		'text' => 'Skuteczne dochodzenie roszczeń, sprzeciwy od nakazu zapłaty i negocjacje ugodowe.',
		'image' => 'assets/img/service/sr3.jpg',
		'icon' => 'flaticon-mace',
	],
	[
		'title' => "Zachowek i dział spadku",
		'text' => 'Kompleksowe wsparcie w sprawach dziedziczenia, testamentów i postępowań spadkowych.',
		'image' => 'assets/img/service/sr1.jpg',
		'icon' => 'flaticon-crutch',
	],
	[
		'title' => "Obrona w sprawach karnych",
		'text' => 'Obrona oraz reprezentacja pokrzywdzonych w postępowaniu przygotowawczym i sądowym.',
		'image' => 'assets/img/service/sr2.jpg',
		'icon' => 'flaticon-courthouse',
	],
	[
		'title' => "Postępowanie wykonawcze",
		'text' => 'Wnioski o dozór elektroniczny, odroczenie wykonania kary i warunkowe zwolnienie.',
		'image' => 'assets/img/service/sr3.jpg',
		'icon' => 'flaticon-mace',
	],
	[
		'title' => "Prawo rodzinne i opiekuńcze",
		'text' => 'Rozwody, alimenty, władza rodzicielska oraz ustalenie kontaktów z dziećmi.',
		'image' => 'assets/img/service/sr1.jpg',
		'icon' => 'flaticon-crutch',
	],
];

$footer_service_links = [
	[
		'label' => 'Prawo cywilne',
		'href' => 'prawo-cywilne.html',
	],
	[
		'label' => 'Prawo spadkowe',
		'href' => 'prawo-spadkowe.html',
	],
	[
		'label' => 'Obrona w sprawach karnych',
		'href' => 'obrona-w-sprawach-karnych.html',
	],
	[
		'label' => 'Porady prawne',
		'href' => 'oferta.html',
	],
	[
		'label' => 'Umowy i opinie',
		'href' => 'oferta.html',
	],
	[
		'label' => 'Sprawy rodzinne',
		'href' => 'oferta.html',
	],
];

$footer_contact_items = [
	[
		'image' => 'assets/img/blog/bt1.jpg',
		'meta' => 'Adres kancelarii',
		'title' => $address_street . ', ' . $postal_code . ' ' . $address_city,
	],
	[
		'image' => 'assets/img/blog/bt2.jpg',
		'meta' => 'Telefon',
		'title' => $phone_display,
		'href' => 'tel:' . $phone_link,
	],
	[
		'image' => 'assets/img/blog/bt3.jpg',
		'meta' => 'E-mail',
		'title' => $email,
		'href' => 'mailto:' . $email,
	],
	[
		'image' => 'assets/img/blog/bt4.jpg',
		'meta' => 'Strona internetowa',
		'title' => $site_domain,
		'href' => $site_url,
	],
];

$footer_about_text = <<<HTML
{$firm_name_short} świadczy kompleksowe usługi prawne dla klientów indywidualnych i przedsiębiorców. Specjalizujemy się w prawie cywilnym, spadkowym oraz w obronie w sprawach karnych, działając na terenie {$city_primary}, {$city_secondary} i całego {$region_primary}. Zapewniamy rzetelną analizę, jasne zasady współpracy i pełne zaangażowanie w ochronę interesów Klienta.
HTML;

$schema_data = [
	'@context' => 'https://schema.org',
	'@type' => 'LegalService',
	'@id' => $site_url,
	'name' => $firm_name,
	'alternateName' => $lawyer_title . ' ' . $lawyer_name,
	'description' => 'Kancelaria adwokacka w Trzebnicy i Wrocławiu. Prawo cywilne, spadkowe, obrona w sprawach karnych, porady prawne i obsługa umów.',
	'image' => $og_image,
	'logo' => $og_image,
	'url' => $site_url,
	'telephone' => $phone_display,
	'email' => $email,
	'address' => [
		'@type' => 'PostalAddress',
		'streetAddress' => $address_street,
		'addressLocality' => $address_city,
		'addressRegion' => $region_primary,
		'postalCode' => $postal_code,
		'addressCountry' => 'PL',
	],
	'geo' => [
		'@type' => 'GeoCoordinates',
		'latitude' => '51.3094',
		'longitude' => '17.0633',
	],
	'areaServed' => [
		[
			'@type' => 'City',
			'name' => $city_primary,
		],
		[
			'@type' => 'City',
			'name' => $city_secondary,
		],
		[
			'@type' => 'State',
			'name' => $region_primary,
		],
		[
			'@type' => 'State',
			'name' => $region_secondary,
		],
	],
	'hasOfferCatalog' => [
		'@type' => 'OfferCatalog',
		'name' => 'Usługi prawne',
		'itemListElement' => [
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Prawo cywilne',
					'description' => 'Sprawy o zapłatę, umowy, odszkodowania, zniesienie współwłasności.',
				],
			],
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Prawo spadkowe',
					'description' => 'Dziedziczenie, zachowek, dział spadku, testamenty.',
				],
			],
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Obrona w sprawach karnych',
					'description' => 'Obrona na każdym etapie postępowania karnego i wykonawczego.',
				],
			],
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Porady prawne',
					'description' => 'Konsultacje, opinie prawne, negocjacje i analiza dokumentów.',
				],
			],
		],
	],
	'provider' => [
		'@type' => 'Attorney',
		'name' => $lawyer_name,
		'jobTitle' => $lawyer_title,
		'memberOf' => [
			'@type' => 'Organization',
			'name' => 'Okręgowa Rada Adwokacka we Wrocławiu',
		],
	],
	'sameAs' => [
		$site_url,
	],
];
?>
<!DOCTYPE html>
<html lang="pl">
<?php include __DIR__ . '/template-head.php'; ?>
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>

	<?php include __DIR__ . '/template-header.php'; ?>

<!-- Start of slider section
	============================================= -->
	<section id="slider_area" class="slider_section slider_2 relative-position">
		<div id="slider_id" class="slider_style_two owl-carousel relative-position">
			<?php foreach ($slides as $slide): ?>
				<div class="slider_priview" data-background="<?php echo htmlspecialchars($slide['background'], ENT_QUOTES); ?>">
					<div class="container">
						<div class="slider_contect_box">
							<div class="slider_text headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									<?php echo htmlspecialchars($slide['tagline'], ENT_QUOTES); ?>
								</p>
								<h1><?php echo nl2br(htmlspecialchars($slide['headline'], ENT_QUOTES)); ?></h1>
							</div>
							<div class="slider_btn ul-li clearfix">
								<ul>
									<?php foreach ($slide['buttons'] as $button): ?>
										<li>
											<a class="block-display" href="<?php echo htmlspecialchars($button['href'], ENT_QUOTES); ?>">
												<?php echo htmlspecialchars($button['label'], ENT_QUOTES); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="slider_side_btn">
			<a class="block-display" href="tel:<?php echo htmlspecialchars($phone_link, ENT_QUOTES); ?>">
				<i class="fas fa-phone"></i>Zadzwoń: <?php echo htmlspecialchars($phone_display, ENT_QUOTES); ?>
			</a>
		</div>
	</section>
<!-- End of slider section
	============================================= -->

<!-- Start of about us section
	============================================= -->
	<section id="about" class="about_section_two">
		<div class="container">
			<div class="about_area_content relative-position">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="about_left_content relative-position">
							<div class="about_left_img">
								<img src="assets/img/about/abl.jpg" alt="">
							</div>
							<div class="about_progress" data-parallax='{"y" : -100}'>
								<div class="first progress_area float-left"><strong><span>%</span></strong></div>
							</div>
							<div class="shape_pattern" data-parallax='{"x" : -20}'><img src="assets/img/about/pt1.png" alt=""></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="about_right_two">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									o kancelarii
								</p>
								<h2>
									Kancelaria adwokacka w <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?>
									i <?php echo htmlspecialchars($city_secondary, ENT_QUOTES); ?>
								</h2>
							</div>
							<div class="about_area_text">
								<div class="about_top_text">
									<?php echo htmlspecialchars($firm_name_short, ENT_QUOTES); ?> świadczy kompleksowe usługi prawne z zakresu prawa
									<span>cywilnego, spadkowego oraz obrony w sprawach karnych</span> dla Klientów z <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?>, <?php echo htmlspecialchars($city_secondary, ENT_QUOTES); ?> i całego <?php echo htmlspecialchars($region_primary, ENT_QUOTES); ?>.
								</div>
								<div class="about_details_text">
									Nazywam się <?php echo htmlspecialchars($lawyer_name, ENT_QUOTES); ?> i jestem adwokatem z wieloletnim doświadczeniem zawodowym. Od 2016 roku prowadzę własną kancelarię w <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?>, zapewniając rzetelne doradztwo, jasne zasady współpracy i skuteczną ochronę interesów Klientów. Każdą sprawę analizuję indywidualnie, dbając o przejrzystą komunikację i realne wsparcie na każdym etapie postępowania.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about_counter">
					<div class="about_counter_list ul-li clearfix">
						<ul>
							<?php foreach ($about_counters as $counter): ?>
								<li>
									<div class="counter_icon_text text-center">
										<div class="counter_icon">
											<i class="<?php echo htmlspecialchars($counter['icon'], ENT_QUOTES); ?>"></i>
										</div>
										<div class="counter_number pera-content">
											<span class="odometer" data-count="<?php echo htmlspecialchars($counter['count'], ENT_QUOTES); ?>">00</span><strong><?php echo htmlspecialchars($counter['suffix'], ENT_QUOTES); ?></strong>
											<p><?php echo htmlspecialchars($counter['label'], ENT_QUOTES); ?></p>
										</div>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="shape_pattern_2" data-parallax='{"x" : -30}'><img src="assets/img/about/pt1.png" alt=""></div>
			</div>
		</div>
	</section>
<!-- End of about us section
	============================================= -->

<!-- Start of service section
	============================================= -->
	<section id="service" class="service_section_two relative-position">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					usługi
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Kompleksowa obsługa prawna
						w każdej sprawie
				</h2>
			</div>
			<div class="service_content_two">
				<div class="row">
					<?php foreach ($service_boxes as $service_box): ?>
						<div class="col-lg-3 col-md-6">
							<div class="service_box wow fadeInLeft" data-wow-delay="<?php echo htmlspecialchars($service_box['delay'], ENT_QUOTES); ?>" data-wow-duration="1500ms">
								<div class="service_img_icon relative-position">
									<div class="service_img">
										<img src="<?php echo htmlspecialchars($service_box['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($service_box['title'], ENT_QUOTES); ?>">
									</div>
									<div class="service_icon text-center">
										<i class="<?php echo htmlspecialchars($service_box['icon'], ENT_QUOTES); ?>"></i>
									</div>
								</div>
								<div class="service_text_two headline pera-content">
									<h3><a href="<?php echo htmlspecialchars($service_box['href'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($service_box['title'], ENT_QUOTES); ?></a></h3>
									<p><?php echo htmlspecialchars($service_box['text'], ENT_QUOTES); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<!-- End  of service section
	============================================= -->

<!-- Start of case study section
	============================================= -->
	<section id="case_study" class="case_study_section">
		<div class="case_study_item">
			<div id="tabsContent" class="tab-content">
				<?php foreach ($case_studies as $index => $case): ?>
					<?php $is_active = $index === 0; ?>
					<div id="<?php echo htmlspecialchars($case['id'], ENT_QUOTES); ?>" class="tab-pane fade<?php echo $is_active ? ' active show' : ''; ?>">
						<div class="case_title_text">
							<div class="container">
								<div class="section_title_area headline pera-content">
									<p>
										<span class="title_shape_left"></span>
										specjalizacje
									</p>
									<h2><?php echo nl2br(htmlspecialchars($case['title'], ENT_QUOTES)); ?></h2>
								</div>
								<div class="case_study_btn">
									<a class="block-display" href="<?php echo htmlspecialchars($case['href'], ENT_QUOTES); ?>">Poznaj szczegóły</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="case_study_button clearfix ul-li">
				<ul id="tabs" class="nav nav-tabs">
					<?php foreach ($case_studies as $index => $case): ?>
						<?php $is_active = $index === 0; ?>
						<li class="nav-item">
							<a href="!#" data-target="#<?php echo htmlspecialchars($case['id'], ENT_QUOTES); ?>" data-toggle="tab" class="nav-link<?php echo $is_active ? ' active' : ''; ?>">
								<img src="<?php echo htmlspecialchars($case['image'], ENT_QUOTES); ?>" alt="">
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
<!-- End of case study section
	============================================= -->

<!-- Start of call to action section
	============================================= -->
	<section id="call_to_action2" class="call_action_two call_action_home_2">
		<div class="container">
			<div class="call_action_logo text-center">
				<img src="assets/img/logo/call-logo.png" alt="">
			</div>
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					<?php echo htmlspecialchars($call_to_action_tagline, ENT_QUOTES); ?>
					<span class="title_shape_right"></span>
				</p>
				<h2><?php echo htmlspecialchars($call_to_action_title, ENT_QUOTES); ?></h2>
			</div>
			<div class="call_action_number text-center">
				<?php echo htmlspecialchars($call_to_action_phone, ENT_QUOTES); ?>
			</div>
			<div class="call_action_btn ul-li text-center">
				<ul>
					<li><a class="block-display" href="kontakt.html">Umów konsultację</a></li>
					<li><a class="block-display" href="oferta.html">Dowiedz się więcej</a></li>
				</ul>
			</div>
		</div>
	</section>
<!-- End of call to action section
	============================================= -->

<!-- Start of feature section
	============================================= -->
	<section id="feature" class="feature_section">
		<div class="feature_content row-flex">
			<div class="revenue_feature background_position text-center relative-position">
				<div class="background_overlay"></div>
				<div class="revenue_icon">
					<i class="flaticon-bidding"></i>
				</div>
				<div class="revenue_ammount">
					<strong><?php echo htmlspecialchars($feature_highlight['prefix'], ENT_QUOTES); ?></strong><span class="count"><?php echo htmlspecialchars($feature_highlight['count'], ENT_QUOTES); ?></span>
				</div>
				<div class="revenue_text">
					<?php echo htmlspecialchars($feature_highlight['text'], ENT_QUOTES); ?>
				</div>
			</div>
			<div class="skill_feature">
				<div class="section_title_area headline pera-content">
					<p>
						<span class="title_shape_left"></span>
						najczęstsze sprawy
					</p>
					<h2>
						Obszary praktyki kancelarii
					</h2>
				</div>
				<div class="skill_progress">
					<?php foreach ($skill_bars as $skill_bar): ?>
						<div class="single_experties">
							<div class="progress_text">
								<div class="skill-title float-left text-uppercase"><?php echo htmlspecialchars($skill_bar['title'], ENT_QUOTES); ?></div>
								<div class="skill-percent float-right"><?php echo htmlspecialchars($skill_bar['percent'], ENT_QUOTES); ?></div>
							</div>
							<div class="progress">
								<div class="progress-bar wow <?php echo htmlspecialchars($skill_bar['class'], ENT_QUOTES); ?> animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<!-- End of feature section
	============================================= -->

<!-- Start of partner section
	============================================= -->
	<div class="client_area">
		<div class="client_list ul-li clearfix">
			<ul>
				<li><img src="assets/img/client/c1.png" alt=""></li>
				<li><img src="assets/img/client/c2.png" alt=""></li>
				<li><img src="assets/img/client/c3.png" alt=""></li>
				<li><img src="assets/img/client/c4.png" alt=""></li>
				<li><img src="assets/img/client/c5.png" alt=""></li>
			</ul>
		</div>
	</div>
<!-- End  of partner section
	============================================= -->

<!-- Start of how we work
	============================================= -->
	<section id="how_work" class="how_work_section">
		<div class="container">
			<div class="section_title_area headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					proces
				</p>
				<h2>
					Jak przebiega współpraca
				</h2>
			</div>
			<div class="how_work_content relative-position">
				<div class="row">
					<?php foreach ($how_steps as $step): ?>
						<div class="col-lg-3 col-md-6">
							<div class="how_work_box text-center">
								<div class="how_work_img_serial relative-position">
									<div class="how_work_img">
										<img src="<?php echo htmlspecialchars($step['image'], ENT_QUOTES); ?>" alt="">
									</div>
									<div class="how_work_serial text-center">
										<?php echo htmlspecialchars($step['number'], ENT_QUOTES); ?>
									</div>
								</div>
								<div class="how_work_text pera-content headline">
									<h4><?php echo htmlspecialchars($step['title'], ENT_QUOTES); ?></h4>
									<p><?php echo htmlspecialchars($step['text'], ENT_QUOTES); ?></p>
								</div>
								<div class="how_work_btn">
									<a href="!#"><i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="work_btn">
					<a href="kontakt.html">Skontaktuj się</a>
				</div>
			</div>
		</div>
	</section>
<!-- End of how we work
	============================================= -->

<!-- Start testimonial section
	============================================= -->
	<section id="testimonial_two" class="testimonial_two_Section">
		<div class="background_parallax relative-position">
			<div class="background_overlay"></div>
			<div class="testimonial_carousel">
				<div id="testimonial_carouselid" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php foreach ($testimonials as $index => $testimonial): ?>
							<?php $is_active = $index === 0; ?>
							<div class="carousel-item<?php echo $is_active ? ' active' : ''; ?>">
								<div class="testimonial_item_content text-center">
									<div class="testimonial_icon">
										<i class="flaticon-quotation"></i>
									</div>
									<div class="testimonial_quote">
										“ <?php echo htmlspecialchars($testimonial['quote'], ENT_QUOTES); ?> ”
									</div>
									<div class="testimonial_meta headline">
										<h4><?php echo htmlspecialchars($testimonial['name'], ENT_QUOTES); ?></h4>
										<span><?php echo htmlspecialchars($testimonial['role'], ENT_QUOTES); ?></span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#testimonial_carouselid" data-slide-to="0" class="active">
							<img src="assets/img/testimonial/tst1.jpg" alt="">
						</li>
						<li data-target="#testimonial_carouselid" data-slide-to="1">
							<img src="assets/img/testimonial/tst2.jpg" alt="">
						</li>
						<li data-target="#testimonial_carouselid" data-slide-to="2">
							<img src="assets/img/testimonial/tst3.jpg" alt="">
						</li>
						<li data-target="#testimonial_carouselid" data-slide-to="3">
							<img src="assets/img/testimonial/tst4.jpg" alt="">
						</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
<!-- End testimonial section
	============================================= -->

<!-- Start of call to action section
	============================================= -->
	<section id="call_action" class="call_action_Section call_action_blackhover">
		<div class="call_action_list clearfix ul-li">
			<ul>
				<?php foreach ($call_action_items as $item): ?>
					<li>
						<div class="call_action_icon">
							<i class="<?php echo htmlspecialchars($item['icon'], ENT_QUOTES); ?>"></i>
						</div>
						<div class="call_action_text headline pera-content">
							<p>
								<?php if (!empty($item['href'])): ?>
									<a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($item['text'], ENT_QUOTES); ?></a>
								<?php else: ?>
									<?php echo htmlspecialchars($item['text'], ENT_QUOTES); ?>
								<?php endif; ?>
							</p>
							<h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES); ?></h3>
						</div>
						<div class="c-icon_bg text-center">
							<i class="fas fa-arrow-down"></i>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<!-- End of call to action section
	============================================= -->

<!-- Start of service section
	============================================= -->
	<section id="service2" class="service_section">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					usługi
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Kompleksowa obsługa prawna
						w każdej sprawie
				</h2>
			</div>
			<div class="service_area">
				<div id="service_slide" class="service_slider owl-carousel">
					<?php foreach ($service_slider_items as $service_slide): ?>
						<div class="service_img_text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="service_img relative-position">
								<img src="<?php echo htmlspecialchars($service_slide['image'], ENT_QUOTES); ?>" alt="">
							</div>
							<div class="service_text relative-position">
								<div class="service_icon float-left">
									<i class="<?php echo htmlspecialchars($service_slide['icon'], ENT_QUOTES); ?>"></i>
								</div>
								<div class="service_check text-center float-right">
									<a class="block-display" href="!#"><i class="fas fa-check"></i></a>
								</div>
								<div class="service_content headline pera-content">
									<h3><a href="oferta.html"><?php echo htmlspecialchars($service_slide['title'], ENT_QUOTES); ?></a></h3>
									<p><?php echo htmlspecialchars($service_slide['text'], ENT_QUOTES); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<!-- End of service section
	============================================= -->

<!-- Start of main content SEO section
	============================================= -->
	<section id="main_content_seo" class="about_section_two" style="padding: 100px 0; background: #f8f9fa;">
		<div class="container">
			<div class="section_title_area text-center headline pera-content" style="margin-bottom: 60px;">
				<p>
					<span class="title_shape_left"></span>
					Kancelaria Adwokacka
					<span class="title_shape_right"></span>
				</p>
				<h2><?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?> – Twoje zaufane wsparcie prawne<br>w <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?>, <?php echo htmlspecialchars($city_secondary, ENT_QUOTES); ?> i całym <?php echo htmlspecialchars($region_primary, ENT_QUOTES); ?></h2>
			</div>

			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-12">
					<div class="about_area_text" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
						<div class="headline pera-content">
							<h3 style="color: #b8935e; margin-bottom: 25px; font-size: 28px;">Witaj w Kancelarii Adwokackiej Katarzyny Maj</h3>
							<p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
								Witaj na stronie internetowej <?php echo htmlspecialchars($firm_name_short, ENT_QUOTES); ?> – miejsca, w którym prawo spotyka się z zaangażowaniem, doświadczeniem i ludzkim podejściem. Niezależnie od tego, czy potrzebujesz pomocy w sprawie cywilnej, spadkowej czy karnej – otrzymasz tutaj kompleksowe wsparcie prawne dostosowane do Twojej sytuacji. Priorytetem kancelarii jest skuteczna ochrona Twoich interesów, pełna dyskrecja oraz jasna, zrozumiała komunikacja na każdym etapie współpracy.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-6">
					<div class="about_area_text" style="background: #fff; padding: 35px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); height: 100%;">
						<div class="headline pera-content">
							<h3 style="color: #b8935e; margin-bottom: 20px; font-size: 24px;"><i class="fas fa-user-tie" style="margin-right: 10px;"></i>Kim jestem?</h3>
							<p style="font-size: 15px; line-height: 1.8;">
								Nazywam się <strong><?php echo htmlspecialchars($lawyer_name, ENT_QUOTES); ?></strong> i jestem adwokatem z wieloletnim doświadczeniem zawodowym. Ukończyłam studia prawnicze na Wydziale Prawa i Administracji <strong>Uniwersytetu im. Adama Mickiewicza w Poznaniu</strong>, odbyłam aplikację adwokacką w <strong>Okręgowej Radzie Adwokackiej we Wrocławiu</strong>, a od 2016 roku prowadzę własną kancelarię adwokacką z siedzibą w <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?>. Obsługuję klientów indywidualnych oraz przedsiębiorców, głównie z województwa <?php echo htmlspecialchars($region_primary, ENT_QUOTES); ?> i <?php echo htmlspecialchars($region_secondary, ENT_QUOTES); ?>, ale reprezentuję klientów także w innych regionach Polski.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_area_text" style="background: linear-gradient(135deg, #b8935e 0%, #9a7a4d 100%); padding: 35px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.15); height: 100%; color: #fff;">
						<div class="headline pera-content">
							<h3 style="color: #fff; margin-bottom: 20px; font-size: 24px;"><i class="fas fa-balance-scale" style="margin-right: 10px;"></i>Profesjonalizm. Doświadczenie. Zaangażowanie.</h3>
							<p style="font-size: 15px; line-height: 1.8; color: #fff;">
								Witamy na stronie <strong><?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?></strong>, miejsca stworzonego z myślą o osobach poszukujących rzetelnej, fachowej i indywidualnej pomocy prawnej. Kancelaria mieści się w dogodnej lokalizacji – przy <strong><?php echo htmlspecialchars($address_street, ENT_QUOTES); ?> w <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?></strong> – i oferuje kompleksowe usługi prawne dla klientów z <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?>, <?php echo htmlspecialchars($city_secondary, ENT_QUOTES); ?> i okolic.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-12">
					<div class="about_area_text" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
						<div class="headline pera-content">
							<h3 style="color: #b8935e; margin-bottom: 30px; font-size: 28px; text-align: center;">
								<i class="fas fa-gavel" style="margin-right: 15px;"></i>Zakres usług prawnych
							</h3>

							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-file-contract" style="color: #b8935e; margin-right: 10px;"></i>Prawo cywilne i dochodzenie roszczeń
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Reprezentuję Klientów w sprawach o zapłatę, windykacjach, sprzeciwach od nakazu zapłaty, sprawach o zniesienie współwłasności oraz w egzekucjach komorniczych. Przygotowuję i analizuję umowy, prowadzę negocjacje i reprezentuję w sporach sądowych.
									</p>
								</div>

								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-landmark" style="color: #b8935e; margin-right: 10px;"></i>Prawo spadkowe
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Stwierdzenie nabycia spadku, dział spadku, sprawy o zachowek, testamenty, oświadczenia o przyjęciu lub odrzuceniu spadku oraz wydziedziczenie – to sprawy wymagające szczególnej wrażliwości i precyzji.
									</p>
								</div>

								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-shield-alt" style="color: #b8935e; margin-right: 10px;"></i>Obrona w sprawach karnych
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Zapewniam obronę przed sądami wszystkich instancji, pomoc na etapie postępowania przygotowawczego oraz wsparcie po wydaniu wyroku – w postępowaniach wykonawczych, w tym wnioski o dozór elektroniczny lub warunkowe zwolnienie.
									</p>
								</div>

								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-comments" style="color: #b8935e; margin-right: 10px;"></i>Porady prawne i umowy
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Oferuję konsultacje prawne, sporządzanie i opiniowanie umów, pism procesowych oraz reprezentację w negocjacjach. Każda porada jest dopasowana do Twojej sytuacji i realnych możliwości.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-12">
					<div class="about_area_text" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
						<div class="headline pera-content">
							<h3 style="color: #b8935e; margin-bottom: 30px; font-size: 28px; text-align: center;">
								<i class="fas fa-star" style="margin-right: 15px;"></i>Dlaczego warto powierzyć mi swoją sprawę?
							</h3>

							<div class="row">
								<div class="col-lg-3 col-md-6" style="margin-bottom: 25px;">
									<div class="feature_box text-center" style="padding: 30px 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
										<div class="feature_icon" style="font-size: 48px; color: #b8935e; margin-bottom: 20px;">
											<i class="fas fa-user-check"></i>
										</div>
										<h4 style="color: #333; font-size: 18px; margin-bottom: 15px;">Indywidualne podejście</h4>
										<p style="font-size: 14px; line-height: 1.6;">
											Każda sprawa jest inna. Analizuję Twoją sytuację od podstaw i wspólnie wypracowujemy najlepszą strategię działania.
										</p>
									</div>
								</div>

								<div class="col-lg-3 col-md-6" style="margin-bottom: 25px;">
									<div class="feature_box text-center" style="padding: 30px 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
										<div class="feature_icon" style="font-size: 48px; color: #b8935e; margin-bottom: 20px;">
											<i class="fas fa-comments"></i>
										</div>
										<h4 style="color: #333; font-size: 18px; margin-bottom: 15px;">Przejrzysta komunikacja</h4>
										<p style="font-size: 14px; line-height: 1.6;">
											Zawsze wiesz, na jakim etapie jest Twoja sprawa. Informuję o możliwościach, ryzykach i kosztach.
										</p>
									</div>
								</div>

								<div class="col-lg-3 col-md-6" style="margin-bottom: 25px;">
									<div class="feature_box text-center" style="padding: 30px 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
										<div class="feature_icon" style="font-size: 48px; color: #b8935e; margin-bottom: 20px;">
											<i class="fas fa-clock"></i>
										</div>
										<h4 style="color: #333; font-size: 18px; margin-bottom: 15px;">Rzetelność i dostępność</h4>
										<p style="font-size: 14px; line-height: 1.6;">
											Szybko odpowiadam na wiadomości i telefony. Terminy spotkań ustalam elastycznie.
										</p>
									</div>
								</div>

								<div class="col-lg-3 col-md-6" style="margin-bottom: 25px;">
									<div class="feature_box text-center" style="padding: 30px 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
										<div class="feature_icon" style="font-size: 48px; color: #b8935e; margin-bottom: 20px;">
											<i class="fas fa-map-marked-alt"></i>
										</div>
										<h4 style="color: #333; font-size: 18px; margin-bottom: 15px;">Lokalne doświadczenie</h4>
										<p style="font-size: 14px; line-height: 1.6;">
											Znam realia sądów w <?php echo htmlspecialchars($city_primary, ENT_QUOTES); ?> i <?php echo htmlspecialchars($city_secondary, ENT_QUOTES); ?>. To przekłada się na skuteczność działań.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="about_area_text" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); padding: 50px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); text-align: center; color: #fff;">
						<h3 style="color: #fff; margin-bottom: 25px; font-size: 32px;">
							<i class="fas fa-phone-alt" style="margin-right: 15px;"></i>Skontaktuj się ze mną
						</h3>
						<div style="margin: 30px 0;">
							<p style="font-size: 18px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #b8935e;"></i><strong><?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?></strong></p>
							<p style="font-size: 16px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-building" style="margin-right: 10px; color: #b8935e;"></i><?php echo htmlspecialchars($address_street, ENT_QUOTES); ?>, <?php echo htmlspecialchars($postal_code, ENT_QUOTES); ?> <?php echo htmlspecialchars($address_city, ENT_QUOTES); ?></p>
							<p style="font-size: 16px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-phone" style="margin-right: 10px; color: #b8935e;"></i><a href="tel:<?php echo htmlspecialchars($phone_link, ENT_QUOTES); ?>" style="color: #fff; font-weight: bold;"><?php echo htmlspecialchars($phone_display, ENT_QUOTES); ?></a></p>
							<p style="font-size: 16px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-envelope" style="margin-right: 10px; color: #b8935e;"></i><a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES); ?>" style="color: #fff;"><?php echo htmlspecialchars($email, ENT_QUOTES); ?></a></p>
							<p style="font-size: 16px; color: #ecf0f1;"><i class="fas fa-globe" style="margin-right: 10px; color: #b8935e;"></i><a href="<?php echo htmlspecialchars($site_url, ENT_QUOTES); ?>" style="color: #fff;"><?php echo htmlspecialchars($site_domain, ENT_QUOTES); ?></a></p>
						</div>
						<div style="margin-top: 40px;">
							<a href="kontakt.html" class="block-display" style="display: inline-block; background: #b8935e; color: #fff; padding: 18px 50px; border-radius: 50px; font-size: 18px; font-weight: bold; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(184, 147, 94, 0.4);">
								<i class="fas fa-calendar-check" style="margin-right: 10px;"></i>Umów się na spotkanie
							</a>
						</div>
						<p style="margin-top: 30px; font-size: 16px; font-style: italic; color: #bdc3c7;">
							Umów się na spotkanie i powierz swoją sprawę profesjonalistce, która od lat skutecznie wspiera swoich Klientów w walce o ich prawa i interesy. Kancelaria Adwokacka Katarzyny Maj to miejsce, gdzie zrozumienie spotyka się z doświadczeniem, a prawo działa w Twoim interesie.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of main content SEO section
	============================================= -->

	<?php include __DIR__ . '/template-footer.php'; ?>

	<?php include __DIR__ . '/template-footer-scripts.php'; ?>
</body>
</html>
