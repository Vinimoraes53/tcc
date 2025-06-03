<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vagas de Estágio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/estilo_tela_vagas.css" rel="stylesheet"> <!-- Arquivo CSS externo -->
</head>

<body class="body-dark">

<div class="container my-4">
  <h2 class="mb-4">Encontre a Vaga Ideal</h2>

  <form action="../php/VagasDisponiveis.php" method="get">
    <div class="input-group mb-4">
      <input 
        name="busca" 
        type="text" 
        id="buscaVaga" 
        class="form-control input-dark" 
        placeholder="Digite o nome da vaga..."
        value="<?= htmlspecialchars($_GET['busca'] ?? '') ?>"
      >
      <button class="btn btn-primary" type="submit">Buscar</button>
    </div>

    <div class="row">
      <!-- Filtros Laterais -->
      <div class="col-md-3">
        <div class="sidebar-dark p-3 bg-dark text-white rounded">
          <h5>Filtros</h5>

          <div class="mb-3">
            <label for="filtroCurso" class="form-label">Curso</label>
            <select id="filtroCurso" name="curso" class="form-select input-dark">
              <option value="">Todos</option>
              <option <?= (($_GET['curso'] ?? '') == 'Administração') ? 'selected' : '' ?>>Administração</option>
              <option <?= (($_GET['curso'] ?? '') == 'Engenharia') ? 'selected' : '' ?>>Engenharia</option>
              <option <?= (($_GET['curso'] ?? '') == 'Direito') ? 'selected' : '' ?>>Direito</option>
              <option <?= (($_GET['curso'] ?? '') == 'TI') ? 'selected' : '' ?>>TI</option>
              <option <?= (($_GET['curso'] ?? '') == 'Marketing') ? 'selected' : '' ?>>Marketing</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="filtroLocalidade" class="form-label">Localidade</label>
            <select id="filtroLocalidade" name="localidade" class="form-select input-dark">
              <option value="">Todas</option>
              <option <?= (($_GET['localidade'] ?? '') == 'São Paulo') ? 'selected' : '' ?>>São Paulo</option>
              <option <?= (($_GET['localidade'] ?? '') == 'Rio de Janeiro') ? 'selected' : '' ?>>Rio de Janeiro</option>
              <option <?= (($_GET['localidade'] ?? '') == 'Belo Horizonte') ? 'selected' : '' ?>>Belo Horizonte</option>
              <option <?= (($_GET['localidade'] ?? '') == 'Curitiba') ? 'selected' : '' ?>>Curitiba</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="filtroTipo" class="form-label">Tipo de Estágio</label>
            <select id="filtroTipo" name="tipo" class="form-select input-dark">
              <option value="">Todos</option>
              <option <?= (($_GET['tipo'] ?? '') == 'Remoto') ? 'selected' : '' ?>>Remoto</option>
              <option <?= (($_GET['tipo'] ?? '') == 'Presencial') ? 'selected' : '' ?>>Presencial</option>
              <option <?= (($_GET['tipo'] ?? '') == 'Híbrido') ? 'selected' : '' ?>>Híbrido</option>
            </select>    

          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="col-md-9">
  <div class="row">
    <?php include '../php/listarVagas.php'; ?>
  </div>
</div>

     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
