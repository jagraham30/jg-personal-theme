<?php get_header(); ?>

<div class="container">

    <h1 class="search-title">
        Search results for “<?php echo esc_html( get_search_query() ); ?>”
    </h1>

    <?php get_search_form(); ?>

    <div class="search-results-list">

        <!-- Get a part of the template from the includes folder -->
        <?php get_template_part( 'includes/section', 'results' ); ?>

    </div>

    <nav class="pagination" aria-label="Search pages">
        <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var( 'paged' ) ),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'list',
            'prev_text' => '&laquo; Previous',
            'next_text' => 'Next &raquo;',
        ) );
        ?>
    </nav>

</div>


<?php get_footer(); ?>
