			<div class="page__container">
				<div class="page__footer">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Zdjęcie w stopce strony") ) : ?>
					<?php endif;?>
				</div>
			</div>
		</div><!-- tag zamykający "page" div -->
		<?php wp_footer() ?>
	</body>
</html>