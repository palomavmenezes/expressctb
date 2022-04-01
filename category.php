<?php get_header();

	/**
	 * CATEGORY TEMPLATE
	 */
	 
$banner = get_field('banner', $post->ID);
?>

 <main id="page-base-de-conhecimento">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 content-align-mid">
                    <h2>Categorias</h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Proin porttitor egestas finibus. In sit amet tortor 
                        in turpis euismod tempus et.</h5>
                    <div id="divBusca">
                        <input type="text" id="txtBusca" placeholder="Pesquise em nossa base de conhecimento"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.png" id="btnBusca" alt="Buscar"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="categorias">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
					'cat' => get_queried_object_id(),
					'posts_per_page ' => 10,
				);

				$novo_loop = new WP_Query( $args );

				if ( $novo_loop->have_posts() ) : while ( $novo_loop->have_posts() ) : $novo_loop->the_post('(%s)');
                ?>
                    <div class="col-md-4">
                        <div class="card-categoria">
                            <h5>Contabilidade e Assessoria Jurídica</h5>
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
					
                    else :
                ?>
                    Nenhum post encontrado
                <?php
                    endif;
                    // Reseta as queries
                    wp_reset_postdata();
                ?>
                
            </div>
        </div>
    </section>
 </main>

<?php get_footer(); ?>