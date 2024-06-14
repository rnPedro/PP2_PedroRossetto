<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <script defer src="JS/script.js"></script>
  <link rel="icon" type="image/x-icon" href="images/Logo (1).png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Soluções em Tecnologia</title>
</head>

<body>
  <?php include 'header.php'; ?>

  <main class="hero">
    <!-- Shadow Boxes -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="shadow-box" id="box1">
            <button class="ver-conteudo-btn" onclick="mostrarConteudo('box1')">MEJ</button>
            <p class="conteudo">MOVIMENTO EMPRESA JÚNIOR, o que é? Nossa missão é formar, por meio da vivência
              empresarial,
              lideranças comprometidas e capazes de transformar o país em um Brasil empreendedor. <a href="https://brasiljunior.org.br/conheca-o-mej">MEJ</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="shadow-box" id="box2">
            <button class="ver-conteudo-btn" onclick="mostrarConteudo('box2')">Redes Sociais</button>
            <p class="conteudo">Nos siga nas redes sociais abaixo para não perder nada, <a href="https://www.linkedin.com/company/ascii-empresa-j%C3%BAnior/about/">Linkedin</a>, <a href="https://www.facebook.com/asciiempresajunior">Facebook</a>, <a href="https://www.instagram.com/asciiempresajr/">Instagram</a>. E fique por dentro dos nossos conteúdos postados e os processos seletivos para os alunos de BCC
            e SI.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="shadow-box" id="box3">
            <button class="ver-conteudo-btn" onclick="mostrarConteudo('box3')">Local</button>
            <p class="conteudo">Onde estamos localizados 📌? Nossa sede fica na Avenida João Naves de Ávila, 1B ,
              Uberlândia,
              Minas Gerais 38408100, BR. <a href="local.php">Leia mais</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/ascii2.jpg" class="d-block w-100" alt="ascii">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/code.jpg" class="d-block w-100" alt="ms">
      </div>
      <div class="carousel-item">
        <img src="images/ufu2.jpg" class="d-block w-100" alt="lugar">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
  <script src="bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>