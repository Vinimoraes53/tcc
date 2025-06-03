
// Função para mostrar uma seção e esconder as outras
function showSection(id) {
    // Esconde todas as seções principais
    document.querySelectorAll('.content-section').forEach(secao => {
      secao.classList.remove('active');
      secao.style.display = 'none';
    });
  
    // Mostra a seção correspondente ao botão clicado
    const secaoSelecionada = document.getElementById(id);
    if (secaoSelecionada) {
      secaoSelecionada.classList.add('active');
      secaoSelecionada.style.display = 'block';
    }
  
    // Se for a seção de vagas, ativa a primeira aba (Disponíveis)
    if (id === 'vagas') {
      mostrarSubsecao('disponiveis', document.querySelector('#abas-vagas button:first-child'));
    }
  }


// Aguarda o carregamento completo da página antes de executar qualquer código
document.addEventListener("DOMContentLoaded", function() {
    // Ao carregar a página, exibe apenas a aba "Disponíveis" e esconde "Candidatadas"
    document.getElementById('disponiveis').style.display = 'block';
    document.getElementById('candidatadas').style.display = 'none';
  });
  
  /**
   * Função para alternar entre as abas de vagas
   * @param {string} id - O ID da subseção a ser exibida ("disponiveis" ou "candidatadas")
   * @param {HTMLElement} btnClicado - O botão que foi clicado para ativar a aba
   */
  function mostrarSubsecao(id, btnClicado) {
    // Esconde todas as subseções de vagas
    document.querySelectorAll('.subsecao').forEach(secao => {
      secao.style.display = 'none';
    });
  
    // Mostra a subseção correspondente ao botão clicado
    document.getElementById(id).style.display = 'block';
  
    // Atualiza a aparência dos botões para refletir a aba ativa
    document.querySelectorAll('#abas-vagas button').forEach(btn => {
      btn.classList.remove('btn-primary', 'active'); // Remove estilo de botão ativo
      btn.classList.add('btn-outline-primary'); // Adiciona estilo de botão inativo
    });
  
    // Ativa visualmente o botão que foi clicado
    btnClicado.classList.remove('btn-outline-primary');
    btnClicado.classList.add('btn-primary', 'active');
  }
  
  /**
   * Função para redirecionar para a tela de login
   */
  function login() {
      window.open("../tela_login/index.php", "_self"); 
  }
  
  /**
   * Função para redirecionar para a tela de cadastro
   */
  function cadastrar() {
      window.open("../cadastrar/cadastrar.php", "_self");
  }
  
 
  
    /**
   * Função para redirecionar para a tela de vagas
   */
    function vagas() {
      window.open("../tela_inicial/vagas.php", "_self");
  }
  

  /**
   * Função para sair e voltar para a tela de login
   */
  function sair() {
      window.open("../tela_login/index.php", "_self");
  }
  /**
   * Função que envia o perfil dinamicamente dependendo da opção selecionada
   */
     const selectUsuario = document.getElementById('usuario');
const inputPerfil = document.querySelectorAll('input[name="perfil"]');

selectUsuario.addEventListener('change', function() {
    inputPerfil.forEach(input => {
        input.value = this.value; // Define o perfil selecionado em todos os formulários
    });
});
 
  /**
   * Função que exibe formulários dinamicamente dependendo da opção selecionada
   */
  document.getElementById("usuario")?.addEventListener("change", function () {
      let valorSelecionado = this.value;
  
      // Esconde todos os formulários antes de mostrar o correto
      document.querySelectorAll("form").forEach(form => {
          form.classList.add("ocultar");
      });
  
      // Mostra apenas o formulário correspondente à opção selecionada
      if (valorSelecionado) {
          document.getElementById(`form-${valorSelecionado}`).classList.remove("ocultar");
      }
  });
  

  
// Validação de formulário das abas curriculo

// Função para navegar entre as abas
function nextTab(tabId) {
    const triggerEl = document.getElementById(tabId);
    const tabTrigger = new bootstrap.Tab(triggerEl);
    tabTrigger.show();
}

