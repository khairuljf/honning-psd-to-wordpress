<?php get_header() ?>
<!-- End header -->


<div class="container">
	<?php while (have_posts()):the_post();  ?>

		<?php the_content(); ?>

	<?php endwhile; ?>
</div>






<!-- Start footer -->
<?php get_footer(); ?>