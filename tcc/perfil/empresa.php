<?php
session_start();

// Verifica se está logado e se é aluno
if(!isset($_SESSION['id']) || $_SESSION['perfil'] != 'empresa'){
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Menu Empresa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="../css/estilo.css" rel="stylesheet" /> <!-- CSS externo -->
</head>
<body>

  <div class="d-flex">
    <!-- Sidebar da empresa -->
    <nav class="col-md-3 col-lg-2 bg-dark text-white sidebar collapse d-md-block" id="sidebarMenu" style="min-height: 100vh;">
      <div class="p-3">
        <h4 class="text-center">Área da Empresa</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-painel', event)">
              <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-estagios', event)">
             <i class="bi bi-people-fill me-2"></i> Estagiários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-relatorios', event)">
              <i class="bi bi-bar-chart-line-fill me-2"></i> Relatórios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-vagas', event)">
              <i class="bi bi-megaphone-fill me-2"></i> Vagas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-documentos', event)">
              <i class="bi bi-file-earmark-text-fill me-2"></i> Documentos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-mensagens', event)">
              <i class="bi bi-envelope-fill me-2"></i> Mensagens
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="mostrarSecao('sec-empresa-configuracoes', event)">
              <i class="bi bi-gear-fill me-2"></i> Configurações
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../tela_login/index.html">
              <i class="bi bi-box-arrow-right me-2"></i> Sair
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Conteúdo principal -->
    <main class="flex-grow-1 p-4">
      <div id="sec-empresa-painel" class="secao-ocultavel" style="display: block;">
        <h2>  
          <i class="bi bi-speedometer2 me-2"></i>Dashboard
        </h2>
          <div class="row gx-2 gy-2">
            <!-- Cards -->
            <div class="col-md-6 d-flex justify-content-start">
              <a href="estagios.html" class="card bg-dark text-white border-light rounded-4" style="width: 75%;">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-clock-history me-2"></i>Estágios Pendentes</h5>
                  <p class="card-text display-6">12</p>
                </div>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
              <a href="relatorios.html" class="card bg-dark text-white shadow-sm border-light rounded-4" style="width: 75%;">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-file-earmark-text me-2"></i>Relatórios Aguardando</h5>
                  <p class="card-text display-6">8</p>
                </div>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
              <a href="alunos.html" class="card bg-dark text-white shadow-sm border-light rounded-4" style="width: 75%;">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-people-fill me-2"></i>Estagios Cadastrados</h5>
                  <p class="card-text display-6">142</p>
                </div>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
              <a href="vagas.html" class="card bg-dark text-white shadow-sm border-light rounded-4" style="width: 75%;">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-megaphone-fill me-2"></i>Vagas Criadas</h5>
                  <p class="card-text display-6">26</p>
                </div>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
              <a href="documentos.html" class="card bg-dark text-white shadow-sm border-light rounded-4" style="width: 70%;">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-file-earmark-excel me-2"></i>Documentos Pendentes</h5>
                  <p class="card-text display-6">5</p>
                </div>
              </a>
            </div>
          </div>
      </div>
      
      <div id="sec-empresa-estagios" class="secao-ocultavel" style="display: none;">
          <!-- Filtros e Botões -->
              <div class="container my-4">
                  <h3 class="mb-4">
                  <i class="bi bi-people-fill me-2"></i>Estagiários
                </h3>

                  <!-- Botão Criar Estágio -->
                      <!-- Linha de Botão + Filtro Status -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Botão Criar Estágio à esquerda -->
                    <div>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCriarEstagio">
                            <i class="bi bi-plus-circle me-2"></i> Criar Estagiário
                        </button>
                    </div>

                    <!-- Filtro Status à direita -->
                    <div style="width: 200px;"> <!-- controla a largura -->
                        <label for="filtroStatus" class="form-label">Status</label>
                        <select id="filtroStatus" class="form-select bg-dark text-white border-secondary">
                            <option value="">Todos</option>
                            <option value="Em Curso">Em Curso</option>
                            <option value="Concluído">Concluído</option>
                            <option value="Aprovado">Aprovado</option>
                            <option value="Encerrado">Encerrado</option>
                            <option value="Pendentes">Pendentes</option>
                        </select>
                    </div>
                  </div>


                  <!-- Card de Totais -->
                  <div class="row mb-3">
                      <div class="col-md-4">
                          <div class="card text-white bg-dark">
                              <div class="card-body">
                                  <h5 class="card-title">Total de Estagiários</h5>
                                  <p id="totalEstagios" class="card-text">10</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card text-white bg-dark">
                              <div class="card-body">
                                  <h5 class="card-title">Aprovados</h5>
                                  <p id="totalAprovados" class="card-text">3</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card text-white bg-dark">
                              <div class="card-body">
                                  <h5 class="card-title">Pendentes</h5>
                                  <p id="totalPendentes" class="card-text">7</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Tabela de Estágios -->
                  <table id="tabelaEstagios" class="table table-dark table-bordered">
                      <thead>
                          <tr>
                              <th>Empresa</th>
                              <th>Curso</th>
                              <th>Duração</th>
                              <th>Período</th>
                              <th>Início</th>
                              <th>Término</th>
                              <th>Status</th>
                              <th>Estagiário</th>
                              <th>Ações</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Sig2000</td>
                              <td>Técnico de Informática</td>
                              <td>1 ano</td>
                              <td>Manhã</td>
                              <td>01/08/2024</td>
                              <td>01/08/2025</td>
                              <td>Pendentes</td>
                              <td> Yuri Eduardo</td>
                              <td>
                                <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarEstagio">
                                  <i class="bi bi-pencil"></i>
                                </button>
                                
                                <button class="btn btn-outline-light btn-sm">
                                  <i class="bi bi-trash"></i>
                                </button>
                                
                                <button class="btn btn-outline-light btn-sm">
                                  <i class="bi bi-paperclip"></i>
                                </button>
                                
                                <button class="btn btn-outline-light btn-sm">
                                  <i class="bi bi-check-circle"></i>
                                </button>    </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            <!-- Modal Criar Estágio -->
            <div class="modal fade" id="modalCriarEstagio" tabindex="-1" aria-labelledby="modalCriarEstagioLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalCriarEstagioLabel">Criar Estágio</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-dark text-white">
                          <form id="formCriarEstagio">
                              <div class="mb-3">
                                  <label for="empresa" class="form-label">Empresa</label>
                                  <input type="text" class="form-control" id="empresa" required>
                              </div>
                              <div class="mb-3">
                                  <label for="curso" class="form-label">Curso</label>
                                  <input type="text" class="form-control" id="curso" required>
                              </div>
                              <div class="mb-3">
                                  <label for="duracao" class="form-label">Duração</label>
                                  <input type="text" class="form-control" id="duracao" placeholder="Em meses" required>
                              </div>
                              <div class="mb-3">
                                  <label for="periodo" class="form-label">Período</label>
                                  <select class="form-select" id="periodo" required>
                                      <option value="Manhã">Manhã</option>
                                      <option value="Tarde">Tarde</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="inicio" class="form-label">Início</label>
                                  <input type="date" class="form-control" id="inicio" required>
                              </div>
                              <div class="mb-3">
                                  <label for="termino" class="form-label">Término</label>
                                  <input type="date" class="form-control" id="termino" required>
                              </div>
                              <div class="mb-3">
                                  <label for="status" class="form-label">Status</label>
                                  <select class="form-select" id="status" required>
                                      <option value="Pendentes">Pendentes</option>
                                      <option value="Aprovado">Em curso</option>
                                      <option value="Concluído">Concluído</option>
                                      <option value="Encerrado">Encerrado</option>
                                  </select>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer bg-dark text-white">
                          <button type="button" class="btn btn-outline-light " id="btnCriarEstagio">Criar Estágio</button>
                          <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                      </div>
                  </div>
              </div>
            </div>

            <!-- Modal Criar Estágio -->
            <div class="modal fade" id="modalCriarEstagio" tabindex="-1" aria-labelledby="modalCriarEstagioLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCriarEstagioLabel">Criar Estagiário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formCriarEstagio">
                                <div class="mb-3">
                                    <label for="empresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="empresa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="curso" class="form-label">Curso</label>
                                    <input type="text" class="form-control" id="curso" required>
                                </div>
                                <div class="mb-3">
                                    <label for="carga" class="form-label">Carga Horária</label>
                                    <input type="text" class="form-control" id="carga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="periodo" class="form-label">Período</label>
                                    <select class="form-select" id="periodo" required>
                                        <option value="Manhã">Manhã</option>
                                        <option value="Tarde">Tarde</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inicio" class="form-label">Início</label>
                                    <input type="date" class="form-control" id="inicio" required>
                                </div>
                                <div class="mb-3">
                                    <label for="termino" class="form-label">Término</label>
                                    <input type="date" class="form-control" id="termino" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" required>
                                        <option value="Pendentes">Pendentes</option>
                                        <option value="Aprovado">Aprovado</option>
                                        <option value="Concluído">Concluído</option>
                                        <option value="Encerrado">Encerrado</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" id="btnCriarEstagio">Criar Estágio</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Editar Estágio -->
            <div class="modal fade" id="modalEditarEstagio" tabindex="-1" aria-labelledby="modalEditarEstagioLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEditarEstagioLabel">Editar Estagiário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formEditarEstagio">
                                <div class="mb-3">
                                    <label for="editEmpresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="editEmpresa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editCurso" class="form-label">Curso</label>
                                    <input type="text" class="form-control" id="editCurso" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editCarga" class="form-label">Carga Horária</label>
                                    <input type="text" class="form-control" id="editCarga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editPeriodo" class="form-label">Período</label>
                                    <select class="form-select" id="editPeriodo" required>
                                        <option value="Manhã">Manhã</option>
                                        <option value="Tarde">Tarde</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="editInicio" class="form-label">Início</label>
                                    <input type="date" class="form-control" id="editInicio" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editTermino" class="form-label">Término</label>
                                    <input type="date" class="form-control" id="editTermino" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editStatus" class="form-label">Status</label>
                                    <select class="form-select" id="editStatus" required>
                                        <option value="Pendentes">Pendentes</option>
                                        <option value="Aprovado">Em curso</option>
                                        <option value="Concluído">Concluído</option>
                                        <option value="Encerrado">Encerrado</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" id="btnSalvarEdicaoEstagio">Salvar</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div> 
      </div>
      <div id="sec-empresa-relatorios" class="secao-ocultavel" style="display: none;">
         <h3 class="mb-4">
          <i class="bi bi-bar-chart-line-fill me-2"></i>Relatórios
        </h3>

          <div class="tab-content bg-dark p-4 mx-4 my-4 rounded border border-secondary text-white">

      <!-- Aba Relatórios -->
      <div class="tab-pane fade show active" id="relatorios">
        <div class="d-flex justify-content-between mb-3">
          <!-- Filtros -->
          <div>
            <input type="text" class="form-control bg-light text-dark mb-2" placeholder="Buscar relatório...">
            <select class="form-select bg-light text-dark" aria-label="Filtrar por categoria">
              <option selected>Filtrar por categoria</option>
              <option value="1">Relatório 1</option>
              <option value="2">Relatório 2</option>
              <option value="3">Relatório 3</option>
            </select>
          </div>

          <!-- Botão de Upload -->
          <div>
            <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#uploadRelatorioModal">+ Novo Relatório</button>
          </div>
        </div>

        <!-- Tabela de Relatórios -->
        <table class="table table-dark table-bordered">
          <thead>
            <tr>
              <th scope="col">Nome do Relatório</th>
              <th scope="col">Categoria</th>
              <th scope="col">Data de Upload</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Relatório Anual 2025.pdf</td>
              <td>Relatório Financeiro</td>
              <td>01/05/2025</td>
              <td>
                <button class="btn btn-outline-light btn-sm">Visualizar</button>
                <button class="btn btn-outline-light btn-sm">Excluir</button>
              </td>
            </tr>
            <tr>
              <td>Relatório de Vagas 2025.pdf</td>
              <td>Relatório de Vagas</td>
              <td>02/05/2025</td>
              <td>
                <button class="btn btn-outline-light btn-sm">Visualizar</button>
                <button class="btn btn-outline-light btn-sm">Excluir</button>
              </td>
            </tr>
            <!-- Mais relatórios podem ser listados aqui -->
          </tbody>
        </table>
      </div>

           </div>

          <!-- Modal de Upload de Relatório -->
          <div class="modal fade" id="uploadRelatorioModal" tabindex="-1" aria-labelledby="uploadRelatorioModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                  <h5 class="modal-title" id="uploadRelatorioModalLabel">Upload de Relatório</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="relatorioName" class="form-label">Nome do Relatório</label>
                      <input type="text" class="form-control bg-light text-dark" id="relatorioName" placeholder="Nome do Relatório">
                    </div>
                    <div class="mb-3">
                      <label for="relatorioCategory" class="form-label">Categoria</label>
                      <select class="form-select bg-light text-dark" id="relatorioCategory">
                        <option selected>Escolha a categoria</option>
                        <option value="1">Relatório Financeiro</option>
                        <option value="2">Relatório de Vagas</option>
                        <option value="3">Relatório de Estágios</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="relatorioFile" class="form-label">Arquivo</label>
                      <input type="file" class="form-control bg-light text-dark" id="relatorioFile">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Salvar Relatório</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div id="sec-empresa-vagas" class="secao-ocultavel" style="display: none;">
        <h3 class="mb-4">
         <i class="bi bi-megaphone-fill me-2"></i>Vagas
      </h3>
         <div class="mb-4">
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCriarVaga">Criar Nova Vaga</button>
      </div> 
          
          <!-- Cards de Totais -->
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h5 class="card-title">Total de Vagas Criadas</h5>
              <p class="card-text fs-4" id="totalVagasCriadas">5</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h5 class="card-title">Vagas Pendentes</h5>
              <p class="card-text fs-4" id="vagasPendentes">2</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabela de Vagas -->
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Vaga</th>
            <th scope="col">Empresa</th>
            <th scope="col">Curso</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Desenvolvedor Front-End</td>
            <td>Tech Solutions</td>
            <td>Ciência da Computação</td>
            <td>Estágio</td>
            <td class="status-vaga">Pendente</td>
            <td>
              <button class="btn btn-outline-info btn-editar" data-bs-toggle="modal" data-bs-target="#modalVaga"
                data-vaga="Desenvolvedor Front-End" data-empresa="Tech Solutions" data-curso="Ciência da Computação"
                data-tipo="Estágio" data-status="Pendente" data-descricao="Vaga para estágio em front-end">
                <i class="bi bi-pencil"></i>
              </button>
            
              <button class="btn btn-outline-danger">
                <i class="bi bi-trash"></i>
              </button>
            
              <button class="btn btn-outline-success btn-ver" data-bs-toggle="modal" data-bs-target="#modalCandidatos">
                <i class="bi bi-eye"></i>
              </button>
            </td>
            
          </tr>
        </tbody>
      </table>

      <!-- Modal de Criar Nova Vaga -->
      <div class="modal fade" id="modalCriarVaga" tabindex="-1" aria-labelledby="modalCriarVagaLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCriarVagaLabel">Criar Nova Vaga</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <form action="backend/cadastrarVagas.php" method="POST">
                  <div class="mb-3">
                    <label for="inputVaga" class="form-label">Vaga</label>
                    <input type="text" class="form-control" id="inputVagaNova" name="vaga">
                  </div>
                  <div class="mb-3">
                    <label for="inputEmpresa" class="form-label">Empresa</label>
                    <input type="text" class="form-control" id="inputEmpresaNova" name="empresa">
                  </div>
                  <div class="mb-3">
                    <label for="inputCurso" class="form-label">Curso</label>
                    <input type="text" class="form-control" id="inputCursoNova" name="curso">
                  </div>
                  <div class="mb-3">
                    <label for="inputTipo" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="inputTipoNova" name="tipo">
                  </div>
                  <div class="mb-3">
                    <label for="inputStatus" class="form-label">Status</label>
                    <input type="text" class="form-control" id="inputStatusNova" name="status">
                  </div>
                  <div class="mb-3">
                    <label for="inputDescricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="inputDescricaoNova" name="descricao" rows="3"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Salvar Vaga</button>
                </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary" id="salvarNovaVaga">Salvar</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal de Edição de Vaga -->
      <div class="modal fade" id="modalVaga" tabindex="-1" aria-labelledby="modalVagaLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalVagaLabel">Editar Vaga</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
             <form action="editarVagas.php" method="POST">
                  <div class="mb-3">
                    <label for="inputTitulo" class="form-label">Vaga</label>
                    <input type="text" class="form-control" id="inputTitulo" name="titulo" value="<?= htmlspecialchars($vaga['titulo']) ?>">
                  </div>
                  <div class="mb-3">
                    <label for="inputDescricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="inputDescricao" rows="3" name="descricao"><?= htmlspecialchars($vaga['descricao']) ?></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="inputRequisitos" class="form-label">Requisitos</label>
                    <textarea class="form-control" id="inputRequisitos" rows="3" name="requisitos"><?= htmlspecialchars($vaga['requisitos']) ?></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="inputCurso" class="form-label">Curso</label>
                    <input type="text" class="form-control" id="inputCurso" name="curso" value="<?= htmlspecialchars($vaga['curso']) ?>">
                  </div>
                  <div class="mb-3">
                    <label for="inputTurno" class="form-label">Turno</label>
                    <input type="text" class="form-control" id="inputTurno" name="turno" value="<?= htmlspecialchars($vaga['turno']) ?>">
                  </div>
                  <div class="mb-3">
                    <label for="inputTipo" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="inputTipo" name="tipo" value="<?= htmlspecialchars($vaga['tipo']) ?>">
                  </div>
                  <div class="mb-3">
                    <label for="inputStatus" class="form-label">Status</label>
                    <input type="text" class="form-control" id="inputStatus" name="status" value="<?= htmlspecialchars($vaga['status']) ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
              </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal de Visualização de Candidatos -->
      <div class="modal fade" id="modalCandidatos" tabindex="-1" aria-labelledby="modalCandidatosLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCandidatosLabel">Candidatos</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody id="listaCandidatos">
                  <!-- Candidatos Dinâmicos -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal de Confirmação de Exclusão -->
      <div class="modal fade" id="modalConfirmarExclusao" tabindex="-1" aria-labelledby="modalConfirmarExclusaoLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title" id="modalConfirmarExclusaoLabel">Confirmar Exclusão</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
              Tem certeza que deseja excluir esta vaga?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger" id="confirmarExclusao">Excluir</button>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Seção de Documentos -->
      <div id="sec-empresa-documentos" class="secao-ocultavel" style="display: none;">
        <h3 class="mb-4">
        <i class="bi bi-file-earmark-text-fill me-2"></i>Documentos
      </h3>  
        <div class="tab-content bg-dark p-4 mx-4 my-4 rounded border border-secondary text-white">

      <!-- Aba Documentos -->
      <div class="tab-pane fade show active" id="documentos">
        <div class="d-flex justify-content-between mb-3">
          <!-- Filtros -->
          <div>
            <input type="text" class="form-control bg-light text-dark mb-2" placeholder="Buscar documentos...">
            <select class="form-select bg-light text-dark" aria-label="Filtrar por categoria">
              <option selected>Filtrar por categoria</option>
              <option value="1">Categoria 1</option>
              <option value="2">Categoria 2</option>
              <option value="3">Categoria 3</option>
            </select>
          </div>

          <!-- Botão de Upload -->
          <div>
            <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#uploadModal">+ Novo Documento</button>
          </div>
        </div>

        <!-- Tabela de Documentos -->
        <table class="table table-dark table-bordered">
          <thead>
            <tr>
              <th scope="col">Nome do Documento</th>
              <th scope="col">Categoria</th>
              <th scope="col">Data de Upload</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Documento Exemplo 1.pdf</td>
              <td>Categoria 1</td>
              <td>01/05/2025</td>
              <td>
                <button class="btn btn-outline-light btn-sm">Visualizar</button>
                <button class="btn btn-outline-light btn-sm">Excluir</button>
              </td>
            </tr>
            <tr>
              <td>Documento Exemplo 2.pdf</td>
              <td>Categoria 2</td>
              <td>02/05/2025</td>
              <td>
                <button class="btn btn-outline-light btn-sm">Visualizar</button>
                <button class="btn btn-outline-light btn-sm">Excluir</button>
              </td>
            </tr>
            <!-- Mais documentos podem ser listados aqui -->
          </tbody>
        </table>
      </div>

             </div>

            <!-- Modal de Upload de Documento -->
            <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content bg-dark text-white">
                  <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload de Documento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="documentName" class="form-label">Nome do Documento</label>
                        <input type="text" class="form-control bg-light text-dark" id="documentName" placeholder="Nome do Documento">
                      </div>
                      <div class="mb-3">
                        <label for="documentCategory" class="form-label">Categoria</label>
                        <select class="form-select bg-light text-dark" id="documentCategory">
                          <option selected>Escolha a categoria</option>
                          <option value="1">Categoria 1</option>
                          <option value="2">Categoria 2</option>
                          <option value="3">Categoria 3</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="documentFile" class="form-label">Arquivo</label>
                        <input type="file" class="form-control bg-light text-dark" id="documentFile">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Documento</button>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div id="sec-empresa-mensagens" class="secao-ocultavel" style="display: none;">
            <div class="container mt-4">
           <h3 class="mb-4">
            <i class="bi bi-envelope-fill me-2"></i>Mensagens
          </h3>


            <!-- Abas -->
            <ul class="nav nav-tabs" id="mensagemTab" role="tablist">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#entrada">Caixa de Entrada</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nova">Nova Mensagem</button>
              </li>
            </ul>

        <!-- Conteúdo das abas -->
            <div class="tab-content bg-dark p-3 rounded-bottom border border-secondary" style="min-height: 400px;">
              
              <!-- Caixa de Entrada -->
              <div class="tab-pane fade show active" id="entrada">
                <div class="d-flex mb-3 gap-2">
                  <input type="text" class="form-control bg-light text-dark" placeholder="Buscar por assunto, remetente..." id="buscaMensagem">
                  <select class="form-select bg-light text-dark" id="filtroRemetente" style="max-width: 200px;">
                    <option value="todos">Todos</option>
                    <option value="aluno">Alunos</option>
                    <option value="empresa">Empresas</option>
                  </select>
                </div>

                <!-- Lista de mensagens -->
                <div class="list-group" id="listaMensagens">
                  <button class="list-group-item list-group-item-action bg-dark text-white border-bottom mensagem nao-lida" 
                          data-remetente="aluno" 
                          data-bs-toggle="modal" 
                          data-bs-target="#modalMensagem1" 
                          onclick="marcarComoLida(this)">
                    <strong>📧 Assunto:</strong> Atualização de Dados<br>
                    <small>De: aluno@email.com | 13/05/2025</small>
                  </button>

                  <button class="list-group-item list-group-item-action bg-dark text-white border-bottom mensagem" 
                          data-remetente="empresa" 
                          data-bs-toggle="modal" 
                          data-bs-target="#modalMensagem2" 
                          onclick="marcarComoLida(this)">
                    <strong>📧 Assunto:</strong> Nova vaga disponível<br>
                    <small>De: empresa@corp.com | 12/05/2025</small>
                  </button>
                </div>
              </div>

              <!-- Nova Mensagem -->
              <div class="tab-pane fade" id="nova">
                <form>
                  <div class="mb-3">
                    <label for="remetente" class="form-label">Seu E-mail</label>
                    <input type="email" class="form-control bg-light text-dark" id="remetente" placeholder="seu@email.com">
                  </div>
                  <div class="mb-3">
                    <label for="assunto" class="form-label">Assunto</label>
                    <input type="text" class="form-control bg-light text-dark" id="assunto" placeholder="Assunto da mensagem">
                  </div>
                  <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control bg-light text-dark" id="mensagem" rows="5" placeholder="Escreva sua mensagem aqui..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-success">Enviar</button>
                </form>
              </div>
            </div>
           </div>

      <!-- MODAL MENSAGEM 1 -->
            <div class="modal fade" id="modalMensagem1" tabindex="-1" aria-labelledby="modalMensagem1Label" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content bg-dark text-white">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalMensagem1Label">Assunto: Atualização de Dados</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <p><strong>Remetente:</strong> aluno@email.com</p>
                    <p><strong>Data:</strong> 13/05/2025</p>
                    <hr>
                    <p>Prezados, gostaria de atualizar meus dados cadastrais conforme solicitado.</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#resposta1">Responder</button>
                  </div>
                  <div class="collapse p-3" id="resposta1">
                    <textarea class="form-control bg-light text-dark mb-2" rows="4" placeholder="Digite sua resposta..."></textarea>
                    <button class="btn btn-success">Enviar Resposta</button>
                  </div>
                </div>
              </div>
            </div>

      <!-- MODAL MENSAGEM 2 -->
            <div class="modal fade" id="modalMensagem2" tabindex="-1" aria-labelledby="modalMensagem2Label" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content bg-dark text-white">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalMensagem2Label">Assunto: Nova vaga disponível</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <p><strong>Remetente:</strong> empresa@corp.com</p>
                    <p><strong>Data:</strong> 12/05/2025</p>
                    <hr>
                    <p>Estamos disponibilizando uma nova vaga de estágio em nossa empresa. Seguem os detalhes no anexo.</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#resposta2">Responder</button>
                  </div>
                  <div class="collapse p-3" id="resposta2">
                    <textarea class="form-control bg-light text-dark mb-2" rows="4" placeholder="Digite sua resposta..."></textarea>
                    <button class="btn btn-success">Enviar Resposta</button>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div id="sec-empresa-configuracoes" class="secao-ocultavel" style="display: none;">
        <div class="container mt-4">
          <h3 class="mb-4">
  <i class="bi bi-gear me-2"></i>Configurações da Empresa
</h3>


  <!-- Abas -->
  <ul class="nav nav-pills mb-3 bg-dark p-2 rounded" id="configEmpresaTab" role="tablist">
    <li class="nav-item"><a class="nav-link active text-white" data-bs-toggle="pill" href="#dadosEmpresa">Dados da Empresa</a></li>
    <li class="nav-item"><a class="nav-link text-white" data-bs-toggle="pill" href="#responsaveis">Responsáveis</a></li>
    <li class="nav-item"><a class="nav-link text-white" data-bs-toggle="pill" href="#documentacao">Documentação</a></li>
    <li class="nav-item"><a class="nav-link text-white" data-bs-toggle="pill" href="#regrasVagas">Regras de Publicação</a></li>
    <li class="nav-item"><a class="nav-link text-white" data-bs-toggle="pill" href="#comunicacaoEmpresa">Notificações</a></li>
    <li class="nav-item"><a class="nav-link text-white" data-bs-toggle="pill" href="#segurancaEmpresa">Segurança</a></li>
  </ul>

  <!-- Conteúdo das abas -->
  <div class="tab-content bg-dark p-4 mx-4 my-4 rounded border border-secondary text-white">

    <!-- Aba Dados da Empresa -->
    <div class="tab-pane fade show active" id="dadosEmpresa">
      <div class="row">
        <div class="col-md-6">
          <label class="mx-1 my-1">Nome da Empresa</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="Ex: Tech Solutions Ltda.">
        </div>
        <div class="col-md-6">
          <label class="mx-1 my-1">CNPJ</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="00.000.000/0000-00">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="mx-1 my-1">Email Corporativo</label>
          <input type="email" class="form-control bg-light text-dark" placeholder="contato@empresa.com.br">
        </div>
        <div class="col-md-6">
          <label class="mx-1 my-1">Telefone de Contato</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="(00) 0000-0000">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label class="mx-1 my-1">Endereço Completo</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="Rua, nº, cidade, estado">
        </div>
      </div>
    </div>

    <!-- Aba Responsáveis -->
    <div class="tab-pane fade" id="responsaveis">
      <label class="mx-1 my-1">Nome do Responsável Principal</label>
      <input type="text" class="form-control bg-light text-dark" placeholder="Responsável legal ou RH">

      <label class="mx-1 my-1">Email do Responsável</label>
      <input type="email" class="form-control bg-light text-dark" placeholder="responsavel@empresa.com">

      <label class="mx-1 my-1">Cargo/Função</label>
      <input type="text" class="form-control bg-light text-dark" placeholder="RH, Gerente, Diretor etc.">
    </div>

    <!-- Aba Documentação -->
    <div class="tab-pane fade" id="documentacao">
      <label class="mx-1 my-1">Documentos obrigatórios</label>
      <select class="form-select bg-light text-dark" multiple>
        <option selected>Contrato Social</option>
        <option selected>Comprovante de CNPJ</option>
        <option>Alvará de Funcionamento</option>
        <option>Outros documentos legais</option>
      </select>

      <label class="mx-1 my-1">Observações</label>
      <textarea class="form-control bg-light text-dark" rows="3" placeholder="Instruções adicionais sobre documentos..."></textarea>
    </div>

    <!-- Aba Regras de Publicação -->
    <div class="tab-pane fade" id="regrasVagas">
      <label class="mx-1 my-1">Tipo de moderação para publicação de vagas</label>
      <select class="form-select bg-light text-dark">
        <option>Aprovação manual pela instituição</option>
        <option>Publicação automática</option>
      </select>

      <label class="mx-1 my-1">Status padrão das vagas</label>
      <select class="form-select bg-light text-dark">
        <option>Aberta</option>
        <option>Fechada</option>
      </select>

      <label class="mx-1 my-1">Permitir edição/exclusão após publicação?</label>
      <select class="form-select bg-light text-dark">
        <option>Sim</option>
        <option>Não</option>
      </select>
    </div>

    <!-- Aba Notificações -->
    <div class="tab-pane fade" id="comunicacaoEmpresa">
      <label class="mx-1 my-1">Deseja receber notificações por e-mail?</label>
      <div>
        <label><input type="checkbox" checked> Candidaturas recebidas</label>
      </div>
      <div>
        <label><input type="checkbox"> Atualização de status da vaga</label>
      </div>
      <div>
        <label><input type="checkbox"> Mensagens da instituição</label>
      </div>

      <label class="mx-1 my-1">Email alternativo para notificações</label>
      <input type="email" class="form-control bg-light text-dark" placeholder="notificacoes@empresa.com">
    </div>

    <!-- Aba Segurança -->
    <div class="tab-pane fade" id="segurancaEmpresa">
      <label class="mx-1 my-1">Troca obrigatória de senha a cada (dias)</label>
      <input type="number" class="form-control bg-light text-dark" placeholder="90">

      <label class="mx-1 my-1">Autenticação em dois fatores (2FA)</label>
      <select class="form-select bg-light text-dark">
        <option>Obrigatória</option>
        <option>Opcional</option>
        <option>Desativada</option>
      </select>

      <label class="mx-1 my-1">Histórico de acesso</label>
      <select class="form-select bg-light text-dark">
        <option>Ativado</option>
        <option>Desativado</option>
      </select>
    </div>
      <div class="text-end mx-4">
  <button class="btn btn-success px-4 mt-3">
    <i class="bi bi-save me-2"></i>Salvar Configurações
  </button>
</div>

  </div>
</div>

      </div>
    </main>
  </div>

  <!-- Bootstrap e scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../script/script.js"></script> <!-- JS externo -->
</body>
</html>
