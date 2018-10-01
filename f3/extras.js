(function($) {
   $().ready(function() { 
   			/* MENU */
   			$(".menu-editores").mouseenter(function(){
		      $(".menu-editores>ul").fadeIn(200);
		    });
		    
		    $(".menu-editores").mouseleave(function(){
		      $(".menu-editores>ul").fadeOut(200);
		    });
		    $(".nav li a").click(function(){
		    	$('#empresa .clientes').fadeOut(100);
		    	$("#empresa .empresa").fadeIn("slow");
		    	$('#portfolio .portfolio.videos').fadeOut(100);
		    	$("#portfolio").removeClass("videos");
		    	$('#portfolio .portfolio.fotos').fadeOut(100);
		    	$("#portfolio").removeClass("fotos");
		    	$("#portfolio h3.abertura").fadeIn("slow");
		    });
		   
   			/*-------------------------------------------------------------------------------------------------*/
			/* EMPRESA */
			$('#empresa .veja-clientes a').click(function(){
				$("#empresa .empresa").fadeOut(100);
				$('#empresa .clientes').fadeIn("slow");
			});
			$('#empresa .view-clientes2 .controles a').click(function(){					
				$('#empresa .clientes').fadeOut(100);
				$("#empresa .empresa").fadeIn("slow");
			});
			
			/*-------------------------------------------------------------------------------------------------*/
			/* EQUIPE */
			$('.view-equipe .views-row').mouseenter(function(){
				$('.info.first', this).fadeOut(100);
			}).mouseleave(function(){
				$('.info.first', this).fadeIn(100);
			});
			$('#equipe .view-equipe .views-field-nothing .foto img').unwrap();
			
			/* scroll */
			var scrolled=0;					
		    $("#direita").click(function(){
                scrolled=scrolled+475;			        
				$("#equipe .container").animate({ scrollLeft:  scrolled }, 400);				
			});
		    
		    $("#esquerda").click(function(){
				scrolled=scrolled-475;							
				$("#equipe .container").animate({ scrollLeft:  scrolled }, 400);
			});
			$('#equipe .container').scroll(function(){
				var fim = $(this).scrollLeft();
				if(fim > 100){
					$('#equipe #esquerda').fadeIn(200);	
				} else {
					$('#equipe #esquerda').fadeOut(200);	
				}
				if(fim >= 2000){
					$('#equipe #direita').fadeOut(200);	
				} else {
					$('#equipe #direita').fadeIn(200);	
				}
			});	
			
			/*-------------------------------------------------------------------------------------------------*/
			/* PORTFOLIO */
			/* videos */
			$('#portfolio .videos h3.abertura').click(function(){
				$("#portfolio").addClass("videos");
				$("#portfolio h3.abertura").fadeOut(100);
				$('#portfolio .portfolio.videos').fadeIn("slow");
			});
			$('#portfolio .portfolio.videos .view-header .controles').click(function(){	
				$("#portfolio").removeClass("videos");
				$('#portfolio .portfolio.videos').fadeOut(100);
				$("#portfolio h3.abertura").fadeIn("slow");
			});
			$('#portfolio .portfolio.videos .view-portfolio-videos .views-row').mouseenter(function(){
				$('.views-field-title', this).fadeOut(100);
			}).mouseleave(function(){
				$('.views-field-title', this).fadeIn(100);
			});
			
			/* fotos */
			$('#portfolio .fotos h3.abertura').click(function(){
				$("#portfolio").addClass("fotos");
				$("#portfolio h3.abertura").fadeOut(100);
				$('#portfolio .portfolio.fotos').fadeIn("slow");
			});
			$('#portfolio .portfolio.fotos .view-header .controles').click(function(){				
				$("#portfolio").removeClass("fotos");
				$('#portfolio .portfolio.fotos').fadeOut(100);				
				$("#portfolio h3.abertura").fadeIn("slow");
			});
			$('#portfolio .portfolio.fotos .view-portfolio-fotos .views-row').mouseenter(function(){
				$('.views-field-title', this).fadeOut(100);
			}).mouseleave(function(){
				$('.views-field-title', this).fadeIn(100);
			});
			
			
			
/*$(".coda-slider .dj").mouseenter(function(){
        $(this).children(".logo").animate({
          left: "-=342"
        }, 200);
    });   */
		
		
    });
})(jQuery);