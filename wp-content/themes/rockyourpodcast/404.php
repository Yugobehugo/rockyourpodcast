<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RockYourPodcast
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
		<div class="page-content">

				<span>404</span>
				<h2 class="page-title"><?php esc_html_e( "La page que vous cherchez semble introuvable... ", 'rockyourpodcast' ); ?></h2>


		
			<div class = "buttonHome">
				<a href="accueil">Retourner sur l'accueil</a>
			</div>



			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
