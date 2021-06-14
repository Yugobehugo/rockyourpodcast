<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RockYourPodcast
 */

get_header();
?>

	<main id="primary" class="site-main">
		<h1>Blog <?php get_month_link( $year , $month); ?></h1>

		<?php
		if ( have_posts() ) :

		
			?>
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
