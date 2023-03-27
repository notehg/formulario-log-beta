<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
<h2>Formulario alunos marta</h2>


<form>
  <div class="mb-3">
    <label for="nome" class="form-label">usuario</label>
    <div class="col-sm-10">
    <input type="text"  name="n" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="sobre" class="form-label">senha</label>
    <div class="col-sm-10">
    <input type="text"  name="s" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <div class="col-sm-10">
  </div>
</form>


<div id="nex">
<?php

include 'conecxao.php';


$nome =$_POST["n"];
$senha =$_POST["s"];




$sql = "SELECT Registros
FROM Registros
WHERE id=;

if ($conn->query($sql) === TRUE) {
  echo "Registro criado com exito" ;
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT Nome,sobrenome,Idade,Numero FROM Registros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  nome:    " . $row["Nome"]. 
    "  sobrenome:    " . $row["sobrenome"].
     "  Idade:    " . $row["Idade"]. 
     "  Numero:    " . $row["Numero"]. "<br>";
  }
} else {
  echo "0 resultados tabela vazia";
}

$conn->close();

?>
</body>
</html>

</body>
</html>