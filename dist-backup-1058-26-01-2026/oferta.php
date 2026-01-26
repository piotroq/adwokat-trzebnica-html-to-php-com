<?php
$firm_name = 'KANCELARIA ADWOKACKA ADWOKAT Katarzyna Maj';
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
$current_year = date('Y');
$google_maps_key = getenv('GOOGLE_MAPS_KEY') ?: '';

$page_title = 'Oferta - Adwokat Katarzyna Maj | Prawo Rodzinne, Spadkowe, Cywilne, Karne | Trzebnica, Wrocław';
$meta_author = $firm_name;
$meta_description = 'Kompleksowa oferta usług prawnych Trzebnica i Wrocław. Adwokat Katarzyna Maj - prawo rodzinne, spadkowe, cywilne, karne. Rozwody, spadki, windykacja, obrona karna. Profesjonalna pomoc prawna.';
$meta_keywords = 'adwokat Trzebnica, kancelaria adwokacka Wrocław, prawo rodzinne, prawo spadkowe, prawo cywilne, prawo karne, rozwody, spadki, windykacja, obrona karna, pomoc prawna Dolny Śląsk';

$og_title = 'Oferta - Adwokat Katarzyna Maj | Trzebnica, Wrocław';
$og_description = 'Kompleksowa oferta usług prawnych - prawo rodzinne, spadkowe, cywilne, karne. Rozwody, spadki, windykacja, obrona karna. Profesjonalna pomoc prawna.';
$og_url = $site_url . '/oferta.php';
$og_site_name = $firm_name;
$og_image = $site_url . '/assets/img/logo/logo-2.png';

