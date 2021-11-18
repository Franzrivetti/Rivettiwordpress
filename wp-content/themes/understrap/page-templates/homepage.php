<?php
/**
 * Template Name: Homepage
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
<!-- <section class="home" id="home">
	<div class="container-fluid">
 	<div class="row">
		<div class="home__data col-6">
			<h1 class="home__title">Not exactly<br> what you want*</h1>
			<p class="home__description">*Simply what you need</p>
			<a href="#" class="home__button">Reel</a>
		 </div>

	 <div class="home__img col-6">
		 <img src="http://localhost:8888/Rivettiwordpress/wp-content/uploads/2021/07/rivet-.png" alt="" data-speed="-3" class="move">
		 <img src="http://localhost:8888/Rivettiwordpress/wp-content/uploads/2021/07/rivet-2.png" alt="" data-speed="2" class="move">
		 <img src="http://localhost:8888/Rivettiwordpress/wp-content/uploads/2021/07/rivet-3.png" alt="" data-speed="3" class="move">
		 <img src="http://localhost:8888/Rivettiwordpress/wp-content/uploads/2021/07/rivet-4.png" alt="" data-speed="-2" class="move">
		 <img src="http://localhost:8888/Rivettiwordpress/wp-content/uploads/2021/07/camera.png" alt="" data-speed="2" class="move">
	 </div>

   
</div>
</div>
</section> -->

<section>
	<div class="container">
		<div class="row vh-100 d-flex align-items-center">
			<div class="col-12 col-lg-8 align-self-center">
				<h1>Not exactly<br> what you want*</h1>
				<p>*Simply what you need</p>
				<a href="#">Reel</a>
			</div>
			<div class="col-12 col-lg-4">
				-
			</div>
		</div>
	</div>
</section>



<?php
get_footer();
