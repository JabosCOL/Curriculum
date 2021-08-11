<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Curriculum</title>
</head>
<body>
    <header>
        <div class="decoration">
        <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="objetivos">OBJETIVOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobremi">SOBRE MI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formacion">FORMACIÓN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
    </header>
    <main>
        <section class="sidebar">
            <ul>
                <li>CESAR</li>
                <li>DAVID</li>
                <li>BOLIVAR</li>
                <li>CUCHIGAY</li>
            </ul>
            <article class="sidebar_contact">
                <h6>CONTACTO</h6>
                <p>TELEFONO:<br>320-4549315</p>
                <p>CORREO ELECTRONICO:<br>Cesar.bolivarc@hotmail.com</p>
            </article>
            <article class="sidebar_address">
                <h6>DIRECCION Y FECHA DE NACIMIENTO</h6>
                <p>Cll 137a #98b-04</p>
                <p>10/07/2001</p>
            </article>
        </section>
        <div class="content">
              @yield('content')
        </div>
    </main>
</body>
</html>