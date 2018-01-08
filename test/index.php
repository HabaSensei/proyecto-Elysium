<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php
include 'library/configServer.php';
include 'library/consulSQL.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Elysium Center Acarigua</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elysium Market acarigua araure mercado medicinas discotecas panaderias peluquerias " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='fonts/fontawesome-webfont.woff2' rel='stylesheet' type='text/css'>
<link href='glyphicons-halflings-regular.woff2' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body class="fondo">
	<?php include 'inc/link2.php'; ?>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Para Afiliados interesados: (+58) 412 353 8883</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Elysium center</a>Acarigua</h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Busqueda de productos..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	
		<?php 
		include 'inc/navbar2.php';
		?>
									
									
<!-- //navigation -->
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Compra online tus productos </h3>
				</div>
			</li>
			<li>
				<img src="images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Todos nuestros productos </h3>
				</div>
			</li>
			
			<li>
				<img src="images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3>Comparte esta nueva experiencia</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="newproducts-w3agile ">
		<div class="container">
			<h3>viveres</h3>
			
              <div class="lady-in-on">
			 
					<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
						<div class="agile_top_brands_grids">
							
							
							
							
						<ul id="flexiselDemo1" class="nbs-flexisel-ul" style="display: block; left: -400px;">		
<!-- //breadcrumbs -->
<?php
                 
                  $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 8");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta)){
                         echo '

            <li class="nbs-flexisel-item">
            
            <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'">
            
            <div class="agile_top_brand_left_grid_pos">
            
									<img src="images/offer.png" alt=" " class="img-responsive">
								
								</div>
            
            <div class="agile_top_brand_left_grid1">
									
									<figure>
										
										<div class="snipcart-item block">
										
											<div class="snipcart-thumb">
											
            <img class="img-responsive women" src="assets/img-products/'.$fila['Imagen'].'"></a>
				<div class="hide-in">
				
					<p>'.$fila['NombreProd'].'</p>
					 <h4 style="color:#bc3726;" >BF '.$fila['Precio'].'</h4>
						<div class="snipcart-details top_brand_home_details">
												<form action="#" method="POST">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value='.$fila['NombreProd'].'>
															<input type="hidden" name="amount" value='.$fila['Precio'].'>
															<input type="hidden" name="discount_amount" value="0">
															<input type="hidden" name="currency_code" value="USD">
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Añadir" class="button">
													</fieldset>
												</form>
											</div>
				
                        </div> 
                      </figure>
                      
                      </div></li>
				
                         ';
                     }
                        
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  
                  }  
              ?>  
</div> </div> 
			</div>
             
              </div></div></ul>
              </div>
			
