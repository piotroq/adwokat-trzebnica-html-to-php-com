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

$page_title = $firm_name . ' | Adwokat ' . $city_primary . ', ' . $city_secondary;
$meta_author = $firm_name;
$meta_description = 'Kancelaria adwokacka w Trzebnicy i Wrocławiu. Prawo cywilne, prawo spadkowe, obrona w sprawach karnych, porady prawne i umowy. Zadzwoń: ' . $phone_display . '.';
$meta_keywords = 'adwokat Trzebnica, kancelaria adwokacka Trzebnica, adwokat Wrocław, prawo cywilne, prawo spadkowe, obrona w sprawach karnych, porady prawne, kancelaria adwokacka Dolny Śląsk, adwokat Katarzyna Maj';

$og_title = $page_title;
$og_description = 'Profesjonalna pomoc prawna w Trzebnicy, Wrocławiu i na Dolnym Śląsku. Prawo cywilne, spadkowe oraz obrona karna. Tel: ' . $phone_display . '.';
$og_url = $site_url;
$og_site_name = $firm_name;
$og_image = $site_url . '/assets/img/logo/logo-2.png';

$twitter_title = $firm_name;
$twitter_description = 'Adwokat Trzebnica i Wrocław. Prawo cywilne, spadkowe, obrona w sprawach karnych. Tel: ' . $phone_display . '.';

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
	<section id="slider_area" class="slider_section  slider_2 relative-position">
		<div id="slider_id" class="slider_style_two owl-carousel relative-position">
			<div class="slider_priview" data-background="assets/img/slider/s4.jpg">
				<div class="container">
					<div class="slider_contect_box">
						<div class="slider_text headline pera-content">
							<p>
								<span class="title_shape_left"></span>
								Adwokat Trzebnica • Wrocław • Dolny Śląsk
							</p>
							<h1>Kancelaria Adwokacka
								Adwokat Katarzyna Maj
							</h1>
						</div>
						<div class="slider_btn ul-li clearfix">
							<ul>
								<li><a class="block-display" href="oferta.html">Zobacz ofertę</a></li>
								<li><a class="block-display" href="kontakt.html">Skontaktuj się</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="slider_priview" data-background="assets/img/slider/s4.jpg">
				<div class="container">
					<div class="slider_contect_box">
						<div class="slider_text headline pera-content">
							<p>
								<span class="title_shape_left"></span>
								Prawo cywilne i spadkowe
							</p>
							<h1>Skuteczna pomoc
								w sprawach majątkowych
							</h1>
						</div>
						<div class="slider_btn ul-li clearfix">
							<ul>
								<li><a class="block-display" href="prawo-cywilne.html">Prawo cywilne</a></li>
								<li><a class="block-display" href="prawo-spadkowe.html">Prawo spadkowe</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="slider_priview" data-background="assets/img/slider/s4.jpg">
				<div class="container">
					<div class="slider_contect_box">
						<div class="slider_text headline pera-content">
							<p>
								<span class="title_shape_left"></span>
								Obrona w sprawach karnych
							</p>
							<h1>Szybka reakcja
								profesjonalna obrona
							</h1>
						</div>
						<div class="slider_btn ul-li clearfix">
							<ul>
								<li><a class="block-display" href="obrona-w-sprawach-karnych.html">Obrona karna</a></li>
								<li><a class="block-display" href="tel:+48502319645">Zadzwoń teraz</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider_side_btn">
			<a class="block-display" href="tel:+48502319645"><i class="fas fa-phone"></i>Zadzwoń: +48 502 319 645</a>
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
									Kancelaria adwokacka w Trzebnicy i Wrocławiu
								</h2>
							</div>
							<div class="about_area_text">
								<div class="about_top_text">Kancelaria Adwokacka Adwokat <strong>Katarzyna Maj</strong> w Trzebnicy świadczy kompleksowe usługi prawne z zakresu prawa <span>cywilnego, spadkowego oraz obrony w sprawach karnych</span> dla Klientów z Trzebnicy, Wrocławia i całego Dolnego Śląska.</div>
								<div class="about_details_text">
									Nazywam się Katarzyna Maj i jestem adwokatem z wieloletnim doświadczeniem zawodowym. Ukończyłam studia prawnicze na Uniwersytecie im. Adama Mickiewicza w Poznaniu, odbyłam aplikację adwokacką w Okręgowej Radzie Adwokackiej we Wrocławiu, a od 2016 roku prowadzę własną kancelarię z siedzibą w Trzebnicy. Zapewniam rzetelną analizę sprawy, jasne zasady współpracy i pełne zaangażowanie na każdym etapie postępowania. Moim priorytetem jest skuteczna ochrona interesów Klienta, szybka reakcja na pojawiające się problemy oraz przejrzysta komunikacja, która daje poczucie bezpieczeństwa.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about_counter">
					<div class="about_counter_list ul-li clearfix">
						<ul>
							<li>
								<div class="counter_icon_text text-center">
									<div class="counter_icon">
										<i class="flaticon-mace"></i>
									</div>
									<div class="counter_number pera-content">
										<span class="odometer" data-count="2016">00</span><strong>r.</strong>
										<p>Rok założenia kancelarii</p>
									</div>
								</div>
							</li>
							<li>
								<div class="counter_icon_text text-center">
									<div class="counter_icon">
										<i class="flaticon-balance"></i>
									</div>
									<div class="counter_number pera-content">
										<span class="odometer" data-count="2">00</span><strong>+</strong>
										<p>Miasta obsługi klientów</p>
									</div>
								</div>
							</li>
							<li>
								<div class="counter_icon_text text-center">
									<div class="counter_icon">
										<i class="flaticon-teamwork"></i>
									</div>
									<div class="counter_number pera-content">
										<span class="odometer" data-count="3">00</span><strong>+</strong>
										<p>Kluczowe specjalizacje</p>
									</div>
								</div>
							</li>
							<li>
								<div class="counter_icon_text text-center">
									<div class="counter_icon">
										<i class="flaticon-worldwide"></i>
									</div>
									<div class="counter_number pera-content">
										<span class="odometer" data-count="100">00</span><strong>%</strong>
										<p>Zaangażowania w sprawy</p>
									</div>
								</div>
							</li>
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
					<div class="col-lg-3 col-md-6">
						<div class="service_box  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="service_img_icon relative-position">
								<div class="service_img">
									<img src="assets/img/service/ser1.jpg" alt="">
								</div>
								<div class="service_icon text-center">
									<i class="far fa-chart-bar"></i>
								</div>
							</div>
							<div class="service_text_two headline pera-content">
								<h3><a href="prawo-cywilne.html">Prawo cywilne</a></h3>
								<p>Sprawy o zapłatę, odszkodowania, zniesienie współwłasności, analiza i sporządzanie umów oraz reprezentacja w sporach sądowych.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="service_box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="service_img_icon relative-position">
								<div class="service_img">
									<img src="assets/img/service/ser2.jpg" alt="">
								</div>
								<div class="service_icon text-center">
									<i class="fas fa-hospital-alt"></i>
								</div>
							</div>
							<div class="service_text_two headline pera-content">
								<h3><a href="prawo-spadkowe.html">Prawo spadkowe</a></h3>
								<p>Dziedziczenie, zachowek, dział spadku, testamenty oraz oświadczenia spadkowe prowadzone w sposób jasny i zrozumiały.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="service_box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="service_img_icon relative-position">
								<div class="service_img">
									<img src="assets/img/service/ser3.jpg" alt="">
								</div>
								<div class="service_icon text-center">
									<i class="fas fa-users"></i>
								</div>
							</div>
							<div class="service_text_two headline pera-content">
								<h3><a href="obrona-w-sprawach-karnych.html">Obrona w sprawach karnych</a></h3>
								<p>Obrona na każdym etapie postępowania karnego, od czynności Policji po sąd i postępowanie wykonawcze.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="service_box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="service_img_icon relative-position">
								<div class="service_img">
									<img src="assets/img/service/ser4.jpg" alt="">
								</div>
								<div class="service_icon text-center">
									<i class="far fa-clone"></i>
								</div>
							</div>
							<div class="service_text_two headline pera-content">
								<h3><a href="oferta.html">Porady prawne i umowy</a></h3>
								<p>Indywidualne konsultacje, opinie prawne, negocjacje i przygotowanie dokumentów, które zabezpieczają interesy Klienta.</p>
							</div>
						</div>
					</div>
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
				<div id="case1" class="tab-pane fade">
					<div class="case_title_text">
						<div class="container">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									specjalizacje
								</p>
								<h2>
									Prawo cywilne
									i roszczenia majątkowe
								</h2>
							</div>
							<div class="case_study_btn">
								<a class="block-display" href="prawo-cywilne.html">Poznaj szczegóły</a>
							</div>
						</div>
					</div>
				</div>
				<div id="case2" class="tab-pane fade  active show">
					<div class="case_title_text">
						<div class="container">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									specjalizacje
								</p>
								<h2>
									Prawo spadkowe
									i dziedziczenie
								</h2>
							</div>
							<div class="case_study_btn">
								<a class="block-display" href="prawo-spadkowe.html">Poznaj szczegóły</a>
							</div>
						</div>
					</div>
				</div>
				<div id="case3" class="tab-pane fade">
					<div class="case_title_text">
						<div class="container">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									specjalizacje
								</p>
								<h2>
									Obrona w sprawach karnych
									i postępowania wykonawcze
								</h2>
							</div>
							<div class="case_study_btn">
								<a class="block-display" href="obrona-w-sprawach-karnych.html">Poznaj szczegóły</a>
							</div>
						</div>
					</div>
				</div>
				<div id="case4" class="tab-pane fade">
					<div class="case_title_text">
						<div class="container">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									specjalizacje
								</p>
								<h2>
									Porady prawne
									i obsługa umów
								</h2>
							</div>
							<div class="case_study_btn">
								<a class="block-display" href="oferta.html">Poznaj szczegóły</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="case_study_button  clearfix ul-li">
				<ul id="tabs" class="nav nav-tabs">
					<li class="nav-item"><a href="!#" data-target="#case1" data-toggle="tab" class="nav-link"><img src="assets/img/case/cl1.jpg" alt=""></a></li>
					<li class="nav-item"><a href="!#" data-target="#case2" data-toggle="tab" class="nav-link active"><img src="assets/img/case/cl2.jpg" alt=""></a></li>
					<li class="nav-item"><a href="!#" data-target="#case3" data-toggle="tab" class="nav-link"><img src="assets/img/case/cl3.jpg" alt=""></a></li>
					<li class="nav-item"><a href="!#" data-target="#case4" data-toggle="tab" class="nav-link"><img src="assets/img/case/cl4.jpg" alt=""></a></li>
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
					Doświadczenie od 2016 roku
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Potrzebujesz wsparcia adwokata?
				</h2>
			</div>
			<div class="call_action_number text-center">
				+48 502 319 645
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
					<strong>%</strong><span class="count">100</span>
				</div>
				<div class="revenue_text">
					Pełne zaangażowanie, dyskrecja i bezpieczeństwo informacji powierzonych kancelarii na każdym etapie współpracy.
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
					<div class="single_experties">
						<div class="progress_text">
							<div class="skill-title float-left text-uppercase">prawo cywilne</div>
							<div class="skill-percent float-right">70%</div>
						</div>
						<div class="progress">
							<div class="progress-bar wow Rx-width-70 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
					</div>
					<div class="single_experties">
						<div class="progress_text">
							<div class="skill-title float-left text-uppercase">prawo spadkowe</div>
							<div class="skill-percent float-right">42%</div>
						</div>
						<div class="progress">
							<div class="progress-bar wow Rx-width-42 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
					</div>
					<div class="single_experties">
						<div class="progress_text">
							<div class="skill-title float-left text-uppercase">obrona karna</div>
							<div class="skill-percent float-right">91%</div>
						</div>
						<div class="progress">
							<div class="progress-bar wow Rx-width-91 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
					</div>
					<div class="single_experties">
						<div class="progress_text">
							<div class="skill-title float-left text-uppercase">porady i umowy</div>
							<div class="skill-percent float-right">80%</div>
						</div>
						<div class="progress">
							<div class="progress-bar wow Rx-width-80 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
					</div>
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
					<div class="col-lg-3 col-md-6">
						<div class="how_work_box text-center">
							<div class="how_work_img_serial relative-position">
								<div class="how_work_img">
									<img src="assets/img/feature/hw1.jpg" alt="">
								</div>
								<div class="how_work_serial text-center">
									01
								</div>
							</div>
							<div class="how_work_text pera-content headline">
								<h4>Poznanie sprawy</h4>
								<p>Rozmowa, analiza dokumentów i określenie realnych możliwości prawnych oraz celów Klienta.</p>
							</div>
							<div class="how_work_btn">
								<a href="!#"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="how_work_box text-center">
							<div class="how_work_img_serial relative-position">
								<div class="how_work_img">
									<img src="assets/img/feature/hw2.jpg" alt="">
								</div>
								<div class="how_work_serial text-center">
									02
								</div>
							</div>
							<div class="how_work_text pera-content headline">
								<h4>Strategia działania</h4>
								<p>Opracowanie planu, dobór właściwych środków prawnych i omówienie kolejnych kroków postępowania.</p>
							</div>
							<div class="how_work_btn">
								<a href="!#"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="how_work_box text-center">
							<div class="how_work_img_serial relative-position">
								<div class="how_work_img">
									<img src="assets/img/feature/hw3.jpg" alt="">
								</div>
								<div class="how_work_serial text-center">
									03
								</div>
							</div>
							<div class="how_work_text pera-content headline">
								<h4>Prowadzenie sprawy</h4>
								<p>Reprezentacja przed sądami i urzędami, sporządzanie pism oraz stała komunikacja z Klientem.</p>
							</div>
							<div class="how_work_btn">
								<a href="!#"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="how_work_box text-center">
							<div class="how_work_img_serial relative-position">
								<div class="how_work_img">
									<img src="assets/img/feature/hw4.jpg" alt="">
								</div>
								<div class="how_work_serial text-center">
									04
								</div>
							</div>
							<div class="how_work_text pera-content headline">
								<h4>Finalizacja i wsparcie</h4>
								<p>Zamknięcie sprawy, omówienie skutków prawnych i dalsze wsparcie w realizacji decyzji.</p>
							</div>
							<div class="how_work_btn">
								<a href="!#"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
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
						<div class="carousel-item active">
							<div class="testimonial_item_content text-center">
								<div class="testimonial_icon">
									<i class="flaticon-quotation"></i>
								</div>
								<div class="testimonial_quote">
									“Szybka reakcja i konkretne wyjaśnienia pozwoliły mi spokojnie przejść przez sprawę spadkową. Pełen profesjonalizm i empatia.”
								</div>
								<div class="testimonial_meta headline">
									<h4>Klientka z Trzebnicy</h4>
									<span>Prawo spadkowe</span>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="testimonial_item_content text-center">
								<div class="testimonial_icon">
									<i class="flaticon-quotation"></i>
								</div>
								<div class="testimonial_quote">
									“Rzetelna obsługa sprawy cywilnej, jasne zasady współpracy i stała informacja o postępach. Polecam kancelarię w Trzebnicy.”
								</div>
								<div class="testimonial_meta headline">
									<h4>Klient z Wrocławia</h4>
									<span>Prawo cywilne</span>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="testimonial_item_content text-center">
								<div class="testimonial_icon">
									<i class="flaticon-quotation"></i>
								</div>
								<div class="testimonial_quote">
									“Profesjonalna obrona w sprawie karnej i świetne przygotowanie. Czułem realne wsparcie na każdym etapie postępowania.”
								</div>
								<div class="testimonial_meta headline">
									<h4>Klient indywidualny</h4>
									<span>Obrona karna</span>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="testimonial_item_content text-center">
								<div class="testimonial_icon">
									<i class="flaticon-quotation"></i>
								</div>
								<div class="testimonial_quote">
									“Świetne przygotowanie umów i szybka analiza ryzyk prawnych. Współpraca na najwyższym poziomie.”
								</div>
								<div class="testimonial_meta headline">
									<h4>Przedsiębiorca</h4>
									<span>Porady prawne i umowy</span>
								</div>
							</div>
						</div>
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
				<li>
					<div class="call_action_icon">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="call_action_text headline pera-content">
						<p>ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica</p>
						<h3>Adres kancelarii</h3>
					</div>
					<div class="c-icon_bg text-center">
						<i class="fas fa-arrow-down"></i>
					</div>
				</li>
				<!-- /call-action -->
				<li>
					<div class="call_action_icon">
						<i class="flaticon-smartphone"></i>
					</div>
					<div class="call_action_text headline pera-content">
						<p><a href="tel:+48502319645">+48 502 319 645</a></p>
						<h3>Telefon</h3>
					</div>
					<div class="c-icon_bg text-center">
						<i class="fas fa-arrow-down"></i>
					</div>
				</li>
				<!-- /call-action -->
				<li>
					<div class="call_action_icon">
						<i class="flaticon-email"></i>
					</div>
					<div class="call_action_text headline pera-content">
						<p><a href="mailto:biuro@adwokat-trzebnica.com">biuro@adwokat-trzebnica.com</a></p>
						<h3>E-mail</h3>
					</div>
					<div class="c-icon_bg text-center">
						<i class="fas fa-arrow-down"></i>
					</div>
				</li>
				<!-- /call-action -->
				<li>
					<div class="call_action_icon">
						<i class="flaticon-shout"></i>
					</div>
					<div class="call_action_text headline pera-content">
						<p><a href="https://adwokat-trzebnica.com">www.adwokat-trzebnica.com</a></p>
						<h3>Strona internetowa</h3>
					</div>
					<div class="c-icon_bg text-center">
						<i class="fas fa-arrow-down"></i>
					</div>
				</li>
				<!-- /call-action -->
				<li>
					<div class="call_action_icon">
						<i class="flaticon-schedule"></i>
					</div>
					<div class="call_action_text headline pera-content">
						<p>Umów konsultację</p>
						<h3>Kontakt</h3>
					</div>
					<div class="c-icon_bg text-center">
						<i class="fas fa-arrow-down"></i>
					</div>
				</li>
				<!-- /call-action -->
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
					<div class="service_img_text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service_img relative-position">
							<img src="assets/img/service/sr2.jpg" alt="">
						</div>
						<div class="service_text relative-position">
							<div class="service_icon float-left">
								<i class="flaticon-courthouse"></i>
							</div>
							<div class="service_check text-center float-right">
								<a class="block-display " href="!#"><i class="fas fa-check"></i></a>
							</div>
							<div class="service_content headline pera-content">
								<h3><a href="oferta.html">Porady prawne i analiza umów</a></h3>
								<p>Profesjonalne konsultacje, opinie prawne oraz przygotowanie umów i pism procesowych.</p>
							</div>
						</div>
					</div>
					<div class="service_img_text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="service_img relative-position">
							<img src="assets/img/service/sr3.jpg" alt="">
						</div>
						<div class="service_text relative-position">
							<div class="service_icon float-left">
								<i class="flaticon-mace"></i>
							</div>
							<div class="service_check text-center float-right">
								<a class="block-display " href="!#"><i class="fas fa-check"></i></a>
							</div>
							<div class="service_content headline pera-content">
								<h3><a href="prawo-cywilne.html">Sprawy o zapłatę i windykacja</a></h3>
								<p>Skuteczne dochodzenie roszczeń, sprzeciwy od nakazu zapłaty i negocjacje ugodowe.</p>
							</div>
						</div>
					</div>
					<div class="service_img_text wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="service_img relative-position">
							<img src="assets/img/service/sr1.jpg" alt="">
						</div>
						<div class="service_text relative-position">
							<div class="service_icon float-left">
								<i class="flaticon-crutch"></i>
							</div>
							<div class="service_check text-center float-right">
								<a class="block-display " href="!#"><i class="fas fa-check"></i></a>
							</div>
							<div class="service_content headline pera-content">
								<h3><a href="prawo-spadkowe.html">Zachowek i dział spadku</a></h3>
								<p>Kompleksowe wsparcie w sprawach dziedziczenia, testamentów i postępowań spadkowych.</p>
							</div>
						</div>
					</div>
					<div class="service_img_text">
						<div class="service_img relative-position">
							<img src="assets/img/service/sr2.jpg" alt="">
						</div>
						<div class="service_text relative-position">
							<div class="service_icon float-left">
								<i class="flaticon-courthouse"></i>
							</div>
							<div class="service_check text-center float-right">
								<a class="block-display " href="!#"><i class="fas fa-check"></i></a>
							</div>
							<div class="service_content headline pera-content">
								<h3><a href="obrona-w-sprawach-karnych.html">Obrona w sprawach karnych</a></h3>
								<p>Obrona oraz reprezentacja pokrzywdzonych w postępowaniu przygotowawczym i sądowym.</p>
							</div>
						</div>
					</div>
					<div class="service_img_text">
						<div class="service_img relative-position">
							<img src="assets/img/service/sr3.jpg" alt="">
						</div>
						<div class="service_text relative-position">
							<div class="service_icon float-left">
								<i class="flaticon-mace"></i>
							</div>
							<div class="service_check text-center float-right">
								<a class="block-display " href="!#"><i class="fas fa-check"></i></a>
							</div>
							<div class="service_content headline pera-content">
								<h3><a href="obrona-w-sprawach-karnych.html">Postępowanie wykonawcze</a></h3>
								<p>Wnioski o dozór elektroniczny, odroczenie wykonania kary i warunkowe zwolnienie.</p>
							</div>
						</div>
					</div>
					<div class="service_img_text">
						<div class="service_img relative-position">
							<img src="assets/img/service/sr1.jpg" alt="">
						</div>
						<div class="service_text relative-position">
							<div class="service_icon float-left">
								<i class="flaticon-crutch"></i>
							</div>
							<div class="service_check text-center float-right">
								<a class="block-display " href="!#"><i class="fas fa-check"></i></a>
							</div>
							<div class="service_content headline pera-content">
								<h3><a href="oferta.html">Prawo rodzinne i opiekuńcze</a></h3>
								<p>Rozwody, alimenty, władza rodzicielska oraz ustalenie kontaktów z dziećmi.</p>
							</div>
						</div>
					</div>
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
				<h2>KANCELARIA ADWOKACKA ADWOKAT Katarzyna Maj – Twoje zaufane wsparcie prawne w Trzebnicy, Wrocławiu i całym Dolnym Śląsku</h2>
			</div>

			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-12">
					<div class="about_area_text" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
						<div class="headline pera-content">
							<h3 style="color: #b8935e; margin-bottom: 25px; font-size: 28px;">Witaj w Kancelarii Adwokackiej Katarzyny Maj</h3>
							<p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
								Witaj na stronie internetowej Kancelarii Adwokackiej Katarzyny Maj – miejsca, w którym prawo spotyka się z zaangażowaniem, doświadczeniem i ludzkim podejściem. Niezależnie od tego, czy potrzebujesz pomocy w sprawie cywilnej, spadkowej czy karnej – otrzymasz u nas kompleksowe wsparcie prawne dostosowane do Twojej sytuacji. Prowadzimy sprawy mieszkańców Trzebnicy, Wrocławia oraz klientów z całego Dolnego Śląska i Wielkopolski, dbając o skuteczność działań oraz przejrzyste zasady współpracy.
							</p>
							<p style="font-size: 16px; line-height: 1.8; margin-bottom: 0;">
								Naszym priorytetem jest ochrona interesów Klienta, rzetelna analiza dokumentów i przygotowanie strategii, która realnie zwiększa szanse na korzystne rozstrzygnięcie. W kancelarii stawiamy na komunikację, terminowość i pełne zrozumienie sprawy, dzięki czemu Klienci wiedzą, jakie kroki są podejmowane i czego mogą się spodziewać.
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
								Nazywam się <strong>Katarzyna Maj</strong> i jestem adwokatem z wieloletnim doświadczeniem zawodowym. Ukończyłam studia prawnicze na Wydziale Prawa i Administracji <strong>Uniwersytetu im. Adama Mickiewicza w Poznaniu</strong>, odbyłam aplikację adwokacką w <strong>Okręgowej Radzie Adwokackiej we Wrocławiu</strong>, a od 2016 roku prowadzę własną, jednoosobową kancelarię adwokacką z siedzibą w Trzebnicy. Obsługuję klientów indywidualnych oraz przedsiębiorców głównie z województwa dolnośląskiego i wielkopolskiego, ale w razie potrzeby reprezentuję klientów także w innych regionach Polski.
							</p>
							<p style="font-size: 15px; line-height: 1.8; margin-bottom: 0;">
								Każdą sprawę traktuję indywidualnie, dokładnie analizując stan faktyczny i prawny. Dzięki temu Klienci otrzymują realną, dopasowaną do sytuacji pomoc prawną, która przekłada się na skuteczność postępowania.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_area_text" style="background: linear-gradient(135deg, #b8935e 0%, #9a7a4d 100%); padding: 35px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.15); height: 100%; color: #fff;">
						<div class="headline pera-content">
							<h3 style="color: #fff; margin-bottom: 20px; font-size: 24px;"><i class="fas fa-balance-scale" style="margin-right: 10px;"></i>Profesjonalizm. Doświadczenie. Zaangażowanie.</h3>
							<p style="font-size: 15px; line-height: 1.8; color: #fff;">
								Witamy na stronie <strong>KANCELARII ADWOKACKIEJ ADWOKAT Katarzyna Maj</strong>, miejsca stworzonego z myślą o osobach poszukujących rzetelnej, fachowej i indywidualnej pomocy prawnej. Nasza kancelaria mieści się w dogodnej lokalizacji – przy <strong>ul. Ignacego Daszyńskiego 67/4 w Trzebnicy</strong> – i oferuje kompleksowe usługi prawne dla klientów indywidualnych, przedsiębiorców oraz instytucji z Trzebnicy, Wrocławia i okolic.
							</p>
							<p style="font-size: 15px; line-height: 1.8; color: #fff; margin-bottom: 0;">
								Dbamy o dyskrecję, precyzyjne przygotowanie dokumentów oraz terminowość. Dzięki temu współpraca z kancelarią daje poczucie bezpieczeństwa i pełnej kontroli nad przebiegiem sprawy.
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
										Reprezentuję Klientów w sprawach o zapłatę, windykacjach, sprzeciwach od nakazu zapłaty, sprawach o zniesienie współwłasności oraz w egzekucjach komorniczych. Przygotowuję i analizuję umowy, prowadzę negocjacje i reprezentuję w sporach sądowych. Skutecznie dochodzę roszczeń i dbam o zabezpieczenie interesów majątkowych.
									</p>
								</div>

								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-landmark" style="color: #b8935e; margin-right: 10px;"></i>Prawo spadkowe
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Stwierdzenie nabycia spadku, dział spadku, sprawy o zachowek, testamenty, oświadczenia o przyjęciu lub odrzuceniu spadku, wydziedziczenie – to sprawy, które często towarzyszą trudnym momentom życiowym. Zapewniam jasne wsparcie na każdym etapie postępowania spadkowego.
									</p>
								</div>

								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-shield-alt" style="color: #b8935e; margin-right: 10px;"></i>Obrona w sprawach karnych
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Zapewniam obronę w sprawach karnych przed wszystkimi sądami, pomagam na etapie postępowania przygotowawczego, a także po wydaniu wyroku – w postępowaniach wykonawczych. Składam wnioski o dozór elektroniczny, odroczenie wykonania kary, warunkowe przedterminowe zwolnienie i inne środki służące ochronie interesów osób skazanych.
									</p>
								</div>

								<div class="col-lg-6" style="margin-bottom: 30px;">
									<h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">
										<i class="fas fa-comments" style="color: #b8935e; margin-right: 10px;"></i>Porady prawne i umowy
									</h4>
									<p style="font-size: 15px; line-height: 1.8;">
										Oferuję konsultacje prawne, sporządzanie i opiniowanie umów, pism procesowych oraz reprezentację w negocjacjach. Doradztwo jest zawsze dopasowane do sytuacji Klienta i opiera się na aktualnych przepisach oraz praktyce sądowej.
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
											Każda sprawa jest inna. Nie korzystam ze schematów – analizuję Twoją sytuację od podstaw i wspólnie wypracowujemy najlepszą strategię.
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
											Szybko odpowiadam na wiadomości i telefony. Spotkania ustalam elastycznie, dostosowując się do Twojego grafiku.
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
											Znam realia funkcjonowania sądów w Trzebnicy i Wrocławiu. To przekłada się na większą skuteczność działań.
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
							<p style="font-size: 18px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #b8935e;"></i><strong>KANCELARIA ADWOKACKA ADWOKAT Katarzyna Maj</strong></p>
							<p style="font-size: 16px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-building" style="margin-right: 10px; color: #b8935e;"></i>ul. Ignacego Daszyńskiego 67/4, 55-100 Trzebnica</p>
							<p style="font-size: 16px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-phone" style="margin-right: 10px; color: #b8935e;"></i><a href="tel:+48502319645" style="color: #fff; font-weight: bold;">+48 502 319 645</a></p>
							<p style="font-size: 16px; margin-bottom: 10px; color: #ecf0f1;"><i class="fas fa-envelope" style="margin-right: 10px; color: #b8935e;"></i><a href="mailto:biuro@adwokat-trzebnica.com" style="color: #fff;">biuro@adwokat-trzebnica.com</a></p>
							<p style="font-size: 16px; color: #ecf0f1;"><i class="fas fa-globe" style="margin-right: 10px; color: #b8935e;"></i><a href="https://adwokat-trzebnica.com" style="color: #fff;">www.adwokat-trzebnica.com</a></p>
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
