<?php get_header();?>

<div class="container">

    <div class="archive-list">


        <!-- Get a part of the template from the includes folder -->
        <?php get_template_part('includes/section', 'archive');?>

    </div>

    <nav class="pagination" aria-label="Archive pages">
        <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'prev_text' => '&laquo; Previous',
            'next_text' => 'Next &raquo;',
        ));
        ?>
    </nav>

</div>


<?php get_footer();?>