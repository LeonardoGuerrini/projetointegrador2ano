<?php
session_start(); // Inicia a sessão, ou retoma uma sessão existente
include('conexao.php');

if (!isset($_SESSION['id'])) {
  header("Location: login.php"); // Redireciona para a página de login se não estiver logado
  exit(); // Para a execução do script após o redirecionamento
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wissen Livraria - Carrinho</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="carrinho.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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

  <section class="content">
    <?php
    // Consulta SQL
    $sql = "SELECT id, nome, genero, estoque, valor FROM livro";

    // Executa a consulta
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      echo "<form action='processa.php' method='post'>"; // Formulário para enviar os dados para 'processa.php'

      while ($row = $result->fetch_assoc()) {
        // Exibe os produtos com checkbox e campo numérico para quantidade
        echo "<div>";

        // Exibe os detalhes do produto
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Gênero: " . $row["genero"] . "<br>";
        echo "Estoque: " . $row["estoque"] . "<br>";
        echo "Valor: R$ " . number_format($row["valor"], 2, ",", ".") . "<br>";

        // Campo para definir a quantidade
        // Adiciona o checkbox com a palavra "Adicionar" ao lado
        echo "<input type='checkbox' name='produtos[]' value='" . $row["id"] . "'> ";
        echo "<label>Adicionar</label><br>";  // Texto ao lado do checkbox
        echo "Quantidade: <input type='number' name='quantidade[" . $row["id"] . "]' min='1' max='" . $row["estoque"] . "' value='1'>";
        echo "</div><hr>";
      }

      echo "<h3>Método de Pagamento</h3>";
      echo "<input type='radio' name='formaPagamento' id='pix' required";
      echo "<label> PIX</label><br>";
      echo "<input type='radio' name='formaPagamento' id='cartaoCredito' required";
      echo "<label> Cartão de Crédito</label><br><br>";

      echo "<input type='submit' value='Comprar'>";
      echo "</form>";
    } else {
      echo "Nenhum produto encontrado.";
    }

    // Fecha a conexão
    $mysqli->close();


    ?>
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