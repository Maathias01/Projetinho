<?php 
Use Database\Database;
require_once '../src/views/header_nave.php';


require_once '../src/model/Database.php';
$db = New Database();

$resultDb = $db->select(
    "SELECT * FROM pedidos;"
);
// var_dump($resultDb);
?>

<table class="table container mt-4 table-bordered table-striped">
    <thead class="bg-danger text-white">
        <th>Código</th>
        <th>Data e Hora</th>
        <th>Itens</th>
        <th>Quantidade</th>
        <th>Pagamento</th>
        <th>Entrega</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($resultDb as $linha) : ?>
            <tr>
             <td> <?= $linha->cod ?> </td>
             <td> <?= $linha->data_hora ?> </td>
             <td> <?= $linha->itens ?> </td>
             <td> <?= $linha->quant ?> </td>
             <td> <?= $linha->pag ?> </td>
             <td> <?= $linha->local ?> </td>
             <td>
                 <a href='../public/atualiza.php?cod=<?= $linha->cod ?>'>
                    <i class="bi bi-pencil-square"></i>
                 </a>
             </td>
             <td>
                 <a class='treshi' onclick="confirmaDelete(<?= $linha->cod ?>);">
                    <i class = 'bi bi-trash'></i>
                 </a>
             </td>
            </tr>    
        <?php endforeach ?>
    </tbody>
</table>

<script>
    function confirmaDelete(id) {
        if( confirm('Excluir o pedido: '+id+'? 😕') ) {
            window.location.href='../banco/deleta_pedido.php?cod='+id;
        } else {
            alert('🤗 Pedido não excluido 🤗')
        }
    }
</script>

<?php require_once '../src/views/footer.php'; ?>