// Função para adicionar nova experiência
document.getElementById('addExperiencia').addEventListener('click', function() {
    const container = document.getElementById('experiencias');
    const newItem = document.createElement('div');
    newItem.className = 'experiencia-item mb-4 p-3 border rounded';
    newItem.innerHTML = `
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-outline-danger btn-sm remove-item">Remover</button>
        </div>
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
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Trabalho atual</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição das atividades</label>
            <textarea class="form-control" rows="3" placeholder="Descreva suas principais atividades e responsabilidades..."></textarea>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar nova formação
document.getElementById('addFormacao').addEventListener('click', function() {
    const container = document.getElementById('formacoes');
    const newItem = document.createElement('div');
    newItem.className = 'formacao-item mb-4 p-3 border rounded';
    newItem.innerHTML = `
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-outline-danger btn-sm remove-item">Remover</button>
        </div>
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
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar novo idioma
document.getElementById('addIdioma').addEventListener('click', function() {
    const container = document.getElementById('idiomas');
    const newItem = document.createElement('div');
    newItem.className = 'idioma-item row mb-2';
    newItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Idioma">
        </div>
        <div class="col-md-5">
            <select class="form-select">
                <option selected>Nível de proficiência</option>
                <option value="Basico">Básico</option>
                <option value="Intermediario">Intermediário</option>
                <option value="Avancado">Avançado</option>
                <option value="Fluente">Fluente</option>
                <option value="Nativo">Nativo</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger btn-sm remove-item w-100">Remover</button>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar nova habilidade técnica
document.getElementById('addHabilidadeTecnica').addEventListener('click', function() {
    const container = document.getElementById('habilidades-tecnicas');
    const newItem = document.createElement('div');
    newItem.className = 'habilidade-item row mb-2';
    newItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Habilidade (ex: JavaScript, Excel, Photoshop)">
        </div>
        <div class="col-md-5">
            <select class="form-select">
                <option selected>Nível de conhecimento</option>
                <option value="Basico">Básico</option>
                <option value="Intermediario">Intermediário</option>
                <option value="Avancado">Avançado</option>
                <option value="Especialista">Especialista</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger btn-sm remove-item w-100">Remover</button>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar nova certificação
document.getElementById('addCertificacao').addEventListener('click', function() {
    const container = document.getElementById('certificacoes');
    const newItem = document.createElement('div');
    newItem.className = 'certificacao-item row mb-2';
    newItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Nome da certificação">
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Instituição">
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger btn-sm remove-item w-100">Remover</button>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar event listeners aos botões de remover
function addRemoveListeners() {
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            const parentElement = this.closest('.experiencia-item, .formacao-item, .idioma-item, .habilidade-item, .certificacao-item');
            if (parentElement) {
                parentElement.remove();
            }
        });
    });
}

// Botão Salvar Currículo
document.getElementById('salvarCurriculo').addEventListener('click', function() {
    alert('Currículo salvo com sucesso!');
});

// função para os menus o peril da instituição

// Função para mostrar uma seção e esconder as outras

  function mostrarSecao(idSecao, event) {
    if (event) event.preventDefault();

    // Oculta todas as seções
    const secoes = document.querySelectorAll('.secao-ocultavel');
    secoes.forEach(secao => {
      secao.style.display = 'none';
    });

    // Mostra a seção clicada
    const secaoAtiva = document.getElementById(idSecao);
    if (secaoAtiva) {
      secaoAtiva.style.display = 'block';
    }

    // Remove 'active' de todos os links do menu
    const links = document.querySelectorAll('.nav-link-instituicao');
    links.forEach(link => {
      link.classList.remove('active');
    });

    // Adiciona 'active' ao link clicado
    const linkClicado = event.target.closest('.nav-link-instituicao');
    if (linkClicado) {
      linkClicado.classList.add('active');
    }
  }

  // função o menu alunos
  // Abre o modal de cadastro de aluno
function abrirCadastroAluno() {
    const modal = new bootstrap.Modal(document.getElementById('modalCadastroAluno'));
    modal.show();
  }
  
  // Submissão do formulário com validação visual
  document.getElementById('formAluno').addEventListener('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
  
    const form = this;
  
    if (!form.checkValidity()) {
      form.classList.add("was-validated");
      return;
    }
  
    const nome = document.getElementById('nome').value;
    const matricula = document.getElementById('matricula').value;
    const email = document.getElementById('email').value;
    const curso = document.getElementById('curso').value;
    const periodo = document.getElementById('periodo').value;
    const turno = document.getElementById('turno').value;
  
    const tbody = document.getElementById('tabelaAlunos');
    const novaLinha = document.createElement('tr');
    novaLinha.innerHTML = `
      <td>${nome}</td>
      <td>${matricula}</td>
      <td>${curso}</td>
      <td>${periodo}</td>
      <td>${turno}</td>
      <td>${email}</td>
      <td>
        <button class="btn btn-sm btn-outline-light me-1"><i class="bi bi-eye-fill"></i></button>
        <button class="btn btn-sm btn-outline-warning me-1"><i class="bi bi-pencil-fill"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    `;
    tbody.appendChild(novaLinha);
  
    // Fecha o modal e limpa o formulário
    bootstrap.Modal.getInstance(document.getElementById('modalCadastroAluno')).hide();
    form.reset();
    form.classList.remove("was-validated");
  });
  
  // Filtros de curso, período e turno
  document.querySelectorAll('#filtroCurso, #filtroPeriodo, #filtroTurno').forEach(filtro => {
    filtro.addEventListener('change', filtrarAlunos);
  });
  
  function filtrarAlunos() {
    const curso = document.getElementById('filtroCurso').value;
    const periodo = document.getElementById('filtroPeriodo').value;
    const turno = document.getElementById('filtroTurno').value;
  
    document.querySelectorAll('#tabelaAlunos tr').forEach(linha => {
      const [nome, matricula, cursoLinha, periodoLinha, turnoLinha] = linha.children;
  
      const mostrar =
        (!curso || cursoLinha.textContent === curso) &&
        (!periodo || periodoLinha.textContent === periodo) &&
        (!turno || turnoLinha.textContent === turno);
  
      linha.style.display = mostrar ? '' : 'none';
    });
  }
  
  // Função utilitária para adicionar aluno na tabela
function inserirAlunoNaTabela(nome, matricula, email, curso, periodo, turno) {
    const tbody = document.getElementById('tabelaAlunos');
    const novaLinha = document.createElement('tr');
    novaLinha.innerHTML = `
      <td>${nome}</td>
      <td>${matricula}</td>
      <td>${curso}</td>
      <td>${periodo}</td>
      <td>${turno}</td>
      <td>${email}</td>
      <td>
        <button class="btn btn-sm btn-outline-light me-1"><i class="bi bi-eye-fill"></i></button>
        <button class="btn btn-sm btn-outline-warning me-1"><i class="bi bi-pencil-fill"></i></button>
        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
      </td>
    `;
    tbody.appendChild(novaLinha);
  }
  
  // Adiciona alunos fixos ao carregar a página
  window.addEventListener('DOMContentLoaded', () => {
    inserirAlunoNaTabela("Yuri Eduardo", "202301", "yuri@email.com", "Engenharia", "3º", "Manhã");
    inserirAlunoNaTabela("Vinicios Moraes", "202302", "vinicios@email.com", "Direito", "5º", "Noite");
    inserirAlunoNaTabela("Silvio Santos", "202303", "silvio@email.com", "Administração", "2º", "Tarde");
    inserirAlunoNaTabela("Lazaro Ramos", "202304", "lazaro@email.com", "Análise de Sistemas", "6º", "Noite");
  });
  
 
  // Fim da função do menu alunos

  // Função para o menu vagas
  document.getElementById('salvarNovaVaga').addEventListener('click', function () {
    const vaga = document.getElementById('inputVagaNova').value;
    const empresa = document.getElementById('inputEmpresaNova').value;
    const curso = document.getElementById('inputCursoNova').value;
    const tipo = document.getElementById('inputTipoNova').value;
    const status = document.getElementById('inputStatusNova').value;
    const descricao = document.getElementById('inputDescricaoNova').value;

    if (vaga && empresa && curso && tipo && status) {
      const novaVaga = `<tr>
        <td>${vaga}</td>
        <td>${empresa}</td>
        <td>${curso}</td>
        <td>${tipo}</td>
        <td class="status-vaga">${status}</td>
        <td>
          <button class="btn btn-outline-info btn-editar" data-bs-toggle="modal" data-bs-target="#modalVaga"
            data-vaga="${vaga}" data-empresa="${empresa}" data-curso="${curso}" data-tipo="${tipo}" data-status="${status}" data-descricao="${descricao}">Editar</button>
          <button class="btn btn-outline-danger btn-outline-danger">Excluir</button>
          <button class="btn btn-outline-success btn-ver" data-bs-toggle="modal" data-bs-target="#modalCandidatos">Ver</button>
        </td>
      </tr>`;

      document.querySelector('tbody').insertAdjacentHTML('beforeend', novaVaga);
      const modal = bootstrap.Modal.getInstance(document.getElementById('modalCriarVaga'));
      modal.hide();

      // Atualiza os totais
      const total = document.getElementById('totalVagasCriadas');
      total.textContent = parseInt(total.textContent) + 1;

      if (status === 'Pendente') {
        const pendentes = document.getElementById('vagasPendentes');
        pendentes.textContent = parseInt(pendentes.textContent) + 1;
        }
    }
});

// Função para seção de estágios

// Editar estágio
document.addEventListener('click', function (e) {
  if (e.target.textContent === 'Editar') {
    const linha = e.target.closest('tr');
    const colunas = linha.querySelectorAll('td');

    // Preenche os campos do modal
    document.getElementById('editEmpresa').value = colunas[0].textContent;
    document.getElementById('editCurso').value = colunas[1].textContent;
    document.getElementById('editCarga').value = colunas[2].textContent;
    document.getElementById('editPeriodo').value = colunas[3].textContent;
    document.getElementById('editInicio').value = colunas[4].textContent;
    document.getElementById('editTermino').value = colunas[5].textContent;
    document.getElementById('editStatus').value = colunas[6].textContent;

    // Armazena a linha sendo editada
    document.getElementById('linhaEditando').value = [...linha.parentElement.children].indexOf(linha);

    // Abre o modal de edição
    const modal = new bootstrap.Modal(document.getElementById('modalEditarEstagio'));
    modal.show();
  }
});

// Salvar edição
document.getElementById('btnSalvarEdicaoEstagio').addEventListener('click', function () {
  const index = parseInt(document.getElementById('linhaEditando').value);
  const tabela = document.getElementById('tabelaEstagios');
  const linha = tabela.rows[index];

  linha.cells[0].textContent = document.getElementById('editEmpresa').value;
  linha.cells[1].textContent = document.getElementById('editCurso').value;
  linha.cells[2].textContent = document.getElementById('editCarga').value;
  linha.cells[3].textContent = document.getElementById('editPeriodo').value;
  linha.cells[4].textContent = document.getElementById('editInicio').value;
  linha.cells[5].textContent = document.getElementById('editTermino').value;
  linha.cells[6].textContent = document.getElementById('editStatus').value;

  // Fecha o modal
  const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditarEstagio'));
  modal.hide();
});

// Excluir estágio
document.addEventListener('click', function (e) {
  if (e.target.textContent === 'Excluir') {
    const linha = e.target.closest('tr');
    const tabela = document.getElementById('tabelaEstagios');

    // Confirma a exclusão
    const confirmar = confirm("Tem certeza que deseja excluir este estágio?");
    
    if (confirmar) {
      // Remove a linha da tabela
      tabela.deleteRow(linha.rowIndex);

      // Atualiza o total de estágios
      const total = document.getElementById('totalEstagios');
      total.textContent = parseInt(total.textContent) - 1;
    }
  }
});

// Anexar documentos
document.addEventListener('click', function (e) {
  if (e.target.textContent === 'Anexar') {
    const linha = e.target.closest('tr');

    // Armazena a linha sendo editada
    document.getElementById('linhaAnexando').value = [...linha.parentElement.children].indexOf(linha);

    // Abre o modal de anexar
    const modal = new bootstrap.Modal(document.getElementById('modalAnexarEstagio'));
    modal.show();
  }
});

document.getElementById('btnSalvarAnexoEstagio').addEventListener('click', function () {
  const arquivo = document.getElementById('inputArquivoEstagio').files[0];

  if (arquivo) {
    const linhaIndex = document.getElementById('linhaAnexando').value;
    const tabela = document.getElementById('tabelaEstagios');
    const linha = tabela.rows[linhaIndex];

    // Cria um novo item de anexo na última coluna
    const tdAnexo = linha.cells[7]; // A última coluna da tabela
    const linkAnexo = document.createElement('a');
    linkAnexo.href = URL.createObjectURL(arquivo);
    linkAnexo.textContent = arquivo.name;
    linkAnexo.target = '_blank';
    tdAnexo.appendChild(linkAnexo);
    
    // Fecha o modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalAnexarEstagio'));
    modal.hide();

    // Limpa o formulário
    document.getElementById('formAnexarEstagio').reset();
  } else {
    alert('Por favor, selecione um arquivo para anexar.');
  }
});

// Aprovar estágio
document.addEventListener('click', function (e) {
  if (e.target.textContent === 'Aprovar') {
    const linha = e.target.closest('tr');
    const statusCell = linha.cells[6]; // A célula do status

    // Verifica se o estágio ainda não está aprovado
    if (statusCell.textContent !== 'Aprovado') {
      statusCell.textContent = 'Aprovado';
      
      // Opcional: alterar a cor do status para indicar que está aprovado
      statusCell.classList.remove('bg-warning', 'bg-danger');
      statusCell.classList.add('bg-success');

      // Atualiza o total de estágios aprovados
      const totalAprovados = document.getElementById('totalAprovados');
      totalAprovados.textContent = parseInt(totalAprovados.textContent) + 1;

      // Atualiza o total de estágios pendentes
      const totalPendentes = document.getElementById('totalPendentes');
      totalPendentes.textContent = parseInt(totalPendentes.textContent) - 1;
    } else {
      alert('Este estágio já está aprovado.');
    }
  }
});

// inicio da função do menu usuarios e perfis da instituição

function toggleSection(section) {
  const usuarios = document.getElementById('usuariosSection');
  const perfis = document.getElementById('perfisSection');
  const btnUsuarios = document.getElementById('btnUsuarios');
  const btnPerfis = document.getElementById('btnPerfis');

  if (section === 'usuarios') {
    usuarios.style.display = 'block';
    perfis.style.display = 'none';
    btnUsuarios.classList.add('active');
    btnPerfis.classList.remove('active');
  } else {
    usuarios.style.display = 'none';
    perfis.style.display = 'block';
    btnUsuarios.classList.remove('active');
    btnPerfis.classList.add('active');
  }
}

  // Função para permissão
  const menus = [
    { id: "dashboard", nome: "Dashboard" },
    { id: "alunos", nome: "Alunos" },
    { id: "estagios", nome: "Estágios" },
    { id: "relatorios", nome: "Relatórios" },
    { id: "vagas", nome: "Vagas" },
    { id: "usuarios", nome: "Usuários" },
    { id: "documentos", nome: "Documentos" },
    { id: "mensagens", nome: "Mensagens" },
    { id: "configuracoes", nome: "Configurações" }
  ];

  const permissoesPerfis = {
    "APOIADOR": ["alunos", "vagas"],
    "ASSISTENTE 2": ["alunos", "estagios", "documentos"]
  };

  let perfilAtual = "";

  function abrirPermissoesPerfil(nomePerfil) {
    perfilAtual = nomePerfil;
    document.getElementById("nomePerfilModal").textContent = nomePerfil;

    const form = document.getElementById("formPermissoes");
    form.innerHTML = "";

    const permissoes = permissoesPerfis[nomePerfil] || [];

    menus.forEach(menu => {
      const wrapper = document.createElement("div");
      wrapper.className = "form-check mb-2";

      const input = document.createElement("input");
      input.type = "checkbox";
      input.className = "form-check-input";
      input.id = `check-${menu.id}`;
      input.checked = permissoes.includes(menu.id);

      const label = document.createElement("label");
      label.className = "form-check-label";
      label.htmlFor = input.id;
      label.textContent = menu.nome;

      wrapper.appendChild(input);
      wrapper.appendChild(label);
      form.appendChild(wrapper);
    });

    new bootstrap.Modal(document.getElementById("modalPermissoes")).show();
  }

  function salvarPermissoes() {
    const checks = document.querySelectorAll("#formPermissoes input[type='checkbox']");
    const selecionados = Array.from(checks)
      .filter(chk => chk.checked)
      .map(chk => chk.id.replace("check-", ""));

    permissoesPerfis[perfilAtual] = selecionados;
    bootstrap.Modal.getInstance(document.getElementById("modalPermissoes")).hide();
    alert("Permissões salvas para o perfil: " + perfilAtual);
  }

  function atualizarTotais(status) {
    const total = document.getElementById('totalVagasCriadas');
    const pendentes = document.getElementById('vagasPendentes');

    if (total && parseInt(total.textContent) > 0) {
      total.textContent = parseInt(total.textContent) - 1;
    }
    if (status === 'Pendente' && pendentes && parseInt(pendentes.textContent) > 0) {
      pendentes.textContent = parseInt(pendentes.textContent) - 1;
    }
  }

  let vagaParaExcluir = null;
  let statusParaExcluir = '';

  document.querySelectorAll('.btn-outline-danger').forEach(btn => {
    btn.addEventListener('click', function () {
      vagaParaExcluir = this.closest('tr');
      statusParaExcluir = vagaParaExcluir.querySelector('.status-vaga')?.textContent.trim();
      const modal = new bootstrap.Modal(document.getElementById('modalConfirmarExclusao'));
      modal.show();
    });
  });

  document.getElementById('confirmarExclusao').addEventListener('click', function () {
    if (vagaParaExcluir) {
      atualizarTotais(statusParaExcluir);
      vagaParaExcluir.remove();
      const modal = bootstrap.Modal.getInstance(document.getElementById('modalConfirmarExclusao'));
      modal.hide();
      vagaParaExcluir = null;
      statusParaExcluir = '';
    }
  });

  // Fim da função do menu vagas
  
// Função para o menu mensagens
 // Marcar como lida ao clicar
    function marcarComoLida(elem) {
      elem.classList.remove("nao-lida");
    }

    // Filtro por tipo de remetente
    document.getElementById("filtroRemetente").addEventListener("change", function () {
      const tipo = this.value;
      const mensagens = document.querySelectorAll("#listaMensagens .mensagem");

      mensagens.forEach(msg => {
        if (tipo === "todos" || msg.dataset.remetente === tipo) {
          msg.style.display = "";
        } else {
          msg.style.display = "none";
        }
      });
    });

    // Função para alterr os campos no perfil do aluno no menu "Meu Cadastro"
  document.querySelectorAll('.input-group-text').forEach(icon => {
    icon.addEventListener('click', function () {
      const field = this.previousElementSibling;
      if (field.disabled) {
        field.disabled = false;
        field.focus();
      }
    });
  });
// Fim da função do Meu cadastro

// Função para excluir vagas
const modal = document.getElementById('modalConfirmarExclusao');
  modal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget; // botão que abriu o modal
    const id = button.getAttribute('data-id'); // pega o data-id

    const confirmar = document.getElementById('confirmarExclusao');
    confirmar.href = 'excluir_vaga.php?id=' + id; // monta o link de exclusão
  });


