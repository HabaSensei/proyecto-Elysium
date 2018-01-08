<div class="newproducts-w3agile-offer">
		<div class="container">
			<h3>Ofertas</h3>
              <div class="lady-in-on">
			 
					<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
						<div class="agile_top_brands_grids">
							
							
							
							
						<ul id="flexiselDemo2" class="nbs-flexisel-ul" style="display: block; left: -400px;">
							
							
							<li class="nbs-flexisel-item">
            <?php
            $consulta= ejecutarSQL::consultar("SELECT `producto`.*, `proveedor`.`NombreProveedor`
FROM `proveedor`
    LEFT JOIN `producto` ON `producto`.`NITProveedor` = `proveedor`.`NITProveedor` where Stock > 0 limit 7");
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
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
