<?php 

include 'conexao.php';

$insert = "INSERT INTO tb_equipe VALUES (null, 'pirikitos','mongagua' )";



$resultado = $conexao->query($insert);

if ($resultado == true) {

echo "<script> alert('equipe cadastrado com sucesso') </script>";
}






?>

