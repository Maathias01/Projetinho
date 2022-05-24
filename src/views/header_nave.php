<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
        <title>Pagina Inicial</title>
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel='icon' href='../public/assets/img/hamburguer.ico' type='image/x-icon'>
    </head>
    
    <body>
<!-- Incio da Navbar (bootstrap) -->
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HAMBURGUER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    
        <li class="nav-item">
          <a class="nav-link" href="../public/lista.php">Listar Pedidos</a>

      </ul>

  
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>