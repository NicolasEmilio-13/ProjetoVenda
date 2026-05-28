<?php 

$servidor = 'localhost';
$usuario_banco = 'root';
$senha_banco = 'root';
$nm_banco = 'bd_vendas';



$conexao = new mysqli($servidor, $usuario_banco, $senha_banco, $nm_banco);

if($conexao->connect_error){

 echo "erro na conexão";

}




?>