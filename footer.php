	<footer id="theme-footer">
        <?php // zoa_footer(); 
        render_footer()
        ?>
	</footer>

	<?php
        // close tag content container `</div>`
        zoa_after_content();

        // quick view markup
    	if ( class_exists( 'woocommerce' ) ) {
    		zoa_product_action();
    	}

        // dialog search form
        zoa_dialog_search_form();
        ?>
    </div><!-- #theme-container -->
    <?php
        if ( true == get_theme_mod( 'loading', false ) ) {
            echo '<span class="is-loading-effect"></span>';
        }
        
        wp_footer();
    ?>
</body>
</html>