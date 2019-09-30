<?php 
    
    $numeroInteiro = 2;
    $decimal = 0.5;
    $letra = "C";
    $letra_dois ='L';
    $nome = 'Claudia';
    $sobrenome = "Leite";
    $posicaoUm= "tres";
    $posicaoDois= "pratos";
    $posicaoTres= "de";
    $posicaoQuatro= "trigo";
    $posicaoCinco= "para";
    $posicaoSeis= "tres";
    $posicaoSete= "tigres";
    $psoicaoOito= "tristes";

    $variable01 = true;
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 = "false";
    $variable09 = "true";
    $variable10 = null;

    $arrayNumero = ["zebra", "cachorro", "pato", "gato", "tatu"];
    $arrayCarro = ["Marca" =>" Fiat", "Modelo" => 2020, "Cor" => "Azul", "Ano" => 2019, "Placa" => "EBB9999"];

    $inteiro = 5;
    $decimal = 2.5;

    $primeiraString = "Ola";
    $segundaString ="Mundo!";

    var_dump ($numeroInteiro);
    echo "<br>";
    var_dump ($decimal);
    echo "<br>";
    var_dump ($letra);
    echo "<br>";
    var_dump ($letra_dois);
    echo "<br>";
    var_dump ($nome);
    echo "<br>";
    var_dump ($sobrenome);
    echo "<br>";
    
    

    $frase = $posicaoUm."  ".$posicaoDois. " " .$posicaoTres;
    echo $frase;
    echo "<br>";

    function tipoDado($varN){
        if($varN == true){
            echo 'o valor ' .$varN . " é verdadeiro.";
        }else{
            echo 'o valor ' .$varN . ' é falso.'; 
        }

    }

    tipoDado($variable10);

    echo "<br>";

    var_dump ($arrayNumero);
    echo "<br>";


    $arrayNumero[] = "porco";
    $arrayNumero[] = "cavalo";
    $arrayNumero[0] = "elefante";

    var_dump ($arrayNumero);
    echo "<br>";
    $frase = "Eu gosto de animais :" . $arrayNumero[0] . ", " .$arrayNumero[1] . ", " .$arrayNumero[2] . ", " .$arrayNumero[3] . ", " .$arrayNumero[4] . ", " .$arrayNumero[5] . ", " .$arrayNumero[6] . " " .$arrayNumero[7] . " " .$arrayNumero[8];
    echo $frase;
    echo "<br>";

    var_dump ($arrayCarro);

    echo "<br>";

    $arrayCarro[14] = ["Seguradora" => "Porto Seguro"];

    var_dump ($arrayCarro);

    echo "<br>";

    echo $inteiro + $decimal;
    echo "<br>";
    echo $inteiro - $decimal;
    echo "<br>";
    echo $inteiro / $decimal;
    echo "<br>";
    echo $inteiro * $decimal;
    echo "<br>";
    $restoDivisao = $inteiro % $decimal;
    echo $restoDivisao;
    $resultado = (($inteiro * 2) + $decimal) / $inteiro / 1/2;
    echo $resultado;
    echo "<br>";
    $fraseMundo = $primeiraString. " " . $segundaString;
    echo $fraseMundo;

    $terceiraString = "PHP é o maximo.";

    echo "<br>";
    $fraseMundo = $primeiraString. " " . $segundaString ." ". $terceiraString;
    echo $fraseMundo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pimeira Tarefa PHP</title>
</head>
<body>

</html>