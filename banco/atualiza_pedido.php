<?php

use Database\Database;

//cod
if( isset($_POST['cod'])) {
    $cod = $_POST['cod'];
} else {
    $cod = null;
}

//itens
if( isset($_POST['itens'])) {
    $itens = $_POST['itens'];
} else {
    $itens = null;
}

//quant
if( isset($_POST['quant'])) {
    $quant = $_POST['quant'];
} else {
    $quant = null;
}

//pgto
if( isset($_POST['pgto'])) {
    $pgto = $_POST['pgto'];
} else {
    $pgto = null;
}

//entrega
if( isset($_POST['entrega'])) {
    $local = $_POST['entrega'];
} else {
    $local = null;
}

// var_dump($cod, $itens, $quant, $pgto, $local);

require_once '../src/model/Database.php';
$db = new Database();
// ATUALIZA OQUE JÁ TEM NO BANCO DE DADOS COM AS INFOS ACIMA
$resultDb = $db->update(
    "UPDATE pedidos SET itens = '$itens',
    quant = $quant, pag = '$pgto', 
    local = '$local' WHERE cod = $cod; "
);


// JOGA PRA LISTA
if($resultDb) {
    header( 'location: ../public/lista.php');
} else {
    echo "Erro na atualização... 😞";
}

?>