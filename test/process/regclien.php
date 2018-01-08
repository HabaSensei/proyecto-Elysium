
<?php
include '../library/configServer.php';
include '../library/consulSQL.php';
include '../inc/link.php';


sleep(3);
error_reporting(E_NOTICE);
$nitCliente= $_POST['clien-nit'];
$nameCliente= $_POST['clien-name'];
$fullnameCliente= $_POST['clien-fullname'];
$apeCliente= $_POST['clien-lastname'];
$passCliente= md5($_POST['clien-pass']);
$dirCliente= $_POST['clien-dir'];
$phoneCliente= $_POST['clien-phone'];
$emailCliente= $_POST['clien-email'];

if(!$nitCliente=="" && !$nameCliente=="" && !$apeCliente=="" && !$dirCliente=="" && !$phoneCliente=="" && !$emailCliente=="" && !$fullnameCliente==""){
    $verificar=  ejecutarSQL::consultar("select * from cliente where NIT='".$nitCliente."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("cliente", "NIT, Nombre, NombreCompleto, Apellido, Direccion, Clave, Telefono, Email", "'$nitCliente','$nameCliente','$fullnameCliente','$apeCliente','$dirCliente', '$passCliente','$phoneCliente','$emailCliente'")){
            echo '
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->


</head>
<body>
	

	<div class="logo_products">
		<div class="container"  style="margin-bottom: 3px;">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Para Afiliados interesados: (+58) 412 353 8883</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php">Elysium center</a>Acarigua</h1>
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
	
		
	
		
<!-- register -->

<section id="reg-info-index">
        <div class="container">
            <div class="row" style=" padding-bottom: 0em;">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;  ">
                        <p style="margin: 10px;" ><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registro Exitoso</h3> 
                        <p   style="margin-top: 25px;" ><a href="../login.php" class="btn btn-info btn-block" style="width: 50%; display: inline-block;">Iniciar sessión</a></p>
                        
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="../images/Smart-TV-RegInfo.png" alt="Smart-TV" class="img-responsive" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

<!-- register -->
            
  

</body>
</html>
            
            
            ';
        }else{
           echo '
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->


</head>
<body>
	

	<div class="logo_products">
		<div class="container"  style="margin-bottom: 3px;">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Para Afiliados interesados: (+58) 412 353 8883</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php">Elysium center</a>Acarigua</h1>
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
	
		
	
		
<!-- register -->

<section id="reg-info-index">
        <div class="container">
            <div class="row" style=" padding-bottom: 0em;">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;  ">
                        <p style="margin: 10px;" ><i class="fa fa-users fa-4x"></i></p>
                        <h3>Error de registro</h3> 
                        <p   style="margin-top: 25px;" ><a href="../reg.php" class="btn btn-info btn-block" style="width: 50%; display: inline-block;">Volver al registro</a></p>
                        
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="../images/Smart-TV-RegInfo.png" alt="Smart-TV" class="img-responsive" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

<!-- register -->
            
  

</body>
</html>
           
           
           
           
           
           
           '; 
        }
    }else{
        echo '
        
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->


</head>
<body>
	

	<div class="logo_products">
		<div class="container"  style="margin-bottom: 3px;">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Para Afiliados interesados: (+58) 412 353 8883</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php">Elysium center</a>Acarigua</h1>
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
	
		
	
		
<!-- register -->

<section id="reg-info-index">
        <div class="container">
            <div class="row" style=" padding-bottom: 0em;">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;  ">
                        <p style="margin: 10px;" ><i class="fa fa-users fa-4x"></i></p>
                        <h3>Error en el registro</h3>
                        <strong><p style="margin: 10px;" >El campo de Cedula ya se encuentra registrado </p></strong>
                        <table align="center">
                        <tbody  >
                        <td style="padding: 20px; padding-left: 0%;" >
                        
                        <a href="../reg.php" class="btn btn-info btn-block" >Volver al registro</a> 
                        
                        </td>
                        
                        <td >
                        
                        <a href="../login.php" class="btn btn-success btn-block" >Iniciar Sessión</a>  
						
						</td>
						
						</tbody>
						</table>
                        
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="../images/Smart-TV-RegInfo.png" alt="Smart-TV" class="img-responsive" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

<!-- register -->
            
  

</body>
</html>
    
        ';
    }
}else {
    echo '
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->


</head>
<body>
	

	<div class="logo_products">
		<div class="container"  style="margin-bottom: 3px;">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Para Afiliados interesados: (+58) 412 353 8883</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php">Elysium center</a>Acarigua</h1>
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
	
		
	
		
<!-- register -->

<section id="reg-info-index">
        <div class="container">
            <div class="row" style=" padding-bottom: 0em;">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;  ">
                        <p style="margin: 10px;" ><i class="fa fa-users fa-4x"></i></p>
                        <h3>Error de registro</h3> 
                       <strong> <p>Campos Vacios</p> </strong>
                        <p   style="margin-top: 25px;" ><a href="../reg.php" class="btn btn-info btn-block" style="width: 50%; display: inline-block;">Volver al registro</a></p>
                        
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="../images/Smart-TV-RegInfo.png" alt="Smart-TV" class="img-responsive" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

<!-- register -->
            
  

</body>
</html>
           
           
           
    
    
    
    
    
    
    
    ';
}

