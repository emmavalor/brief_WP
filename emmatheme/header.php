<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<?php wp_head(); ?>

	</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<?php 
			            wp_nav_menu([
			                'menu' => 'navigation',
			                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
			                'container_class' => 'collapse navbar-collapse',
				        ]); ?>

			        <?php get_search_form(); ?>
			    </div>
			  </div>
			</nav>

			<div class="container">

