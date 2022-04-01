<div class="row wow fadeInUp">
    <?php
    $exclude = Array();
    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
    if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
    $exclude[] = get_the_ID();
    ?>
        <div class="col-md-4">
            <div class="content-blogpost">
                <a href="<?php the_permalink() ?>">
                <div class="img-post"><?php the_post_thumbnail(); ?></div>
                <h5 class="post-title"><?php the_title(); ?></h5>
                <p class="descricao"><?php echo wp_trim_words( get_the_content(), 20 ); ?></p></a>
                <div class="read-more">
                    <a href="<?php the_permalink() ?>" class="btn-read-more">Ler mais</a>
                </div>
                
            </div>
        </div>

    <?php
    endwhile;
    endif;
    wp_reset_query();
    ?>
</div>