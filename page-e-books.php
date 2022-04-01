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
                    <h2>Materiais e E-books<br> <span>preparados diretamente <br> para auxiliar o seu negócio</span></h2>
                    <div id="divBusca">
                        <input type="text" id="txtBusca" placeholder="Pesquise em nossa base de conhecimento"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.png" id="btnBusca" alt="Buscar"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ebooks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-ebooks text-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook.png" width="80%">
                        <h6>7 dicas preciosas sobre 
                            administração de empresas
                            para a sua crescer mais</h6>
                        <div class="btn-ebook">
                            <a href="" class="btn-pink">BAIXAR E-BOOK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </main>

<?php get_footer() ?>