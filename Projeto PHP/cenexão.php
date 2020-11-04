<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "projeto_fullstack";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
die("A conexão falhou" .mysqli_connect_error());
}
$sql = "select nomecliente, endereço, telefone from pedidos";
$result = $conn->query($sql);

print_r($result);

while ($row = $result->fetch_assoc()){
echo "<p> O Clente de nome: " .$row['nomecliente']. "
 do telefone: ".$row['telefone'] .", mora na " .$row['endereço']."</p><hr>";
}

?>
