
<footer>

    <div class="container">
        <?php
        if ( has_nav_menu( 'footer-menu' ) ) {
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class'     => 'footer-bar',
                    'fallback_cb'    => false,
                )
            );
        }
        ?>
    </div>


</footer>




<?php wp_footer(); ?>
</body>
</html>