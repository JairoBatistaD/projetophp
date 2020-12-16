<?php 

$servidor = 'localhost';
$banco = 'usuarios';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha,$banco);




?>



<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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


	<form method="POST" action="pesquisa.php" class="container" style="text-align: center;">
		<label>Informe o ID para consulta
		</label>	
		<input type="text" name="id" class="form-control">
		<button name="consultar"  class="form-control">Consultar</button>
	</form>
			

			<?php
			echo "<table border='1' class='table container'>";
echo "<tr>";
 echo "<th>ID</th>";
 echo "<th>NOME</th>";
 echo "<th>SOBRENOME</th>";
echo " <th>ENDEREÇO</th>";
 echo "</tr>";
 
 $sql = "SELECT * FROM dados";
 $resultado = mysqli_query($link,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 { $id = $registro['ID'];
   $nome = $registro['nome'];
   $sobrenome = $registro['sobrenome'];
   $endereco = $registro['endereco'];
   echo "<tr>";
   echo "<td>".$id."</td>";
   echo "<td>".$nome."</td>";
   echo "<td>".$sobrenome."</td>";
   echo "<td>".$endereco."</td>";
   echo "</tr>";
 }
 mysqli_close($link);
 echo "</table>";
?>




			 ?>

	</body>




</html>