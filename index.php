<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Anima</title>

</head>

<body>

  <div class="head">
    <div class="login">

      <i class="fontLogin fas fa-portrait fa-2x"></i>

      <div class="display popLogin">

        <form class="formLogin" action="login.php" method="POST">
          <div class="form-group col-md-12">
            <label for="nomeLogin">Login</label>
            <input type="text" class="form-control" id="nomeLogin" name="nomeLogin" placeholder="Login">
          </div>
          <div class="form-group col-md-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
          </div>
          <button type="submit" class="btnLogin btn">Enviar</button>
        </form>


      </div>

    </div>
  </div>

  <section class="container container2">
    <h2>Hotel Mahal</h2>
    <i class="spa fas fa-2x fa-spa"></i>
    <h4>Conheça nossos quartos</h4>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/quartoPrincipal.jpg" alt="Primeiro Slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Quarto Palace</h5>
            <p>Excelente quarto, feito para um rei</p>
            <a class="btnReservar" href="suitePalace.php">Reservar</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/quartoSound.jpg" alt="Segundo Slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Quarto Sound</h5>
            <p>Excelente quarto, feito para apreciar o conforto e um som ambiente</p>
            <button class="btnReservar">Reservar</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/quartoDream.jpg" alt="Terceiro Slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Quarto Dream</h5>
            <p>Excelente quarto, feito para um maravilhoso sono</p>
            <button class="btnReservar">Reservar</button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </section>

  <div class="transicao">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <section class="historyGandhi grid fundoGandhi">

    <div class="gandhi">
      <img class="gandhiImg" src="./img/gandhi.png" alt="">
    </div>

    <div class="textGandhi culture2">
      <h1>Gandhi</h1>
      <div class="cultureText">

        <p class="textCult2">

          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!

        </p>

      </div>
    </div>

    <div class="link">
      <p class="information">
        Mais Informações →
      </p>
    </div>

  </section>

  <section class="historyContainer grid fundoHistory">

    <div class="anima">
      <img class="gif" src="https://media.giphy.com/media/hrvRWTclUe0AxDDeTY/giphy.gif" alt="">
    </div>

    <div class="culture">
      <h1>Cultura</h1>
      <div class="cultureText">

        <p class="textCult">

          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus ipsam harum consectetur sit beatae
          perferendis dolore possimus culpa odit repudiandae numquam unde placeat, iste molestiae, laborum alias in
          quis!

        </p>

      </div>
      <div class="icons">
        <i class="fas fa-2x fa-glass-cheers"></i>
        <i class="fas fa-2x fa-hamsa"></i>
        <i class="fas fa-2x fa-pepper-hot"></i>
        <i class="fas fa-2x fa-fire"></i>
        <i class="fas fa-2x fa-mosque"></i>
        <i class="fas fa-2x fa-praying-hands"></i>
      </div>

    </div>

    <div class="enfeites">
      <p class="information2">
        Mais Informações →
      </p>
    </div>

  </section>

  <div class="transicao">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <div class="galeria">
    <h2 class="fotos">Galeria</h2>
  </div>

  <div class="transicao">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <section class="flex">

    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
    <div class="flex01">
      <img src="./img/foto.jpg" alt="">
    </div>
  </section>

  <div class="transicao">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <section class="footer grid2 fundoFooter">

    <div class="email">

    </div>

    <div class="contatos">

    </div>

    <div class="midia">

    </div>

  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/jquery.form.js"></script>
  <script src="./js/main.js"></script>

</body>

</html>