<?php
include_once 'db.php';
session_start();

$id_vaga = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id_vaga) {
    $sql = "DELETE FROM vagas WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_vaga);

    if ($stmt->execute()) {
        header("Location: listar_vagas.php");
        exit();
    } else {
        echo "Erro ao excluir: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "ID inválido.";
}
?>
