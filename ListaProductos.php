<?php
//crear una factura array y clases en php 
// primer paso es crear  la clase producto
class Producto{
    public $nombre;
    public $precio;
    //segundo paso es crear un constructor funcion
    public function __construct($nombre,$precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}
class Factura{
    public $productos = [];
    public function agregarProductos($productos){
        $this->productos [] = $productos;
    }
    public function calcularTotal(){
        $total = 0;
        foreach($this->productos as $productos){
            $total += $productos->precio;
        }
        return $total;
    } 
}
//crear los objetos productos 
$producto1 = new Producto ("Shampoo",80);
$producto2 = new Producto ("Galletas",20);

//crear la factura es un objetos
$factura = new Factura();
$factura->agregarProducto($producto1);
$factura->agregarProducto($producto2);

//mostrar la factura o el total
echo "Factura: <br>";
foreach($factura->productos as $productos){
    echo $produtos->nombre.": $".$productos->precio."<br>";
}
echo "Total: $".$factura->calcularTotal();
?>