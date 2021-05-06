<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Hotel Mahal</title>

</head>

<body>

  <div class="container head">
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
            <a class="btnReservar" href="./suitePalace.php">Reservar</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/quartoSound.jpg" alt="Segundo Slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Quarto Sound</h5>
            <p>Excelente quarto, feito para apreciar o conforto e um som ambiente</p>
            <a class="btnReservar" href="./suiteSound.php">Reservar</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/quartoDream.jpg" alt="Terceiro Slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Quarto Dream</h5>
            <p>Excelente quarto, feito para um maravilhoso sono</p>
            <a class="btnReservar" href="./suiteDream.php">Reservar</a>
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

  <!-- Modo App -------------------------------------------------------------------------------------------------------- -->

  <div class="modoApp">

    <div class="tituloApp">

      <h2 class="SuitePrincipal2">Suíte Palace</h2>

    </div>
    <div class="imgApp">

      <img src="./img/quartoPrincipalApp.jpg" alt="Suite Palace">

    </div>
    <div class="textoApp">

      <p class="textFirst2">
        TV de LCD com sistema multicanal,
        Cachoeira, Piscina térmica, Sauna,
        Hidromassagem, Ar condicionado,
        Teto solar móvel, Ducha dupla, Equip c/som individual,
        Frigobar e Garagem privativa para 02 autos.
      </p>
      <h3 class="tituloPreco2"> Preços </h3>
      <p class="textPreco2">
        U$ 1.000 por noite.
      </p>
      <p class="textPreco2.1">
        Incluso café da manhã e almoço.
      </p>
      <p class="textPreco3.1">
        Nós temos um restaurante interno e a região possui
        restaurantes famosos, com renomados chefes de
        5 estrelas michelin.
      </p>

      <a class="btnReservar2" href="./suitePalace.php">Reservar</a>
    </div>
  </div>
  <div class="modoApp dreamApp">

    <div class="tituloApp">

      <h2 class="SuitePrincipal2">Suíte Dream</h2>

    </div>
    <div class="imgApp">

      <img src="./img/quartoDreamApp.jpg" alt="Suíte Dream">

    </div>
    <div class="textoApp">

      <p class="textFirst2">
        TV de LCD com sistema multicanal,
        Cachoeira, Piscina térmica, Sauna,
        Hidromassagem, Ar condicionado,
        Teto solar móvel, Ducha dupla, Equip c/som individual,
        Frigobar e Garagem privativa para 02 autos.
      </p>
      <h3 class="tituloPreco2"> Preços </h3>
      <p class="textPreco2">
        U$ 1.000 por noite.
      </p>
      <p class="textPreco2.1">
        Incluso café da manhã e almoço.
      </p>
      <p class="textPreco3.1">
        Nós temos um restaurante interno e a região possui
        restaurantes famosos, com renomados chefes de
        5 estrelas michelin.
      </p>

      <a class="btnReservar2" href="./suiteDream.php">Reservar</a>

    </div>

  </div>

  <div class="modoApp soundApp">

    <div class="tituloApp">

      <h2 class="SuitePrincipal2">Suíte sound</h2>

    </div>

    <div class="imgApp">

      <img src="./img/quartoSonhoApp.jpg" alt="Suíte Sound">

    </div>

    <div class="textoApp">

      <p class="textFirst2">
        TV de LCD com sistema multicanal,
        Cachoeira, Piscina térmica, Sauna,
        Hidromassagem, Ar condicionado,
        Teto solar móvel, Ducha dupla, Equip c/som individual,
        Frigobar e Garagem privativa para 02 autos.
      </p>
      <h3 class="tituloPreco2"> Preços </h3>
      <p class="textPreco2">
        U$ 1.000 por noite.
      </p>
      <p class="textPreco2.1">
        Incluso café da manhã e almoço.
      </p>
      <p class="textPreco3.1">
        Nós temos um restaurante interno e a região possui
        restaurantes famosos, com renomados chefes de
        5 estrelas michelin.
      </p>

      <a class="btnReservar2" href="./suiteSound.php">Reservar</a>

    </div>

  </div>
  <!-- Fim App ---------------------------------------------------------------------------------------------------------------- -->

  <div class="transicao transicaoApp">

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

          Nascido e criado em uma família hindu no litoral de Guzerate, oeste da Índia, e formado em direito
          no Inner Temple, Londres, Gandhi empregou pela primeira vez a desobediência civil não-violenta como
          advogado expatriado na África do Sul, na luta da comunidade indígena pelos direitos civis. Após seu
          retorno à Índia em 1915, ele começou a organizar camponeses, agricultores e trabalhadores urbanos
          para protestar contra o imposto sobre a terra e a discriminação excessiva. Assumindo a liderança do
          Congresso Nacional Indiano em 1921, Gandhi liderou campanhas nacionais para várias causas sociais e
          para alcançar o Swaraj ou o autogoverno. Gandhi levou os indianos a desafiar o imposto salino cobrado
          pelos ingleses com a Marcha do Sal, de 400 km, em 1930, e mais tarde pedindo aos britânicos que
          abandonassem a Índia em 1942. Ele foi preso por muitos anos, em várias ocasiões, na África do Sul e
          na Índia. Vivia modestamente em uma comunidade residencial autossuficiente e usava o dhoti e o xale
          indiano tradicional, entrelaçados com fios feitos à mão em um charkha. Comia comida vegetariana
          simples e também realizou longos jejuns como um meio de auto-purificação e protesto político.

        </p>

      </div>
    </div>

    <div class="link">
      <a href="https://pt.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">

        <p class="information">
          Mais Informações →
        </p>

      </a>
    </div>

  </section>

  <section class="historyContainer grid fundoHistory historyApp">

    <div class="anima">
      <img class="gif" src="https://media.giphy.com/media/hrvRWTclUe0AxDDeTY/giphy.gif" alt="">
    </div>

    <div class="culture">
      <h1>Cultura</h1>
      <div class="cultureText cultureAjuste">

        <p class="textCult">

          <iframe src="./holi.html" scrolling="no" name="icons" height="auto" width="100%" title="Iframe Example"></iframe>

        </p>

      </div>
      <div class="icons">

        <a href="./holi.html" target="icons"><i class="fas fa-glass-cheers"></i></a>
        <a href="./religion.html" target="icons"><i class="fas fa-hamsa"></i></a>
        <a href="./comida.html" target="icons"><i class="fas fa-pepper-hot"></i></a>
        <a href="./espiritual.html" target="icons"><i class="fas fa-fire"></i></a>
        <a href="./lugares.html" target="icons"><i class="fas fa-mosque"></i></a>
        <a href="./peace.html" target="icons"><i class="fas fa-praying-hands"></i></a>
      </div>

    </div>

    <div class="enfeites">
      <a href="https://pt.wikipedia.org/wiki/Cultura_da_%C3%8Dndia" target="_blank">

        <p class="information2">
          Mais Informações →
        </p>

      </a>
    </div>

  </section>

  <div class="transicao transicaoApp">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <div class="galeria galeriaApp">
    <h2 class="fotos">Galeria</h2>
  </div>

  <div class="transicao transicaoApp">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <section class="flex galeriaApp">

    <div class="flex01">
      <img id="myImg" src="./fotos/casal.jpg" alt="Casal Indiano">
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/child.jpg" alt="Criança indiana">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/child02.jpg" alt="Criança indiana">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/colorFest.jpg" alt="Festa colorida indiana">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/colorMan.jpg" alt="Homem pintado tirando foto">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/festColor2.jpg" alt="Festa colorida indiana">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/man.jpg" alt="Homem indiano de vestido laranja">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/temple.jpg" alt="Templo indiano com pessoas em volta">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
    <div class="flex01">
      <img id="myImg2" src="./fotos/way.jpg" alt="rua lotada indiana">
      <div id="myModal2" class="modal">
        <span class="close2">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
      </div>
    </div>
  </section>

  <div class="transicao">

    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>
    <i class="fas fa-2x fa-spa"></i>

  </div>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Hotel Mahal</h5>

          <p class="text-justify">
            Caro cliente, é com grande alegria que agradecemos por depositar sua confiança em nosso
            trabalho e profissionalismo. Nos empenhamos ao máximo para alcançar a qualidade que você
            procura e é uma grande motivação ter a aprovação de clientes especiais como você.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Hotéis</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Lugares</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Turismo</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Fotos</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Rede de Hotéis</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">Mahal</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Indian</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Mahtama</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Shiva</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="http://hotelmahal.atwebpages.com/index.php">hotelmahal.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/jquery.form.js"></script>
  <script src="./js/main.js"></script>

</body>

</html>