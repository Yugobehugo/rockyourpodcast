<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package RockYourPodcast
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

		
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Résultats de recherches pour: %s', 'rockyourpodcast' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
		

				<div class = "bloc">
				<div class = "articles">
			<?php
			$i = 1;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>

				<?php if($i == 1){
					echo "<div class='card-article-large '>";
				} else {
					echo "<div class='card-article'>";
				} ?>
				
					<div class="card-article-img">
						<?php rockyourpodcast_post_thumbnail(); ?>
						<hr>
					</div>
					
					<div class="card-article-content">
					
						<a class = "aTitle" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<p class = "datePost"><?php rockyourpodcast_posted_on(); ?></p>
						<p><?php if($i == 1){
								echo excerpt(40);
							} else {
								echo excerpt(20);
							} ?></p>
						<a href="<?php the_permalink(); ?>">Lire la suite </a>
					</div>
				</div>
				
				<?php $i++; endwhile; ?>

			<?php the_posts_navigation(); ?>



				</div>	
		<?php endif; ?> 
	
	<?php 
		get_sidebar();
		?>
		</div>
		

	</main><!-- #main -->

<?php

get_footer();
