<?php
include_once 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_empresa = $_SESSION['id_usuario']; // ID da empresa logada
    $empresa = $_POST['empresa']; // Adicionando nome da empresa, se desejar
    $curso = $_POST['curso'];
    $duracao = $_POST['duracao'];
    $periodo = $_POST['periodo'];
    $inicio = $_POST['inicio'];
    $termino = $_POST['termino'];
    $status = $_POST['status'];

    $sql = "INSERT INTO estagiarios (id_empresa, empresa, curso, duracao, periodo, inicio, termino, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Erro na preparação da query: " . $conn->error);
    }

    $stmt->bind_param(
        "isssssss",
        $id_empresa,
        $empresa,
        $curso,
        $duracao,
        $periodo,
        $inicio,
        $termino,
        $status
    );

    if ($stmt->execute()) {
        echo "Estagiário cadastrado com sucesso!";
        // Opcionalmente, pode redirecionar:
        // header('Location: ../tela_inicial/index.php');
        // exit();
    } else {
        echo "Erro ao cadastrar estagiário: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
