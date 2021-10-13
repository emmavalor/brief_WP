<?php get_header(); ?>

	<?php if (have_posts()) { ?>
			<?php while(have_posts()){
				the_post(); ?>

				<h1><?php the_title(); ?></h1>
<!-- 				affiche l'image avec son url,plus facile pour definir le style de l'image -->
				<p>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%; height: auto;">
				</p>
				<?php 	the_content(); ?>

<!-- 				Ajoute le boutton precedent lorsqu'il y a un article après
 -->				<?php if(get_previous_post_link()){ ?>
					<button class="btn btn-light"><?php echo get_previous_post_link('%link', 'Précedent'); ?></button>
				<?php } ?>

<!-- 				Ajoute le boutton suivant lorsqu'il y a un article avant
 -->				<?php if(get_next_post_link()){ ?>
					<button class="btn btn-light"><?php echo get_next_post_link('%link', 'Suivant'); ?></button>
				<?php } ?>
			<?php }
		} 
		?>

<?php get_footer(); ?>