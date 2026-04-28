<?php 

namespace matematica{ 



function somar ($a, $b, $c){
return $a + $b + $c;
}


function sub ($a, $b){
return $a - $b;
}

function mult ($a, $b){
return $a * $b;
}

function div ($a, $b){
return $a / $b;
}
echo "resultado: ", div (10,5), "\n";
}





namespace texto{

function Concaternar ($nome, $sobrenome){
return $nome . " " . $sobrenome;
}
    
}

namespace logica{
function verificaIdade ($idade){
    if($idade>=18){
 return "maior idade";
    
 }else{
return "menor idade";

 }



}




}
?>
