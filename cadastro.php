<?php
include('conexao.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['cpf']) && isset($_POST['dataNs']) && isset($_POST['numeroTel']) && isset($_POST(['senha']))){
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $cpf = $mysqli->real_escape_string($_POST['cpf']);
    $dataNs = $mysqli->real_escape_string($_POST['dataNs']);
    $numeroTel = $mysqli->real_escape_string($_POST['numeroTel']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    // Verificar se o usuário já existe
    $sql = "SELECT * FROM cadastro WHERE usuario = '$usuario'";
    $sql_query = $mysqli->query($sql);

    if($sql_query->num_rows > 0){
        echo "<p class='text-center text-lg m-4 underline'>Usuário já cadastrado</p>";
    } else{
        $sql = "INSERT INTO cadastro(nome, email, usuario, cpf, dataNs, numeroTel, senha) VALUES ('$nome', '$email', '$usuario', '$cpf', '$dataNs', '$numeroTel', '$senha')";

        if($mysqli->query($sql) === TRUE){
            echo "<p class='text-center text-lg m-4 underline'>Cadastro realizado com sucesso!</p>";
        } else{
            echo "<p class='text-center text-lg m-4 underline'>Erro: </p>". $mysqli->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wissen Livraria - Cadastro</title>
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

  <div class="titulocadastro">
    <h1>Cadastre-se</h1>
  </div>

  <section class="login content">
    <form action="login.php" method="post">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>

      <label for="usuario">Usuário</label>
      <input type="text" name="usuario" id="usuario" required>

      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" placeholder="Ex.: 12345678910" pattern="[0-9]{11}" maxlength="11" required>

      <label for="dataNs">Data de Nascimento</label>
      <input type="date" name="dataNs" id="dataNs">

      <label for="numeroTel">Número de Celular</label>
      <input type="tel" name="numeroTel" id="numeroTel" pattern="[0-9]{12}" placeholder="043123456789" required>


      <label for="senha">Senha</label>
      <input type="password" name="senha" id="senha" required>

      <br><br>
      <div class="btnsLogin">
        <input type="button" value="Cadastre-se" onclick="window.open('cadastro.html', '_self')">
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