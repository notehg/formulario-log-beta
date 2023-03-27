<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Regiter</title>
</head>
<body>

    

<form action="verificação.php" method="post">
<h2>Formulario alunos marta</h2>


<form>
  <div class="mb-3">
    <label for="nome" class="form-label">nome</label>
    <div class="col-sm-10">
    <input type="text"  name="n" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="sobre" class="form-label">Sobrenome</label>
    <div class="col-sm-10">
    <input type="text"  name="s" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="idade"class="form-label">idade</label>
    <div class="col-sm-10">
    <input type="number"  name="T" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="Numero"class="form-label">Numero</label>
    <div class="col-sm-10">
    <input type="number"  name="i" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary" href="login.php">registrar</button>
  <div class="col-sm-10">
  <div class="mb-3">
  </div>
</form>

 


<script src="script.js"></script>
</body>
</html>