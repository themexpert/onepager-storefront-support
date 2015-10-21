<?php /** Template Name: Storefront Onepager */ ?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'storefront_page_before' ); ?>
	<?php the_content(); ?>
	<?php do_action( 'storefront_page_after' ); ?>
<?php endwhile; // end of the loop. ?>

<script>
	jQuery("#masthead").css("margin-bottom", 0);
	jQuery("#content .col-full").removeClass('col-full');
</script>
<?php get_footer(); ?>
