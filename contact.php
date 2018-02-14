<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

	<section>

		<div id="booking-info">

			<h2>Get in touch...</h2>

			<p class="tagline-info">Please allow 24 hrs notice to change or cancel your appointment</p>
		
			<div id="contact-form">
				<?php echo do_shortcode('[wpforms id="67"]')?>
			</div>

		</div>
		
	</section>

<?php get_footer(); ?>