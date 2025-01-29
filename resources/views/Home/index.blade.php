<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Inicial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <!-- CSS TEXTO DINAMICO PESQUISA -->
<style>
        /* Estilo personalizado para o título */
    .search-title {
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .typed-effect {
        color: #007bff; /* Azul para destacar */
        font-weight: bold;
    }
</style>

<!-- ESTILO DOS CARDS E BARRA DE BUSCA -->
<style>
    /* Estilo personalizado para melhorar a aparência */
    .custom-search-bar {
        max-width: 900px;
        margin: 0 auto;
    }
    .custom-search-bar input {
        border-radius: 50px 0 0 50px; /* Arredonda apenas os cantos do input */
        padding: 15px; /* Adiciona espaçamento interno */
        font-size: 1.2rem; /* Aumenta o tamanho da fonte */
    }
    .custom-search-bar button {
        border-radius: 0 50px 50px 0; /* Arredonda apenas os cantos do botão */
        padding: 15px 25px; /* Adiciona espaçamento interno */
        font-size: 1.2rem; /* Aumenta o tamanho da fonte */
    }
    .custom-search-bar .input-group {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adiciona sombra suave */
    }
</style>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        header {
            background-color: #007bff;
            padding: 10px 0;
            color: white;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav-link {
            color: white;
            font-weight: 500;
            text-decoration: none;
            margin: 0 10px;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .banner {
            margin-top: 20px;
            background-color: #6aed5c;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            border-radius: 10px;
        }
        .info-section {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 40px 0;
        }
        footer .social-icons a {
            font-size: 28px;
            margin: 0 10px;
            text-decoration: none;
            transition: transform 0.2s ease, color 0.2s ease;
        }
        footer .social-icons a:hover {
            transform: scale(1.2);
            filter: brightness(1.2);
        }
        .facebook {
            color: #2d3270;
        }
        .instagram {
            color: #E4405F;
        }
        .twitter {
            color: black;
        }
        .whatsapp {
            color: #25D366;
        }


        /*
            CSS DOS CARDS
        */

        .card {
            border-radius: 15px;
            text-align: center;
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }


        /* 
            CSS DO APP-QRCODE
        */
        .promo-section {
            background-color: #f4f3ff; /* Fundo lilás claro */
            border-radius: 15px;
            padding: 30px; /* Espaçamento interno */
            text-align: center;
            color: #4a3dbd; /* Cor do texto roxo */
            font-family: Arial, sans-serif;
        }

        .promo-section h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .promo-section p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #6a5cdb; /* Roxo mais claro para o subtítulo */
        }

        .promo-logo {
            background-color: #4a3dbd;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            width: 120px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px auto;
        }

        .qr-code {
            margin: 20px 0;
            max-width: 200px; /* Limita a largura máxima */
            max-height: 200px; /* Limita a altura máxima */
            width: 100%; /* A imagem pode ocupar até 100% da largura disponível */
            height: auto; /* Mantém a proporção original da imagem */
            object-fit: contain; /* Garante que a imagem se ajusta dentro do espaço sem cortar */
        }

        .store-buttons img {
            width: 120px; /* Largura dos botões */
            margin: 5px;
        }

    </style>


    <!-- CSS DO PARALLAX-->
    <style>
        /* Estilos globais */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Estilos para o parallax */
        .parallax {
            position: relative;
            overflow: hidden;
        }

        .parallax img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: auto;
            object-fit: cover;
            will-change: transform;
            transition: transform 0.3s ease;
        }

        /* Estilos para a seção de contagem */
        .counter-section {
            padding: 100px 0;
            text-align: center;
            background-color: #C0C0C0 !important; /* Cor neutra */
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Sombramento suave */
            transition: background-color 0.3s, opacity 0.3s ease;
        }

        .counter-item {
            font-size: 4rem;
            font-weight: 600;
            color: #708090  ;
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .counter-section p {
            font-size: 1.2rem;
            color: #f8f9fa;
            margin-top: 10px;
        }

        /* Ícones */
        .icon {
            font-size: 50px;
            margin-bottom: 15px;
            color: #fff;
        }

        /* Estilos gerais */
        .content {
            padding: 100px 0;
        }

        .section-text {
            margin-bottom: 50px;
        }

        .text-filler {
            font-size: 1.1rem;
            color: #888;
            text-align: center;
        }
    </style>
    
</head>
<body> 
    <!-- Cabeçalho -->
    <header class="container-fluid">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">Minha Logo</div>
            <nav class="d-flex">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menuCliente" data-bs-toggle="dropdown" aria-expanded="false">
                        Sou Paciente
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="menuCliente">
                        <li><a class="dropdown-item" href="#">Consulta</a></li>
                        <li><a class="dropdown-item" href="#">Exames</a></li>
                        <li><a class="dropdown-item" href="#">Médicos</a></li>
                        <li><a class="dropdown-item" href="#">Fale Conosco</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menuProfissional" data-bs-toggle="dropdown" aria-expanded="false">
                        Sou Profissional de saúde
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="menuProfissional">
                        <li><a class="dropdown-item" href="#">Fazer Login</a></li>
                        <li><a class="dropdown-item" href="#">Quero ser Parceiro</a></li>
                        <li><a class="dropdown-item" href="#">Fale Conosco</a></li>
                    </ul>
                </div>
                <a href="#" class="nav-link">Política de Privacidade</a>
                <a href="#" class="nav-link">Sobre a Medexame</a>
            </nav>

            <!-- Exibir o estado selecionado -->
            <div>
                <span id="estadoSelecionado" class="badge bg-info">Estado: Não Selecionado</span>
                <a href="{% url 'redirecionar_login' %}" class="btn btn-outline-light btn-sm">Login</a>
                <a href="{% url 'cadastro' %}" class="btn btn-light btn-sm">Cadastro</a>

                <!-- Ícone do carrinho (antigo) -->
                <a href="#" class="btn btn-outline-light btn-sm">
                    <i class="fas fa-shopping-cart"></i> Carrinho
                </a>
            </div>
        </div>
    </header>

    <!-- Modal de Seleção de Estado -->
    <div class="modal fade" id="estadoModal" tabindex="-1" aria-labelledby="estadoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="estadoModalLabel">Qual seu estado?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select id="estado" class="form-select" onchange="mostrarEstado()">
                        <option value="" disabled selected>Selecione um Estado</option>
                        <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="PR">Paraná</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="SP">São Paulo</option>
                                <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Exibir o modal assim que a página carregar
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('estadoModal'));
            myModal.show();
        };

        // Função para mostrar o estado selecionado no cabeçalho e fechar o modal
        function mostrarEstado() {
            const estado = document.getElementById('estado').value;
            const estadoTexto = estado ? estado : 'Não Selecionado';
            document.getElementById('estadoSelecionado').textContent = 'Estado: ' + estadoTexto;

            // Fechar o modal após selecionar o estado
            var myModal = bootstrap.Modal.getInstance(document.getElementById('estadoModal'));
            myModal.hide();
        }
    </script>

    <!-- Incluir o FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

