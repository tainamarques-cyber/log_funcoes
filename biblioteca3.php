<?php 


namespace geometria {
// $pi = 3.14;

    function AreaQuadrado ($lado){
       return $lado * $lado;
    }


    function AreaRetangulo ($base, $altura){
       return $base * $altura;
    }


    function AreaTiangulo ($base, $altura){
       return $base * $altura /2;
    }

    function AreaCirculo ($raio){
        $pi = 3.14;
       return  $pi * $raio**2 ;
    }

   function AreaTrapezio ($baseMaior, $baseMenor, $altura){
       return (($baseMaior +  $baseMenor) * $altura) /2;
    }
    
    }
?>