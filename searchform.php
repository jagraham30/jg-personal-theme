<form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
    <label class="visually-hidden" for="search">Search</label>
    <input type="search" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" required>
    <button type="submit">Search</button>
</form>
