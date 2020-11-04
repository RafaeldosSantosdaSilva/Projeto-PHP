<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pedidos - EletroMais</title>
</head>
<body>
<center><h2>Cadastre o seu pedido</h2>
<form method="post" name="pedidos" action="">
Nome:<br>
<input type="text" name="nomecliente" placeholder="Digite seu nome"><br>
Endereço<br>
<input type="text" name="endereço" placeholder="Digite seu endereço"><br>
Telefone<br>
<input type="number" name="telefone" placeholder="Digite seu telefone"><br>
Produto<br>
<input type="text" name="nomedoproduto" placeholder="Nome do produto"><br>
Valor<br>
<input type="text" name="valorunitário"><br>
Quantidade<br>
<input type="number" name="quantidade" placeholder="Quantidade"><br>
Total<br>
<input type="text" name="valortotal"><br>
<hr>
<input type="submit" name="submit" value="Enviar pedido">
</center>
</form>
<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "projeto_fullstack";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['nomecliente']) && isset($_POST['endereço']) && isset($_POST['telefone'])&&
 isset($_POST['nomedoproduto']) && isset ($_POST['valorunitário']) &&
 isset ($_POST['quantidade'])&& isset ($_POST['valortotal'])){

 echo "Dados recebidos";
 
  $nomecliente = $_POST['nomecliente'];
 $endereço = $_POST['endereço'];
 $telefone = $_POST['telefone'];
 $nomedoproduto = $_POST['nomedoproduto'];
 $valorunitário = $_POST['valorunitário'];
 $quantidade = $_POST['quantidade'];
 $valortotal = $_POST['valortotal'];
 
 $sql = "insert into pedidos 
 (nomecliente, endereço, telefone, nomedoproduto, valorunitário, quantidade, valortotal)
 values ('$nomecliente', '$endereço', '$telefone', '$nomedoproduto', '$valorunitário', '$quantidade', '$valortotal')";
 
 $result = $conn->query($sql);
 
 if($result){
	 echo "Dados inseridos com sucesso!";
 }else{
	 echo "Dados não inseridos!";
 }
 }
?>
</body>
</html>