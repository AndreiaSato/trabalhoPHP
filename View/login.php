<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Reserva</title>
   
</head>
  
<body>

  <div>
    <?php
    include "header.php";
    ?>
  </div> 

<div id="login">

 <form class="card " style="width: 30%;" action="../Controller/autenticacaoController.php" method="post">

  <div class="card-header">
    <h2>Login</h2>

  <div class=" cart-content row mt-5">
    <div class=" cart-content-area col-10 m-3">
      <label for="usuario" >E-mail</label>
      <input type="text" id= "usuario"  class="form-control border border-dark" placeholder="digite aqui seu email" name="email" required >
    </div>
    <div class=" cart-content-area col-10 m-3"> 
      <label for="password">Senha</label>
      <input type="password" class="form-control border border-dark" placeholder="digite sua senha" name="senha" required>
    </div>
  </div>

  <div class="card-footer">
    <input type="submit" values="login" class="submit" name="login">
   
  </div>
  </div>
  </form>
</div>
</body>
</html>