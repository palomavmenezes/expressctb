<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-expressuni-single">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2>Nome do curso com até <span>2 linhas de texto</span></h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Proin porttitor egestas finibus. In sit amet tortor 
                    in turpis euismod tempus et mattis neque. 
                    Suspendisse dapibus odio et posuere</h5>
                </div>

                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <section id="list-info-curso"> 
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <div class="row background-gray">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-2 card-curso-icon">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>

                                <div class="col-md-10 card-curso-info">
                                    <h6>Modalidade</h6>
                                    <p>Presencial</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col-md-2 card-curso-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>

                                <div class="col-md-10 card-curso-info">
                                    <h6>Localidade</h6>
                                    <p>Matriz Express RJ</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col-md-2 card-curso-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>

                                <div class="col-md-10 card-curso-info">
                                    <h6>Duração</h6>
                                    <p>4 anos</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col-md-2 card-curso-icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>

                                <div class="col-md-10 card-curso-info">
                                    <h6>Investimento</h6>
                                    <p>Ver valores</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col-md-2 card-curso-icon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>

                                <div class="col-md-10 card-curso-info">
                                    <h6>Horário das aulas</h6>
                                    <p>Noturno</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-12 sobre-o-curso">
                    <h3>Sobre o curso</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet.</p>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <div class="info-coordenacao">
                        <h3>I Coordenação</h3>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/coordenador.png" width="100%">
                            </div>

                            <div class="col-md-10">
                                <h5>José Roberto Menisvaldo Principe</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras</p>
                                <i class="fa fa-envelope" aria-hidden="true"> <span>contato@expresscontabilidade.com.br</span></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>