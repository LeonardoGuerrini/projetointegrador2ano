<?php
session_start(); // Inicia a sessão, ou retoma uma sessão existente
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wissen Livraria - Mangás</title>
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
  <link rel="stylesheet" href="page.css" />
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

  <div class="caminho">
    <ul class="caminhoul">
      <li><a href="index.php">Wissen Livraria</a></li>>
      <li><a href="mangas.php"><b>Livros</b></a></li>
    </ul>
  </div>

  <section class="principal">
    <h2>Todos os livros</h2>
    <div class="principal-div">

      <div class="div-cards">
        <img src="Img/chainsawmanvol1.svg" alt="Chainsaw Man Volume 01">
        <div class="card-texto">
          <h6 class="card-titulo">
            Chainsaw Man Vol. 01
          </h6>
          <p class="card-valor">R$27,70</p>
          <button class="btnComprarCard">
            <a href="chainsawman.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span>
            </a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/berserk.svg" alt="Berserk Volume 01">
        <div class="card-texto">
          <h6 class="card-titulo" style="margin-top: 8px;">Berserk Vol. 01</h6>
          <p class="card-valor">R$29,99</p>
          <button class="btnComprarCard">
            <a href="berserk.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/demonslayervol1.svg" alt="Demon Slayer Volume 01">
        <div class="card-texto">
          <h6 class="card-titulo">Demon Slayer Vol. 01</h6>
          <p class="card-valor">R$26,49</p>
          <button class="btnComprarCard">
            <a href="demon.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/sakamotodays03.svg" alt="Sakamoto Days Volume 03">
        <div class="card-texto">
          <h6 class="card-titulo">Sakamoto Days Vol. 03</h6>
          <p class="card-valor">R$21,89</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/demonslayervol02.svg" alt="Demon Slayer Volume 02">
        <div class="card-texto">
          <h6 class="card-titulo">Demon Slayer Vol. 02</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/demonslayervol03.svg" alt="Demon Slayer Volume 03">
        <div class="card-texto">
          <h6 class="card-titulo">Demon Slayer Vol. 03</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/Invista em imóveis com pouco dinheiro.svg" alt="Invista em Imoveis com pouco Dinheiro">
        <div class="card-texto">
          <h6 class="card-titulo">
            Invista em Imoveis com pouco Dinheiro
          </h6>
          <p class="card-valor">R$27,70</p>
          <button class="btnComprarCard">
            <a href="invistaemimoveis.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span>
            </a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/Pai Rico, Pai Pobre.svg" alt="Pai Rico, Pai Pobre">
        <div class="card-texto">
          <h6 class="card-titulo" style="margin-top: 8px;">Pai Rico, Pai Pobre</h6>
          <p class="card-valor">R$29,99</p>
          <button class="btnComprarCard">
            <a href="pairico.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/OsCodigosdoMilhao.jpg" alt="Os Codigos do Milhão">
        <div class="card-texto">
          <h6 class="card-titulo">Os Codigos do Milhão</h6>
          <p class="card-valor">R$26,49</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/DoMilaoMilhao.jpg" alt="Do Mil ao Milhão">
        <div class="card-texto">
          <h6 class="card-titulo">Do Mil ao Milhão</h6>
          <p class="card-valor">R$21,89</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/OReidosDividendos.jpg" alt="O Rei dos Dividendos">
        <div class="card-texto">
          <h6 class="card-titulo">O Rei dos Dividendos</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/CasaisCrecemJuntos.jpg" alt="Casais Inteligentes">
        <div class="card-texto">
          <h6 class="card-titulo">Casais Inteligentes</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/Na Raça.jpg" alt="Na Raça">
        <div class="card-texto">
          <h6 class="card-titulo" style="margin-top: 8px;">Na Raça.</h6>
          <p class="card-valor">R$29,99</p>
          <button class="btnComprarCard">
            <a href="naraca.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/AsArmasDaPersuasao.jpg" alt="As Armas Da Persuasão">
        <div class="card-texto">
          <h6 class="card-titulo">As Armas Da Persuasão</h6>
          <p class="card-valor">R$26,49</p>
          <button class="btnComprarCard">
            <a href="asarmas.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/Deixedeserpobre.jpg" alt="Deixe de ser Pobre">
        <div class="card-texto">
          <h6 class="card-titulo">Deixe de ser Pobre</h6>
          <p class="card-valor">R$21,89</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/Apaixone-se Pelo Problema.jpg" alt="Apaixone-se Pelo Problema, Não pela Solução">
        <div class="card-texto">
          <h6 class="card-titulo">Apaixone-se Pelo Problema, Não pela Solução</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/AMarcadaVitoria.jpg" alt="A Marca da Vitória">
        <div class="card-texto">
          <h6 class="card-titulo">A Marca da Vitória</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/fahrenheit451.svg" alt="Fahrenheit 451">
        <div class="card-texto">
          <h6 class="card-titulo">Fahrenheit 451</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="fahrenheit.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/itacoisa.svg" alt="It: A Coisa">
        <div class="card-texto">
          <h6 class="card-titulo">It: A Coisa</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="itacoisa.php" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
      </div>

      <div class="div-cards">
        <img src="Img/pequenoprincipe.svg" alt="O Pequeno Príncipe">
        <div class="card-texto">
          <h6 class="card-titulo">O Pequeno Príncipe</h6>
          <p class="card-valor">R$34,90</p>
          <button class="btnComprarCard">
            <a href="#" class="classComprarCard">Comprar
              <span class="material-symbols-outlined shopping_cart">add_shopping_cart</span></a>
          </button>
        </div>
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