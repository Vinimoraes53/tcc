<?php
include_once 'db.php';

$filtro_curso = $_GET['curso'] ?? '';
$filtro_turno = $_GET['turno'] ?? '';
$filtro_tipo = $_GET['tipo'] ?? '';
$busca = $_GET['busca'] ?? '';

//Seleciona todas as vagas com status = 'ativa'.
//$param: Array que armazenará os valores dos filtros.
//$types: String que define os tipos dos parâmetros (todos s = string).
$sql = "SELECT * FROM vagas WHERE status = 'ativa'";
$param = [];
$types = '';

// Filtros
if (!empty($filtro_curso)) {
    $sql .= " AND curso = ?";
    $param[] = $filtro_curso;
    $types .= 's';
}
if (!empty($filtro_turno)) {
    $sql .= " AND turno = ?";
    $param[] = $filtro_turno;
    $types .= 's';
}
if (!empty($filtro_tipo)) {
    $sql .= " AND tipo = ?";
    $param[] = $filtro_tipo;
    $types .= 's';
}
if (!empty($busca)) {
    //LIKE permite buscar por texto parcial no título
    $sql .= " AND titulo LIKE ?";
    $param[] = "%" . $busca . "%";
    $types .= 's';
}

$stmt = $conn->prepare($sql);

// Bind dinâmico
if ($param) {
    $stmt->bind_param($types, ...$param);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($vaga = $result->fetch_assoc()) {
        echo '<div class="col-md-6 mb-4">';
        echo '  <div class="card-dark p-3 bg-dark text-white">';
        echo '    <h5>' . htmlspecialchars($vaga['titulo']) . '</h5>';
        echo '    <p class="mb-1">' . htmlspecialchars($vaga['empresa'] ?? 'Empresa não informada') . '</p>';

        echo '    <p class="text-muted mb-2">';
        if (!empty($vaga['localidade'])) {
            echo htmlspecialchars($vaga['localidade']);
        }
        if (!empty($vaga['localidade']) && !empty($vaga['tipo'])) {
            echo ' • ';
        }
        if (!empty($vaga['tipo'])) {
            echo htmlspecialchars($vaga['tipo']);
        }
        echo '</p>';

        echo '    <small>Curso: ' . htmlspecialchars($vaga['curso']) . '</small><br>';

        if (!empty($vaga['bolsa'])) {
            echo '    <small>Bolsa: R$ ' . number_format($vaga['bolsa'], 2, ',', '.') . '</small>';
        }

        echo '    <div class="d-grid gap-2 mt-3">';
        echo '      <a href="detalhes_vaga.php?id=' . $vaga['id'] . '" class="btn btn-primary">Visualizar Vaga</a>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo '<div class="alert alert-warning">Nenhuma vaga encontrada.</div>';
}

$stmt->close();
$conn->close();
?>
