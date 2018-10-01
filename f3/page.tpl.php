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
      <link href="<?php print $base_path; ?>sites/all/themes/f3/conteudo.css" rel="stylesheet">
      <!-- Custom scrollbars CSS -->
      <link href="<?php print $base_path; ?>sites/all/themes/f3/jquery.mCustomScrollbar.css" rel="stylesheet" />
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
                  <h1 class="fechado"><a href="<?php print $base_path; ?>"><?php print $head_title ?></a></h1>
                  <ul class="nav" id="topnav">
                      <li class="home active"><a href="<?php print $base_path; ?>#top-section">Home</a></li>
                      <li class="empresa"><a href="<?php print $base_path; ?>#empresa">Empresa</a></li>
                      <li class="equipe"><a href="<?php print $base_path; ?>#equipe">Equipe</a></li>
                      <li class="portfolio"><a href="<?php print $base_path; ?>#portfolio">Portfolio</a></li>
                      <li class="blog"><a href="<?php print $base_path; ?>#blog">Blog</a></li>
                      <li class="contato"><a href="<?php print $base_path; ?>#contato">Contato</a></li>
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
<!--  SECTION-1 -->  
<section id="conteudo">
  <div class="container">   
  
  <div class="row-fluid">
    <div class="span12">
           <h1 class="title"><?php print $title ?></h1>     
           
           <?php print $content; ?>     
           
    </div><!-- SPAN12-->
    </div><!-- SPAN6-->
  </div>
  </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-1 -->
      
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
                
                      <iframe frameborder="0" height="200" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Anna+Gbur+Barcik,+Curitiba+-+Paran%C3%A1&amp;aq=0&amp;oq=anna+gb&amp;sll=-25.495249,-49.288399&amp;sspn=0.937099,1.234589&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Anna+Gbur+Barcik+-+Santo+In%C3%A1cio,+Curitiba+-+Paran%C3%A1,+82010-670&amp;ll=-25.424581,-49.324964&amp;spn=0.014651,0.01929&amp;t=m&amp;z=14&amp;output=embed" width="100%"></iframe>
                
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
    <script>
    jQuery(document).ready(function(){
      
      jQuery('#topnav').localScroll(3000);
      jQuery('#startbtn').localScroll(5000);
      jQuery('#top-section').parallax("50%", 0.1);
      jQuery('#empresa').parallax("50%", 0.1);
      jQuery('#equipe').parallax("50%", 0.1);
      jQuery('#portfolio').parallax("50%", 0.1);
      jQuery('#blog').parallax("50%", 0.1);
      jQuery('#contato').parallax("50%", 0.1);
      jQuery('.carousel').carousel('pause');
    })
    </script>
<script>
//hide menu after click on mobile
jQuery('.nav-collapse .nav > li > a').click(function(){
    jQuery('.collapse.in').removeClass('in').css('height', '0');
});
/* carrossel de clientes */
/*
function agrupar(){          
$("#empresa #carousel-clientes .views-row").addClass('item');
$("#empresa #carousel-clientes .item").first().addClass('active');
$("#equipe #carousel-equipe .views-row").addClass('item');
$("#equipe #carousel-equipe .item").first().addClass('active');
};
agrupar();*/
</script>
<!-- custom scrollbars plugin -->
  <script src="<?php print $base_path; ?>sites/all/themes/f3/jquery.mCustomScrollbar.js"></script>
  <script>
    (function($){
      $(window).load(function(){
        
        $("#equipe .container").mCustomScrollbar({
          set_width:false, /*optional element width: boolean, pixels, percentage*/
          set_height:false, /*optional element height: boolean, pixels, percentage*/
          horizontalScroll:true, /*scroll horizontally: boolean*/
          scrollInertia:950, /*scrolling inertia: integer (milliseconds)*/
          mouseWheel:false, /*mousewheel support: boolean*/
          mouseWheelPixels:"auto", /*mousewheel pixels amount: integer, "auto"*/
          autoDraggerLength:true, /*auto-adjust scrollbar dragger length: boolean*/
          autoHideScrollbar:false, /*auto-hide scrollbar when idle*/
          scrollButtons:{ /*scroll buttons*/
            enable:true, /*scroll buttons support: boolean*/           
          },
          advanced:{
            updateOnBrowserResize:true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
            updateOnContentResize:false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
            autoExpandHorizontalScroll:false, /*auto-expand width for horizontal scrolling: boolean*/
            autoScrollOnFocus:true, /*auto-scroll on focused elements: boolean*/
            normalizeMouseWheelDelta:false /*normalize mouse-wheel delta (-1/1)*/
          },
          contentTouchScroll:true, /*scrolling by touch-swipe content: boolean*/
          callbacks:{
            onScrollStart:function(){}, /*user custom callback function on scroll start event*/
            onScroll:function(){}, /*user custom callback function on scroll event*/
            onTotalScroll:function(){}, /*user custom callback function on scroll end reached event*/
            onTotalScrollBack:function(){}, /*user custom callback function on scroll begin reached event*/
            onTotalScrollOffset:0, /*scroll end reached offset: integer (pixels)*/
            onTotalScrollBackOffset:0, /*scroll begin reached offset: integer (pixels)*/
            whileScrolling:function(){} /*user custom callback function on scrolling event*/
          },
          theme:"light-2" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
        });
      });
    })(jQuery);
  </script>
<script src="<?php print $base_path; ?>sites/all/themes/f3/extras.js" rel="text/javascript"></script>
   
<?php print $closure; ?>
</body></html>