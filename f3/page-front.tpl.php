<?php
// $Id: page.tpl.php,v 1.7 2009/07/03 15:09:30 nbz Exp $
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php print $head_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="F3 Imagens"/>
    <meta property="og:description" content="Oferecemos diversas soluções audiovisuais e fotográficas, entre contato e descubra de que forma podemos contribuir com a sua empresa."/>
    <meta property="og:image" content="http://f3imagens.com.br/sites/all/themes/f3/images/logo_f3.jpg"/>
    <meta property="og:type" content="website" />
    <link rel="image_src" href="http://f3imagens.com.br/sites/all/themes/f3/images/logo_f3.jpg" />
    <link rel="shortcut icon" href="<?php print $base_path; ?>sites/default/files/favicon.png" type="image/x-icon" />
      <meta name="distribution" content="Global" />
      <meta name="robots" content="all" />
      <meta name="language" content="pt-br" />
      <meta name="title" content="<?php print $head_title ?>" />
      <?php print $head ?>
      <?php print $styles ?>
      <?php print $scripts ?>
      <!-- Le styles -->
      <link href="<?php print $base_path; ?>sites/all/themes/f3/assets/css/bootstrap.css" rel="stylesheet">
      <link href="<?php print $base_path; ?>sites/all/themes/f3/assets/css/bootstrap-responsive.css" rel="stylesheet">
      <link href="<?php print $base_path; ?>sites/all/themes/f3/geral.css" rel="stylesheet">

      <!--[if lt IE 7]>
      <link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">
      <![endif]-->
      <!-- Fav and touch icons -->
      <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
      <![endif]-->
  </head>
 <body data-spy="scroll" data-target=".navbar" <?php print phptemplate_body_attributes($is_front, $layout); ?> class="front <?php print $body_classes; ?> ">

      <nav class="navbar navbar-fixed-top">
          <div class="navbar-inner">
              <div class="container">
                  <h1><a href="<?php print $base_path; ?>"><?php print $head_title ?></a></h1>
                  <ul class="nav" id="topnav">
                      <li class="home active js-scroll-trigger"><a href="#top-section">Home</a></li>
                      <li class="empresa js-scroll-trigger"><a href="#empresa">Empresa</a></li>
                      <li class="equipe js-scroll-trigger"><a href="#equipe">Equipe</a></li>
                      <li class="portfolio js-scroll-trigger"><a href="#portfolio">Portfolio</a></li>
                      <li class="blog js-scroll-trigger"><a href="#blog">Blog</a></li>
                      <li class="contato js-scroll-trigger"><a href="#contato">Contato</a></li>
                  </ul>
                  <ul class="social">
                      <li class="youtube"><a href="http://www.youtube.com/user/F3Imagens" target="_blank">youtube</a></li>
                      <li class="facebook"><a href="https://www.facebook.com/pages/F3-Imagens/399567383466719?fref=ts"  target="_blank">facebook</a></li>
                    </ul>
                  <div class="menu-editores">
                      <h3>Gerenciar Conteúdo</h3>
                     <?php
                          $block = module_invoke('nice_menus', 'block', 'view', 1);
                          print $block['content'];
                      ?>
                  </div>
              </div>
          </div>
      </nav>
<!-- HEADER -->
  <header id="top-section">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
    <div class="container">
      <div class="row">
        <div class="span12 text-center">
          <span class="apresentacao">
            <?php
                  /*$viewName = 'video_apresentacao';
                  $display_id = 'default';
                  print views_embed_view($viewName, $display_id, $args); */
              ?>
             <span class="" id="startbtn">
                  <a href="#empresa">Sobre a F3</a>
              </span>
          </span>
        </div>
      </div>
    </div>
      </div>
      <!-- Modal -->
      <!--div id="myModalHome" class="modal hide fade" tabindex="-1" >
        <div class="modal-body">
          <div class="row-fluid">
            <div class="span5"> <a href="#myModal2" data-toggle="modal"><img src="images/cao.jpg" /></a> </div>
            <div class="span7"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, doloribus, sed illo repudiandae fugit itaque non cum atque aperiam similique velit enim soluta necessitatibus libero reiciendis quis delectus rem modi?</p></div>
        </div>
        </div>
      </div-->

     <div class="inner-top-bg"></div><!-- OVERLAY BG-->
  </header>
<!-- / HEADER -->
<!--  SECTION-1 -->
<section id="empresa">
  <div class="container">

  <div class="row-fluid">
    <div class="span12">
           <!-- empresa -->
          <div class="empresa">
            <?php
                $viewName = 'empresa';
                $display_id = 'default';
                print views_embed_view($viewName, $display_id, $args);
            ?>
          </div> <!-- empresa -->
            <!-- clientes -->
          <div class="clientes">
              <?php
                  $viewName = 'clientes2';
                  $display_id = 'default';
                  print views_embed_view($viewName, $display_id, $args);
              ?>
              <?php
                 /* $viewName = 'parceiros';
                  $display_id = 'default';
                  print views_embed_view($viewName, $display_id, $args); */
              ?>
          </div><!-- clientes -->

    </div><!-- SPAN12-->


    </div><!-- SPAN6-->
  </div>
  </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-1 -->
