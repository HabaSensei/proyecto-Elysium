<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$codeArea= $_POST['area-code'];
$cons=  ejecutarSQL::consultar("select * from area where CodigoArea='$codeArea'");
$totalarea = mysqli_num_rows($cons);

if($totalarea>0){
    if(consultasSQL::DeleteSQL('area', "CodigoArea='".$codeArea."'")){
        echo '<img src="./assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Area eliminada éxitosamente</p>';
    }else{
       echo '<img src="./assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="./assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código del Area no existe</p>';
}
