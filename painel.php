<?php

include('protect.php');

?>

<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css" />

  <!----===== Boxicons CSS ===== -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <title>Controle certificados</title>
</head>

<body>
  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="/assets/img/LogoPequena.png" alt="" />
        </span>

        <div class="text logo-text">
          <span class="name">Controle</span>
          <span class="profession"><?php echo $_SESSION['nome']; ?></span>
        </div>
      </div>

      <i class="bx bx-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
      <div class="menu">
        <li class="search-box">
          <i class="bx bx-search icon"></i>
          <input type="text" placeholder="Procurar..." />
        </li>

        <ul class="menu-links">
          <li class="nav-link">
            <a href="#">
              <i class="bx bx-home-alt icon"></i>
              <span class="text nav-text">Pessoa fisica</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class="bx bx-briefcase-alt-2 icon"></i>
              <span class="text nav-text">Pessoa juridica</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class="bx bx-plus-circle icon"></i>
              <span class="text nav-text">Adicionar</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class="bx bx-x-circle icon"></i>
              <span class="text nav-text">Remover</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="logout.php">
            <i class="bx bx-log-out icon"></i>
            <span class="text nav-text">Sair</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class="bx bx-moon icon moon"></i>
            <i class="bx bx-sun icon sun"></i>
          </div>
          <span class="mode-text text">Dark mode</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>
      </div>
    </div>
  </nav>

  <section class="home">
    <div class="principal">
      <h1>Pessoa fisica: <span>380 certicados</span></h1>
    </div>
    <div class="container">
      <div class="parteum">
        <div class="titulo">
          <h5>Todos certificados</h5>
        </div>
        <div class="body">
          <h6 class="mt-1">Certificado 1</h6>
          <h6 class="mt-1">Certificado 2</h6>
          <h6 class="mt-1">Certificado 3</h6>
          <h6 class="mt-1">Certificado 4</h6>
          <h6 class="mt-1">Certificado 5</h6>
          <h6 class="mt-1">Certificado 6</h6>
          <h6 class="mt-1">Certificado 7</h6>
          <h6 class="mt-1">Certificado 8</h6>
          <h6 class="mt-1">Certificado 9</h6>
          <h6 class="mt-1">Certificado 10</h6>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="parteum">
        <div class="titulo">
          <h5>Proximo dias para vencimento</h5>
        </div>
        <div class="body">
          <h6 class="mt-1">
            Certificado 1 <i class="bx bxs-check-circle"></i> <span class="data">5 dias</span>
          </h6>
          <h6 class="mt-1">
            Certificado 2 <i class="bx bxs-check-circle"></i> <span class="data">5 dias</span>
          </h6>
          <h6 class="mt-1">
            Certificado 3 <i class="bx bxs-check-circle"></i> <span class="data">5 dias</span>
          </h6>
          <h6 class="mt-1">
            Certificado 4 <i class="bx bxs-check-circle"></i> <span class="data">5 dias</span>
          </h6>
          <h6 class="mt-1">
            Certificado 5 <i class="bx bxs-check-circle"></i> <span class="data">5 dias</span>
          </h6>
          
        </div>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>

</html>