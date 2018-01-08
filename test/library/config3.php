<?php
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=store', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 12;
$page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
$query = "SELECT producto.*, proveedor.`NITProveedor`, categoria.`CodigoCat` as codigocategoria, categoria.`Nombre`
FROM proveedor
    LEFT JOIN producto ON producto.`NITProveedor` = proveedor.`NITProveedor`
    LEFT JOIN categoria ON producto.`CodigoCat` = categoria.`CodigoCat`
 where Stock > 0 ".((isset($_GET["NITProveedor"]) && !empty($_GET["NITProveedor"]))? " AND proveedor.NITProveedor='".$_GET["NITProveedor"]."' " : ' ' );

require_once 'paginator.class.php';
$paginator  = new Paginator($dbh, $query);
$results    = $paginator->getData($limit, $page);
?>