$twitter_title = 'Oferta - Adwokat Katarzyna Maj';
$twitter_description = 'Kompleksowa pomoc prawna w sprawach rodzinnych, spadkowych, cywilnych i karnych.';

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
		'href' => 'o-mnie.php',
	],
	[
		'label' => 'Oferta',
		'href' => 'oferta.php',
		'children' => [
			[
				'label' => 'Prawo cywilne',
				'href' => 'prawo-cywilne.php',
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
		'href' => 'oferta.php',
	],
	[
		'label' => 'Umowy i opinie',
		'href' => 'oferta.php',
	],
	[
		'label' => 'Postępowania wykonawcze',
		'href' => 'obrona-w-sprawach-karnych.html',
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

$footer_about_text = 'Kancelaria Adwokacka Katarzyny Maj zapewnia kompleksowe wsparcie prawne dla klientów indywidualnych i przedsiębiorców. Specjalizujemy się w prawie cywilnym, spadkowym oraz obronie w sprawach karnych, działając w Trzebnicy, Wrocławiu i na terenie Dolnego Śląska.';

$schema_data = [
	'@context' => 'https://schema.org',
	'@type' => 'LegalService',
	'@id' => $site_url . '/oferta.php',
	'name' => 'Kancelaria Adwokacka Katarzyna Maj - Oferta',
	'description' => 'Kompleksowe usługi prawne obejmujące prawo rodzinne, spadkowe, cywilne i karne dla klientów z Trzebnicy, Wrocławia i Dolnego Śląska',
	'url' => $site_url . '/oferta.php',
	'image' => $og_image,
	'priceRange' => '$$',
	'telephone' => $phone_display,
	'email' => $email,
	'address' => [
		'@type' => 'PostalAddress',
		'streetAddress' => $address_street,
		'addressLocality' => $address_city,
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
			'name' => 'Dolnośląskie',
		],
		[
			'@type' => 'State',
			'name' => 'Wielkopolskie',
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
					'name' => 'Prawo Rodzinne',
					'description' => 'Rozwody, separacje, alimenty, władza rodzicielska, podział majątku',
				],
			],
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Prawo Spadkowe',
					'description' => 'Stwierdzenie nabycia spadku, dział spadku, zachowek, testamenty',
				],
			],
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Prawo Cywilne',
					'description' => 'Windykacja, pozwy o zapłatę, umowy, zniesienie współwłasności',
				],
			],
			[
				'@type' => 'Offer',
				'itemOffered' => [
					'@type' => 'Service',
					'name' => 'Prawo Karne',
					'description' => 'Obrona w postępowaniu karnym, dozór elektroniczny, reprezentacja pokrzywdzonych',
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
	'openingHoursSpecification' => [
		'@type' => 'OpeningHoursSpecification',
		'dayOfWeek' => [
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
		],
		'opens' => '09:00',
		'closes' => '17:00',
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

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb_section relative-position" data-background="assets/img/background/brbg.jpg">
		<div class="background_overlay"></div>
		<div class="breadcrumb_watermark">Oferta</div>
		<div class="container">
			<h2 class="breadcrumb_title">Oferta – Kancelaria Adwokacka Katarzyna Maj</h2>
			<p class="text-white">Profesjonalna pomoc prawna w Trzebnicy, Wrocławiu i całym Dolnym Śląsku. Kancelaria Adwokacka Katarzyny Maj świadczy kompleksowe usługi prawne w zakresie prawa rodzinnego, spadkowego, cywilnego i karnego.</p>
			<div class="breadcrumb_item ul-li">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Strona główna</a></li>
					<li class="breadcrumb-item active">Oferta</li>
				</ul>
			</div>
		</div>
		<div class="slider_side_btn">
			<a class="block-display" href="kontakt.html"><i class="fas fa-phone"></i>Umów konsultację</a>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of service page section
	============================================= -->
	<section id="service_page" class="service_page_section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="service_page_content relative-position">
						<div class="service_page_text">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									Oferta
								</p>
								<h2>
									Profesjonalna pomoc prawna
									w szerokim zakresie spraw
								</h2>
							</div>
							<div class="servicepage_btn ul-li">
								<ul>
									<li><a class="block-display" href="kontakt.html">Skontaktuj się</a></li>
									<li><a class="block-display" href="#practice_service">Nasze usługi <i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="service_pageimg">
							<img src="assets/img/service/srs.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of service page section
	============================================= -->

<!-- Start of service page section
	============================================= -->
	<section id="practice_service" class="service_style_two practice_service_section relative-position">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					Specjalizacje
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Nasze specjalizacje prawne
				</h2>
			</div>
			<div class="service_content">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
							<div class="service_icon relative-position">
								<i class="flaticon-mace"></i>
							</div>
							<div class="service_text headline pera-content">
								<h3><a href="oferta.php#prawo-rodzinne">Prawo Rodzinne</a></h3>
								<p>Rozwody, separacje, alimenty, władza rodzicielska, kontakty z dzieckiem, podział majątku wspólnego małżonków.</p>
							</div>
							<div class="how_work_btn">
								<a href="oferta.php#prawo-rodzinne"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
							<div class="service_icon relative-position">
								<i class="flaticon-courthouse"></i>
							</div>
							<div class="service_text headline pera-content">
								<h3><a href="prawo-spadkowe.html">Prawo Spadkowe</a></h3>
								<p>Stwierdzenie nabycia spadku, dział spadku, zachowek, testamenty, wydziedziczenie, oświadczenia spadkowe.</p>
							</div>
							<div class="how_work_btn">
								<a href="prawo-spadkowe.html"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
								<div class="service_icon relative-position">
									<i class="flaticon-handcuffs"></i>
								</div>
								<div class="service_text headline pera-content">
									<h3><a href="obrona-w-sprawach-karnych.html">Prawo Karne</a></h3>
									<p>Obrona w sprawach karnych, dozór elektroniczny, warunkowe przedterminowe zwolnienie, reprezentacja pokrzywdzonych.</p>
								</div>
								<div class="how_work_btn">
									<a href="obrona-w-sprawach-karnych.html"><i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
								<div class="service_icon relative-position">
									<i class="flaticon-scale"></i>
								</div>
								<div class="service_text headline pera-content">
									<h3><a href="prawo-cywilne.html">Prawo Cywilne</a></h3>
									<p>Roszczenia z umów, windykacja, pozwy o zapłatę, zniesienie współwłasności, postępowania egzekucyjne.</p>
								</div>
								<div class="how_work_btn">
									<a href="prawo-cywilne.html"><i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
								<div class="service_icon relative-position">
									<i class="flaticon-question"></i>
								</div>
								<div class="service_text headline pera-content">
									<h3><a href="faq-pytania.html">FAQ - Pytania</a></h3>
									<p>Najczęściej zadawane pytania dotyczące usług prawnych, kosztów, procedur i sposobu współpracy z kancelarią.</p>
								</div>
								<div class="how_work_btn">
									<a href="faq-pytania.html"><i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
							<div class="service_icon relative-position">
								<i class="flaticon-phone-call"></i>
							</div>
							<div class="service_text headline pera-content">
								<h3><a href="kontakt.html">Kontakt</a></h3>
								<p>Umów się na bezpłatną konsultację. Skontaktuj się telefonicznie, mailowo lub odwiedź kancelarię w Trzebnicy.</p>
							</div>
							<div class="how_work_btn">
								<a href="kontakt.html"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Start of service page section
	============================================= -->

<!-- Start of detailed services section
	============================================= -->
	<section id="detailed_services" class="service_page_section" style="background: #f8f9fa; padding: 80px 0;">
		<div class="container">
			<div class="section_title_area text-center headline pera-content" style="margin-bottom: 50px;">
				<p>
					<span class="title_shape_left"></span>
					Szczegółowy opis
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Nasze specjalizacje
				</h2>
			</div>

			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-6">
					<div id="prawo-rodzinne" class="service_detail_box" style="background: white; padding: 30px; border-radius: 5px; height: 100%;">
						<h3 style="color: #b8935e; margin-bottom: 20px;"><i class="flaticon-mace"></i> Prawo rodzinne</h3>
						<p>Sprawy rodzinne należą do najbardziej delikatnych i wymagających dużej uważności oraz empatii. Kancelaria zapewnia wsparcie w trudnych momentach życia osobistego:</p>
						<ul style="list-style: none; padding-left: 0;">
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Rozwody i separacje, w tym z orzekaniem o winie i bez</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Alimenty – dochodzenie, podwyższenie, obniżenie, uchylenie</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Ustalanie władzy rodzicielskiej i kontaktów z dzieckiem</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Podział majątku wspólnego</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Ustanowienie rozdzielności majątkowej</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Ustalanie i zaprzeczenie ojcostwa</li>
						</ul>
						<p style="margin-top: 20px;"><strong>Każda sprawa traktowana jest indywidualnie – z uwzględnieniem dobra dziecka, interesów klienta oraz możliwości osiągnięcia kompromisu.</strong></p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="service_detail_box" style="background: white; padding: 30px; border-radius: 5px; height: 100%;">
						<h3 style="color: #b8935e; margin-bottom: 20px;"><i class="flaticon-courthouse"></i> Prawo spadkowe</h3>
						<p>Sprawy spadkowe to często skomplikowane postępowania, wymagające precyzyjnej analizy dokumentów oraz wyczucia emocjonalnego:</p>
						<ul style="list-style: none; padding-left: 0;">
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Stwierdzenie nabycia spadku</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Dział spadku (polubowny i sądowy)</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Roszczenia o zachowek</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Sprawy dotyczące testamentów – ich ważności, wykonania</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Wydziedziczenie, odrzucenie lub przyjęcie spadku z dobrodziejstwem inwentarza</li>
						</ul>
						<p style="margin-top: 20px;"><strong>Kancelaria wspiera klientów zarówno przed sądem, jak i w mediacjach między spadkobiercami.</strong></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="service_detail_box" style="background: white; padding: 30px; border-radius: 5px; height: 100%;">
						<h3 style="color: #b8935e; margin-bottom: 20px;"><i class="flaticon-scale"></i> Prawo cywilne</h3>
						<p>Obsługa spraw cywilnych obejmuje doradztwo, reprezentację oraz przygotowanie niezbędnych dokumentów:</p>
						<ul style="list-style: none; padding-left: 0;">
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Roszczenia z umów (sprzedaży, najmu, usług)</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Pozwy o zapłatę i windykacja należności</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Sprzeciwy od nakazu zapłaty</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Sprawy o zniesienie współwłasności</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Ustanowienie służebności i inne roszczenia rzeczowe</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Reprezentacja w egzekucji komorniczej i postępowaniu zabezpieczającym</li>
						</ul>
						<p style="margin-top: 20px;"><strong>Kancelaria pomaga na każdym etapie – od analizy umowy, przez negocjacje, aż po reprezentację przed sądem i organami egzekucyjnymi.</strong></p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="service_detail_box" style="background: white; padding: 30px; border-radius: 5px; height: 100%;">
						<h3 style="color: #b8935e; margin-bottom: 20px;"><i class="flaticon-handcuffs"></i> Prawo karne</h3>
						<p>Obrona oskarżonych i reprezentowanie pokrzywdzonych w postępowaniu karnym wymaga wiedzy, doświadczenia i zdecydowania:</p>
						<ul style="list-style: none; padding-left: 0;">
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Obrona w postępowaniu przygotowawczym, sądowym, wykonawczym</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Obrona nieletnich</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Wnioski o odroczenie wykonania kary</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Dozór elektroniczny, warunkowe przedterminowe zwolnienie</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Reprezentowanie pokrzywdzonych, oskarżycieli posiłkowych i prywatnych</li>
							<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #b8935e; margin-right: 10px;"></i>Pomoc w sprawach wykroczeń</li>
						</ul>
						<p style="margin-top: 20px;"><strong>Adwokat Katarzyna Maj zapewnia rzetelną analizę materiału dowodowego, pomoc w przygotowaniu linii obrony oraz aktywną reprezentację w sądzie.</strong></p>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-lg-12">
					<div class="service_detail_box" style="background: white; padding: 40px; border-radius: 5px; text-align: center;">
						<h3 style="color: #b8935e; margin-bottom: 30px;">Zasady współpracy</h3>
						<div class="row">
							<div class="col-md-4">
								<i class="fas fa-user-tie fa-3x" style="color: #b8935e; margin-bottom: 20px;"></i>
								<h4>Indywidualne podejście</h4>
								<p>Każda sprawa jest inna. W kancelarii nie stosuje się schematów. Analiza sprawy, ustalenie strategii i działań opiera się na dogłębnej rozmowie z klientem.</p>
							</div>
							<div class="col-md-4">
								<i class="fas fa-file-invoice-dollar fa-3x" style="color: #b8935e; margin-bottom: 20px;"></i>
								<h4>Jasna wycena</h4>
								<p>Koszty prowadzenia sprawy ustalane są po wstępnej analizie i zapoznaniu się z dokumentami. Możliwa jest zarówno stawka ryczałtowa, jak i rozliczenie godzinowe.</p>
							</div>
							<div class="col-md-4">
								<i class="fas fa-handshake fa-3x" style="color: #b8935e; margin-bottom: 20px;"></i>
								<h4>Dostępność i zaufanie</h4>
								<p>Kancelaria działa z pełnym zaangażowaniem. Zapewniam terminowość, dyskrecję i bieżący kontakt z klientem na każdym etapie sprawy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of detailed services section
	============================================= -->

<!-- Start of estimate project
	============================================= -->
	<section id="estimate" class="estimate_section">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					Kontakt
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Umów konsultację
				</h2>
			</div>
			<div class="estimate_budget relative-position">
				<span class="e-title">Wybierz zakres sprawy</span>
				<div id="estimate_scale"></div>
			</div>
			<div class="estimate_form">
				<form id="contact_form" action="mail.php" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-info">
								<input class="email" name="name" type="text" placeholder="Imię i nazwisko">
								<div class="icon-bg">
									<i class="far fa-user"></i>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="contact-info">
								<input class="name" name="Email" type="email" placeholder="Adres email">
								<div class="icon-bg">
									<i class="far fa-envelope"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="phone" type="text" placeholder="Numer telefonu">
								<div class="icon-bg">
									<i class="fas fa-phone"></i>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="date" type="text" placeholder="Preferowana data spotkania">
								<div class="icon-bg">
									<i class="fas fa-calendar-alt"></i>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="case" type="text" placeholder="Rodzaj sprawy">
								<div class="icon-bg">
									<i class="fas fa-arrow-down"></i>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="contact-info">
								<textarea id="message" name="message" placeholder="Opisz swoją sprawę"></textarea>
								<div class="icon-bg">
									<i class="far fa-edit"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="sub-button  text-uppercase">
						<button type="submit" value="Submit">Wyślij zapytanie</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<!-- End  of estimate project
	============================================= -->

	<?php include __DIR__ . '/template-footer.php'; ?>

	<?php include __DIR__ . '/template-footer-scripts.php'; ?>

	<script src="assets/js/nouislider.js"></script>
	<script src="assets/js/jquery.filterizr.js"></script>
</body>
</html>
