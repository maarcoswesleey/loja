<?php require_once("../config.php") ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title> Login | <?php echo $nome_loja; ?></title>


   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->

   <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   <link href="../css/login.css" rel="stylesheet">
   <script src="../js/login.js"></script>
   <!-- Favicon -->
   <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
   <script type="text/javascript" src="../js/login.js"></script>
</head>





<body>
 <div class="container">
  <div class="row">
   <div class="col-md-5 mx-auto">
      <div id="first">
       <div class="myform form ">
         <div class="logo mb-3">
          <div class="col-md-12 text-center">
             <h1>Login</h1>
          </div>
       </div>
       <form action="" method="post" name="login">
         <div class="form-group">
            <label for="exampleInputEmail1">Email ou CPF</label>
            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu e-mail ou cpf">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
            <input type="password" name="senha" id="senha"  class="form-control" aria-describedby="emailHelp" placeholder="Digite sua senha">
         </div>
         <div class="col-md-12 text-center ">
            <button type="submit" class="btn btn-block mybtn btn-login tx-tfm mt-4" >Login</button>
         </div>
         <div class="form-group mt-4">
            <small>
               <p class="text-center ">Não possui cadastro? <a href="#" class="text-success" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a></p>
               <p class="text-center ">Esqueceu sua senha? <a href="#" class="text-danger" data-toggle="modal" data-target="#modalRecuperar">Recuperar senha</a></p>
            </small>
         </div>
      </form>

   </div>
</div>

</div>
</div>  
</div> 
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">

 <form method="post">

    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Nome Completo:</label>
     <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu Nome e Sobrenome">
  </div>

  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Email:</label>
     <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail">
  </div>

  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">CPF:</label>
     <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
  </div>

  <div class="row">

   <div class="col-md-6">

     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Inserir Senha">
     </div>
  </div>

  <div class="col-md-6">

     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
        <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirmar Senha">
     </div>

  </div>

</div>

</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
 <button type="button" id="btn-cadastrar" class="btn btn-primary">Cadastrar</button>

</form>
</div>
</div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalRecuperar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">

 <form method="post">


  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Email:</label>
     <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail">
  </div>



</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
 <button type="button" id="btn-cadastrar" class="btn btn-primary">Recuperar</button>

</form>
</div>
</div>
</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="../js/mascara.js"></script>