<?php
// user
$userData = array(
    'name' => 'Gaston',
    'lastname' => 'blanco',
    'userLevel' => 'editor',
    'email' => 'gas@example.com',
    'pass' => '123456'
);

$name = $userData['name'] . ' ' . $userData['lastname'];
$userlvl = $userData['userLevel'];

// inicio html
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Ej php + html</title>
</head>

<body>
    <header class=" header_container">
        <div class="container">
            <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img class="logo_s" src="./assets/img/codoacodo.png" alt="logo de codo a codo" />
                    <span class="fs-4 header_nav-title">Conf Bs As</span>
                </a>

                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">La conferencia</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Los oradores</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">El lugar y la fecha</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Conviértete en orador</a></li>
                    <li class="nav-item"><a href="/tickets.html" class="nav-link color-action">Comprar tickets</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- section one -->
    <section class="section_one-container">

        <!-- inicio php -->
        <?php

        // Verificar el nivel de usuario y mostrar la información correspondiente
        if ($userlvl === 'admin') {
            ?>
            <div class="card text-center contanerMensaje">
                <div class="card-body">
                    <h5 class="card-title">La web esta a su servicio administrador
                        <?php echo $name; ?>
                    </h5>
                    <a href="#" class="btn btn-primary">Comenzar a administrar</a>
                </div>
            </div>
            <?php
        } elseif ($userlvl === 'editor') {
            ?>
            <div class="card text-center contanerMensaje">
                <div class="card-body">
                    <h5 class="card-title">Ponte urgente mente a trabajar !
                        <?php echo $name; ?>
                    </h5>
                    <a href="#" class="btn btn-primary">Comenzar a trabajar</a>
                </div>
            </div>
            <?php
        } elseif ($userlvl === 'invitado') {
            ?>
            <div class="card text-center contanerMensaje">
                <div class="card-body">
                    <h5 class="card-title">Espero que disfrutes y te diviertas navegnado
                        <?php echo $name; ?>
                    </h5>
                    <a href="#" class="btn btn-primary">Navegar la web</a>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="card text-center contanerMensaje">
                <div class="card-body">
                    <h5 class="card-title">La web esta a su servicio administrador
                        <?php echo $name; ?>
                    </h5>
                    <a href="#" class="btn btn-primary">Comenzar a administrar</a>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <!-- footer -->
    <footer class="py-3 footer_bg">
        <ul class="nav footer_container pb-3 mb-3">
            <li class="nav-item"><a href="#" class="footer_li">Preguntas <br> frecuentes</a></li>
            <li class="nav-item"><a href="#" class="footer_li">Contáctanos</a></li>
            <li class="nav-item"><a href="#" class="footer_li">Prensa</a></li>
            <li class="nav-item"><a href="#" class="footer_li">Conferencias</a></li>
            <li class="nav-item"><a href="#" class="footer_li">Términos y <br> condiciones</a></li>
            <li class="nav-item"><a href="#" class="footer_li">Privacidad</a></li>
            <li class="nav-item"><a href="#" class="footer_li">Estudiantes</a></li>
        </ul>
    </footer>
</body>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>