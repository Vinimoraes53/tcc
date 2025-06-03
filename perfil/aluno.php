<?php
session_start();

// Verifica se está logado e se é aluno
if(!isset($_SESSION['id_usuario']) || $_SESSION['tipo_usuario'] != 'aluno'){
    header('Location: ../tela_inicial/home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Perfil do Aluno</title>
    <link rel="stylesheet" href="../css/estilo.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ícones (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

</head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar collapse" id="sidebarMenu">
            <div class="p-3">
              <h4><i class="bi bi-person-circle me-2"></i>Área do Aluno</h4>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('cadastro')">
                    <i class="bi bi-person-fill me-2"></i> Meu Cadastro
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('curriculo')">
                    <i class="bi bi-card-text me-2"></i> Currículo
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('vagas')">
                    <i class="bi bi-briefcase-fill me-2"></i> Vagas
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('inscricoes')">
                    <i class="bi bi-list-check me-2"></i> Minhas Inscrições
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('mensagens')">
                    <i class="bi bi-chat-left-text-fill me-2"></i> Mensagens
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('favoritos')">
                    <i class="bi bi-heart-fill me-2"></i> Favoritos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('notificacoes')">
                    <i class="bi bi-bell-fill me-2"></i> Notificações
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="showSection('configuracoes')">
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
          
          <!-- Toggler (para telas pequenas) -->
          <button class="btn btn-dark d-md-none m-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <i class="bi bi-list"></i> Menu
          </button>
          

        <!-- Conteúdo Principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
         
          <!-- Seções do conteúdo -->
            <div id="cadastro" class="content-section " style="display: block;">
               
                <div class="container mt-4">
                    <h3 class="mb-4">
                      <i class="bi bi-person-lines-fill me-2"></i>Meu Cadastro
                    </h3>

                    <form class="bg-dark p-4 rounded border border-secondary text-white">

                      <!-- Nome Completo -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">Nome Completo</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light text-dark" value="Yuri Eduardo" disabled>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- Gênero -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">Gênero</label>
                        <div class="input-group">
                          <select class="form-select bg-light text-dark" disabled>
                            <option selected>Masculino</option>
                            <option>Feminino</option>
                            <option>Outro</option>
                          </select>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- Email -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                          <input type="email" class="form-control bg-light text-dark" value="yuri@email.com" disabled>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- CPF -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">CPF</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light text-dark" value="000.000.000-00" disabled>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- Endereço -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">Endereço</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light text-dark" value="Rua, 123 - Bairro - Cidade/UF" disabled>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- Telefone -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">Telefone</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light text-dark" value="(00) 00000-0000" disabled>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- Curso -->
                      <div class="mb-3 position-relative">
                        <label class="form-label">Curso</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light text-dark" value="Técnico de Informática" disabled>
                          <span class="input-group-text bg-secondary text-white" role="button">
                            <i class="bi bi-pencil-fill"></i>
                          </span>
                        </div>
                      </div>

                      <!-- Botão de Salvar -->
                      <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success">
                          <i class="bi bi-save me-1"></i>Salvar

                      </div> 
                    </form>
                </div>  
            </div>          
            
            <!-- Seção Currículo -->
            <div id="curriculo" class="content-section " style="display: none;">
                        <h1> <i class="bi bi-card-text me-2"></i> Cadastro de Currículo</h1>
                      
                        <ul class="nav nav-tabs" id="curriculumTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">Informações Pessoais</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">Sobre Mim</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Experiência Profissional</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">Formação Acadêmica</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Habilidades</button>
                            </li>
                        </ul>
                      
                        
                            <div class="tab-content" id="curriculumTabsContent">    
                                <!-- Informações Pessoais -->
                                <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nome" class="form-label">Nome Completo</label>
                                                <input type="text" class="form-control" id="nome" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                                                <input type="date" class="form-control" id="dataNascimento">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="telefone" class="form-label">Telefone</label>
                                                <input type="tel" class="form-control" id="telefone">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cidade" class="form-label">Cidade</label>
                                                <input type="text" class="form-control" id="cidade">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select class="form-select" id="estado">
                                                    <option selected>Selecione o estado</option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="linkedin" class="form-label">LinkedIn</label>
                                                <input type="url" class="form-control" id="linkedin" placeholder="https://linkedin.com/in/seuperfil">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="portfolio" class="form-label">Portfolio/Site Pessoal</label>
                                                <input type="url" class="form-control" id="portfolio" placeholder="https://seusite.com">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary" onclick="nextTab('about-tab')">Próximo</button>
                                        </div>
                                </div>
                        

                                <!-- Sobre Mim -->
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                            <div class="mb-3">
                                                <label for="sobreMim" class="form-label">Fale sobre você</label>
                                                <textarea class="form-control" id="sobreMim" rows="8" placeholder="Escreva um breve resumo sobre você, seus objetivos e motivações profissionais..."></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="objetivoProfissional" class="form-label">Objetivo Profissional</label>
                                                <textarea class="form-control" id="objetivoProfissional" rows="3" placeholder="Descreva seu objetivo de carreira atual..."></textarea>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-secondary" onclick="nextTab('personal-tab')">Anterior</button>
                                                <button class="btn btn-primary" onclick="nextTab('experience-tab')">Próximo</button>
                                            </div>
                                </div>
                                        
                                <!-- Experiência Profissional -->
                                <div class="tab-pane fade " id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                            <div id="experiencias">
                                                <div class="experiencia-item mb-2 p-3 border rounded">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Empresa</label>
                                                            <input type="text" class="form-control" placeholder="Nome da empresa">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Cargo</label>
                                                            <input type="text" class="form-control" placeholder="Seu cargo">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Data de Início</label>
                                                            <input type="month" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Data de Término</label>
                                                            <input type="month" class="form-control">
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="atualmente1">
                                                                <label class="form-check-label" for="atualmente1">Trabalho atual</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Descrição das atividades</label>
                                                        <textarea class="form-control" rows="3" placeholder="Descreva suas principais atividades e responsabilidades..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="addExperiencia" class="btn btn-outline-secondary add-more-btn">+ Adicionar outra experiência</button>
                                            <div class="d-flex justify-content-between mt-4">
                                                <button class="btn btn-secondary" onclick="nextTab('about-tab')">Anterior</button>
                                                <button class="btn btn-primary" onclick="nextTab('education-tab')">Próximo</button>
                                            </div>
                                </div>
                                        
                                <!-- Formação Acadêmica -->
                                <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                                            <div id="formacoes">
                                                <div class="formacao-item mb-2 p-3 border rounded">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Instituição</label>
                                                            <input type="text" class="form-control" placeholder="Nome da instituição">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Curso</label>
                                                            <input type="text" class="form-control" placeholder="Nome do curso">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Grau</label>
                                                            <select class="form-select">
                                                                <option selected>Selecione o grau</option>
                                                                <option value="EnsinoMedio">Ensino Médio</option>
                                                                <option value="TecnicoProf">Técnico Profissionalizante</option>
                                                                <option value="Graduacao">Graduação</option>
                                                                <option value="PosGraduacao">Pós-Graduação</option>
                                                                <option value="MBA">MBA</option>
                                                                <option value="Mestrado">Mestrado</option>
                                                                <option value="Doutorado">Doutorado</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Situação</label>
                                                            <select class="form-select">
                                                                <option value="Completo">Completo</option>
                                                                <option value="EmAndamento">Em Andamento</option>
                                                                <option value="Trancado">Trancado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Data de Início</label>
                                                            <input type="month" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Data de Conclusão</label>
                                                            <input type="month" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="addFormacao" class="btn btn-outline-secondary add-more-btn">+ Adicionar outra formação</button>
                                            <div class="d-flex justify-content-between mt-4">
                                                <button class="btn btn-secondary" onclick="nextTab('experience-tab')">Anterior</button>
                                                <button class="btn btn-primary" onclick="nextTab('skills-tab')">Próximo</button>
                                            </div>
                                </div>
                                        
                                <!-- Habilidades -->
                                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                            <div class="mb-4">
                                                <label class="form-label mb-3">Idiomas</label>
                                                <div id="idiomas">
                                                    <div class="idioma-item row mb-2">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="Idioma">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select">
                                                                <option selected>Nível de proficiência</option>
                                                                <option value="Basico">Básico</option>
                                                                <option value="Intermediario">Intermediário</option>
                                                                <option value="Avancado">Avançado</option>
                                                                <option value="Fluente">Fluente</option>
                                                                <option value="Nativo">Nativo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="addIdioma" class="btn btn-outline-secondary btn-sm add-more-btn">+ Adicionar outro idioma</button>
                                            </div>
                                            
                                            <div class="mb-2">
                                                <label class="form-label mb-3">Habilidades Técnicas</label>
                                                <div id="habilidades-tecnicas">
                                                    <div class="habilidade-item row mb-2">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="Habilidade (ex: JavaScript, Excel, Photoshop)">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select">
                                                                <option selected>Nível de conhecimento</option>
                                                                <option value="Basico">Básico</option>
                                                                <option value="Intermediario">Intermediário</option>
                                                                <option value="Avancado">Avançado</option>
                                                                <option value="Especialista">Especialista</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="addHabilidadeTecnica" class="btn btn-outline-secondary btn-sm add-more-btn">+ Adicionar outra habilidade técnica</button>
                                            </div>
                                            
                                            <div class="mb-2">
                                                <label class="form-label">Habilidades Comportamentais (Soft Skills)</label>
                                                <textarea class="form-control" id="softSkills" rows="3" placeholder="Descreva suas principais habilidades comportamentais separadas por vírgulas (ex: Comunicação, Liderança, Trabalho em equipe)"></textarea>
                                            </div>
                                            
                                            <div class="mb-2">
                                                <label class="form-label">Certificações</label>
                                                <div id="certificacoes">
                                                    <div class="certificacao-item row mb-2">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="Nome da certificação">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="Instituição">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button id="addCertificacao" class="btn btn-outline-secondary btn-sm add-more-btn">+ Adicionar outra certificação</button>
                                            </div>
                                            
                                            <div class="d-flex justify-content-between mt-4">
                                                <button class="btn btn-secondary" onclick="nextTab('education-tab')">Anterior</button>
                                                <button class="btn btn-success" id="salvarCurriculo">Salvar Currículo</button>
                                            </div>
                                </div>
                            </div> 
            </div>   

          <!-- Vagas -->
        <div id="vagas" class="content-section bg-dark text-white min-vh-100">
          <div class="container my-4">
            <h2 class="mb-4">Encontre a Vaga Ideal</h2>

            <!-- Campo de Busca -->
            <div class="input-group mb-4">
              <input type="text" id="buscaVaga" class="form-control bg-white text-dark border" placeholder="Digite o nome da vaga...">
              <button class="btn btn-primary" id="btnBuscar">Buscar</button>
            </div>

            <div class="row">
              <!-- Filtros Laterais -->
              <div class="col-md-3">
                <div class="bg-dark p-3 rounded-3">
                  <h5>Filtros</h5>
                  <div class="mb-3">
                    <label for="filtroCurso" class="form-label">Curso</label>
                    <select id="filtroCurso" class="form-select bg-white text-dark border">
                      <option value="">Todos</option>
                      <option>Administração</option>
                      <option>Engenharia</option>
                      <option>Direito</option>
                      <option>TI</option>
                      <option>Marketing</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="filtroLocalidade" class="form-label">Localidade</label>
                    <select id="filtroLocalidade" class="form-select bg-white text-dark border">
                      <option value="">Todas</option>
                      <option>São Paulo</option>
                      <option>Rio de Janeiro</option>
                      <option>Belo Horizonte</option>
                      <option>Curitiba</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="filtroTipo" class="form-label">Tipo de Estágio</label>
                    <select id="filtroTipo" class="form-select bg-white text-dark border">
                      <option value="">Todos</option>
                      <option>Remoto</option>
                      <option>Presencial</option>
                      <option>Híbrido</option>
                    </select>
                  </div>
                  <button class="btn btn-outline-light w-100 mt-2" id="btnFiltrar">Filtrar</button>
                </div>
              </div>

              <!-- Cards de Vagas -->
              <div class="col-md-9">
                <div class="row" id="vagasContainer">

                  <div class="col-md-6 mb-4">
                    <div class="card bg-dark text-white card-dark:hover rounded-10 border-success p-3 ">
                       <button class="btn btn-sm position-absolute top-0 end-0 m-2 text-danger bg-transparent border-0">
                          <i class="bi bi-heart-fill me-2"></i> <!-- ícone vazio -->
                        </button>

                      <h5>Estágio em Suporte</h5>
                      <p class="mb-1">Sig2000</p>
                      <p class="text-muted mb-2">Três Rios • Híbrido</p>
                      <small>Curso: Cursando superior em TI</small><br>
                      <small>Bolsa: R$ 700,00</small>
                      <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary">Visualizar Vaga</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="card bg-dark text-white card-dark:hover rounded-10 border-success p-3">
                      <button class="btn btn-sm position-absolute top-0 end-0 m-2 text-danger bg-transparent border-0">
                          <i class="bi bi-heart-fill me-2"></i> <!-- ícone vazio -->
                        </button>
                      
                      <h5>Estágio em Desenvolvimento</h5>
                      <p class="mb-1">Tech Solutions</p>
                      <p">Remoto</p>
                       <p>Três Rios • Híbrido</p>
                      <small>Curso: Cursando superior em TI</small><br>
                      <small>Bolsa: R$ 700,00</small>
                      <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary">Visualizar Vaga</button>
                      </div>
                    </div>
                  </div> 
                </div>  
              </div>
            </div>  
          </div>
        </div>

          <!--  Inscrições -->
          <div id="inscricoes" class=" content-section bg-dark text-white rounded-3 min-vh-100">
             <div class="container my-4">
                <h2 class="mb-4">Minhas Inscrições</h2>

                <div class="row" id="inscricoesContainer">

                  <!-- Card de Inscrição 1 -->
                  <div class="col-md-6 mb-4 ">
                    <div class="card-dark p-3 card-dark:hover rounded-10 border-success">
                      <h5>Estágio em Suporte</h5>
                      <p class="mb-1">Sig2000</p>
                      <p class="text-muted mb-2">Três Rios • Presencial</p>
                      <small>Curso: Cursando superior em TI</small><br>
                      <small>Bolsa: R$ 700,00</small><br>
                      <small><strong>Status:</strong> Aprovado</small><br>
                      <small><strong>Inscrição em:</strong> 10/05/2025</small>
                      <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-outline-light">Visualizar</button>
                      </div>
                    </div> 
                  </div>

                  <!-- Card de Inscrição 2 -->
                  <div class="col-md-6 mb-4">
                    <div class="card-dark p-3 card-dark:hover rounded-10 border-success">
                      <h5>Estágio em Desenvolvimento</h5>
                      <p class="mb-1">Dev Conecte</p>
                      <p class="text-muted mb-2">Remoto</p>
                      <small>Curso: TI</small><br>
                      <small>Bolsa: R$ 500,00</small><br>
                      <small><strong>Status:</strong> Inscrito</small><br>
                      <small><strong>Inscrição em:</strong> 14/05/2025</small>
                      <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-outline-light">Visualizar</button>
                        <button class="btn btn-danger">Cancelar Inscrição</button>
                      </div>
                    </div>
                  </div>

                </div>
             </div>
          </div>

          
          <!-- Mensagens -->
          <div id="mensagens" class="content-section">
             <div class="container mt-4 ">
            <h3 class="mb-4"><i class="bi bi-chat-dots-fill me-2"></i> Mensagens</h3>

            <!-- Abas -->
            <ul class="nav nav-tabs bg-dark text-white" id="mensagemTab" role="tablist">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#entrada">Caixa de Entrada</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nova">Nova Mensagem</button>
              </li>
            </ul>

        <!-- Conteúdo das abas -->
            <div class="tab-content bg-dark text-white p-3 rounded-bottom border border-secondary" style="min-height: 400px;">
              
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
          

            <!-- Favoritos -->
        <div id="favoritos" class="content-section">
          <div class="container my-4">
            <h2 class="mb-4">Vagas Favoritas</h2>

            <div class="row" id="favoritosContainer">
              <!-- Exemplo de Vaga Favoritada -->
              <div class="col-md-6 mb-4">
                <div class="bg-dark text-white p-3 card-dark:hover rounded-10 border-success">
                  <h5>Estágio em Desenvolvimento</h5>
                  <p class="mb-1">Dev Conect</p>
                  <p>Remoto</p>
                  <small>Curso: Computação</small><br>
                  <small>Bolsa: R$ 700,00</small>
                  <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary">Visualizar Vaga</button>
                    <button class="btn btn-outline-danger">Remover dos Favoritos</button>
                  </div>
                </div>
              </div>
              <!-- Outras vagas favoritas serão adicionadas dinamicamente -->
            </div>
          </div>
        </div>

          
          <!-- Notificações -->
          <div id="notificacoes" class="content-section">
              <!-- Aba Notificações -->
           <div class="container my-4">
              <h2 class="text-dark mb-3">Notificações Recentes</h2>

          <!-- Notificação individual -->
                <div class="card bg-dark text-white mb-2 border border-secondary">
                  <div class="card-body d-flex justify-content-between align-items-start">
                    <div>
                      <h6 class="card-title mb-1">Candidatura Aprovada!</h6>
                      <p class="card-text small text-white text">Sua candidatura à vaga "Estágio em TI" foi aprovada. Entre em contato com a empresa para os próximos passos.</p>
                      <p class="text-white small">Recebido em: 19/05/2025 às 10:45</p>
                    </div>
                    <div class="text-end">
                      <button class="btn btn-sm btn-outline-light me-1" title="Marcar como lida">
                        <i class="bi bi-check2-circle"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger" title="Excluir">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </div>
                </div>

              <!-- Outro exemplo de notificação -->
              <div class="card bg-dark text-white mb-2 border border-secondary">
                <div class="card-body d-flex justify-content-between align-items-start">
                  <div>
                    <h6 class="card-title mb-1">Nova Mensagem da Instituição</h6>
                    <p class="card-text small text-white">Atenção: atualizamos o regulamento de estágios. Acesse o menu "Estágios" para mais informações.</p>
                    <p class="text-white small">Recebido em: 18/05/2025 às 16:12</p>
                  </div>
                  <div class="text-end">
                    <button class="btn btn-sm btn-outline-light me-1" title="Marcar como lida">
                      <i class="bi bi-check2-circle"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-danger" title="Excluir">
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </div>

            <!-- Nenhuma notificação -->
            <!--
            <p class="text-muted text-center mt-4">Você não possui novas notificações.</p>
            -->
            </div>

          </div>
          <!-- Configurações -->
          <div id="configuracoes" class="content-section">
             <div class="container mt-4">
  <h3 class="mb-4"> <i class="bi bi-gear-fill me-2"></i> Configurações do Aluno</h3>

  <!-- Abas -->
  <ul class="nav nav-pills mb-3 bg-dark p-2 rounded" id="configAlunoTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-white" data-bs-toggle="pill" href="#dadosPessoais">Dados Pessoais</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" data-bs-toggle="pill" href="#preferenciasCurriculo">Preferências do Currículo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" data-bs-toggle="pill" href="#notificacoesAluno">Notificações</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" data-bs-toggle="pill" href="#segurancaAluno">Segurança</a>
    </li>
  </ul>

  <!-- Conteúdo das abas -->
  <div class="tab-content bg-dark p-4 mx-4 my-4 rounded border border-secondary text-white">

    <!-- Aba Dados Pessoais -->
    <div class="tab-pane fade show active" id="dadosPessoais">
      <div class="row">
        <div class="col-md-6">
          <label class="mx-1 my-1">Nome Completo</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="Ex: João da Silva">
        </div>
        <div class="col-md-6">
          <label class="mx-1 my-1">Matrícula</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="Ex: 2023001234">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="mx-1 my-1">Curso</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="Ex: Análise e Desenvolvimento de Sistemas">
        </div>
        <div class="col-md-6">
          <label class="mx-1 my-1">Período</label>
          <select class="form-select bg-light text-dark">
            <option>1º Período</option>
            <option>2º Período</option>
            <option>3º Período</option>
            <option>4º Período</option>
            <option>5º Período</option>
            <option>6º Período</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="mx-1 my-1">E-mail</label>
          <input type="email" class="form-control bg-light text-dark" placeholder="seuemail@exemplo.com">
        </div>
        <div class="col-md-6">
          <label class="mx-1 my-1">Telefone</label>
          <input type="text" class="form-control bg-light text-dark" placeholder="(00) 00000-0000">
        </div>
      </div>
    </div>

    <!-- Aba Preferências do Currículo -->
    <div class="tab-pane fade" id="preferenciasCurriculo">
      <label class="mx-1 my-1">Seções visíveis no currículo</label>
      <select class="form-select bg-light text-dark" multiple>
        <option selected>Informações Pessoais</option>
        <option selected>Sobre Mim</option>
        <option selected>Experiência Profissional</option>
        <option>Formação Acadêmica</option>
        <option>Idiomas</option>
        <option>Habilidades Técnicas</option>
        <option>Certificações</option>
      </select>

      <label class="mx-1 my-1 mt-3">Mostrar currículo aos recrutadores?</label>
      <select class="form-select bg-light text-dark">
        <option>Sim</option>
        <option>Não</option>
      </select>

      <label class="mx-1 my-1 mt-3">Receber sugestões de vagas por e-mail?</label>
      <select class="form-select bg-light text-dark">
        <option>Sim</option>
        <option>Não</option>
      </select>
    </div>

    <!-- Aba Notificações -->
    <div class="tab-pane fade" id="notificacoesAluno">
      <label class="mx-1 my-1">Notificações por E-mail</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="notif1">
        <label class="form-check-label" for="notif1">Nova vaga disponível</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="notif2">
        <label class="form-check-label" for="notif2">Resposta de empresa</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="notif3">
        <label class="form-check-label" for="notif3">Mensagens da instituição</label>
      </div>
    </div>

    <!-- Aba Segurança -->
    <div class="tab-pane fade" id="segurancaAluno">
      <label class="mx-1 my-1">Alterar Senha</label>
      <input type="password" class="form-control bg-light text-dark mb-2" placeholder="Senha atual">
      <input type="password" class="form-control bg-light text-dark mb-2" placeholder="Nova senha">
      <input type="password" class="form-control bg-light text-dark mb-2" placeholder="Confirmar nova senha">
      <button class="btn btn-outline-light mt-2">Salvar nova senha</button>
    </div>

  </div>
</div>

          </div>
        </main>
      </div>
    </div>


    <script src="../script/script.js"></script>
    <!-- Biblioteca html2pdf para gerar PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

  </body>
</html>
