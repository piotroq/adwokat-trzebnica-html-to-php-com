<!-- Start of header section
	============================================= -->
<header id="header_id" class="main_header header_style_two">
	<div class="header_top">
		<div class="row">
			<div class="col-md-6">
				<div class="header_contact_info float-left ul-li">
					<ul>
						<li>
							<i class="far fa-envelope"></i>
							<a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES); ?>">
								<?php echo htmlspecialchars($email, ENT_QUOTES); ?>
							</a>
						</li>
						<li>
							<i class="fas fa-phone"></i>
							<a href="tel:<?php echo htmlspecialchars($phone_link, ENT_QUOTES); ?>">
								<?php echo htmlspecialchars($phone_display, ENT_QUOTES); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="header_follow_social float-right ul-li">
					<ul>
						<?php foreach ($social_links as $social_link): ?>
							<li>
								<a href="<?php echo htmlspecialchars($social_link['href'], ENT_QUOTES); ?>" aria-label="<?php echo htmlspecialchars($social_link['label'], ENT_QUOTES); ?>">
									<i class="<?php echo htmlspecialchars($social_link['icon'], ENT_QUOTES); ?>"></i>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header_main_menu clearfix">
		<nav class="main_navigation ul-li">
			<ul>
				<?php foreach ($main_menu as $item): ?>
					<?php if (!empty($item['children'])): ?>
						<li class="dropdown">
							<a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>">
								<?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?>
							</a>
							<ul class="dropdown-menu clearfix">
								<?php foreach ($item['children'] as $child): ?>
									<li>
										<a href="<?php echo htmlspecialchars($child['href'], ENT_QUOTES); ?>">
											<?php echo htmlspecialchars($child['label'], ENT_QUOTES); ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
					<?php else: ?>
						<li>
							<a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>">
								<?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?>
							</a>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</nav>
		<div class="site_logo">
			<a href="index.php"><img src="<?php echo htmlspecialchars($logo_main, ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?>"></a>
		</div>

		<div class="call_to_quote">
			<div class="call_icon float-left">
				<i class="flaticon-call"></i>
			</div>
			<span><?php echo htmlspecialchars($header_cta_label, ENT_QUOTES); ?></span>
			<span class="call_number"><?php echo htmlspecialchars($phone_display, ENT_QUOTES); ?></span>
		</div>
		<div class="qoute_btn float-right">
			<a class="block-display" href="<?php echo htmlspecialchars($header_cta_link, ENT_QUOTES); ?>">
				<?php echo htmlspecialchars($header_cta_button, ENT_QUOTES); ?>
			</a>
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
					<img src="<?php echo htmlspecialchars($logo_mobile, ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?>">
				</div>
				<nav class="main-navigation clearfix ul-li">
					<ul id="main-nav" class="navbar-nav text-capitalize clearfix">
						<?php foreach ($main_menu as $item): ?>
							<?php if (!empty($item['children'])): ?>
								<li class="dropdown">
									<a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>">
										<?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?>
									</a>
									<ul class="dropdown-menu">
										<?php foreach ($item['children'] as $child): ?>
											<li>
												<a href="<?php echo htmlspecialchars($child['href'], ENT_QUOTES); ?>">
													<?php echo htmlspecialchars($child['label'], ENT_QUOTES); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</li>
							<?php else: ?>
								<li>
									<a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>">
										<?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?>
									</a>
								</li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				</nav>
				<div class="free_call_nm">
					<div class="m_call_icon text-center">
						<i class="flaticon-call"></i>
					</div>
					<div class="m_call_text">
						<span><?php echo htmlspecialchars($header_cta_label, ENT_QUOTES); ?></span>
						<strong><?php echo htmlspecialchars($phone_display, ENT_QUOTES); ?></strong>
					</div>
				</div>
				<div class="m_social_area text-center ul-li">
					<h3>Śledź nas:</h3>
					<ul>
						<?php foreach ($social_links as $social_link): ?>
							<li class="m_social">
								<a href="<?php echo htmlspecialchars($social_link['href'], ENT_QUOTES); ?>" aria-label="<?php echo htmlspecialchars($social_link['label'], ENT_QUOTES); ?>">
									<i class="<?php echo htmlspecialchars($social_link['icon'], ENT_QUOTES); ?>"></i>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="m_get_quote">
					<a href="<?php echo htmlspecialchars($header_cta_link, ENT_QUOTES); ?>">
						<?php echo htmlspecialchars($header_cta_button, ENT_QUOTES); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /mobile menu -->
</header>
<!-- End of header section
	============================================= -->
