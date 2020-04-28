<?php get_header(); ?>
<div class="page__container">
	<div class="header">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Tytuł oraz opis witryny") ) : ?>
	<?php endif;?>

	</div>

	<div class="portfolio">
		<?php
			$i = 1; 
			$loop = new WP_Query(array( 'post_type' => 'portfolio', 'paged' => false, 'order' => 'ASC' ));
			if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); 
		?>
			
		<div class="portfolio__item">
            <a class="portfolio__item__link" onclick="openModal();currentSlide(<?php echo $i; ?>)" class="hover-shadow" href="#"><?php the_post_thumbnail('full'); ?></a>
        </div>


	
		<?php 
			$i++;
			endwhile; else: 
		?>

		<p><?php _e('Nie znaleziono żadnych postów.'); ?></p>

		<?php 
			endif; 
			wp_reset_postdata();
		?>


		<div id="portfolioModal" class="modal">
		  <span class="close cursor" onclick="closeModal()">&times;</span>
		  
		  <div class="modal__content">
			<?php
				if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); 
			?>
		    <div class="modal__slides">
		      <?php the_post_thumbnail('full'); ?>
		    </div>
				
			<?php
				endwhile;
				endif; 
				wp_reset_postdata();
			?>
		
		  </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

