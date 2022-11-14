<?php
    $tabuada = isset($_GET["tabuada"])? $_GET["tabuada"]:1;
    $operação = isset($_GET["op"])? $_GET["op"]:"+";

    if($operação == "+"){
        for($x=1; $x <= 10; $x++){
            $resultado = $x + $tabuada;
            echo "$x + $tabuada = $resultado";
            echo "<br>";
        }
    }else if($operação == "-"){
        for($x=1; $x <= 10; $x++){
            $resultado = $x - $tabuada;
            echo "$x - $tabuada = $resultado";
            echo "<br>";
        }
    }else if($operação == "*"){
        for($x=1; $x <= 10; $x++){
            $resultado = $x * $tabuada;
            echo "$x x $tabuada = $resultado";
            echo "<br>";
        }
    }else if($operação == "/"){
        for($x=1; $x <= 10; $x++){
            $resultado = $x / $tabuada;
            echo "$x / $tabuada = $resultado";
            echo "<br>";
        }
    }
    

?>