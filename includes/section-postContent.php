<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post-single">

        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="post-thumbnail">
                <?php the_post_thumbnail( 'large' ); ?>
            </figure>
        <?php endif; ?>

        <div class="post-header">
            <h1><?php the_title(); ?></h1>

            <div class="post-meta">
                <span class="author"><?php the_author(); ?></span>
                <time class="date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                <?php if ( has_category() ) : ?>
                    <span class="categories"><?php the_category( ', ' ); ?></span>
                <?php endif; ?>
                <?php if ( has_tag() ) : ?>
                    <span class="tags"><?php the_tags( '', ', ' ); ?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="post-body">
            <?php the_content(); ?>
        </div>

    </article>

<?php endwhile; else : endif; ?>