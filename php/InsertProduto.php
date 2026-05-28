

<?php 

include 'conexao.php';

$insert = "INSERT INTO tb_produto VALUES (null, 'RTX4090','660')";



$resultado = $conexao->query($insert);

if ($resultado == true) {

echo "<script> alert('PRODUTO cadastrado com sucesso') </script>";
}






?>

