<?php
// Template for header section
$header_phone = isset($header_phone) ? $header_phone : "+48 502 319 645";
$header_email = isset($header_email) ? $header_email : "biuro@adwokat-trzebnica.com";
?>

<!-- Start of header section
	============================================= -->
	<header id="header_id" class="main_header header_style_two">
		<div class="header_top">
			<div class="row">
				<div class="col-md-6">
					<div class="header_contact_info float-left ul-li">
						<ul>
							<li><i class="far fa-envelope"></i> <a href="mailto:<?php echo $header_email; ?>"><?php echo $header_email; ?></a></li>
							<li><i class="fas fa-phone"></i> <?php echo $header_phone; ?></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="header_follow_social float-right ul-li">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-behance"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header_main_menu clearfix">
			<nav class="main_navigation ul-li">
				<ul>
					<li class="dropdown">
						<a href="index.html">Strona Główna</a>
					</li>
					<li><a href="o-mnie.html">O mnie</a></li>
					<li class="dropdown">
						<a href="oferta.html">Oferta</a>
						<ul class="dropdown-menu clearfix">
							<li><a href="prawo-cywilne.php">Prawo cywilne</a></li>
							<li><a href="prawo-spadkowe.html">Prawo spadkowe</a></li>
							<li><a href="obrona-w-sprawach-karnych.html">Obrona w sprawach karnych</a></li>
						</ul>
					</li>
					<li><a href="faq.html">FAQ & Pytania</a></li>
					<li><a href="kontakt.html">Kontakt</a></li>
				</ul>
			</nav>
			<div class="site_logo">
				<a href="index.html"><img src="assets/img/logo/logo-2.png" alt="Kancelaria Adwokacka Katarzyna Maj"></a>
			</div>

			<div class="call_to_quote">
				<div class="call_icon float-left">
					<i class="flaticon-call"></i>
				</div>
				<span>Bezpłatna konsultacja</span>
				<span class="call_number"><?php echo $header_phone; ?></span>
			</div>
			<div class="qoute_btn float-right">
				<a class="block-display" href="kontakt.html">Skontaktuj się</a>
			</div>
		</div>
		<!-- /desktop menu -->
		<div class="mobile_menu">
			<div class="mobile_menu_button open_mobile_menu">
				<i class="fas fa-bars"></i>
			</div>
			<div class="mobile_menu_wrap">
				<div class="mobile_menu_overlay open_mobile_menu"></div>
				<div class="mobile_menu_content">
					<div class="mobile_menu_close open_mobile_menu">
						<i class="fas fa-window-close"></i>
					</div>
					<div class="m-brand-logo text-center">
						<img src="assets/img/logo/logo-1.png" alt="Kancelaria Adwokacka Katarzyna Maj">
					</div>
					<nav class="main-navigation  clearfix ul-li">
						<ul id="main-nav" class="navbar-nav text-capitalize clearfix">
							<li><a href="index.html">Strona Główna</a></li>
							<li><a href="o-mnie.html">O mnie</a></li>
							<li class="dropdown">
								<a href="oferta.html">Oferta</a>
								<ul class="dropdown-menu">
									<li><a href="prawo-cywilne.php">Prawo cywilne</a></li>
									<li><a href="prawo-spadkowe.html">Prawo spadkowe</a></li>
									<li><a href="obrona-w-sprawach-karnych.html">Obrona w sprawach karnych</a></li>
								</ul>
							</li>
							<li><a href="faq.html">FAQ & Pytania</a></li>
							<li><a href="kontakt.html">Kontakt</a></li>
						</ul>
					</nav>
					<div class="free_call_nm">
						<div class="m_call_icon text-center">
							<i class="flaticon-call"></i>
						</div>
						<div class="m_call_text">
							<span>BEZPŁATNA KONSULTACJA</span>
							<strong><?php echo $header_phone; ?></strong>
						</div>
					</div>
					<div class="m_social_area text-center ul-li">
						<h3> Śledź nas:</h3>
						<ul>
							<li class="m_fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="m_tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="m_lk"><a href="#"><i class="fab fa-linkedin"></i></a></li>
							<li class="m_yb"><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="m_get_quote">
						<a href="kontakt.html">Skontaktuj się</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /mobile menu -->
	</header>
<!-- End of header section
	============================================= -->