<!-- SECTION-2 -->
<section id="equipe">
  <div class="container">
      <!-- Example row of columns -->
      <div class="equipe">

           <?php
                $viewName = 'equipe_sobre';
                $display_id = 'default';
                print views_embed_view($viewName, $display_id, $args);
            ?>
            <button id="direita">Direita</button>
            <button id="esquerda">Esquerda</button>
            <?php
                $viewName = 'equipe';
                $display_id = 'default';
                print views_embed_view($viewName, $display_id, $args);
            ?>
        </div>
  </div><!-- / equipe-->
 </section>
 <!-- / SECTION-2 -->

 <!--  SECTION-3 -->
<section id="portfolio">
  <div class="container">
  <div class="row-fluid">
          <div class="span6 text-center videos">
            <h3 class="abertura">Videos</h3>
          </div><!-- SPAN6-->
          <div class="span6 text-center fotos">
            <h3 class="abertura">Fotos</h3>
          </div><!-- SPAN6-->
           <!-- portfolio videos -->
          <div class="portfolio videos">
              <?php
                  $viewName = 'portfolio_videos';
                  $display_id = 'default';
                  print views_embed_view($viewName, $display_id, $args);
              ?>
          </div><!-- portfolio videos -->
            <!-- portfolio fotos -->
          <div class="portfolio fotos">
              <?php
                  $viewName = 'portfolio_fotos';
                  $display_id = 'default';
                  print views_embed_view($viewName, $display_id, $args);
              ?>
          </div><!-- portfolio fotos -->
  </div>
</div><!-- / CONTAINER-->
</section>
<!-- / SECTION-3 -->

  <!--  SECTION-4 -->
<section id="blog">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <!-- portfolio fotos -->
                <div class="blog post">
                    <?php
                        $viewName = 'blog_home';
                        $display_id = 'default';
                        print views_embed_view($viewName, $display_id, $args);
                    ?>
                </div><!-- portfolio fotos -->
            </div>
        </div>
    </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-3 -->
<!-- FOOTER -->
    <footer id="contato">
    <div class="container ">
    <div class="conteudo-contato">
              <div class="row">
                    <div class="row-fluid">
                              <div class="webform-body span6">
                                      <?php
                                          $viewName = 'contato';
                                          $display_id = 'default';
                                          print views_embed_view($viewName, $display_id, $args);
                                      ?>
                                </div>
                                <div class="webform span6">
                                <?php
                                    $block_contato = module_invoke('webform', 'block', 'view', 'client-block-10');
                                    print $block_contato['content'];
                                ?>
                              </div>
                      </div>
              </div>
              <div class="row">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.141191796249!2d-49.287901100000006!3d-25.466960449999974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce3631056bc63%3A0x1c9aa2e0079af676!2sRua+Acre%2C+284+-+%C3%81gua+Verde!5e0!3m2!1spt-BR!2sbr!4v1393523859371" width="600" height="200" frameborder="0" style="border:0"></iframe>
                 </div>

              <div class="row">
                  <?php print $rodape; ?>
                  <p>© 2013 F3 Imagens</p>
              </div>
        </div>

    </div><!-- / CONTAINER-->
    </footer>
<!-- / FOOTER -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php print $base_path; ?>sites/all/themes/f3/assets/js/jquery.js" type="text/javascript"></script>
    <script src="<?php print $base_path; ?>sites/all/themes/f3/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php print $base_path; ?>sites/all/themes/f3/assets/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
    <script src="<?php print $base_path; ?>sites/all/themes/f3/assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
    <script src="<?php print $base_path; ?>sites/all/themes/f3/assets/js/jquery.scrollTo-1.4.2-min.js" type="text/javascript" ></script>
    <script src="<?php print $base_path; ?>sites/all/themes/f3/jquery.easing.min.js"></script>
    <script>
        "use strict"; // Start of use strict

        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: (target.offset().top - 54)
              }, 1000, "easeInOutExpo");
              return false;
            }
          }
        });

        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function() {
          $('.navbar-collapse').collapse('hide');
        });

        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
          target: '#mainNav',
          offset: 54
        });



    //hide menu after click on mobile
    jQuery('.nav-collapse .nav > li > a').click(function(){
        jQuery('.collapse.in').removeClass('in').css('height', '0');
    });
</script>

<script>
    /* controla o logotipo no topo */
    $(document).ready(function(){
        $(window).scroll(function(){
            var y = $(window).scrollTop();
            if( y > 900 ) {
                $("h1").addClass("fechado");
            } else {
                $('h1').removeClass('fechado');
            }
        });
    })
     $(document).ready(function() {
        var images = ['001.jpg', '002.jpg', '003.jpg', '004.jpg', '005.jpg'];
        $('header#top-section').css('background-image', 'url(http://f3imagens.com.br/sites/all/themes/f3/images/' + images[Math.floor(Math.random() * images.length)] + ')');

      });
</script>
<script src="<?php print $base_path; ?>sites/all/themes/f3/extras.js" rel="text/javascript"></script>

<?php print $closure; ?>
</body></html>
