<?php get_header();
$banner = get_field('banner', $post->ID);
?>

<main id="page-express-uni">
    <section id="banner-pages" class="wow fadeIn" style="background: url('<?php echo $banner ?>') center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>Conhecer a</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-expressuni.png">
                </div>
            </div>
        </div>
    </section>

    <section id="satisfacao">
        <div class="container">
            <div class="row bloco-satisfacao">
                <div class="col-md-6 content-align-mid wow fadeInLeft">
                    <h2><span>Conheça os benefícios</span> da Universidade Corporativa</h2>
                    <div class="separador"><hr></div>
                    <h5><span>Aprenda com o nosso moderno centro</span> de aprendizado e educação técnico</h5>
                    <p>Maecenas vestibulum imperdiet neque venenatis efficitur. Nullam malesuada nulla nunc, elementum faucibus nisi egestas nec. Sed condimentum ornare sem, at hendrerit sem volutpat a. Fusce luctus, libero et hendrerit scelerisque, nulla justo consectetur magna, id accumsan libero magna sit amet quam. Donec ipsum nibh, sodales vel arcu sed, blandit convallis magna. Vestibulum leo dolor, gravida nec cursus nec, cursus sit amet sapien.</p>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/universidade-corporativa.png">
                </div>
            </div>
        </div>
    </section>

    <section id="cursos">
        <div class="container">
            <div class="row">
            <?php get_template_part('template_parts/posts') ?>
            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>