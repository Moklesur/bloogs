<div class="boka-testimonial testimonial <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
			<h2 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h2>
		</div>
	<?php endif; ?>
	<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php foreach( $instance['testimonial'] as $i => $testimonial ) : ?>
				<div class="item">
					<?php
					$profile_picture = $testimonial['testimonial_profile_picture'];
					$image_details = siteorigin_widgets_get_attachment_image_src(
						$profile_picture, 'thumbnail',''
					);
					if ( ! empty( $image_details ) ) {
						echo '<img src="' . esc_url( $image_details[0] ) . '" class="img-circle center-block" />';
					}
					?>
					<?php if ( ! empty( $testimonial['testimonial_texteditor'] ) ) : ?>
						<div class="testimonial-details margin-bottom-20 margin-top-30"><?php echo  $testimonial['testimonial_texteditor'] ; ?></div>
					<?php endif; ?>
					<?php if ( ! empty( $testimonial['testimonial_name'] ) ) : ?>
						<h4><span><?php echo esc_html( $testimonial['testimonial_name'] ); ?></span></h4>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="margin-top-20 testimonial-indicator">
			<!-- Controls -->
			<a class="" href="#testimonial-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="" href="#testimonial-slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function () {
		if(jQuery('#testimonial-slider').length){
			jQuery('#testimonial-slider').find('.item').first().addClass('active');
		}
	});
</script>

