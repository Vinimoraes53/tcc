<?php
include_once 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_empresa = $_SESSION['id_usuario']; // ID da empresa logada
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $requisitos = $_POST['requisitos'];
    $curso = $_POST['curso'];
    $turno = $_POST['turno'];
    $tipo = $_POST['tipo'];
    $status = 'ativa';

    $sql = "INSERT INTO vagas (id_empresa, titulo, descricao, requisitos, curso, turno, tipo, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssss", $id_empresa, $titulo, $descricao, $requisitos, $curso, $turno, $tipo, $status);

    if ($stmt->execute()) {
        echo "Vaga cadastrada com sucesso!";
        
    } else {
        echo "Erro ao cadastrar vaga: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
