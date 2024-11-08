<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wissen Livraria - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="login.css">
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
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="cadastro.php">Cadastrar</a></li>
          </ul>
        </div>
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

  <?php
    include('conexao.php');
    session_start();

    if (isset($_POST['usuario']) || isset($_POST['senha'])) {
      if (strlen($_POST['usuario']) == 0) {
        echo "Preencha seu usuário";
      } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
      } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM cadastro WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql) or die("Falha ao executar código sql: " . $mysqli->error);

        $qtde = $sql_query->num_rows;
        if ($qtde == 1) {
          $usuario = $sql_query->fetch_assoc();

          if (!isset($_SESSION)) {
            session_start();
          }

          $_SESSION['id'] = $usuario['id'];
          $_SESSION['nome'] = $usuario['nome'];
          $_SESSION['dtnascimento'] = $usuario['dtnascimento'];
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['usuario'] = $usuario['usuario'];

          header("Location: principal.php");
          exit();
        } else {
          echo "<p class='text-lg text-center mt-4'>Falha! Usuário e/ou senha incorretos</p>";
        }
      }
    }
  ?>

  <div class="titulologin">
    <h1>Entrar</h1>
  </div>

  <section class="login content">
    <form action="login.php" method="post">
      <label for="usuario">Usuário</label>
      <input type="text" name="usuario" id="usuario" required>
      <label for="senha">Senha</label>
      <input type="password" name="senha" id="senha" required>
      <a href="" id="esqueciasenha">Esqueceu a senha?</a>
      <br>
      <div class="btnsLogin">
        <input type="button" value="Cadastre-se" onclick="window.open('cadastro.php', '_self')">
        <input type="submit" value="Entrar" id="btnEntrar">
      </div>
    </form>
  </section>


  <footer>
    <h1 class="footer-titulo">Wissen</h1>
    <div class="footer-links">
      <a href="#" class="footer-item">Condições de Uso</a>
      <a href="#" class="footer-item">Notificação de Privacidade</a>
      <a href="#" class="footer-item">Cookies</a>
      <a href="#" class="footer-item">Anúncios Baseados e Interesses</a>
    </div>
    <div class="footer-p">
      <p>© 2020-2024 Wissen.com, Inc. ou suas afiliadas.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>