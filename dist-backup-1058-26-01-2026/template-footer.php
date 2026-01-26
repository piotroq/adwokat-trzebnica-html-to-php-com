<!-- Start footer section
	============================================= -->
<footer id="footer_area" class="footer_section relative-position footer_section_2">
	<div class="newslatter_section">
		<div class="container">
			<div class="newslatter_content">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="section_title_area headline pera-content">
							<p>
								<span class="title_shape_left"></span>
								konsultacja
							</p>
							<h2><?php echo htmlspecialchars($footer_cta_title, ENT_QUOTES); ?></h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="skontaktuj_sie text-center">
							<a class="block-display skontaktuj_siehover" href="<?php echo htmlspecialchars($footer_cta_link, ENT_QUOTES); ?>">
								<?php echo htmlspecialchars($footer_cta_button, ENT_QUOTES); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="background_overlay"></div>
	<div class="background_waterprint text-center headline text-uppercase"><h2><?php echo htmlspecialchars($lawyer_name, ENT_QUOTES); ?></h2></div>
	<div class="container">
		<div class="footer_content">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="footer_widget headline">
						<h3 class="widget_title">
							<span class="title_shape_left"></span>
							O kancelarii
						</h3>
						<div class="widget_footer_text">
							<?php echo htmlspecialchars($footer_about_text, ENT_QUOTES); ?>
						</div>
						<div class="footer_app_btn">
							<a href="<?php echo htmlspecialchars($footer_cta_link, ENT_QUOTES); ?>"><?php echo htmlspecialchars($footer_cta_small_button, ENT_QUOTES); ?></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="footer_widget headline">
						<h3 class="widget_title">
							<span class="title_shape_left"></span>
							Zakres usług
						</h3>
						<div class="practice_list ul-li-block clearfix">
							<ul>
								<?php foreach ($footer_service_links as $link): ?>
									<li><a href="<?php echo htmlspecialchars($link['href'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($link['label'], ENT_QUOTES); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="footer_widget headline">
						<h3 class="widget_title">
							<span class="title_shape_left"></span>
							Kontakt
						</h3>
						<div class="latest-blog-widget">
							<?php foreach ($footer_contact_items as $contact_item): ?>
								<div class="blog-img-content">
									<div class="blog-img">
										<img src="<?php echo htmlspecialchars($contact_item['image'], ENT_QUOTES); ?>" alt="">
									</div>
									<div class="blog-text headline">
										<span class="blog-meta"><i class="fas fa-calendar-alt"></i> <?php echo htmlspecialchars($contact_item['meta'], ENT_QUOTES); ?></span>
										<h4>
											<?php if (!empty($contact_item['href'])): ?>
												<a href="<?php echo htmlspecialchars($contact_item['href'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($contact_item['title'], ENT_QUOTES); ?></a>
											<?php else: ?>
												<?php echo htmlspecialchars($contact_item['title'], ENT_QUOTES); ?>
											<?php endif; ?>
										</h4>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer_copyright">
	<div class="container">
		<div class="footer_copyright_content">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="footer_social ul-li clearfix">
						<ul>
							<?php foreach ($social_links as $social_link): ?>
								<li><a href="<?php echo htmlspecialchars($social_link['href'], ENT_QUOTES); ?>" aria-label="<?php echo htmlspecialchars($social_link['label'], ENT_QUOTES); ?>"><i class="<?php echo htmlspecialchars($social_link['icon'], ENT_QUOTES); ?>"></i></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="footer_logo text-center">
						<a href="index.php"><img src="<?php echo htmlspecialchars($footer_logo, ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?>"></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="copyright_text text-right">
						© <?php echo htmlspecialchars($current_year, ENT_QUOTES); ?> <?php echo htmlspecialchars($firm_name, ENT_QUOTES); ?> | Wszelkie prawa zastrzeżone
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End  footer section
	============================================= -->
