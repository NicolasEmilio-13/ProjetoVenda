<?php 

include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES (null, 'LucasNavara','11953547623', 'Nicole' )";



$resultado = $conexao->query($insert);

if ($resultado == true) {

echo "<script> alert('cliente cadastrado com sucesso') </script>";
}






?>

