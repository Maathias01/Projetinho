<?php
$SiteName = 'Pagina Incial';
 require_once "../src/views/header.php"; ?>

        <hr>
        <div class="login-center">
            <h1 class="textocomborda">::: LOGIN :::</h1>
            <form method="post" action="receba.php">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md1 col-sm12">
                            <input type="email" class="form-control" name="email" placeholder="Digite seu email" required/>
                            <br>
                            <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required/>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                          <input type="submit" class="btn btn-dark col-sm-12 col-lg-4 offset-lg-2" value="Entrar"/>
                          &nbsp;
                          <input type="reset" class="btn btn-primary col-sm-12 col-lg-4" value="Apagar"/>
                          <br><br>
                          <a href="receba.php"> Entrar como visitante </a>
                    </div>                
                </div>
            </form>
        </div>
        <hr>

<?php require_once "../src/views/footer.php"?>