<body>
    <!-- Banner -->
    <div class="banner container text-center p-0" style="width: 1200px; height: 300px;">
        <img src="https://i.postimg.cc/mgnYdk30/banner-site-JPG.png" alt="banner-site-JPG" style="width: 100%; height: 100%; object-fit: cover; object-position: 0 -60px;" class="rounded-2">
    </div>

    <!-- Informações básicas -->
    <div class="info-section container mt-4" style="width: 1200px;">
        <h2>Informações Básicas</h2>
        <p>Aqui você pode adicionar informações sobre o site, descrição de serviços ou qualquer outro conteúdo relevante.</p>
        
        <!-- Cards com flexbox para garantir que fiquem na mesma linha -->
        <div class="row justify-content-start infinite-scroll-container" style="width: 100%; overflow: hidden;">

            <!-- Cards (Repetidos para criar rolagem infinita) -->
            <div class="infinite-scroll">
                <!-- Consultas presenciais -->
                <div class="col-md-4 col-lg-2" style="flex: 0 0 165px;">
                    <div class="card bg-light text-primary custom-card">
                        <div class="icon">👨‍⚕️</div>
                        <h6>Agendar</h6>
                        <h5>Consultas presenciais</h5>
                    </div>
                </div>

                <!-- Exames -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-danger custom-card">
                        <div class="icon">🧪</div>
                        <h6>Agendar</h6>
                        <h5>Exames</h5>
                    </div>
                </div>

                <!-- Odontologia -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-purple custom-card">
                        <div class="icon">🦷</div>
                        <h6>Agendar</h6>
                        <h5>Odontologia</h5>
                    </div>
                </div>

                <!-- Vacinas -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-success custom-card">
                        <div class="icon">💉</div>
                        <h6>Agendar</h6>
                        <h5>Vacinas</h5>
                    </div>
                </div>

                <!-- Check-ups -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-danger custom-card">
                        <div class="icon">❤️</div>
                        <h6>Agendar</h6>
                        <h5>Check-ups</h5>
                    </div>
                </div>

                <!-- Cirurgias -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-warning custom-card">
                        <div class="icon">✂️</div>
                        <h6>Agendar</h6>
                        <h5>Cirurgias</h5>
                    </div>
                </div>

                <!-- Novo quadrinho -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-info custom-card">
                        <div class="icon">📅</div>
                        <h6>Agendar</h6>
                        <h5>Consultas online</h5>
                    </div>
                </div>
            </div>

            <!-- Repetição dos Cards -->
            <div class="infinite-scroll">
                <!-- Consultas presenciais -->
                <div class="col-md-4 col-lg-2" style="flex: 0 0 165px;">
                    <div class="card bg-light text-primary custom-card">
                        <div class="icon">👨‍⚕️</div>
                        <h6>Agendar</h6>
                        <h5>Consultas presenciais</h5>
                    </div>
                </div>

                <!-- Exames -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-danger custom-card">
                        <div class="icon">🧪</div>
                        <h6>Agendar</h6>
                        <h5>Exames</h5>
                    </div>
                </div>

                <!-- Odontologia -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-purple custom-card">
                        <div class="icon">🦷</div>
                        <h6>Agendar</h6>
                        <h5>Odontologia</h5>
                    </div>
                </div>

                <!-- Vacinas -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-success custom-card">
                        <div class="icon">💉</div>
                        <h6>Agendar</h6>
                        <h5>Vacinas</h5>
                    </div>
                </div>

                <!-- Check-ups -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-danger custom-card">
                        <div class="icon">❤️</div>
                        <h6>Agendar</h6>
                        <h5>Check-ups</h5>
                    </div>
                </div>

                <!-- Cirurgias -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-warning custom-card">
                        <div class="icon">✂️</div>
                        <h6>Agendar</h6>
                        <h5>Cirurgias</h5>
                    </div>
                </div>

                <!-- Novo quadrinho -->
                <div class="col-md-4 col-lg-2">
                    <div class="card bg-light text-info custom-card">
                        <div class="icon">📅</div>
                        <h6>Agendar</h6>
                        <h5>Consultas online</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS -->
    <style>
        /* Modificando os cards diretamente */
        .custom-card {
            width: 167px;  /* Ajusta a largura dos cards para compensar o espaço da letra 'u' */
            height: 130px;  /* Ajusta a altura dos cards */
            padding: 12px;  /* Ajusta o padding interno */
            text-align: center;  /* Centraliza o texto */
            font-size: 0.9rem;  /* Ajusta o tamanho da fonte */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 8px;  /* Deixa as bordas arredondadas */
        }

        /* Ajustando o tamanho do ícone */
        .custom-card .icon {
            font-size: 30px;  /* Ajusta o tamanho do ícone */
            margin-bottom: 10px;
        }

        /* Ajustando os títulos dentro do card */
        .custom-card h5, .custom-card h6 {
            font-size: 0.9rem;  /* Ajusta o tamanho dos títulos */
            margin: 5px 0;
        }

        /* Garantindo que os cards fiquem na mesma linha sem quebra */
        .info-section .row {
            display: flex;
            flex-wrap: nowrap;  /* Isso garante que os cards não quebrem para a próxima linha */
            justify-content: flex-start;
            gap: 10px;  /* Reduz o espaço entre os cards */
        }

        /* Ajusta as colunas para que se ajustem bem nas telas */
        .info-section .col-md-4, .info-section .col-lg-2 {
            flex: 0 0 auto;  /* Faz com que cada card fique na linha sem quebra */
            max-width: 167px;  /* Limita a largura dos cards */
        }

        /* Contêiner de rolagem infinita */
        .infinite-scroll-container {
            display: flex;
            overflow: hidden;
            position: relative;
        }

        /* Animação para rolagem infinita */
        .infinite-scroll {
            display: flex;
            animation: scroll 30s linear infinite; /* A animação vai durar 30 segundos e será infinita */
        }

        /* Definindo a animação para mover os cards */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%); /* Move os cards para a esquerda */
            }
        }
    </style>
