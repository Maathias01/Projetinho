<?php
echo "<hr>";
echo "<h1>Hello World!</h1>";
echo "<hr style='height: 20px; background-color: #b3caf5; border: solid; border-color: wheat;'>";
echo "<hr>";

// Declaração e atribuição de variáveis
$nome = "Mathias";
$sobrenome = 'Kauer Silveira';

//Constantes
define("BANCO_DE_DADOS", "TEXTO ENORME");
echo BANCO_DE_DADOS;
echo "<hr>";

//Concatenando strings
echo $nome ." ". $sobrenome;

$num1 = 22.2;
$num2 = 11;

echo "<hr>";

var_dump($num1);
var_dump($num2); 

// Operadores aritméticos ( + - */ )
echo "<hr>";

echo ($num1 + $num2) . "<br>";
echo ($num1 - $num2) . "<br>";
echo ($num1 * $num2) . "<br>";
echo ($num1 / $num2) . "<br>";

$n1 = 6.5;
$n2 = 8.9;

$media = ($n1 + $n2) / 2;
echo $media;

//Operadores Relacionais (de comparação)
/*
igual           ==
diferente       !=
maior           >
menor           <
maior igual     >=
menor igual     <=
*/
echo '<hr>';

var_dump(
    ($nome == $sobrenome),
    ($nome == $nome)
);

var_dump(
    ($n1 > $n2)
);

var_dump(
    (strlen($nome) <= 7)
);
echo "<hr>";

/* Operadores Lógicos
AND && 
OR  ||
NOT ! Significa: Tal coisa NÃO é igual a
*/

$login = "unga";
$pass = "bunga";

if($login == "unga" && 
    $pass == "bung") {
        echo "<h1>😊 Bem vindo! 😊</h1>";
    } else {
        echo "<h1>😠 Acesso Negado! 😠</h1>";
    }


echo "<hr>";
//lista e numeros aleatorios
$cores1 = [
    "verde",
    "amarelo",
    "branco",
    "vermelho",
    "cinza",
    "preto",
    "marrom",
    "roxo"
];

$cores2 = [
    "violeta",
    "rosa",
    "lilaz",
    "esverdeado",
];

echo $cores1[array_rand($cores1)] ." e ". $cores2[array_rand($cores2)];

echo "<hr>";
//sinaleira

$cores = [
    "verde",
    "amarelo",
    "vermelho"
];

$sinaleira = $cores[random_int(0,2)];

if($sinaleira == "verde") {
    echo "<h3 style='color: green'>Siga Adiante!</h3>";
} elseif ($sinaleira == 'amarelo') {
    echo "<h3 style='color: #c49c48'>Atenção!</h3>";
} else {
    echo "<h3 style='color: red'>Pare!</h3>";
}

echo "<hr>";
//Laços de repetição
//FOR => início; condição; incremento;
for($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . ($i * 7) . "<br>";
}

echo "<hr>";
//WHILE => condição
$count = 0;
while($count <= 10) {
    echo $count . " - ";
    $count++;
}

echo "<hr>";

//FOREACH => lista "as" referência
$pecas = [
    "Teclado",
    "Mouse",
    "Placa mãe",
    "Cooler",
    "Placa de vídeo",
    "Webcam",
    "Processador",
    "SSD",
    "Webcam",
    "Fonte",
];

// for($i = 0; $i < count($pecas); $i++) {
//     echo $pecas[$i] . " / ";
// }

foreach($pecas as $p) {
    echo $p . " - ";
}

