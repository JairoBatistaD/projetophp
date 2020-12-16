<?php 
$servidor = 'localhost';
$banco = 'usuarios';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha,$banco);

if(isset ($_POST['cadastrar'])){
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $endereco = $_POST['endereco'];

$query = mysqli_query($link, "insert into dados(nome, sobrenome, endereco) values ('$nome',' $sobrenome','$endereco')");

}

if(isset($_POST['deletar'])){
  $id = $_POST['id'];

 $sql = "DELETE FROM dados WHERE id= $id";

if ($link->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $link->error;
}

$link->close();
}


?>
<!DOCTYPE html>

<html>
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link  href="estilo.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <a class="navbar-brand" href="index.php">PROJETO PESSOAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="cadastro.php">Cadastro </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consulta.php">Consulta</a>
      </li>
         </ul>
  </div>
</nav>

  <form method="POST" class="container">
      <h1 style="text-align: center;">Cadastro</h1>
      <label>Nome:</label>
      <input type="text" name="nome" class="form-control">
      <label>Sobrenome:</label>
      <input type="text" name="sobrenome"class="form-control">
      <label>Endereço:</label>
      <input type="text" name="endereco"class="form-control"><br>
      <button class="form-control" name="cadastrar">Cadastrar</button><br>
      
  </form>
  <form method="POST" class="container">
    <h1 style="text-align: center;">Deletar</h1>
    <label>ID:</label>
    <input type="text" name="id" class="form-control">
    <button type="submit" name="deletar" class="form-control">Deletar</button>

  </form>

</body>
</html>
