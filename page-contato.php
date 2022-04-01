<?php get_header();
$banner = get_field('banner', $post->ID);
?>

 <main id="page-contato">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 content-align-mid">
                    <h2>Fale com a <span>Express</span></h2>
                    <h5>Para falar com o nosso time, utilize essa página de
                        contato com as informações abaixo. <span>Ou também
                        utilize a busca abaixo para encontrar o que busca<span></h5>
                    <div id="divBusca">
                        <input type="text" id="txtBusca" placeholder="O que você procura?"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.png" id="btnBusca" alt="Buscar"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="posts-blog">
        <div class="container">
            <div class="row informacoes-de-contato">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="col-md-12">
                        <div class="card-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-contact-icon.png" class="img-fluid">
                                        </div>

                                        <div class="col-md-10">
                                            <h5>Matriz</h5>
                                            <p>Rua da Consolação, 954 - Higienópolis
                                            <br>(11) 3259-5005</p>
                                            <p>Rua Luís Góis, 853 - Vila Mariana
                                            <br>(11) 5071-0991</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-contact-icon.png" class="img-fluid">
                                        </div>

                                        <div class="col-md-10">
                                            <h5>Unidade 1</h5>
                                            <p>Avenida Anchieta, 299 - Cambuí
                                            <br>(19) 3231-1661</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-contact-icon.png" class="img-fluid">
                                        </div>

                                        <div class="col-md-10">
                                            <h5>Unidade 2</h5>
                                            <p>Avenida Dr. Nelson D'Avila, 809 Jd. São Dimas
                                            <br>(12) 3921-6451</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-contact-icon.png" class="img-fluid">
                                        </div>

                                        <div class="col-md-10">
                                            <h5>Unidade 3</h5>
                                            <p>Avenida Armando Lombardi, 331 Barra da Tijuca 
                                                <br>(21) 3081-6344</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-contact-icon.png" class="img-fluid">
                                        </div>

                                        <div class="col-md-10">
                                            <h5>Unidade 4</h5>
                                            <p>Rua dos Timbiras, 1911 - Lourdes
                                                <br>(31) 3224-0536</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-contato.png" class="img-fluid">
                    <div class="redes-sociais-contato">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-7 content-align-mid">
                                        <h6>Siga-nos nas redes sociais</h6>
                                    </div>

                                    <div class="col-md-5">
                                        <li><a href="https://facebook.com/expressctb" target="_blank" class="hvr-icon-pop"><i class="fa fa-facebook hvr-icon"></i></a></li>
                                        <li><a href="https://instagram.com/expressctb" target="_blank" class="hvr-icon-pop"><i class="fa fa-instagram hvr-icon"></i></a></li>
                                        <li><a href="https://youtube.com/expressctb" target="_blank" class="hvr-icon-pop"><i class="fa fa-youtube hvr-icon"></i></a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form-contact">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <h4>Formulário de Contato</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas</p>
                </div>
            </div>

            <div class="row wow fadeInUp form-contact-page">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <?php echo do_shortcode( '[contact-form-7 id="152" title="Contato"]' ); ?>
                </div>

                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
 </main>

<?php get_footer() ?>