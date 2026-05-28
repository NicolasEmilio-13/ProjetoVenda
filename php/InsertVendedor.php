<?php 

include 'conexao.php';

$insert = "INSERT INTO tb_vendedor VALUES (null, 'luiz','15372956487','1' )";



$resultado = $conexao->query($insert);

if ($resultado == true) {

echo "<script> alert('vendedor cadastrado com sucesso') </script>";
}






?>