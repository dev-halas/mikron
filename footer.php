<?php 

	wp_footer(); 

	$footer_logo = get_field('footer_logo', 'option');
	$footer_left_text = get_field('footer_left_text', 'option');
	$footer_right_text = get_field('footer_right_text', 'option');

?>
</body>
<footer class="footer animate fadeInBottomLow" id="contact">
	<div class="footerWrapper">
		<div class="footerInner container">
			<div class="footerLeft">
				<img src="<?php echo $footer_logo['url'] ?>" alt="mikron_footer_logo" class="footerLogo">
				<?php echo $footer_left_text; ?>
				
			</div>
			<div class="footerRight">
				<a href="#back_top" class="scrollTop">
					<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
						<g id="wroc" transform="translate(-1701 -6933)">
							<path id="Polygon_17" data-name="Polygon 17" d="M10,0,20,17H0Z" transform="translate(1713 6945)"/>
							<path id="Ellipse_5" data-name="Ellipse 5" d="M22,1a21.006,21.006,0,0,0-8.174,40.35A21.006,21.006,0,0,0,30.174,2.65,20.868,20.868,0,0,0,22,1m0-1A22,22,0,1,1,0,22,22,22,0,0,1,22,0Z" transform="translate(1701 6933)"/>
						</g>
					</svg>
				</a>
				<?php echo $footer_right_text; ?>
				
			</div>
		</div>
	</div>
	<div class="footerCopyright">
		<p>copyright by MIKRON</p>
	</div>
</footer>

<!-- Javascript-->
<script src="<?php echo THEME_URL ?>public/bundle.js"></script>
<script src="<?php echo THEME_URL ?>public/map.js"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSPaL8-8q4GI_Uk8QvIb_fRHxVX3LpMEY&callback=initMap"></script>