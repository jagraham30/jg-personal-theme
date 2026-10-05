<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article class="card archive-card">

        <div class="card-body">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>

            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
        </div>

    </article>


<?php endwhile; else: endif; ?>