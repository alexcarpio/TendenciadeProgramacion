
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Triangulo {

    private $base;
    private $altura;
    private $lado1;
    private $lado2;
    private $lado3;

    function Triangulo() {
        $this->base = 0;
        $this->altura = 0;
        $this->lado1=0;
        $this->lado2=0;
        $this->lado3=0;
    }

    public function get_form_transporte_area() {
        $html = '
                <form action="" method="POST" name="transporte"aling="center"> 
                
                    <table aling = "center" border = "1">
                        <tr>
                            <td style="background-color: lightskyblue; text-align: center; width: 100% ">AREA DE UN TRIANGULO</td>
                        </tr>
                        <tr>
                            <td>BASE</td>
                            <td><input type="text" name="base"size="4"required></td>
                        </tr>
                        <tr>
                            <td>ALTURA</td>
                            <td><input type="text" name="altura" size="4"required></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
    }
     public function get_form_transporte_perimetro() {
          $html = '
                <form action="" method="POST" name="transporte"aling="center"> 
                    <table aling = "center" border = "1">
                        <tr>
                           <td style="background-color:navajowhite; text-align: center; width: 100% ">PERIMETRO DE UN TRIANGULO</td>
                        </tr>
                        <tr>
                            <td>LADO1</td>
                            <td><input type="text" name="lado1" size="4"required></td>
                        </tr>
                        <tr>
                            <td>LADO2</td>
                            <td><input type="text" name="lado2" size="4"required></td>
                        </tr>
                        <tr>
                            <td>LADO3</td>
                            <td><input type="text" name="lado3" size="4"required></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardarP" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
     }
    

    public function area($base, $altura) { // metodos area
        $area = ($base * $altura) / 2;
        return $area;
    }

    public function perimetro($lado1, $lado2,$lado3) { // método perimetro 
        $perimetro = ($lado1+$lado2+$lado3);
        return $perimetro;
    }

}
?>

