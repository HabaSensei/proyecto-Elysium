<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$codeArea= $_POST['area-code'];
$nameArea= $_POST['area-name'];


if(!$codeArea=="" && !$nameArea==""){
    $verificar=  ejecutarSQL::consultar("select * from area where CodigoArea='".$codeArea."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("area", "CodigoArea, NombreArea", "'$codeArea','$nameArea'")){
            echo '<img src="../assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Categoría añadida éxitosamente</p>';
        }else{
           echo '<img src="../assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
        }
    }else{
        echo '<img src="../assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código que ha ingresado ya existe.<br>Por favor ingrese otro código</p>';
    }
}else {
    echo '<img src="../assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Error los campos no deben de estar vacíos</p>';
}

