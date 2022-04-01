<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-quem-somos">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>São 33 anos no mercado<br> com <span>98% de satisfação</span></h2>
                    <h5>Nós da <b>Express</b> estamos preparados para atender<br> todas suas necessidades, do contábil ao fiscal,<br> do jurídico ao pessoal.</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="satisfacao">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bloco-satisfacao content-align-mid text-align-center wow fadeIn">
                    <h2><span>"A nossa missão é democratizar a contabilidade para</span><br> micro e pequenas empresas de todo o Brasil."</h2>
                    <div><hr></div>
                    <h3 class="nossa-historia">Nossa história</h3>
                    <p>Temos uma equipe especializada no nosso moderno escritório de contabilidade no Rio de Janeiro e Angra dos Reis com a finalidade de proporcionar o melhor atendimento possível e gerar informações contábeis, fiscais e de departamento pessoal.</p>
                    <p>Sobretudo visando proporcionar aos clientes máxima segurança na tomada de decisão em seus negócios, afim de alcançarem os melhores resultados através de uma consultoria e assessoria especializada. Visto que possuímos um método próprio de administração da folha de pagamento que formulamos ao longo dos nossos 32 anos de história.</p>
                </div>
            </div>

            <?php get_template_part('template_parts/listas-satisfacao') ?>
        </div>
    </section>

    <?php get_template_part('template_parts/alguns-clientes'); ?>
    <?php get_template_part('template_parts/expressuni'); ?>
</main>

<?php get_footer(); ?>