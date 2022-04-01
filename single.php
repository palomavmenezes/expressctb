<?php
	/* SINGLE TEMPLATE */
	get_header();
?>

<main id="single-post">
	<section id="banner-single-post" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 content-align-mid">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </section>

	<section id="single-post-content">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-1"></div>

				<div class="col-md-10 content-align-center text-align-center">
					<div class="border-bottom all-content-post">
						<div class="btn-date"><h6 class="date"><?php echo date("d/m/Y"); ?></h6></div>
						<h2><?php the_title(); ?></h2>
						<p class="description"><?php echo get_the_content(); ?></p>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
						<div class="icones-de-compartilhamento">
							<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
							<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
							<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
							<li><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
						</div>
					</div>

					<div class="fotos">
						<div class="row">
							<div class="col-md-12"><h5>Fotos</h5></div>
							<div class="col"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></div>
							<div class="col"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></div>
							<div class="col"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></div>
							<div class="col"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></div>
							<div class="col"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></div>
						</div>

						<div class="row">
							<div class="col-md-2 btn-fotos"><a href="" class="btn-border-pink">Anterior</a></div>
							<div class="col-md-8"></div>
							<div class="col-md-2 btn-fotos"><a href="" class="btn-border-pink">Próximo</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<?php
				endwhile;
				endif;
				wp_reset_query(); ?>
			</div>
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

<?php get_footer(); ?>
