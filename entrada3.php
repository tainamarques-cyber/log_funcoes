<?php 
require_once "biblioteca3.php";

use function geometria\AreaQuadrado;   
  echo "Area do quadrado: ", AreaQuadrado(4), "\n";

  
use function geometria\AreaRetangulo;   
  echo "Area do retangulo: ", AreaRetangulo(5, 9), "\n";


  use function geometria\AreaTiangulo;   
  echo "Area do triangulo: ", AreaTiangulo(3, 7), "\n";


  use function geometria\AreaCirculo;   
  echo "Area do circulo: ", AreaCirculo(4), "\n";


  use function geometria\AreaTrapezio;   
  echo "Area do Trapezio: ", AreaTrapezio(6, 4, 8), "\n";


  ?>