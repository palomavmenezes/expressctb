<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-consultoria">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2>Consultoria e assessoria contábil <span>para o seu negócio</span></h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Proin porttitor egestas finibus. In sit amet tortor 
                    in turpis euismod tempus et mattis neque. 
                    Suspendisse dapibus odio et posuere</h5>

                    <div class="btn-seja-um-franqueado">
                        <a href="" class="btn-pink">QUERO ESTE</a>
                    </div>
                </div>

                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <section id="satisfacao">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bloco-satisfacao content-align-mid wow fadeInLeft">
                    <h2>Emissão de notas fiscais <span>do jeito que você quis</h2>
                    <div class="separador"><hr></div>
                    <h5><span>Temos uma equipe especializada no nosso moderno </span>escritório de contabilidade</h5>
                    <p>Maecenas vestibulum imperdiet neque venenatis efficitur. Nullam malesuada nulla nunc, elementum faucibus nisi egestas nec. Sed condimentum ornare sem, at hendrerit sem volutpat a. Fusce luctus, libero et hendrerit scelerisque, nulla justo consectetur magna, id accumsan libero magna sit amet quam. Donec ipsum nibh, sodales vel arcu sed, blandit convallis magna. Vestibulum leo dolor, gravida nec cursus nec, cursus sit amet sapien.</p>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/universidade-corporativa.png">
                </div>
            </div>

            <div class="row bloco-listas-satisfacao wow fadeInUp">
                <div class="col-md">
                    <h3>99% dos <br>contratos </h3>
                    <p>são renovados<br> anualmente</p>
                </div>

                <div class="col-md border-left">
                    <h3>22 <br> Cidades</h3>
                    <p>são atendidas</p>
                </div>

                <div class="col-md border-left">
                    <h3>5<br> unidades</h3>
                    <p>espalhadas pelo Brasil</p>
                </div>
            </div>
        </div>
    </section>

    <section id="vantagens">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <h2>Uma assessoria completa <span>para o seu negócio</span></h2>
                    <div class="separador"><hr></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet sapien sed lobortis. </p>
                    <p>Cras nec suscipit erat. Maecenas vestibulum imperdiet neque venenatis efficitur. Nullam malesuada nulla nunc, elementum faucibus nisi egestas nec. Sed condimentum ornare sem, at hendrerit sem volutpat a. Fusce luctus, libero et hendrerit scelerisque, nulla justo consectetur magna, id accumsan libero magna sit amet quam. Donec ipsum nibh, sodales vel arcu sed, blandit convallis magna. Vestibulum leo dolor, gravida nec cursus nec, cursus sit amet sapien.</p>
                    <div style="margin-top: 2rem; margin-bottom: 2rem;"><a href="" class="btn-pink">QUERO ESTE SERVIÇO</a></div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Diferencial <span>com 1 linha</span> </h3>
                                <h6>você consegue abrir a sua franquia</h6>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Diferencial <span>com 1 linha</span> </h3>
                                <h6>você recupera seu investimento de volta</h6>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-vantagens">
                                <h3>Diferencial <span>com 1 linha</span> </h3>
                                <h6>você consegue abrir a sua franquia</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="notas-fiscais">
        <div class="container content-time-inovador">
            <div class="row">
                <div class="col-md-6 content-align-mid wow fadeInLeft">
                    <h3><span>Emissão de notas fiscais</span> do jeito que você quis</h3>
                    <div class="separador"><hr></div>
                    <h5><span>Temos uma equipe especializada no nosso moderno</span> escritório de  contabilidade</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor egestas finibus. In sit amet tortor in turpis euismod tempus et mattis neque. Suspendisse dapibus odio et posuere malesuada. Cras et urna vitae nulla varius suscipit elementum at augue. Cras pellentesque laoreet</p>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/universidade-corporativa.png">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template_parts/alguns-clientes'); ?>
    
    <section id="especialize-se">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInLeft">
                    <h2>Você está pronto <span>para mudar de contabilidade?</span></h2>
                    <hr>
                    <p>Temos uma equipe especializada no nosso moderno escritório de contabilidade no Rio de Janeiro e Angra dos Reis.</p>

                    <div class="conhecer-expressuni"><a href="" class="btn-pink">EU QUERO FECHAR</a></div>
                </div>

                <div class="col-md-7 wow fadeInRight">
                    
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>