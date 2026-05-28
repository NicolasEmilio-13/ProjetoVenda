<?php 

include 'conexao.php';

$insert = "INSERT INTO tb_venda VALUES (null, '2026-05-11','1','660','1','1','1' )";



$resultado = $conexao->query($insert);

if ($resultado == true) {

echo "<script> alert('venda cadastrado com sucesso') </script>";
}






?>