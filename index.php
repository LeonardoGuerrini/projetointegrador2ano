<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wissen Livraria - Início</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css" />
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
        aria-label="Toggle navigation"
      >
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
            <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sair</a></li>
          </ul>
        </div>
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Pesquisar"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>
      </div>
    </div>
  </nav>

    <section class="principal">
      <div class="divBannerDesconto">
        <a href="#"
          ><img
            src="Img/bannerdesconto.jpg"
            alt="Banner Desconto"
            width="100%"
            id="bannerdesconto"
        /></a>
        <a href="#"><img src="Img/bannerdesconto02.png" alt="Banner Desconto 02" id="bannerdesconto02"></a>
      </div>

      <div class="divPrincipal">
        <h2 class="h2Cards">Promoções</h2>
        <a href="#" class="vertudo">Ver Tudo</a>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleDark"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleDark"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleDark"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img
                src="Img/berserk.svg"
                class="d-block w-10"
                alt="Berserk Volume 1"
              />
              <div class="carousel-caption d-md-block">
                <h5>Berserk Vol. 1</h5>
                <p>R$29,99</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="Img/asutilarte.svg"
                class="d-block w-10"
                alt="A Sútil Arte de Ligar o F*da-se"
              />
              <div class="carousel-caption d-md-block">
                <h5>A Sútil Arte de Ligar o F*da-se</h5>
                <p>R$34,99</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="Img/fahrenheit451.svg"
                class="d-block w-10"
                alt="Fahrenheit 451"
              />
              <div class="carousel-caption d-md-block">
                <h5>Fahrenheit 451</h5>
                <p>R$32,99</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <div class="bannerMensagem">
      <div id="bannerMensagemTexto">
        <span class="material-symbols-outlined americaSul">south_america</span>
        <p>
          <span id="textoBanner01">Entregamos em todo o Brasil</span>
          <br/>
          <span id="textoBanner02">Consulte o prazo para sua cidade</span>
        </p>
      </div>
    </div>

    <section class="categorias">

      <div class="divCategorias">
        <h2 class="h2Cards">Mais Vendidos</h2>
        <a href="#" class="vertudo">Ver Tudo</a>
        <div id="carouselCategorias" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselCategorias"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img
                src="Img/oprincipe.svg"
                class="d-block w-10"
                alt="Berserk Volume 1"
              />
              <div class="carousel-caption d-md-block">
                <h5>Pequeno Príncipe</h5>
                <p>R$31,29</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="Img/itacoisa.svg"
                class="d-block w-10"
                alt="A Sútil Arte de Ligar o F*da-se"
              />
              <div class="carousel-caption d-md-block">
                <h5>It: A coisa - Stephen King</h5>
                <p>R$71,80</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="Img/fahrenheit451.svg"
                class="d-block w-10"
                alt="Fahrenheit 451"
              />
              <div class="carousel-caption d-md-block">
                <h5>Fahrenheit 451</h5>
                <p>R$32,99</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselCategorias"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselCategorias"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>



      <div class="divCategorias">
        <h2 class="h2Cards">Mangás</h2>
        <a href="#" class="vertudo">Ver Tudo</a>
        <div id="carouselCategorias2" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselCategorias2"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias2"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias2"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img
                src="Img/chainsawmanvol1.svg"
                class="d-block w-10"
                alt="Chainsaw Man Vol. 1"
              />
              <div class="carousel-caption d-md-block">
                <h5>Chainsaw Man Vol. 1</h5>
                <p>R$27,70</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="Img/berserk.svg"
                class="d-block w-10"
                alt="Berserk Vol. 1"
              />
              <div class="carousel-caption d-md-block">
                <h5>Berserk Vol. 1</h5>
                <p>R$29,99</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="Img/demonslayervol1.svg"
                class="d-block w-10"
                alt="Demon Slayer Vol. 1"
              />
              <div class="carousel-caption d-md-block">
                <h5>Demon Slayer Vol. 1</h5>
                <p>R$26,49</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselCategorias2"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselCategorias2"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>



      <div class="divCategorias">
        <h2 class="h2Cards">Finanças e Investimentos</h2>
        <a href="#" class="vertudo">Ver Tudo</a>
        <div id="carouselCategorias3" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselCategorias3"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias3"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias3"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active fixtext" data-bs-interval="10000">
              <img
                src="Img/Invista em imóveis com pouco dinheiro.svg"
                class="d-block w-10"
                alt="Invista em imóveis com pouco dinheiro"
              />
              <div class="carousel-caption d-md-block">
                <h5>Invista em imóveis com pouco dinheiro</h5>
                <p>R$34,90</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="Img/Pai Rico, Pai Pobre.svg"
                class="d-block w-10"
                alt="Pai Rico, Pai Pobre"
              />
              <div class="carousel-caption d-md-block">
                <h5>Pai Rico, Pai Pobre</h5>
                <p>R$41,27</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="Img/A arte da persuasão.svg"
                class="d-block w-10"
                alt="A Arte da Persuasão"
              />
              <div class="carousel-caption d-md-block">
                <h5>A Arte da Persuasão</h5>
                <p>R$38,13</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselCategorias3"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselCategorias3"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="divCategorias">
        <h2 class="h2Cards">Autoajuda</h2>
        <a href="#" class="vertudo">Ver Tudo</a>
        <div id="carouselCategorias4" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselCategorias4"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias4"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselCategorias4"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img
                src="Img/Invista em imóveis com pouco dinheiro.svg"
                class="d-block w-10"
                alt="Invista em imóveis com pouco dinheiro"
              />
              <div class="carousel-caption d-md-block">
                <h5>Invista em imóveis com pouco dinheiro</h5>
                <p>R$34,90</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="Img/Pai Rico, Pai Pobre.svg"
                class="d-block w-10"
                alt="Pai Rico, Pai Pobre"
              />
              <div class="carousel-caption d-md-block">
                <h5>Pai Rico, Pai Pobre</h5>
                <p>R$41,27</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="Img/A arte da persuasão.svg"
                class="d-block w-10"
                alt="A Arte da Persuasão"
              />
              <div class="carousel-caption d-md-block">
                <h5>A Arte da Persuasão</h5>
                <p>R$38,13</p>
                <button class="btnComprarCard">
                  <a href="#" class="classComprarCard"
                    >Comprar
                    <span class="material-symbols-outlined shopping_cart"
                      >add_shopping_cart</span
                    ></a
                  >
                </button>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselCategorias4"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselCategorias4"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    

      
    </section>

    <section class="social">
      <div class="social-div">
        <a href="#"
          ><img src="Img/instagram_3955024.png" alt="Instagram Icon"
        /></a>
        <a href="#"><img src="Img/twitter_5969020.png" alt="Twitter Icon" /></a>
        <a href="#"
          ><img src="Img/whatsapp_3670051.png" alt="Whatsapp Icon"
        /></a>
      </div>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
