<?php

use Model\Pedido;

    require_once "../vendor/autoload.php";

    //criando um novo objeto da classe Pedido
    $ped = new Pedido();

    

// Recebendo ingredientes
if( isset($_GET['Ingrediente']) ) {
    $ped->itens = $_GET['Ingrediente'];
} else {
    $ped->itens = null;
}

// Recebendo quantidade
if( isset($_GET['qtde']) ) {
    $ped->quant = $_GET['qtde'];
} else {
    $ped->quant = null;
}

// Recebendo pagamento
if( isset($_GET['pgto']) ) {
    $ped->pag = $_GET['pgto'];
} else {
    $ped->pag = null;
}

// Recebendo entrega
if( isset($_GET['entrega']) ) {
    $ped->local = $_GET['entrega'];
} else {
    $ped->local = null;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>

    <h3 style="color: white; background-color: green"> <?= $ped->gerarDesconto() ?>
    
    <h3> Itens: </h3>
    <?php foreach($ped->itens as $item) : ?>
    <!-- estrutura que se repetirá quantas vezes necessário -->
        <h5> <?= $item ?> </h5>
    <?php endforeach ?>

    <h3> Quantidade: </h3>
    <h5> <?= $ped->quant ?>

    <h3> Pagamento: </h3>
    <h5> <?= $ped->pag ?> </h5>

    <h3> Entrega: </h3>
    <h5> <?= $ped->local ?> </h5> 
    
</body>
</html>