<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-seja-um-franqueado">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>Seja um <span>franqueado</span></h2>
                    <h5>Se você tem experiência em atendimento contábil, fiscal e departamento <br>
                        pessoal, e quer crescer profissionalmente contribuindo para o desenvolvimento <br>
                        da empresa, a Express Contabilidade precisa de você!</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center btn-seja-um-franqueado">
                    <a href="" class="btn-pink">Seja um Franqueado</a>
                </div>
            </div>
        </div>
    </section>

    <section id="satisfacao">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bloco-satisfacao content-align-mid text-align-center wow fadeIn">
                    <h2><span>"Para crescer mais, o ideal</span> <br> é ter uma Franquia Express."</h2>
                    <div><hr></div>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin <br>porttitor egestas finibus. In sit amet tortor in turpis euismod <br>tempus et mattis neque.</h5>
                </div>
            </div>

            <?php get_template_part('template_parts/listas-satisfacao') ?>
        </div>
    </section>

    <section id="vantagens">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <h2>Quais as vantagens<br> <span>em ser um novo <br> franqueado Express</span></h2>
                    <div class="separador"><hr></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet sapien sed lobortis. </p>
                    <p>Cras nec suscipit erat. Maecenas vestibulum imperdiet neque venenatis efficitur. Nullam malesuada nulla nunc, elementum faucibus nisi egestas nec. Sed condimentum ornare sem, at hendrerit sem volutpat a. Fusce luctus, libero et hendrerit scelerisque, nulla justo consectetur magna, id accumsan libero magna sit amet quam. Donec ipsum nibh, sodales vel arcu sed, blandit convallis magna. Vestibulum leo dolor, gravida nec cursus nec, cursus sit amet sapien.</p>
                    <div style="margin-top: 2rem; margin-bottom: 2rem;"><a href="" class="btn-pink">QUERO SER UM FRANQUEADO</a></div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Com apenas R$80.000</h3>
                                <h6>você consegue abrir a sua franquia</h6>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Retorno em 13 meses</h3>
                                <h6>você recupera seu investimento de volta</h6>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Com apenas R$80.000</h3>
                                <h6>você consegue abrir a sua franquia</h6>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Retorno em 13 meses</h3>
                                <h6>você recupera seu investimento de volta</h6>
                            </div>
                        </div>
                    </div>
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
                    <h3><span>Envie o</span> seu pedido</h3>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        <br>egestas finibus. In sit amet tortor in turpis.</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6 form wow fadeInUp">
                    <?php echo do_shortcode( '[contact-form-7 id="136" title="Seja um Franqueado"]' ); ?>
                </div>

                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>