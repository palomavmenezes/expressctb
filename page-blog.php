<?php get_header();
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
                    <h2>Blog <span>Express</span></h2>
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

    <section id="posts-blog">
        <div class="container">
            <?php get_template_part('template_parts/posts'); ?>
        </div>
    </section>

    <section id="outras-publicacoes">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-12 text-align-center">
                    <h4 class="title-outras-publicacoes">Outras Publicações</h4>
                </div>
            </div>

            <?php get_template_part('template_parts/outras-publicacoes'); ?>
        </div>
    </section>
 </main>

<?php get_footer() ?>