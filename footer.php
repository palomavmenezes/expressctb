<?php

	/**
	 * FOOTER TEMPLATE
	 */

?>

</body>
</html>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

  <section id="menus-footer-top">
    <div class="container">
      <div class="row">
        <div class="col medias-sociais">
          <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Express ctb" style="border-bottom: 1px solid #f7f7f747; padding-bottom: 20px;">
          <div><a href="https://facebook.com/expressctb" target="_blank" class="hvr-icon-pop"><i class="fa fa-facebook hvr-icon"></i></a>
          <a href="https://instagram.com/expressctb" target="_blank" class="hvr-icon-pop"><i class="fa fa-instagram hvr-icon"></i></a>
          <a href="https://youtube.com/expressctb" target="_blank" class="hvr-icon-pop"><i class="fa fa-youtube hvr-icon"></i></a></div>
          <a href="mailto:contato@expressoctb.com.br" target="_blank"><li>contato@expressoctb.com.br</li></a>
          <a href="tel:1126268364" target="_blank"><li>(11) 2626-8364</li></a>
        </div>

        <div class="col">
          <li class="title-menu-footer">A EXPRESS</li>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum1' ) ); ?>
        </div>

        <div class="col">
          <li class="title-menu-footer">Serviços</li>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum2' ) ); ?>
        </div>

        <div class="col">
          <li class="title-menu-footer">Conteúdo</li>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum3' ) ); ?>

          <li class="title-menu-footer">Login</li>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum4' ) ); ?>
        </div>

        <div class="col">
          <li class="title-menu-footer">Suporte</li>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum5' ) ); ?>

          <li class="title-menu-footer">LGPD/GDPR</li>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum6' ) ); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 txt-footer border-top">
          CONTABILIDADE EXPRESS SERVIÇOS | CNPJ: 07.650.275/0001-10 CONSELHO REGIONAL DE CONTABILIDADE: RJ-004556/O-0 RESPONSÁVEL TÉCNICO: RJ-120503/O-1
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 copyright">
          Copyright &copy; 2020 | <a class="datacartes" href="https://datacartes.com.br">Data Cartes</a>
        </div>
      </div>
    </div>
  </section>

  </footer><!-- #footer -->


  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <!-- Script dos Ícones Bootstrap -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


<?php wp_footer(); ?>
</body>
</html>