<!-- //new -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
     
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a > <img class="first-slide" src="images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a> <img class="second-slide " src="images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a ><img class="third-slide " src="images/b1.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    
			<div class="newproducts-w3agile">
		<div class="container">
			<h3>medicinas</h3>
              <div class="lady-in-on">
			 
					<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
						<div class="agile_top_brands_grids">
							
							
							
							
						<ul id="flexiselDemo2" class="nbs-flexisel-ul" style="display: block; left: -400px;">
							
							
							<li class="nbs-flexisel-item">
            <?php
            $consulta= ejecutarSQL::consultar("SELECT `producto`.*, `proveedor`.`NombreProveedor`
FROM `proveedor`
    LEFT JOIN `producto` ON `producto`.`NITProveedor` = `proveedor`.`NITProveedor` where Stock > 0 limit 50");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta)){
            
            echo '
            <li class="nbs-flexisel-item">
            
            <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'">
            
            <div class="agile_top_brand_left_grid_pos">
            
									<img src="images/offer.png" alt=" " class="img-responsive">
								
								</div>
            
            <div class="agile_top_brand_left_grid1">
									
									<figure>
										
										<div class="snipcart-item block">
										<p> '.$fila['NombreProveedor'].' </p>
											<div class="snipcart-thumb">
											  
            <img class="img-responsive women" src="assets/img-products/'.$fila['Imagen'].'"></a>
				<div class="hide-in">
				
					<p>'.$fila['NombreProd'].'</p>
					
					 <h4 style="color:#bc3726;" >BF '.$fila['Precio'].'</h4>
						<div class="snipcart-details top_brand_home_details">
												<form action="#" method="POST">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value='.$fila['NombreProd'].'>
															<input type="hidden" name="amount" value='.$fila['Precio'].'>
															<input type="hidden" name="discount_amount" value="0">
															<input type="hidden" name="currency_code" value="USD">
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Añadir" class="button">
													</fieldset>
												</form>
											</div>
				
                        </div> 
                      </figure>
                      
                      </div></li>
				
           
           
           
             ';
                     }
                        
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  
                  }  
              ?>  
            
			</div> </div> 
			</div>
             
              </div></div></ul>
              </div>
			
						<div class="clearfix"> </div>
				</div>
		</div>
	</div></div>
		</div>
	</div></div>
			<div class="clearfix"> </div>
				</div>
		</div>
	</div></div>
	<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="images/p2.jpg" class="img-responsive" alt=""/>
								
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="images/p3.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="images/p4.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="images/111.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>
				</div>
		</div>
	</div></div>
		<section class="hm_plan">
         <div class="container text-center">
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <div class="newproducts-w3agile">
                         <h3>membresias</h3>
                         
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="plan_price" >
                         <h2 style="color: #fcf8e3;">estandar</h2>
                         <div class="price_dol_top">
                             <div  style="background: #fb5c80;" class="price_dol" >
                                 <h3 style="color: #fcf8e3;">30 dias</h3>
                             </div>
                         </div>
                         <ul>
                             <li>Bf. 25.000 </li>
                             <li>Acceso a servicios</li>
                             <li>Acceso al panel de pedidos</li>
                             <li>Acceso por 30 dias</li>
                             
                         </ul>
                         <a style="color: #fcf8e3;" href="#">Suscribirme</a>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="plan_price">
                         <h2 style="color: #fcf8e3;">Premiun</h2>
                         <div class="price_dol_top">
                             <div style=" background: rgba(254, 145, 38, 0.76);"class="price_dol">
                                 <h3 style="color: #fcf8e3;">60 dias</h3>
                             </div>
                         </div>
                         <ul>
                             <li>Bf. 45.000 </li>
                             <li>Acceso a servicios</li>
                             <li>Acceso al panel de pedidos</li>
                             <li>Acceso por 60 dias</li>
                             
                         </ul>
                         <a style="color: #fcf8e3;"href="#">Suscribirme</a>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="plan_price">
                         <h2 style="color: #fcf8e3;">diamante</h2>
                         <div class="price_dol_top">
                             <div style=" background: rgba(255, 0, 234, 0.73);" class="price_dol">
                                 <h3 style="color: #fcf8e3;">90 dias</h3>
                             </div>
                         </div>
                         <ul>
                             <li>Bf. 70.000 </li>
                             <li>Acceso a servicios</li>
                             <li>Acceso al panel de pedidos</li>
                             <li>Acceso por 90 dias</li>
                             
                         </ul>
                         <a  style="color: #fcf8e3;" href="#">Suscribirme</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
						
							
							
							
	<div class="brands-icon-holder"  >
 <div class="container">
	 <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
 <ul id="flexiselDemo3" class="nbs-flexisel-ul">
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-01.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-02.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-03.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-04.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-05.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-06.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-07.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-08.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-01.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-02.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-03.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-04.png" alt="" /></li>
 <li class="nbs-flexisel-item"><img src="images/brand-icons/img-05.png" alt="" /></li>
 </ul>
 </div>
 </div>
  </div> </div>
				
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contacto</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@elysiumcenter.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+58 412-0576376</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Información</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">Nosotros</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contactanos</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Categoria</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Mercado</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Medicina</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">belleza</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Panaderia</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Bar & Discotecas</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Reservaciones</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Perfil</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">Pedidos</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Ingresar</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Registrarse</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Elysium Center. All rights reserved | Design by <a href="">HabaSensei</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 7,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

<!-- //main slider-banner --> 
</body>
</html>
