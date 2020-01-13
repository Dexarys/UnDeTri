

	</div><!-- div #content -->

	<footer id="footer">

		<?php
		if ( has_custom_logo() ) :
			the_custom_logo();
		endif;
		?>
		<?php if ( is_active_sidebar( 'left-footer' ) ) : ?>
			<?php dynamic_sidebar( 'left-footer' ); ?>
		<?php endif; ?>

	</footer>
</div><!-- div #page -->

<?php wp_footer(); ?>

</body>
</html>

