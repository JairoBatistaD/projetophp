<?php 

$servidor = 'localhost';
$banco = 'usuarios';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha,$banco);




$id = $_POST['id'];


echo "<table border='1' style='width:50%; margin:auto;'>";
echo "<tr>";
 echo "<th>ID</th>";
 echo "<th>NOME</th>";
 echo "<th>SOBRENOME</th>";
echo " <th>ENDEREÇO</th>";
 echo "</tr>";
 
 $sql = "SELECT * FROM dados WHERE id = $id";
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
