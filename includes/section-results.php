<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="card result-card">

        <div class="card-body">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>

            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
        </div>

    </article>

<?php endwhile; else : ?>

    <p class="no-results">Nothing matched that search. Try a different word.</p>

<?php endif; ?>
