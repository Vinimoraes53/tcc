<?php
session_start();
include_once 'db.php';

// Verificar quem está logado
if (isset($_SESSION['instituicao_id'])) {
    $id = $_SESSION['instituicao_id'];
    $tipo = 'instituicao';
} elseif (isset($_SESSION['empresa_id'])) {
    $id = $_SESSION['empresa_id'];
    $tipo = 'empresa';
} else {
    // Se não estiver logado, redireciona para o login
    header('Location: ../tela_login/index.php');
    exit();
}

// Define qual campo usar nas consultas
$campo_id = ($tipo == 'instituicao') ? 'id_instituicao' : 'id_empresa';

// Consultar quantidade de estágios cadastrados
$sql = "SELECT COUNT(*) AS total FROM estagios WHERE $campo_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
$dados = $res->fetch_assoc();
$estagios_cadastrados = $dados['total'] ?? 0;

// Consultar quantidade de vagas criadas
$sql = "SELECT COUNT(*) AS total FROM vagas WHERE $campo_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
$dados = $res->fetch_assoc();
$vagas_criadas = $dados['total'] ?? 0;

// Consultar relatórios aguardando
$sql = "SELECT COUNT(*) AS total FROM relatorios WHERE status = 'pendente' AND $campo_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
$dados = $res->fetch_assoc();
$relatorios_aguardando = $dados['total'] ?? 0;

// Consultar documentos pendentes
$sql = "SELECT COUNT(*) AS total FROM documentos WHERE status = 'pendente' AND $campo_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
$dados = $res->fetch_assoc();
$documentos_pendentes = $dados['total'] ?? 0;

// Consultar estágios pendentes
$sql = "SELECT COUNT(*) AS total FROM estagios WHERE status = 'pendente' AND $campo_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
$dados = $res->fetch_assoc();
$estagios_pendentes = $dados['total'] ?? 0;
?>
