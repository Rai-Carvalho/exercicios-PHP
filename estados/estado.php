<?php
    $estados = isset($_GET["estados"])?$_GET["estados"]:"nada foi selecionado";

    switch ($estados){
        case 1:
            echo "Você mora no Acre";
            break;
        case 2:
            echo "Você mora em Alagoas";
            break;
        case 3:
            echo "Você mora no Amapá";
            break;
        case 4:
            echo "Você mora em Amazonas";
            break;    
        case 5:
            echo "Você mora na Bahia";
            break;
        case 6:
            echo "Você mora no Ceará";
            break;
        case 7:
            echo "Você mora no Espirito Santo";
            break;
        case 8:
            echo "Você mora em Goiás";
            break; 
        case 9:
            echo "Você mora em Maranhão";
            break;
        case 10:
            echo "Você mora em Mato Grosso";
            break;
        case 11:
            echo "Você mora em Mato Grosso do Sul";
            break;
        case 12:
            echo "Você mora em Minas Gerais";
            break;    
        case 13:
            echo "Você mora em Pará";
            break;
        case 14:
            echo "Você mora em Paraíba";
            break;
        case 15:
            echo "Você mora no Paraná";
            break;
        case 16:
            echo "Você mora em Pernambuco";
            break;    
        case 17:
            echo "Você mora em Piauí";
            break;
        case 18:
            echo "Você mora no Rio de Janeiro";
            break;
        case 19:
            echo "Você mora em Rio Grande do Norte";
            break;
        case 20:
            echo "Você mora em Rio Grande do Sul";
            break;    
        case 21:
            echo "Você mora em Rondônia";
            break;
        case 22:
            echo "Você mora em Roraima";
            break;
        case 23:
            echo "Você mora em Santa Catarina";
            break;
        case 24:
            echo "Você mora em São Paulo";
            break; 
        case 25:
            echo "Você mora em Sergipe";
            break;
        case 26:
            echo "Você mora em Tocantins";                   
    }
?>
<!-- <br><a href="javascript:history.go(-1)">voltar</a> -->
<br><a href="index.php">Voltar</a>