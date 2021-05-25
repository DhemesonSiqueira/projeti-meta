
<?php

session_start();
#print_r($_SESSION);

if(isset($_SESSION['login']) && isset($_SESSION['id'])){

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>myOrder | Dashboard</title>
    
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="./public/bootstrap.min.css">
  <link rel="stylesheet" href="./public/AdminLTE.min.css">
  <link rel="stylesheet" href="./public/all-skins.min.css">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg">my<b>Order</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://d2qp0siotla746.cloudfront.net/img/use-cases/profile-picture/template_0.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>        
        <li>
          <a href="?modulo=cliente&acao=listar">
            <i class="fa fa-list"></i> <span>Cliente Listar</span>           
          </a>
        </li>
        <li>
          <a href="?modulo=cliente&acao=adicionar">
            <i class="fa fa-list"></i> <span>Cliente Adicionar</span>           
          </a>
        </li>

        <li>
          <a href="?modulo=produto&acao=listar">
            <i class="fa fa-list"></i> <span>Produto Listar</span>           
          </a>
        </li>
        <li>
          <a href="?modulo=produto&acao=adicionar">
            <i class="fa fa-list"></i> <span>Produto Adicionar</span>           
          </a>
        </li>
        
        <li>
          <a href="?modulo=restaurante&acao=listar">
            <i class="fa fa-list"></i> <span>Restaurantes Listar</span>           
          </a>
        </li>
        <li>
          <a href="?modulo=restaurante&acao=adicionar">
            <i class="fa fa-list"></i> <span>Restaurantes Adicionar</span>           
          </a>
        </li>

        <li>
          <a href="?modulo=mesa&acao=listar">
            <i class="fa fa-list"></i> <span>Mesas Listar</span>           
          </a>
        </li>
        <li>
          <a href="?modulo=mesa&acao=adicionar">
            <i class="fa fa-list"></i> <span>Mesas Adicionar</span>           
          </a>
        </li>

        <li>
          <a href="?modulo=pedido&acao=listar">
            <i class="fa fa-list"></i> <span>Pedidos Listar</span>           
          </a>
        </li>
        <li>
          <a href="?modulo=pedido&acao=adicionar">
            <i class="fa fa-list"></i> <span>Pedido Adicionar</span>           
          </a>
        </li>
        
        </ul>
    </section>

  </aside>

  <div class="content-wrapper">

    <section class="content">
      <?php
        if(isset($_GET['modulo'])){ $modulo = $_GET['modulo']; }else{ $modulo = "dashboard"; }
        if(isset($_GET['acao'])){ $acao = $_GET['acao'];}else{ $acao = 'ver'; }
          
        include("modulos/".$modulo."/".$acao.".php");
      ?>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
</div>
</body>
</html>
<?php
  
}else{
  echo "Você precisa efetuar o login. <a href='login.php'>VOLTAR</a>";
}


?>