<?php
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=store', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 6;
$page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
$query = "SELECT * FROM `area` ORDER BY `CodigoArea` ASC" ;
$query2 = "SELECT * FROM `proveedor` ORDER BY `CodigoArea` ASC" ;

require_once 'paginator.class.php';
$paginator  = new Paginator($dbh, $query);
$results2    = $paginator->getData($limit, $page);

$paginator2  = new Paginator($dbh, $query2);
$results3    = $paginator2->getData($limit, $page);
?>
