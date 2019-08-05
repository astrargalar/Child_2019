<?php

/**
 * Template Name: Página de Contacto y mapa
 *Template Post Type: page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<!--  Inicio de la página de servicios -->

<div class="container">
	<div class="column active">
		<div class="content">
			<h2>Este es el mapa dichoso</h2>
			<div id="mapid" class="map"></div>
			<?php get_template_part('template-parts/content/content-loop'); ?>

		</div>
	</div>
</div>
<?php get_footer();