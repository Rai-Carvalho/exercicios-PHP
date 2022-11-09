<?php
    $inicio = isset($_GET["inicio"])? $_GET["inicio"]:0;
    $fim = isset($_GET["fim"])? $_GET["fim"]:0;
    $incremento = isset($_GET["inc"])? $_GET["inc"]:1;

    if($inicio < $fim){    
        while($inicio < $fim){
            $inicio += $incremento;
            echo "$inicio <br>"; 
        }
    }else{
        while($inicio > $fim){
            $inicio -= $incremento;
            echo "$inicio <br>"; 
        }
    }
?>
<a href="index.php">Voltar</a>