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

$page_title = 'O mnie - Adwokat Katarzyna Maj | Kancelaria Adwokacka Trzebnica, Wrocław';
$meta_author = $firm_name;
$meta_description = 'Adwokat Katarzyna Maj - doświadczony prawnik z Trzebnicy i Wrocławia. Specjalizacja: prawo rodzinne, spadkowe, cywilne i karne. Wykształcenie UAM Poznań. Aplikacja adwokacka Wrocław.';
$meta_keywords = 'adwokat Katarzyna Maj, kancelaria adwokacka Trzebnica, adwokat Wrocław, o mnie adwokat, wykształcenie prawnicze, doświadczenie adwokata, UAM Poznań prawo';

$og_title = 'O mnie - Adwokat Katarzyna Maj | Kancelaria Adwokacka Trzebnica, Wrocław';
$og_description = 'Adwokat Katarzyna Maj - doświadczony prawnik z Trzebnicy i Wrocławia. Specjalizacja: prawo rodzinne, spadkowe, cywilne i karne. Absolwentka UAM w Poznaniu.';
$og_url = $site_url . '/o-mnie.php';
$og_site_name = $firm_name;
$og_image = $site_url . '/assets/img/logo/logo-2.png';

$twitter_title = 'O mnie - Adwokat Katarzyna Maj';
$twitter_description = 'Adwokat z wieloletnim doświadczeniem w sprawach rodzinnych, spadkowych, cywilnych i karnych. Trzebnica, Wrocław.';

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
	'@type' => 'Attorney',
	'@id' => $site_url . '/o-mnie.php',
	'name' => $lawyer_name,
	'jobTitle' => $lawyer_title,
	'description' => 'Adwokat z wieloletnim doświadczeniem w sprawach rodzinnych, spadkowych, cywilnych i karnych',
	'url' => $site_url . '/o-mnie.php',
	'image' => $og_image,
	'telephone' => $phone_display,
	'email' => $email,
	'address' => [
		'@type' => 'PostalAddress',
		'streetAddress' => $address_street,
		'addressLocality' => $address_city,
		'postalCode' => $postal_code,
		'addressCountry' => 'PL',
	],
	'alumniOf' => [
		'@type' => 'CollegeOrUniversity',
		'name' => 'Uniwersytet im. Adama Mickiewicza w Poznaniu',
		'department' => 'Wydział Prawa i Administracji',
	],
	'memberOf' => [
		'@type' => 'Organization',
		'name' => 'Okręgowa Rada Adwokacka we Wrocławiu',
		'identifier' => 'WRO/Adw/1831',
	],
	'knowsAbout' => [
		'Prawo rodzinne',
		'Prawo spadkowe',
		'Prawo cywilne',
		'Prawo karne',
		'Rozwody',
		'Alimenty',
		'Działy spadku',
		'Windykacja',
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

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb_section relative-position" data-background="assets/img/background/brbg.jpg">
		<div class="background_overlay"></div>
		<div class="breadcrumb_watermark">O mnie</div>
		<div class="container">
			<h2 class="breadcrumb_title">O mnie</h2>
			<p class="text-white">Nazywam się Katarzyna Maj i jestem adwokatem z wieloletnim doświadczeniem w prowadzeniu spraw cywilnych, rodzinnych, spadkowych oraz karnych. Moja kancelaria adwokacka mieści się w Trzebnicy, ale obszar mojej działalności obejmuje również Wrocław i całe województwo dolnośląskie, a w razie potrzeby – również dalsze lokalizacje na terenie kraju.</p>
			<div class="breadcrumb_item ul-li">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Strona główna</a></li>
					<li class="breadcrumb-item active">O mnie</li>
				</ul>
			</div>
		</div>
		<div class="slider_side_btn">
			<a class="block-display" href="kontakt.html"><i class="fas fa-th"></i>Bezpłatna konsultacja</a>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of about page section
	============================================= -->
	<section id="about" class="about_page_section">
		<div class="container">
			<div class="about_page_content about_area_content">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="section_title_area headline pera-content">
							<p>
								<span class="title_shape_left"></span>
								O mnie
							</p>
							<h2>
								Adwokat Katarzyna Maj
								Trzebnica - Wrocław
							</h2>
						</div>
						<div class="about_top_text">Adwokat wpisany na listę adwokatów <strong>Okręgowej Rady Adwokackiej we Wrocławiu</strong> (nr wpisu: <span>WRO/Adw/1831</span>). Prowadzę indywidualną kancelarię adwokacką w Trzebnicy.</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="about_details_text">
							Swoją drogę zawodową rozpoczęłam od studiów prawniczych na Wydziale Prawa i Administracji Uniwersytetu im. Adama Mickiewicza w Poznaniu, które ukończyłam w 2011 roku. Następnie odbyłam staż w Sądzie Rejonowym w Trzebnicy, który pozwolił mi spojrzeć na pracę prawnika także z perspektywy sądownictwa. W latach 2013–2015 odbyłam aplikację adwokacką pod patronatem izby wrocławskiej, a od 2016 roku z powodzeniem prowadzę własną praktykę prawną.

Specjalizuję się w szeroko pojętym prawie cywilnym, w szczególności w sprawach rodzinnych (rozwody, alimenty, władza rodzicielska, podziały majątku, ustalenie ojcostwa), spadkowych (działy spadku, zachowki, testamenty), jak również cywilnych (roszczenia z umów, postępowania egzekucyjne, zniesienia współwłasności). Reprezentuję klientów także w sprawach karnych, zarówno w postępowaniu przygotowawczym, sądowym, jak i wykonawczym.

W mojej pracy kieruję się rzetelnością, empatią i maksymalnym zaangażowaniem. Zdaję sobie sprawę, że każda sprawa to nie tylko zbiór przepisów, ale przede wszystkim konkretna sytuacja życiowa człowieka. Dlatego oferuję indywidualne podejście do każdego Klienta i każdej sprawy, bez szablonowych rozwiązań.

<p>Moim celem jest nie tylko skuteczna reprezentacja przed sądem, ale także jasne i zrozumiałe dla Klienta wyjaśnienie jego sytuacji prawnej oraz wspólne wypracowanie optymalnej ścieżki działania. Zajmuję się zarówno sporami sądowymi, prowadzeniem rozmów ugodowych, jak i udzielam porad prawnych oraz pomagam w sporządzaniu pism procesowych i umów.</p>

<h3>Wykształcenie i doświadczenie zawodowe</h3>
<ul>
<li><strong>2006-2011:</strong> Studia prawnicze na Wydziale Prawa i Administracji Uniwersytetu im. Adama Mickiewicza w Poznaniu</li>
<li><strong>2011-2013:</strong> Staż w Sądzie Rejonowym w Trzebnicy</li>
<li><strong>2013-2015:</strong> Aplikacja adwokacka w Okręgowej Radzie Adwokackiej we Wrocławiu</li>
<li><strong>Od 2016:</strong> Prowadzenie własnej kancelarii adwokackiej w Trzebnicy</li>
</ul>

<h3>Obszar działania</h3>
<p>Kancelaria obsługuje klientów głównie z województwa dolnośląskiego (Trzebnica, Wrocław, Oleśnica, Oborniki Śląskie) i wielkopolskiego, jednak w razie potrzeby reprezentuję klientów także w innych regionach Polski.</p>

<h3>Filozofia pracy</h3>
<p>Każda sprawa wymaga innego podejścia, dlatego dokładnie analizuję potrzeby Klienta i wspólnie z nim ustalam najlepszą możliwą strategię działania. Wycena usług mojej kancelarii odbywa się indywidualnie – w oparciu o szczegóły danej sprawy. Staram się, aby każda współpraca była przejrzysta i oparta na jasnych zasadach.</p>
						</div>
						<div class="about_listitem clearfix ul-li">
							<ul>
								<li><i class="fas fa-check"></i> Ponad 10 lat doświadczenia</li>
								<li><i class="fas fa-check"></i> Indywidualne podejście do każdej sprawy</li>
							</ul>
						</div>
						<div class="about_btn">
							<a  href="kontakt.html">Skontaktuj się</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of about page section
	============================================= -->

<!-- Start of about service section
	============================================= -->
	<section id="about_service" class="about_service_section">
		<div class="container">
			<div class="about_service_content">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="about_service_box relative-position">
							<div class="abt_service_img">
								<img src="assets/img/about/abs1.jpg" alt="">
							</div>
							<div class="abt_service_text headline">
								<span>Bezpłatna konsultacja</span>
								<h4><a href="kontakt.html">Zapewniam kompleksową pomoc prawną
								opartą na wieloletnim doświadczeniu</a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_service_box relative-position">
							<div class="abt_service_img">
								<img src="assets/img/about/abs2.jpg" alt="">
							</div>
							<div class="abt_service_text headline">
								<span>Specjalizacje</span>
								<h4><a href="oferta.html">Prawo rodzinne, spadkowe,
								cywilne i karne</a></h4>
								<div class="ab_case_btn">
									<a href="oferta.html">Zobacz ofertę <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_service_box relative-position">
							<div class="abt_service_img">
								<img src="assets/img/about/abs3.jpg" alt="">
							</div>
							<div class="abt_service_text headline">
								<span>Kontakt</span>
								<h4><a href="kontakt.html">Umów spotkanie</a></h4>
								<div class="subs_form relative-position">
									<form action="#">
										<input class="email" name="email" type="email" placeholder="Enter your email address">
										<div class="nws-button position-absolute text-capitalize">
											<button class="hover-btn" type="submit" value="Submit"><i class="far fa-envelope"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End  of about service section
	============================================= -->

<!-- Start of about CTA section
	============================================= -->
	<section id="about_call_action" class="about_call_action_section relative-position">
		<div class="background_parallax"  data-background="assets/img/background/actabg.jpg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="about_cta_content">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									Skontaktuj się
								</p>
								<h2>
									Bezpłatna konsultacja prawna
								</h2>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="about_cta_btn">
								<a class="block-display" href="kontakt.html">Umów spotkanie</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of of about CTA section
	============================================= -->

<!-- Start of about practice section
	============================================= -->
	<section id="about_practice" class="about_practice_section">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					Usługi
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Moje specjalizacje prawne
				</h2>
			</div>
			<div class="about_practice_content">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="about_practice_icontext">
							<div class="about_practice_icon float-left">
								<i class="flaticon-crime-scene"></i>
							</div>
							<div class="about_practice_text headline pera-content">
								<h4>Prawo rodzinne</h4>
								<p>Rozwody, separacje, alimenty, władza rodzicielska, kontakty z dzieckiem, podziały majątku wspólnego małżonków.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_practice_icontext">
							<div class="about_practice_icon float-left">
								<i class="flaticon-autonomous-car"></i>
							</div>
							<div class="about_practice_text headline pera-content">
								<h4>Prawo spadkowe</h4>
								<p>Stwierdzenie nabycia spadku, działy spadku, zachowek, testamenty, wydziedziczenie, oświadczenia spadkowe.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_practice_icontext">
							<div class="about_practice_icon float-left">
								<i class="flaticon-lotus"></i>
							</div>
							<div class="about_practice_text headline pera-content">
								<h4>Prawo cywilne</h4>
								<p>Roszczenia z umów, windykacja, sprawy o zapłatę, zniesienie współwłasności, postępowania egzekucyjne.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_practice_icontext">
							<div class="about_practice_icon float-left">
								<i class="flaticon-search"></i>
							</div>
							<div class="about_practice_text headline pera-content">
								<h4>Prawo karne</h4>
								<p>Obrona w sprawach karnych, reprezentacja pokrzywdzonych, dozór elektroniczny, warunkowe zwolnienie.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_practice_icontext">
							<div class="about_practice_icon float-left">
								<i class="flaticon-jail"></i>
							</div>
							<div class="about_practice_text headline pera-content">
								<h4>Sprawy sądowe</h4>
								<p>Pomoc prawna w sporach cywilnych, reprezentacja przed sądami, negocjacje ugodowe.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="about_practice_icontext">
							<div class="about_practice_icon float-left">
								<i class="flaticon-knife"></i>
							</div>
							<div class="about_practice_text headline pera-content">
								<h4>Doradztwo prawne</h4>
								<p>Profesjonalne doradztwo prawne, sporządzanie opinii prawnych, analiza umów i dokumentów.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of about practice section
	============================================= -->

<!-- Start of app download section
	============================================= -->
	<section id="app_download" class="app_download_section relative-position">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="app_download_content">
						<div class="section_title_area headline pera-content">
							<p>
								<span class="title_shape_left"></span>
								Kontakt
							</p>
							<h2>
								Umów spotkanie z adwokatem
							</h2>
						</div>
						<div class="app_text">
							Zapraszam do kontaktu telefonicznego, mailowego lub osobistego w kancelarii w Trzebnicy. Oferuję elastyczne godziny spotkań dostosowane do potrzeb Klientów. Pierwsza konsultacja pozwoli na omówienie sprawy i ustalenie dalszej współpracy.
						</div>
						<div class="app_btn ul-li clearfix">
							<ul>
								<li><a href="tel:+48502319645"><i class="fab fa-android"></i><span>Zadzwoń teraz</span>+48 502 319 645</a></li>
								<li><a href="mailto:biuro@adwokat-trzebnica.com"><i class="fab fa-apple"></i><span>Napisz email</span>biuro@adwokat-trzebnica.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="app_img">
			<img src="assets/img/about/abapp.png" alt="">
		</div>
	</section>
<!-- End app download section
	============================================= -->

<!-- Start of Award section
	============================================= -->
	<section id="about_award" class="about_award_section">
		<div id="award_list_slide" class="award_list">
			<div class="award_item"><img src="assets/img/about/abaward1.png" alt=""></div>
			<div class="award_item"><img src="assets/img/about/abaward1.png" alt=""></div>
			<div class="award_item"><img src="assets/img/about/abaward1.png" alt=""></div>
			<div class="award_item"><img src="assets/img/about/abaward1.png" alt=""></div>
			<div class="award_item"><img src="assets/img/about/abaward1.png" alt=""></div>
			<div class="award_item"><img src="assets/img/about/abaward1.png" alt=""></div>
		</div>
	</section>
<!-- End of  Award section
	============================================= -->

	<?php include __DIR__ . '/template-footer.php'; ?>

	<?php include __DIR__ . '/template-footer-scripts.php'; ?>
</body>
</html>
