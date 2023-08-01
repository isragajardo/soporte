<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>

    <header class="cabecera">
         <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light text-right">
                <a class="navbar-brand justify-content-center" href="#"> <img class="logo" src="./images/icono-helpdesk-blanco.png" alt="">
                <div class="container-fluid justify-content-center">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active justify-content-center" aria-current="page" href="#">Inicio</a>
                      </li>
                      <li class="nav-item dropdown  justify-content-center">
                        <a class="nav-link dropdown-toggle justify-content-center" href="#" id="navbarDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">IAs</a>
                        <ul class="dropdown-menu justify-content-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">desarrollo</a></li>
                            <li><a class="dropdown-item" href="#">programacion</a></li>
                            <li><a class="dropdown-item" href="#">Diseño</a></li>
                            <li><a class="dropdown-item" href="#">Negocio Inteligente (BI)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">otros</a></li>
                          </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                      </li>
                    
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
                
              </nav>
              <h2 class="titulo-inicio text-center">Compara HelpCenter</h2>
         </div>
         

    </header>

    </header>

    <main>
        <div class="container">
        <form method="post" autocomplete="off">
        <h2>Formulario de ayuda</h2>

        <div class="input-group">

            <div class="input-container">
                <input type="text" name="name" placeholder="ID de cotizacion">
                
            </div>
            <div class="input-container">
                <input type="text" name="pais" placeholder="Compañia">
                
            </div>
            <div class="input-container">
                <input type="text" name="unidadnegocio" placeholder="seguro">
                
            </div>

            <input type="submit" name="send" class="btn-enviar" value="enviar">

        </div>
    </form>
        </div>

    </main>


    <?php

    include("./send.php");

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>