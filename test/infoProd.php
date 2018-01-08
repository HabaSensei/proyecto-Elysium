<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php
	
 include 'library/config2.php';
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
<body>
	<?php include 'inc/link2.php'; ?>
<div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Para Afiliados interesados: (+58) 412 353 8883</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Elysium Center</a>Acarigua</h1>
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
	<?php include 'inc/navbar2.php'; ?>
<div class="products">
    <section id="infoproduct">
        <div style="width: 1170px;" class="container">
            <div class="row1">
				<div class="page-header">
                    
					
                    
                
                <?php 
                    $CodigoProducto=$_GET['CodigoProd'];
                    $productoinfo=  ejecutarSQL::consultar("SELECT `producto`.*, `proveedor`.`NombreProveedor`, `categoria`.`Nombre`
FROM `categoria`
    LEFT JOIN `producto` ON `producto`.`CodigoCat` = `categoria`.`CodigoCat`
    LEFT JOIN `proveedor` ON `producto`.`NITProveedor` = `proveedor`.`NITProveedor`
 where CodigoProd='".$CodigoProducto."'");
                    while($fila=mysqli_fetch_array($productoinfo)){
                        echo '
                        <h1>Tienda <small class="tittles-pages-logo">'.$fila['NombreProveedor'].'</small> </h1>
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
															<input type="submit" name="submit" value="Añadir al Carrito" class="button2">
													</fieldset>
												</form>
                        
						</div>
						<div class="agileinfo_single">
                        <div class="col-md-4 agileinfo_single_left">
                        <img id="example" src="assets/img-products/'.$fila['Imagen'].'" alt=" " class="img-responsive">
                        </div>
						<div class="col-md-8 agileinfo_single_right">
						<h2>'.$fila['NombreProd'].'  <small class="small-price" >Bf '.$fila['Precio'].'</small></h2>
						
					<div class="w3agile_description">    
								<h4>Descripciòn:</h4><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.</p><br>
								<div class="small-price"> </div>
								
								<table class="table">
    <thead>
      <tr>
        <th>Modelo</th>
        <th>Tipo</th>
        <th>Peso</th>
        <th>Marca</th>
        <th>Unidades Disponibles</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>'.$fila['Modelo'].'</td>
        <td>'.$fila['Nombre'].'</td>
        <td>'.$fila['Peso'].'</td>
        <td>'.$fila['Marca'].'</td>
        <td>'.$fila['Stock'].'</td>
      </tr>
      
    </tbody>
  </table>
</div>
                               
					
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							
							
						</div>
						<div >
						
                                
                        
                            
						</div>
					</div>
				</div>
				
                            
                            
                            
                        ';
                    }
                ?>
                <div class="clearfix"> </div>
			</div>
		</div>
	</div>
            </div>
        </div>
    </section>
    
    <?php include 'ofertas.php'; ?>
    <?php include 'inc/footer.php'; ?>
    
    <script src="js/bootstrap.min.js"></script>
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
</body>

</html>
