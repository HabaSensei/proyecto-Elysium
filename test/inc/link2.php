<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>
<link href="css/style_modal.css" rel="stylesheet" type="text/css" media="all" />

<div class="header" id="header">
<div class="container" >
	
<?php

								 if(!$_SESSION['nombreAdmin']==""){
                                echo ' 
            <ul class="ulclass" style="margin: 0px;">
		    <li> <a href="#"  class="table-cell-td" data-toggle="modal" data-target=".modal-logout"><i class="fa fa-unlock-alt" aria-hidden="true"></i>'.$_SESSION['nombreAdmin'].'</a></li>
			<li> <a href="afiliados.php" ><i class="fa fa-th-large" aria-hidden="true"></i> Administración </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Whatsapp : +58-0412-535-8883</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@ely.center.com</a></li>
			</ul>
                               
                                 ';
								}else if(!$_SESSION['nombreUser']==""){
								echo '
			<ul class="ulclass" style="margin: 0px;">
		    <li> <a href="#"  class="table-cell-td" data-toggle="modal" data-target=".modal-logout"><i class="fa fa-unlock-alt" aria-hidden="true"></i>'.$_SESSION['nombreUser'].'</a></li>
			<li> <a href="pedido.php" ><i class="fa fa-th-large" aria-hidden="true"></i> Pedidos </a></li>
			<li> <a href="#container-carrito-compras" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="collapse"  title="Ver carrito de compras"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito </li>
			<li> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@ely.center.com</a></li>
			</ul>					

								';
								}else{
								echo'
			<ul class="ulclass" style="margin: 0px;">
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Ingresar </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Registrarse </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Whatsapp : +58-0412-535-8883</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@ely.center.com</a></li>
			</ul>					
							';}
                            


?>


	
		
	</div>
</div>
<div id="container-carrito-compras" class="collapse">
    
                <form action="https://www.paypal.com/cgi-bin/webscr" method="POST"> 
                    <!-- SmartCart element -->
                    <div id="smartcart"></div>
                    
                    <!-- Paypal required info, Please update based on your details -->
                    <input name="business" value="dipumedayil@gmail.com" type="hidden">            
                    <input name="currency_code" value="USD" type="hidden">
                    <input name="return" value="http://www.yourdomain.com/yoursuccessurl" type="hidden">            
                    <input name="cancel_return" value="http://www.yourdomain.com/yourcancelurl" type="hidden">
                    
                    <input name="cmd" value="_cart" type="hidden">    
                    <input name="upload" value="1" type="hidden">            
                </form>
            
</div>
<!--- asda -->
<div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content f">
            <br>
            <p class="text-center" style="color:white;">¿Quieres cerrar la sesión?</p>
            
            <p class="text-center">
                <a href="process/logout.php" class="btn btn-primary btn-sm">Si</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>
            </p>
          </div>
      </div>
    </div>
<!--- asda -->
 <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
          </div>
      </div>
    </div>
<!--- asda -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content f" id="modal-form-login">
					<div class="modal-header ">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 align="center"  class="agileinfo_sign"><span></span></h3>
					</div>
						<div align="center" class="modal-body modal-body-sub_agile">
						<div style="float:none; width: 70%;" class="col-md-6 modal_body_left modal_body_center1">
						
									<form action="process/login.php" method="post" role="form" class="FormCatElec" data-form="login">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="nombre-login" required="">
								<label>User</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="clave-login" required=""> 
								<label>Pass</label>
								<span></span>
							</div> 
						<div class="radio">
                    <input class="iradio" type="radio" name="optionsRadios" value="option1" checked>
                    <label>Usuario</label>
                 </div>
                 <div class="radio">
                    <input class="iradio" type="radio" name="optionsRadios" value="option2">
                    <label>Afiliado </label>
                 </div>					
							<input type="submit" value="Ingresar">
							 <div class="ResFormL"></div>
							 
							 </div>
						</form>
						<div class="clearfix"></div>
						<br>
						<p><a href="#" data-toggle="modal" data-target="#myModal2" > No tienes una cuenta?  Registrate!</a></p>

						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog f2">
				<!-- Modal content-->
				<div class="modal-content f"  >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 align="center" class="agileinfo_sign"><span></span></h3>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<form id="add-user" action="process/regclien.php" role="form" method="post" >
						<div class="col-md-6 modal_body_left modal_body_left1">
						
						
							<div class="styled-input agile-styled-input-top ">
								<input type="text"  required name="clien-nit" data-toggle="tooltip"  title="Ingrese su número de Cedula. Solamente números y guiones(-)" maxlength="30" pattern="[0-9-]{14,30}">
								<label >Cedula.</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" required name="clien-fullname" data-toggle="tooltip"  title="Ingrese sus nombres.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
								<label>Nombre.</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" required name="clien-lastname" data-toggle="tooltip"  title="Ingrese sus apellido(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
								<label>Apellido.</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" required name="clien-dir" data-toggle="tooltip" d title="Ingrese la direción en la reside actualmente" maxlength="100">
								<label>Dir.</label>
								<span></span>
													</div> 
							</div>
							<div class="col-md-6 modal_body_left modal_body_left1" >
							<div class="styled-input agile-styled-input-top">
								<input type="text" required name="clien-phone" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip"  title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11">
								<label>Tel.</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" required name="clien-name" data-toggle="tooltip" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)" pattern="[a-zA-Z]{1,9}" maxlength="9">
								<label>User.</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text"  required name="clien-email" data-toggle="tooltip"  title="Ingrese la dirección de su Email" maxlength="50">
								<label>Email.</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password"  required name="clien-pass" data-toggle="tooltip"  title="Defina una contraseña para iniciar sesión">			 
								<label>Pass.</label>
								<span></span>
							
							

						</div>
						</div>
						<div align="center">
							
							<input  type="submit" value="registro">
							</div>
						</form>
						<div class="clearfix"></div><br>
					<p align="center"  ><a href="#">Al ingresar esta aceptando Terminos y Usos | &copy 2017 Todos los Derechos Reservados </a></p>
				
					</div>
					
					</div>
				</div>
				<!-- //Modal content-->
				
				
				<!-- //Modal content-->
				
			</div>
		</div>
<script type="text/javascript">
	$(document).ready(function() {
    /*Funcion para enviar datos de formularios con ajax*/
    $('.FormCatElec').submit(function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var type=$(this).attr('method');
        var url=$(this).attr('action');
        var formType=$(this).attr('data-form');

        if(formType=="login"){
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function(){
                    $(".ResFormL").html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: 100%">Iniciando sesion</div></div>');
                },
                error: function() {
                    $(".ResFormL").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $(".ResFormL").html(data);
                }
            });
            return false;
        }else{
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function(){
                    $(".ResForm").html('Procesando... <br><img src="assets/img/enviando.gif" class="center-all-contens">');
                },
                error: function() {
                    $(".ResForm").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $(".ResForm").html(data);
                }
            });
            return false;
        }

        
    });
});
</script>
 <script>
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });

        });
    </script>
     <script src="js/jquery.smartCart.min.js" type="text/javascript"></script>
    <!-- Initialize -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Initialize Smart Cart    	
            $('#smartcart').smartCart({
                                submitSettings: {
                                    submitType: 'paypal' // form, paypal, ajax
                                },
                                toolbarSettings: {
                                    checkoutButtonStyle: 'paypal' // default, paypal, image
                                }
                            });
		});
    </script>
    
    
    <script src="plugins/icheck/js/icheck.min.js"></script>
    <script src="js/carrito.js"></script>
