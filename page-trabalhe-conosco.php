<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-trabalhe-conosco">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>Quer <span>trabalhar conosco?</span></h2>
                    <h5>Se você tem experiência em atendimento contábil, fiscal e departamento <br>
                        pessoal, e quer crescer profissionalmente contribuindo para o desenvolvimento <br>
                        da empresa, a Express Contabilidade precisa de você!</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center btn-seja-um-franqueado">
                    <a href="" class="btn-purple">FAZER MEU CADASTRO</a>
                </div>
            </div>
        </div>
    </section>

    <section id="satisfacao">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bloco-satisfacao content-align-mid text-align-center wow fadeIn">
                    <h2><span>"Juntos iremos mudar o rumo</span> <br> da contabilidade no Brasil."</h2>
                    <div><hr></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet sapien sed lobortis. Cras nec suscipit erat.</p>
                    <p>Maecenas vestibulum imperdiet neque venenatis efficitur. Nullam malesuada nulla nunc, elementum faucibus nisi egestas nec. Sed condimentum ornare sem, at hendrerit sem volutpat a. Fusce luctus, libero et hendrerit scelerisque, nulla justo consectetur magna, id accumsan libero magna sit amet quam. Donec ipsum nibh, sodales vel arcu sed, blandit convallis magna. Vestibulum leo dolor, gravida nec cursus nec, cursus sit amet sapien.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="time-inovador">
        <div class="container content-time-inovador">
            <div class="row">
                <div class="col-md-12 text-align-center wow fadeInUp">
                    <h3>Trabalhe <span>com um<br> time inovador</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet sapien sed lobortis. Cras nec suscipit erat.</h5>
                    <h5>Maecenas vestibulum imperdiet neque venenatis efficitur. Nullam malesuada nulla nunc, elementum faucibus nisi egestas nec. Sed condimentum ornare sem, at hendrerit sem volutpat a. Fusce luctus, libero et hendrerit scelerisque, nulla justo consectetur magna, id accumsan libero magna sit amet quam. Donec ipsum nibh, sodales vel arcu sed, blandit convallis.</h5>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-time-inovador.jpg" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section id="section-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-align-center wow fadeInUp">
                    <h3><span>Cadastre seu </span>currículo abaixo</h3>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        <br>egestas finibus. In sit amet tortor in turpis.</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6 form wow fadeInUp">
                    <?php echo do_shortcode( '[contact-form-7 id="139" title="Trabalhe Conosco"]' ); ?>
                </div>

                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <?php get_template_part('template_parts/expressuni') ?>
</main>

<?php get_footer(); ?>