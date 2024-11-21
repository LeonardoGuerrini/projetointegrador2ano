<?php
include('conexao.php');
session_start(); // Inicia a sessão, ou retoma uma sessão existente
// Verifica se a variável de sessão 'id' está definida
if (!isset($_SESSION['id']) || $_SESSION['usuario'] !== 'leonardo') {
  header("Location: login.php"); // Redireciona para a página de login se não estiver logado
  exit(); // Para a execução do script após o redirecionamento
}

$conn = new mysqli($host, $username, $senha, $dbname); // Conexão com o banco de dados sendo criada usando a classe mysqli
$sql = "SELECT id, nome FROM livro;"; // Consulta SQL a ser executada
$resultado = $conn->query($sql); // O método query() executa a consulta SQL no banco de dados
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wissen Livraria - Acesso Restrito</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="pag.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    section {
      display: flex;
      flex-direction: column
    }

    section form {
      display: flex;
      justify-content: center;
      flex-direction: column;
      width: 20%;
      margin: auto;
      margin-top: 20px;
      gap: 20px;
    }

    .btnForm {
      border: 1px solid #222222;
      background-color: #222222;
      color: white;
      padding: 10px;
      transition: 0.1s all;
    }

    .btnForm:hover {
      color: #222222;
      background-color: white;
    }

    .aviso {
      display: flex;
      justify-content: center;
      font-size: 22px;
      border: 1px solid #222222;
      width: 20%;
      margin: auto;
      margin-top: 20px !important;
      padding: 5px;
    }

    .removerLivros {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .addLivros {
      margin-bottom: 20px;
    }

    .verLivros {
      margin-top: 20px;
    }

    hr {
      width: 50%;
      text-align: center;
      margin: auto;
    }

    .livrosCadastrados{
      border: 1px solid black;
      width: 50%;
      text-align: center;
      margin: auto;
      padding: 10px;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
      section {
        margin-top: 20px;
      }

      section form {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 80%;
        margin: auto;
        margin-top: 20px;
        gap: 20px;
      }

      .btnCadastrar {
        border: 1px solid #222222;
        background-color: #222222;
        color: white;
        padding: 10px;
        transition: 0.1s all;
      }

      .btnCadastrar:hover {
        color: #222222;
        background-color: white;
      }

      .aviso {
        display: flex;
        justify-content: center;
        font-size: 22px;
        border: 1px solid #222222;
        width: 90%;
        margin: auto;
        padding: 5px;
        text-align: center;
      }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) and (max-width: 767px) {}

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) and (max-width: 991px) {}

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) and (max-width: 1199px) {}

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Wissen</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="carrinho.php">Carrinho</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="autoajuda.php">Autoajuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="negocios.php">Negócios</a>
          </li>
          <li class="nav-item nav-item-financa">
            <a class="nav-link" href="investimento.php">Finanças e Investimentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mangas.php">Mangás</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tudo.php">Ver Tudo</a>
          </li>
        </ul>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minha Conta
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <?php if (isset($_SESSION['usuario'])): ?>
              <!-- Usuário logado -->
              <li><a class="dropdown-item" href="meuperfil.php">Meu Perfil</a></li>
              <li><a class="dropdown-item" href="logout.php">Sair</a></li>
            <?php else: ?>
              <!-- Usuário não logado -->
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li><a class="dropdown-item" href="cadastro.php">Cadastro</a></li>
            <?php endif; ?>
          </ul>
        </div>

        <?php

        ?>

        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Pesquisar"
            aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>
      </div>
    </div>
  </nav>

  <section>
    <div class="addLivros">
      <h2>Cadastro de Livro</h2>
      <form action="" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome do Livro" required>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição..." required>
        <input type="text" name="genero" id="genero" placeholder="Gênero" required>
        <input type="number" name="estoque" id="estoque" placeholder="Quantidade no estoque" required>
        <input type="number" name="valor" id="valor" placeholder="Valor Unitário" step="0.01" min="0" required>
        <input type="submit" value="Cadastrar" class="btnForm">
      </form>
      <?php
      if (isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['genero']) && isset($_POST['estoque']) && isset($_POST['valor'])) {
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $descricao = $mysqli->real_escape_string($_POST['descricao']);
        $genero = $mysqli->real_escape_string($_POST['genero']);
        $estoque = $mysqli->real_escape_string($_POST['estoque']);
        $valor = $mysqli->real_escape_string($_POST['valor']);

        // Verificar se o livro já existe
        $sql = "SELECT * FROM livro WHERE nome = '$nome'";
        $sql_query = $mysqli->query($sql);

        if ($sql_query->num_rows > 0) {
          echo "<p class='aviso'>Livro já cadastrado</p>";
        } else {
          $sql = "INSERT INTO livro(nome, descricao, genero, estoque, valor) VALUES ('$nome', '$descricao', '$genero', '$estoque', '$valor')";

          if ($mysqli->query($sql) === TRUE) {
            echo "<p class='aviso'>Cadastro realizado com sucesso!</p>";
            echo "<script>setTimeout(() => { window.location.reload(); }, 500);</script>"; // Recarrega após 500 ms
          } else {
            echo "Erro: " . $mysqli->error;
          }
        }
      }
      ?>
    </div>

    <hr>

    <div class="removerLivros">
      <h2>Remover Livro</h2>
      <div>
        <form action="" method="post">
          <p>Se deseja remover um livro do sistema, insira o ID do livro e clique em "Remover", assim o livro será removido imediatamente.</p>
          <input type="number" name="livroId" id="livroId" placeholder="ID do Livro" required>
          <input type="submit" value="Remover" class="btnForm">
        </form>
      </div>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['livroId'])) {

        $livroId = $_POST['livroId'];

        // Verifica se a conexão está ativa
        if ($conn->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
        }

        // Verifica se o livro existe
        $sql = "SELECT * FROM livro WHERE id = $livroId";
        $verificarResultado = $conn->query($sql);

        if ($verificarResultado->num_rows > 0) {
          // Se o livro existe, procede com a remoção
          $sqlDelete = "DELETE FROM livro WHERE id = $livroId";

          if ($conn->query($sqlDelete) === TRUE) {
            echo "<p class='aviso'>Livro removido com sucesso. Recarregando a página em 5 segundos...</p>";
          } else {
            echo "<p class='aviso'>Erro ao remover o livro: " . $conn->error . "</p>";
          }

          echo "<script>setTimeout(() => { window.location.reload(); }, 5000);</script>"; // Recarrega após 5 segundos

        } else {
          // Mensagem caso o livro não exista
          echo "<p class='aviso'>Livro não encontrado. Verifique o ID e tente novamente.</p>";
        }

        $conn->close(); // Fecha a conexão com o banco de dados

      }
      ?>
    </div>

    <hr>

    <div class="verLivros">
      <h2>Livros Cadastrados</h2>
      <div class="livrosCadastrados">
        <?php
        if ($resultado->num_rows > 0) { // Verifica se a consulta retornou alguma linha
          // Exibindo os dados de cada linha
          while ($row = $resultado->fetch_assoc()) { // O método num_rows retorna o número de linhas obtidas pela consulta. Se o valor for maior que 0, significa que há registros na tabela | Cada iteração do while processa uma linha de resultado.
            echo "ID: " . $row["id"] . " | Nome: " . $row["nome"] . "<br>";
          }
        } else {
          echo "0 resultados encontrados";
        }
        ?>
      </div>

    </div>



  </section>

  <footer>
    <h1 class="footer-titulo">Wissen</h1>
    <div class="footer-links">
      <a href="#" class="footer-item">Condições de Uso</a>
      <a href="#" class="footer-item">Notificação de Privacidade</a>
      <a href="#" class="footer-item">Cookies</a>
      <a href="#" class="footer-item">Anúncios Baseados e Interesses</a>
      <a href="acessorestrito.php" class="footer-item">Acesso Restrito</a>
    </div>
    <div class="footer-p">
      <p>© 2020-2024 Wissen.com, Inc. ou suas afiliadas.</p>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>