</body>


    <!-- Adicionando o Typed.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

        <!-- Barra de Busca e Efeito de Texto -->
    <div class="container mt-5">
        <!-- Título com o efeito de digitação -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <p class="search-title">
                    Pesquise <span class="typed-effect"></span>
                </p>
            </div>
        </div>
    </div>


    <!-- Barra de Busca e Especialidades Mais Buscadas -->
    <div class="container mt-5">
        <!-- Barra de Busca -->
        <div class="row justify-content-center mb-4">
            <div class="custom-search-bar">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Pesquisar especialidades..." aria-label="Pesquisar especialidades">
                    <a href="../busca/busca.html" class="btn btn-primary btn-lg" type="button">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Especialidades Mais Buscadas -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center mb-4">Especialidades Mais Buscadas</h3>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-3">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
                                <h5 class="card-title">Cardiologia</h5>
                                <p class="card-text">Cuide do seu coração com os melhores especialistas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-3">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-brain fa-3x text-info mb-3"></i>
                                <h5 class="card-title">Neurologia</h5>
                                <p class="card-text">Especialistas em saúde do sistema nervoso.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-3">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-baby fa-3x text-warning mb-3"></i>
                                <h5 class="card-title">Pediatria</h5>
                                <p class="card-text">Cuidados especiais para os pequenos.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-3">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-tooth fa-3x text-success mb-3"></i>
                                <h5 class="card-title">Odontologia</h5>
                                <p class="card-text">Sorria com saúde e confiança.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Seção Parallax com Animação -->
    <div class="parallax mt-5">
        <div class="container"> <!-- Aqui foi adicionado o container que limita a largura-->
        <div class="counter-section" id="counter-section">
            <div class="row">
                <div class="col-md-3">
                    <div class="icon">
                        <i class="bi bi-person-check"></i> <!-- Ícone de cliente -->
                    </div>
                    <div class="counter-item" id="clientes">0</div>
                    <p>Clientes Cadastrados</p>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="bi bi-building"></i> <!-- Ícone de clínica -->
                    </div>
                    <div class="counter-item" id="clinicas">0</div>
                    <p>Clínicas Parceiras</p>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="bi bi-person"></i> <!-- Ícone de médico -->
                    </div>
                    <div class="counter-item" id="medicos">0</div>
                    <p>Médicos Ativos</p>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="bi bi-briefcase-medical"></i> <!-- Ícone de especialidade -->
                    </div>
                    <div class="counter-item" id="especialidades">0</div>
                    <p>Especialidades Oferecidas</p>
                </div>
            </div>
        </div> <!-- Fim do container  que limita a largura-->
        </div>
    </div>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="promo-section" style="background-color: #f0f7ff; border: 2px solid #333; border-radius: 15px; padding: 20px; color: black; text-align: center; width: 90%; max-width: 600px; overflow: hidden;">
        <!-- Foto da Logo -->
        <div class="promo-logo">MedExame</div>

        <!-- Título -->
        <h1>Baixe nosso App</h1>

        <!-- Descrição -->
        <p>Marque suas consultas rapidamente de qualquer lugar.</p>

        <!-- QR Code -->
        <div class="qr-code" style="margin: 20px auto; width: 150px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" 
                 alt="QR Code" class="img-fluid">
        </div>

        <!-- Imagem do Google Play dentro do quadrado -->
        <div style="margin-top: 20px; background-color: #f0f7ff; padding: 15px; border-radius: 10px;">
            <a href="https://play.google.com/store/apps/details?id=com.seuapp" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" style="width: 180px;">
            </a>
        </div>
    </div>
