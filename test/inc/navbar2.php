
<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Inicio</a></li>	
									<!-- Mega Menu -->
									<?php
                 
                  $consulta= ejecutarSQL::consultar("SELECT * FROM `area`");
                  
                
                  while($fila=mysqli_fetch_assoc($consulta)){
					 // print_r($fila);
					  
					 ?>
                         
                         <li class="dropdown">
										
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $fila['NombreArea'] ?><b class="caret"></b></a>
										
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row1">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown" style="padding-left: 1px;">
														<?php 
														
															$consultaProveedor=ejecutarSQL::consultar("SELECT * FROM `proveedor` WHERE `CodigoArea`= '".$fila['CodigoArea']."' ");
															while($proveedor=mysqli_fetch_assoc($consultaProveedor)){
															
														?>
														<li><a href="market.php"><i class="fa fa-fw fa-angle-double-right"></i><?php echo  $proveedor['NombreProveedor']; ?></a></li>
														<?php } ?>
													</ul>
												
												</div>
							
											</div>
										
										</ul>
									
									</li>
								<?php } ?>
								</ul>
							
							</div>
							
							</nav>
			
			</div>
		
		</div>
						
									
