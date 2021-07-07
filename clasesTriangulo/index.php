<?php
include ("includes/class.Triangulo.php"); // solamente inluimos el script de la clase
$triangulo = new Triangulo(Null); // instanciar la clase 
//$rectangulo->get_formulario()
echo $triangulo-> get_form_transporte_area();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['guardar'])){
    echo "el area del triangulo es ". $triangulo->area($_POST['base'], $_POST['altura']);
}
echo $triangulo->get_form_transporte_perimetro();
if(isset($_POST['guardarP'])){
    echo "el perimetro del triangulo es ". $triangulo->perimetro($_POST['lado1'], $_POST['lado2'], $_POST['lado3']);
}

?>