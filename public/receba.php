<?php
    // Verifica se o email esta correto e redireciona

    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    } else{
        $email = null;
    }
    if( isset($_POST['pass']) ) {
        $pass = $_POST['pass'];
    } else{
        $pass = null;
    }
    
    if($email != null && $pass != null){
        if($email == 'mathiasemail@gmail.com' && $pass == 'Senha') {
            $msg = 'Bem vindo! 😀👍';
            $redirect = "<meta http-equiv='refresh' content='3; url= https://ead.qi.edu.br'/>";
        } else {
            $msg = 'Acesso negado! 👎😭';
            $redirect = "<meta http-equiv='refresh' content='3; url= inicio.php'/>";
        }
    }


//Pega o header_nave e joga aqui
require_once "../src/views/header_nave.php"
?>

<div class="container mt-3" >
        <div style="text-align: center;">
        <h1> <?php echo isset($msg) ? $msg : "Visitante" ?> </h1>
            <?= isset($redirect) ? $redirect : "<hr>" ?>
        </div>

        <!-- Formulario do pedido -->
        <h3 class="text-center"> Pedido </h3> 
        <form method="get" action="pedido.php">
            <h4>Itens:</h4>
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Pão com gergelim"/> Pão com gergelim <br>
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Hamburger"/> Hamburger <br>
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Alface"/> Alface <br>
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Queijo"/> Queijo <br>        
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Cebola"/> Cebola <br>
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Molho especial"/> Molho especial <br>
                <input type="checkbox" class="form-check-input" name="Ingrediente[]" value="Picles"/> Picles <br>
            </div>
            
            <h4>Quantidade:</h4>
            <div class="row">
                <div class="col-lg-2 col-sm-4">   
                    <input type="number" class="form-control" name="qtde" min="1" value="1" />
                </div>
            </div>

            <h4>Pagamento:</h4>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-chekc-input" name="pgto" value="Dinheiro" checked/> Dinheiro
            </div>

            <div class="form-check form-check-inline" >
                <input type="radio" class="form-chekc-input" name="pgto" value="Pix" /> Pix
            </div>
            
            <div class="form-check form-check-inline" >
                <input type="radio" class="form-chekc-input" name="pgto" value="Cartão" /> Cartão
            </div>

            <h4>Entrega:</h4>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <select name="entrega" class="form-select" required>
                        <option value="">Selecione...</option>
                        <option value="Alvorada">Alvorada</option>
                        <option value="Viamão">Viamão</option>
                        <option value="Porto Alegre">Porto Alegre</option>
                        <option value="Canoas">Canoas</option>
                        <option value="Gravataí">Gravataí</option>
                        <option value="Cachoeirinha">Cachoeirinha</option>
                    </select>
                </div>          
            </div>  

            <br><br>
            <div class="row">
                <input type="submit" class="col-lg-4 offset-lg-2 btn-success" value="Enviar Pedido" />
                &nbsp;
                <input type="reset" class="col-lg-4 btn-dark" value="Limpar" />
            </div>
        </form>

</div>

<? require_once "../src/views/footer.php" ?> <!-- Chama o footer --> 