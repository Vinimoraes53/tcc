<?php
$servidor = "localhost";  // Host local
$usuario = "root";        // Usuário padrão do XAMPP
$senha = "250616Av";              // Sem senha (a não ser que você tenha colocado)
$banco = "conect"; // Altere para o nome do banco que você criou no phpMyAdmin

// Conectar
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificar conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// echo "Conexão realizada com sucesso!";
?>
