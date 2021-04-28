<?php
$servidor = 'localhost'; // nosso servidor web localhost
$usuario = 'root'; // usuário do mysql
$senha = ''; // senha
$bancoDados = 'exemplo'; // nome do banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

if (mysqli_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
}
else {
    echo "Conexão realizada com sucesso";
}