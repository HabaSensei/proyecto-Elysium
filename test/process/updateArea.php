<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldAreaUp=$_POST['area-code-old'];
$codeAreaUp=$_POST['area-code'];
$nameAreaUp=$_POST['area-name'];


if(consultasSQL::UpdateSQL("area", "CodigoArea='$codeAreaUp',NombreArea='$nameAreaUp'", "CodigoArea='$codeOldAreaUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="./assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="afiliados.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="./assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="afiliados.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}

