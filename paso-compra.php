<h1>Almacen VALENS</h1>
<h2>Variedad en ropa</h2>

<img src="https://imagenes.20minutos.es/files/image_656_370/uploads/imagenes/2018/12/19/595281.jpg" alt="imagen del almacen"> 



<br>
<br> Bienvenido al almacen VALENS 
<br> ¡ Por compras superiores de 50.000 obtendra el 5% de descuento !
<br> ¡ Por compras superiores a 200.000 obtendra el 10% de descuento !
<br>
<br>



<?php
    $compra = $_REQUEST["c"];
    $descuento = 0;
   
    //Calcular el descuento por compra superiores de 50.000
    if($compra >= 50000 and $compra < 200000){
        $descuento = $compra-($compra*0.05);
        echo "El costo total del descuento es" . $descuento;
    }

    // Calcular el descuento por compra superiores de 200.000
    else if($compra >= 200000){
        $descuento = $compra-($compra*0.10);
        echo "El costo total del descuento es" . $descuento;
    }

    else{
    echo"El costo total no tiene descuento" . $descuento;  
}
?>

