<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RockYourPodcast
 */

get_header();
?>

	<main id="primary" class="site-main">
	<h1>Blog</h1>

	<div class="bloc">
	<div class="content-article">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="card-post">
				<div class="card-post-img">
					<?php rockyourpodcast_post_thumbnail(); ?>
				</div>
				<div class="card-post-content">
					<h2><?php the_title(); ?></h2>
					<p class = "datePost"><?php rockyourpodcast_posted_on(); ?></p>
					<p> <?php the_content(); ?></p>
					<?php
						the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Article précédent:', 'rockyourpodcast' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Article suivant:', 'rockyourpodcast' ) . '</span> <span class="nav-title">%title</span>',
						)
					); ?>
				</div>

				
			</div>
			<div class="content-article-footer">
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
</div>
	
<?php
get_sidebar();
?>

	</div>

</main><!-- #main -->

<?php

get_footer();
