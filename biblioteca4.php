<?php 


namespace saude {
// $agua = 0.35;
// $batimento = 220;


    function lmc ($peso, $altura){
       return $peso / $altura;
    }

    function idealAgua ($peso,$agua ){
        $agua = 0.35;
       return $peso * $agua;
    }

    function frequenciaCardiacaMaxima ($batimento,$idade ){
        $batimento = 220;
       return $batimento - $idade;
    }

   function LibrasParaQuilo ($libras, ){
        
       return $libras * 0.4536;
    }

  function CaloriasBasais ($sexo, $peso, $altura, $idade ){

  function CaloriasBasais ($sexo, $peso, $altura, $idade) {
    if ($sexo == "masculino") {
        return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
    } else if ($sexo == "feminino") {
        return 655.1 + (9.563 * $peso) + (1.850 * $altura) - (4.676 * $idade);
    }
}

   
    



}
}
  ?>