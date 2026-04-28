<?php 

namespace conversao {
// $dolar = 5;
// $euro = 5.85;
// $peso = 0.0035;
// $libra = 6.74;
// $iene  = 0.031;


    function dolar ($a){
        $dolar = 5;
        return $a * $dolar;
    }


    function euro ($a){
        $euro = 5.85;
    return $a * $euro;
    }


    function peso ($a, $peso){
        $peso = 0.0035;
    return $a * $peso;
    }


    function libra ($a, $libra){
        $libra = 6.74;
    return $a * $libra;
    }


    function iene ($a, $iene){
        $iene  = 0.031;
    return $a * $iene;
    }
}

?>