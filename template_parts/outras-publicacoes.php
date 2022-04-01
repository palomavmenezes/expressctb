<div class="row wow fadeInUp">
    <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $exclude = Array();
        $recent_articles = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '6', 'paged' => $paged ) );
        if( $recent_articles->have_posts() ): while( $recent_articles->have_posts() ): $recent_articles->the_post();
        $exclude[] = get_the_ID();
    ?>
        <div class="col-md-6 content-outras-publicacoes">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-post"><?php the_post_thumbnail(); ?></div>
                </div>

                <div class="col-md-8">
                    <a href="<?php the_permalink() ?>">
                    <p class="date"><?php echo date("d/m/Y"); ?></p>
                    <h5 class="post-title"><?php the_title(); ?></h5>
                    <p class="descricao"><?php echo wp_trim_words( get_the_content(), 20 ); ?></p></a>
                    <div class="read-more">
                        <a href="<?php the_permalink() ?>" class="btn-read-more">Quero ler este post completo +</a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    endwhile;
    
    $big = 999999999; // need an unlikely integer
 
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $recent_articles->max_num_pages
    ) );
    
    endif;
    wp_reset_query();
    ?>
</div>