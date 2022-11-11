<?php
   $nota1 = isset($_GET["n1"])? $_GET["n1"]:"não informado";
   $nota2 = isset($_GET["n2"])? $_GET["n2"]:"nao informado";
   
   $resultado = ($nota1 + $nota2) / 2; 

   if($resultado >= 7){
        echo " A nota foi $resultado <br> Portando aluno aprovado";
   } else{
        echo " A nota foi $resultado <br> Portando aluno reprovado";
   }

?>


$resultado


int nota;
