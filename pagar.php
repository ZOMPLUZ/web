<?php 
include 'config.php';
include 'conexion.php';
include 'carrito.php';
include 'header.php'; 
?>

<?php
if ($_POST) {
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }

    $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
    (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
    VALUES (NULL,:ClaveTransaccion, '', NOW(), :Correo,:Total, 'pendiente');");
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $sentencia=$pdo->prepare("INSERT INTO 
        `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");

        $sentencia->bindParam(":IDVENTA",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
        $sentencia->execute();
    }

    // echo "<h3>".$total."</h3>";
}
?>
<br>

<div class="jumbotron">
    <h1 class="display-4">!Pago Prosesado¡</h1>
    <hr class="my-4">
    <p class="lead">La cantidad a pagar es de:
        <h4><?php echo number_format($total,2);?></h4>
    </p>
    <p>Gracias por su Compra</p>
</div>

<?php include 'footer.php'; ?>