<?php get_header(); ?>
	<section class="">	
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					the_title();
					the_content();
				} // end while
			} // end if
		?>
	</section>
<?php get_footer(); ?>