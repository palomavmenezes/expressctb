<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-unidades">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>5 unidades<br> <span>espalhadas pelo Brasil</span></h2>
                    <h5>Focamos na expansão para atender de Norte a Sul</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="unidades-proximas">
        <div class="container">
            <div class="row">
                <div class="col-md-12 content-align-mid text-align-center wow fadeIn">
                    <h2><span>Encontre a unidade</span> mais próxima de você</h2>
                </div>

                <div class="col-md-12 text-align-center wow fadeIn">
                <form action="/action_page.php" class="input-filter">
                    <div class="row">
                        <div class="col-md-5">
                            <select name="state" id="estado">
                                <option value="selecione">Selecione o seu Estado</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <select name="city" id="cidade">
                                <option value="selecione">Selecione sua cidade</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" value="Buscar">
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="row todas-as-unidades wow fadeIn">
                <div class="col-md-12">
                    <h4>Todas as Unidades</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="bloco-unidade">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="btn-pink">Rio de Janeiro</h6>
                            </div>
                            <div class="col-md-8">
                                <h6 class="btn-purple">Matriz</h6>
                            </div>
                        </div>
                        <h4>Express Contabilidade</h4>
                        <h5>Rua Santo Amando, 234 Campo Grande Rio de Janeiro – RJ CEP: 23052-430</h5>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> (21) 6659-9979</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> contato@expresscontabilidade.com.br</li>
                        <div class="como-chegar"><a href="" class="btn-como-chegar">Como chegar</a></div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div class="bloco-unidade">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="btn-pink">Rio de Janeiro</h6>
                            </div>
                            <div class="col-md-8">
                                <h6 class="btn-purple">Filial</h6>
                            </div>
                        </div>
                        <h4>Express Contabilidade</h4>
                        <h5>Rua Santo Amando, 234 Campo Grande Rio de Janeiro – RJ CEP: 23052-430</h5>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> (21) 6659-9979</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> contato@expresscontabilidade.com.br</li>
                        <div class="como-chegar"><a href="" class="btn-como-chegar">Como chegar</a></div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInLeft">
                    <div class="bloco-unidade">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="btn-pink">Rio de Janeiro</h6>
                            </div>
                            <div class="col-md-8">
                                <h6 class="btn-purple">Filial</h6>
                            </div>
                        </div>
                        <h4>Express Contabilidade</h4>
                        <h5>Rua Santo Amando, 234 Campo Grande Rio de Janeiro – RJ CEP: 23052-430</h5>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> (21) 6659-9979</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> contato@expresscontabilidade.com.br</li>
                        <div class="como-chegar"><a href="" class="btn-como-chegar">Como chegar</a></div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div class="bloco-unidade">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="btn-pink">Rio de Janeiro</h6>
                            </div>
                            <div class="col-md-8">
                                <h6 class="btn-purple">Filial</h6>
                            </div>
                        </div>
                        <h4>Express Contabilidade</h4>
                        <h5>Rua Santo Amando, 234 Campo Grande Rio de Janeiro – RJ CEP: 23052-430</h5>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> (21) 6659-9979</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> contato@expresscontabilidade.com.br</li>
                        <div class="como-chegar"><a href="" class="btn-como-chegar">Como chegar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template_parts/alguns-clientes'); ?>
</main>

<?php get_footer(); ?>