<script type="text/javascript" src="js/admin.js"></script>
 <div style='background: #3399cc;' class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
 <ul class="nav navbar-nav" role="tablist">
              <li class="active"><a href="index.php" class="act">Inicio</a></li>
              <li role="presentation"><a href="#Productos" role="tab" data-toggle="tab">Productos</a></li>
              <li role="presentation"><a href="#Proveedores" role="tab" data-toggle="tab">Proveedores</a></li>
              <li role="presentation"><a href="#Categorias" role="tab" data-toggle="tab">Categorías</a></li>
              <li role="presentation"><a href="#Area" role="tab" data-toggle="tab">Area</a></li>
              <li role="presentation"><a href="#Admins" role="tab" data-toggle="tab">Admin</a></li>
              <li role="presentation"><a href="#Pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
            </ul>
            </nav></div></div>
            <div class="tab-content">
                <!--==============================Panel productos===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Productos">
                <div class="row3">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div >
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                            <form id="add-product" role="form" action="process/regproduct.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Código de producto</label>
                                <input type="text" class="form-control"  placeholder="Código" required maxlength="30" name="prod-codigo">
                              </div>
                              <div class="form-group">
                                <label>Nombre de producto</label>
                                <input type="text" class="form-control"  placeholder="Nombre" required maxlength="30" name="prod-name">
                              </div>
                              <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="prod-categoria">
                                    <?php 
                                        $categoriac=  ejecutarSQL::consultar("select * from categoria");
                                        while($catec=mysqli_fetch_array($categoriac)){
                                            echo '<option value="'.$catec['CodigoCat'].'">'.$catec['Nombre'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control"  placeholder="Precio" required maxlength="20" pattern="[0-9]{1,20}" name="prod-price">
                              </div>
                              <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control"  placeholder="Modelo" required maxlength="30" name="prod-model">
                              </div>
                              <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control"  placeholder="Marca" required maxlength="30" name="prod-marca">
                              </div>
                              <div class="form-group">
                                <label>Peso</label>
                                <input type="text" class="form-control"  placeholder="Peso" required maxlength="30" name="prod-peso">
                              </div>
                              <div class="form-group">
                                <label>Unidades disponibles</label>
                                <input type="text" class="form-control"  placeholder="Unidades" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock">
                              </div>
                              <div class="form-group">
                                <label>Proveedor</label>
                                <select class="form-control" name="prod-codigoP">
                                    <?php 
                                        $proveedoresc=  ejecutarSQL::consultar("select * from proveedor");
                                        while($provc=mysqli_fetch_array($proveedoresc)){
                                            echo '<option value="'.$provc['NITProveedor'].'">'.$provc['NombreProveedor'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Imagen de producto</label>
                                <input type="file" name="img" >
                                <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                              </div>
                                <input type="hidden"  name="admin-name" value="<?php echo $_SESSION['nombreAdmin'] ?>">
                              <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p>
                              <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un producto</h2>
                             <form action="process/delprod.php" method="post" role="form">
                                 <div class="form-group">
                                     <label>Productos</label>
                                     <select class="form-control" name="prod-code">
                                         <?php 
                                             $productoc=  ejecutarSQL::consultar("select * from producto");
                                             while($prodc=mysqli_fetch_array($productoc)){
                                                 echo '<option value="'.$prodc['CodigoProd'].'">'.$prodc['Marca'].'-'.$prodc['NombreProd'].'-'.$prodc['Modelo'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>
                         </div>
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de producto</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">Código</th>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Categoría</th>
                                          <th class="text-center">Precio</th>
                                          <th class="text-center">Modelo</th>
                                          <th class="text-center">Marca</th>
                                          <th class="text-center">Peso</th>
                                          <th class="text-center">Unidades</th>
                                          <th class="text-center">Proveedor</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $productos=  ejecutarSQL::consultar("select * from producto");
                                        $upr=1;
                                        while($prod=mysqli_fetch_array($productos)){
                                            echo '
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-'.$upr.'">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="'.$prod['CodigoProd'].'">
                                                          <input class="form-control" type="text" name="code-prod" maxlength="30" required="" value="'.$prod['CodigoProd'].'">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="'.$prod['NombreProd'].'"></td>
                                                        <td>';
                                                            $categoriac3=  ejecutarSQL::consultar("select * from categoria where CodigoCat='".$prod['CodigoCat']."'");
                                                            while($catec3=mysqli_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['CodigoCat'];
                                                                $nameCat=$catec3['Nombre'];
                                                            }
                                                      echo '<select class="form-control" name="prod-category">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from categoria");
                                                                while($catec2=mysqli_fetch_array($categoriac2)){
                                                                    if($catec2['CodigoCat']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['CodigoCat'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="'.$prod['Precio'].'"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="15" value="'.$prod['Modelo'].'"></td>    
                                                        <td><input class="form-control" type="text-area" name="marc-prod" maxlength="15" required="" value="'.$prod['Marca'].'"></td>
                                                        <td><input class="form-control" type="tel" name="model-peso" required="" maxlength="10" value="'.$prod['Peso'].'"></td>
                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="5" required="" value="'.$prod['Stock'].'"></td>
                                                        <td>';
                                                           $proveedoresc3=  ejecutarSQL::consultar("select * from proveedor where NITProveedor='".$prod['NITProveedor']."'");
                                                           while($provc3=mysqli_fetch_array($proveedoresc3)){
                                                                    $nombreP=$provc3['NombreProveedor'];
                                                                    $nitP=$provc3['NITProveedor'];
                                                            }
                                                       echo '<select class="form-control" name="prod-Prove">';
                                                                echo '<option value="'.$nitP.'">'.$nombreP.'</option>';
                                                                $proveedoresc2=  ejecutarSQL::consultar("select * from proveedor");
                                                                while($provc2=mysqli_fetch_array($proveedoresc2)){
                                                                    if($provc2['NITProveedor']==$nitP){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$provc2['NITProveedor'].'">'.$provc2['NombreProveedor'].'</option>';
                                                                    }  
                                                                }  
                                                       echo '</select>
                                                        </td>
                                                        
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                ';
                                            $upr=$upr+1;
                                        }
                                      ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--==============================Panel Proveedores===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Proveedores">
                    <div class="row3">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="add-provee">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un proveedor</h2>
                            <form action="process/regprove.php" method="post" role="form">
                                <div class="form-group">
                                    <label>NIT</label>
                                    <input class="form-control" type="text" name="prove-nit" placeholder="NIT proveedor" maxlength="30" required="">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="prove-name" placeholder="Nombre proveedor" maxlength="30" required="">
                                </div>
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input class="form-control" type="text" name="prove-dir" placeholder="Dirección proveedor" required="">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" type="tel" name="prove-tel" placeholder="Número telefónico" pattern="[0-9]{1,20}" maxlength="20" required="">
                                </div>
                                <div class="form-group">
                                    <label>Página web</label>
                                    <input class="form-control" type="text" name="prove-web" placeholder="Página web proveedor" required="">
                                </div>
                                <div class="form-group">
                                <label>Area</label>
                                <select class="form-control" name="prove-area">
                                    <?php 
                                        $areap=  ejecutarSQL::consultar("select * from area");
                                        while($area=mysqli_fetch_array($areap)){
                                            echo '<option value="'.$area['CodigoArea'].'">'.$area['NombreArea'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                                <p class="text-center"><button type="submit" class="btn btn-primary">Añadir proveedor</button></p>
                                <br>
                                <div id="res-form-add-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="del-prove">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un proveedor</h2>
                            <form action="process/delprove.php" method="post" role="form">
                                <div class="form-group">
                                    <label>Proveedores</label>
                                    <select class="form-control" name="nit-prove">
                                        <?php 
                                            $proveNIT=  ejecutarSQL::consultar("select * from proveedor");
                                            while($PN=mysqli_fetch_array($proveNIT)){
                                                echo '<option value="'.$PN['NITProveedor'].'">'.$PN['NITProveedor'].' - '.$PN['NombreProveedor'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar proveedor</button></p>
                                <br>
                                <div id="res-form-del-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>    
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de proveedor</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">NIT</th>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Dirección</th>
                                          <th class="text-center">Telefono</th>
                                          <th class="text-center">Página web</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                              $proveedores=  ejecutarSQL::consultar("select * from proveedor");
                                              $up=1;
                                              while($prov=mysqli_fetch_array($proveedores)){
                                                  echo '
                                                      <div id="update-proveedor">
                                                        <form method="post" action="process/updateProveedor.php" id="res-update-prove-'.$up.'">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="nit-prove-old" required="" value="'.$prov['NITProveedor'].'">
                                                                <input class="form-control" type="text" name="nit-prove" maxlength="30" required="" value="'.$prov['NITProveedor'].'">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="prove-name" maxlength="30" required="" value="'.$prov['NombreProveedor'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-dir" required="" value="'.$prov['Direccion'].'"></td>
                                                              <td><input class="form-control" type="tel" name="prove-tel" required="" maxlength="20" value="'.$prov['Telefono'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-web" maxlength="30" required="" value="'.$prov['PaginaWeb'].'"></td>
                                                              <td>';
                                                           $areac1=  ejecutarSQL::consultar("select * from area where CodigoArea='".$prov['CodigoArea']."'");
                                                           while($ac1=mysqli_fetch_array($areac1)){
                                                                    $nombreA=$ac1['NombreArea'];
                                                                    $codA=$ac1['CodigoArea'];
                                                            }
                                                       echo '<select class="form-control" name="prove-area">';
                                                                echo '<option value="'.$codA.'">'.$nombreA.'</option>';
                                                                $areac2=  ejecutarSQL::consultar("select * from area");
                                                                while($ac2=mysqli_fetch_array($areac2)){
                                                                    if($ac2['CodigoArea']==$codA){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$ac2['CodigoArea'].'">'.$ac2['NombreArea'].'</option>';
                                                                    }  
                                                                }  
                                                       echo '</select>
                                                        </td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-'.$up.'">Actualizar</button>
                                                                  <div id="res-update-prove-'.$up.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                                                  $up=$up+1;
                                              }
                                            ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--==============================Panel Categorias===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Categorias">
                    <div class="row3">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-categori">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar categoría</h2>
                                <form action="process/regcategori.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input class="form-control" type="text" name="categ-code" placeholder="Código de categoria" maxlength="9" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="categ-name" placeholder="Nombre de categoria" maxlength="30" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <input class="form-control" type="text" name="categ-descrip" placeholder="Descripcióne de categoria" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar categoría</button></p>
                                    <br>
                                    <div id="res-form-add-categori" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-categori">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar una categoría</h2>
                                <form action="process/delcategori.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Categorías</label>
                                        <select class="form-control" name="categ-code">
                                            <?php 
                                                $categoriav=  ejecutarSQL::consultar("select * from categoria");
                                                while($categv=mysqli_fetch_array($categoriav)){
                                                    echo '<option value="'.$categv['CodigoCat'].'">'.$categv['CodigoCat'].' - '.$categv['Nombre'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar categoría</button></p>
                                    <br>
                                    <div id="res-form-del-cat" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar categoría</h3></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $categorias=  ejecutarSQL::consultar("select * from categoria");
                                              $ui=1;
                                              while($cate=mysqli_fetch_array($categorias)){
                                                  echo '
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateCategory.php" id="res-update-category-'.$ui.'">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="'.$cate['CodigoCat'].'">
                                                                <input class="form-control" type="text" name="categ-code" maxlength="9" required="" value="'.$cate['CodigoCat'].'">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="'.$cate['Nombre'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="'.$cate['Descripcion'].'"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-'.$ui.'">Actualizar</button>
                                                                  <div id="res-update-category-'.$ui.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                                                  $ui=$ui+1;
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!--==============================Panel Area===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Area">
                    <div class="row3">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-area">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar Area</h2>
                                <form action="process/regarea.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input class="form-control" type="text" name="area-code" placeholder="Código de Area" maxlength="9" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="area-name" placeholder="Nombre de Area" maxlength="30" required="">
                                    </div>
                                    
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar Area</button></p>
                                    <br>
                                    <div id="res-form-add-area" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-area">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar Area</h2>
                                <form action="process/delarea.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Areas</label>
                                        <select class="form-control" name="area-code">
                                            <?php 
                                                $areav=  ejecutarSQL::consultar("select * from area");
                                                while($arev=mysqli_fetch_array($areav)){
                                                    echo '<option value="'.$arev['CodigoArea'].'">'.$arev['CodigoArea'].' - '.$arev['NombreArea'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar categoría</button></p>
                                    <br>
                                    <div id="res-form-del-area" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar area</h3></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $areac=  ejecutarSQL::consultar("select * from area");
                                              $uare=1;
                                              while($area=mysqli_fetch_array($areac)){
                                                  echo '
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateArea.php" id="res-update-Area-'.$uare.'">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="area-code-old" maxlength="9" required="" value="'.$area['CodigoArea'].'">
                                                                <input class="form-control" type="text" name="area-code" maxlength="9" required="" value="'.$area['CodigoArea'].'">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="area-name" maxlength="30" required="" value="'.$area['NombreArea'].'"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-area-'.$uare.'">Actualizar</button>
                                                                  <div id="res-update-area-'.$uare.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                                                  $uare=$uare+1;
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!--==============================Panel Admins===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Admins">
                    <div class="row3">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-admin">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar administrador</h2>
                                <form action="process/regAdmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="admin-name" placeholder="Nombre" maxlength="9" pattern="[a-zA-Z]{4,9}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input class="form-control" type="password" name="admin-pass" placeholder="Contraseña" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar administrador</button></p>
                                    <br>
                                    <div id="res-form-add-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-admin">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar administrador</h2>
                                <form action="process/deladmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Administradores</label>
                                        <select class="form-control" name="name-admin">
                                            <?php 
                                                $adminCon=  ejecutarSQL::consultar("select * from administrador");
                                                while($AdminD=mysqli_fetch_array($adminCon)){
                                                    echo '<option value="'.$AdminD['Nombre'].'">'.$AdminD['Nombre'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar administrador</button></p>
                                    <br>
                                    <div id="res-form-del-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12"></div>
                    </div>
                </div>
                <!--==============================Panel pedidos===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Pedidos">
                    <div class="row3">
                        <div class="col-xs-12">
                            <br><br>
                            <div id="del-pedido">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar pedido</h2>
                                <form action="process/delPedido.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Pedidos</label>
                                        <select class="form-control" name="num-pedido">
                                            <?php 
                                                $pedidoC=  ejecutarSQL::consultar("select * from venta");
                                                while($pedidoD=mysqli_fetch_array($pedidoC)){
                                                    echo '<option value="'.$pedidoD['NumPedido'].'">Pedido #'.$pedidoD['NumPedido'].' - Estado('.$pedidoD['Estado'].') - Fecha('.$pedidoD['Fecha'].')</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar pedido</button></p>
                                    <br>
                                    <div id="res-form-del-pedido" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                            <br><br>
                             <div class="panel panel-info">
                               <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar estado de pedido</h3></div>
                              <div class="table-responsive">
                                  <table class="table table-bordered">
                                      <thead class="">
                                          <tr>
                                              <th class="text-center">#</th>
                                              <th class="text-center">Fecha</th>
                                              <th class="text-center">Cliente</th>
                                              <th class="text-center">Descuento</th>
                                              <th class="text-center">Total</th>
                                              <th class="text-center">Estado</th>
                                              <th class="text-center">Opciones</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $pedidoU=  ejecutarSQL::consultar("select * from venta");
                                            $upp=1;
                                            while($peU=mysqli_fetch_array($pedidoU)){
                                                echo '
                                                    <div id="update-pedido">
                                                      <form method="post" action="process/updatePedido.php" id="res-update-pedido-'.$upp.'">
                                                        <tr>
                                                            <td>'.$peU['NumPedido'].'<input type="hidden" name="num-pedido" value="'.$peU['NumPedido'].'"></td>
                                                            <td>'.$peU['Fecha'].'</td>
                                                            <td>';
                                                                $conUs= ejecutarSQL::consultar("select * from cliente where NIT='".$peU['NIT']."'");
                                                                while($UsP=mysqli_fetch_array($conUs)){
                                                                    echo $UsP['NombreCompleto'];
                                                                }
                                                    echo   '</td>
                                                            <td>'.$peU['Descuento'].'%</td>
                                                            <td>'.$peU['TotalPagar'].'</td>
                                                            <td>
                                                                <select class="form-control" name="pedido-status">';
                                                                    if($peU['Estado']=="Pendiente"){
                                                                       echo '<option value="Pendiente">Pendiente</option>'; 
                                                                       echo '<option value="Entregado">Entregado</option>'; 
                                                                    }
                                                                    if($peU['Estado']=="Entregado"){
                                                                       echo '<option value="Entregado">Entregado</option>';
                                                                       echo '<option value="Pendiente">Pendiente</option>'; 
                                                                    }
                                                    echo        '</select>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="submit" class="btn btn-sm btn-primary button-UPPE" value="res-update-pedido-'.$upp.'">Actualizar</button>
                                                                <div id="res-update-pedido-'.$upp.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                            </td>
                                                        </tr>
                                                      </form>
                                                    </div>
                                                    ';
                                                $upp=$upp+1;
                                            }
                                          ?>
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>

</html>
