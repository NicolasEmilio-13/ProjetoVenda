<?php 

include 'conexao.php';

$nome = $_POST ['NomeCompleto'];
$email = $_POST ['Email'];
$senha = $_POST ['Senha'];
$repetirsenha = ['RepetirSenha'];

$insert = "INSERT INTO tb_usuario VALUES (null, '$nome','$email', '$senha' )";



$resultado = $conexao->query($insert);

if ($resultado == true) {

echo "<script> alert('usuario cadastrado com sucesso') </script>";
}






?>

