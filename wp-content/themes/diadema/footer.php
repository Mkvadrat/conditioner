<?php
/*
Theme Name: Diadema
Theme URI: https://mkvadrat.com/
Author: mkvadrat
Author URI: https://mkvadrat.com/
Description: Тема Diadema
Version: 1.0
*/
?>
 
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="soc-footer">
						<?php echo get_field('soc_links_footer_main_page', 10); ?>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="made-by">
						<?php echo get_field('wrapper_footer_main_page', 10); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				items: 1,
				nav: true,
				navText: ["<img src='/wp-content/themes/diadema/images/ArrowLeft.svg'>", "<img src='/wp-content/themes/diadema/images/ArrowRight.svg'>"],
				dots: true
			});
		});
	</script>

	<script>
		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function () {
			var fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	</script>

</body>
</html>
