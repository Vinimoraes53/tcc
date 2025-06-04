<?php
include_once 'db.php';


$empresa_id = $_SESSION['id_usuario'];

$sql = "SELECT * FROM vagas WHERE empresa_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $empresa_id);
$stmt->execute();
$result = $stmt->get_result();

while ($vaga = $result->fetch_assoc()) {
    echo "<h3>" . htmlspecialchars($vaga['titulo']) . "</h3>";
    echo "<p>" . htmlspecialchars($vaga['descricao']) . "</p>";
    echo "<a href='editar_vaga.php?id=" . $vaga['id'] . "' class='btn btn-primary'>Editar</a> ";
    echo "<a href='#' 
            class='btn btn-danger' 
            data-bs-toggle='modal' 
            data-bs-target='#modalConfirmarExclusao' 
            data-id='" . $vaga['id'] . "'>
            Excluir
          </a><hr>";
}

$stmt->close();
$conn->close();
?>