</div>



    <div class="container mt-5">
        <h2 class="text-center mb-4">Perguntas Frequentes</h2>
        <div class="accordion" id="faqAccordion">
            <!-- Pergunta 1 -->
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                O que é o MedExame?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                O MedExame é um sistema que permite que clínicas se cadastrem e ofereçam serviços como exames e consultas de forma prática e eficiente.
                </div>
            </div>
            </div>
    
            <!-- Pergunta 2 -->
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Como posso me cadastrar no sistema?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Para se cadastrar, basta acessar a página inicial, clicar no botão "Cadastro" e preencher o formulário com seus dados.
                </div>
            </div>
            </div>
        
              <!-- Pergunta 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Quais serviços posso oferecer?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Você pode oferecer serviços como consultas médicas, exames laboratoriais, e outros procedimentos dependendo das especialidades da sua clínica.
                  </div>
                </div>
              </div>
            </div>
          </div>



    <!-- Rodapé -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 class="fw-bold">Medexame</h4>
                    <p>CNPJ:</p>
                    <p>Medexame</p>
                    <p>Informações úteis sobre a Medexame podem ser adicionadas aqui.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="fw-bold">Informações</h4>
                    <p>Espaço em branco para preenchimento futuro.</p>
                    <p>Espaço em branco.</p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h4 class="fw-bold">Siga a gente nas Redes Sociais:</h4>
                    <div class="d-flex justify-content-center social-icons">
                        <a href="#" class="mx-2 facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="mx-2 instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="mx-2 twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mx-2 whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <p>© 2025 Medexame. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap and Font Awesome Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        <script>
        // Função para animar o número
        function animateCounter(id, target) {
            let start = 0;
            const duration = 2000;
            const stepTime = Math.abs(Math.floor(duration / target));
            const counter = document.getElementById(id);
            
            const interval = setInterval(() => {
                start += 1;
                counter.innerText = start;
                if (start >= target) {
                    clearInterval(interval);
                }
            }, stepTime);
        }

        // Detectando visibilidade da seção com o IntersectionObserver
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                const counterSection = document.getElementById('counter-section');

                // Quando a seção estiver visível, anima os números
                if (entry.isIntersecting) {
                    animateCounter('clientes', 1200);
                    animateCounter('clinicas', 50);
                    animateCounter('medicos', 150);
                    animateCounter('especialidades', 30);
                    counterSection.style.backgroundColor = '#FF6347'; // Cor intensa quando centralizado
                    counterSection.style.opacity = '1'; // Opacidade máxima quando visível
                } else {
                    // Clareia a cor quando a seção sai da tela
                    counterSection.style.backgroundColor = '#FF6347'; // Manter cor base
                    counterSection.style.opacity = '0.3'; // Clareando a opacidade conforme sai
                }
            });
        }, { threshold: 0.5 });  // 50% da seção visível

        // Observa a seção de contagem
        observer.observe(document.querySelector('.counter-section'));

        // Efeito Parallax
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            const parallaxImage = document.querySelector('.parallax img');
            parallaxImage.style.transform = `translateY(${scrollPosition * 0.2}px)`;
        });
    </script>


    <script>
    // Configuração do Typed.js
    var options = {
        strings: ["uma especialidade", "uma clínica", "um exame", "uma vacina"], // Textos que serão alternados
        typeSpeed: 60,  // Velocidade ao digitar
        backSpeed: 40,  // Velocidade ao apagar
        backDelay: 1500, // Tempo de pausa antes de apagar
        loop: true       // Repetir a animação
    };

    // Inicializar o Typed.js
    var typed = new Typed(".typed-effect", options);
    </script>
</body>
</html>
