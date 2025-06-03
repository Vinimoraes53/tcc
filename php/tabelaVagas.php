<?php
include_once 'db.php'; // Arquivo de conexão com o banco

$sql = "SELECT * FROM vagas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($vaga = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($vaga['titulo']) . "</td>";
        echo "<td>" . htmlspecialchars($vaga['empresa']) . "</td>";
        echo "<td>" . htmlspecialchars($vaga['curso']) . "</td>";
        echo "<td>" . htmlspecialchars($vaga['tipo']) . "</td>";
        echo "<td class='status-vaga'>" . htmlspecialchars($vaga['status']) . "</td>";
        echo "<td>
                <button class='btn btn-outline-info btn-editar' 
                        data-bs-toggle='modal' 
                        data-bs-target='#modalVaga'
                        data-id='" . $vaga['id'] . "'
                        data-vaga='" . htmlspecialchars($vaga['titulo']) . "'
                        data-empresa='" . htmlspecialchars($vaga['empresa']) . "'
                        data-curso='" . htmlspecialchars($vaga['curso']) . "'
                        data-tipo='" . htmlspecialchars($vaga['tipo']) . "'
                        data-turno='" . htmlspecialchars($vaga['turno']) . "'
                        data-status='" . htmlspecialchars($vaga['status']) . "'
                        data-descricao='" . htmlspecialchars($vaga['descricao']) . "'
                        data-requisitos='" . htmlspecialchars($vaga['requisitos']) . "'>
                    <i class='bi bi-pencil'></i>
                </button>
                
                <button class='btn btn-outline-danger btn-excluir' 
                        data-id='" . $vaga['id'] . "' 
                        data-bs-toggle='modal' 
                        data-bs-target='#modalConfirmarExclusao'>
                    <i class='bi bi-trash'></i>
                </button>
                
                <button class='btn btn-outline-success btn-ver' 
                        data-bs-toggle='modal' 
                        data-bs-target='#modalCandidatos' 
                        data-id='" . $vaga['id'] . "'>
                    <i class='bi bi-eye'></i>
                </button>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhuma vaga cadastrada.</td></tr>";
}

$conn->close();
?>
