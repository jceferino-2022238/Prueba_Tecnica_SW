<?php
/*require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);*/
/*
     require_once "recaptchalib.php";   
     $secret = "6Lf2jjAqAAAAAJ_Vn536jYN8nfKrQtN7ue2wS1JH";
     $response = null;
     $reCaptcha = new ReCaptcha($secret);
     if ($_POST["g-recaptcha-response"]) {
         $response = $reCaptcha->verifyResponse(
         $_SERVER["REMOTE_ADDR"],
         $_POST["g-recaptcha-response"]
         );
      }
    if ($response != null && $response->success) {
        // Añade aquí el código que desees en el caso de que la validación sea correcta
      } else {
        // Añade aquí el código que desees en el caso de que la validación no sea correcta o muestra
      }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
</head>
<body>
    <div class="headerG">
        <div class="headerA">
            <div class="upperHeaderA">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="reglametosBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reglamentos
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Clases</a></li>
                        <li><a class="dropdown-item" href="#">Cobros</a></li>
                    </ul>
                </div>
                <a class="headerAA" href="">Formularios</a>
                <a class="headerAA" href="">Contáctenos</a>
                <a class="headerAA" href="">Empleos</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="beneficiosBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Beneficios
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Promociones</a></li>
                        <li><a class="dropdown-item" href="#">Alianzas</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" id="loginBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://waterproof.com.gt/wp-content/uploads/2024/02/account-36x36.png" alt="">
                    Login
                </button>
                <ul id="dropdown-menu-login" class="dropdown-menu">
                    <li><img src="https://waterproof.com.gt/wp-content/uploads/2023/12/nadador-4.svg" alt=""><a class="dropdown-item" href="#">Staff Portal</a></li>
                    <li><img src="https://waterproof.com.gt/wp-content/uploads/2023/12/familia.svg" alt=""><a class="dropdown-item" href="#">Parent Portal</a></li>
                    <li><img src="https://waterproof.com.gt/wp-content/uploads/2023/12/administrador.svg" alt=""><a class="dropdown-item" href="#">Administrativos</a></li>
                </ul>
            </div>
        </div>
        <div class="headerB">
            <header>
                <div class="img-container">
                    <img src="https://waterproof.com.gt/wp-content/uploads/2023/11/LOGO-WATERPROOF-1-1536x1391.png" alt="">
                </div>
                <a class="link" href="">Inicio</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="nosotrosBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">¿Quiénes somos?</a></li>
                        <li><a class="dropdown-item" href="#">Nuestro equipo</a></li>
                        <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                    </ul>
                </div>
                <a class="link" href="">Ubicaciones</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="programasBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="" alt="">
                        Programas
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bebés</a></li>
                        <li><a class="dropdown-item" href="#">Niños</a></li>
                        <li><a class="dropdown-item" href="#">Adultos</a></li>
                        <li><a class="dropdown-item" href="#">Cursos de vacaciones</a></li>
                        <li><a class="dropdown-item" href="#">Equipo Competitivo</a></li>
                    </ul>
                </div>
                <a class="link" href="">Blog</a>
                <a class="link" href="">Eventos</a>
                <button id="citaBtn">¡Haz tu cita HOY!</button>
            </header>
        </div>
    </div>
    <div class="bodyG">
        <div class="formG">
            <div>
                <h1>Cancelaciones</h1>
            </div>
            <div class="form-container">
                <div>
                    <img style="width: 300px;" src="https://waterproof.com.gt/wp-content/uploads/2024/01/FOTO-CANCELACION.png" alt="">
                </div>
                <div class="form-main">   
                    <form action="send_email.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Sede de tu servicio</label>
                                <select class="form-select" name="sede-servicio" id="" required>
                                    <option value="">Zona 16</option>
                                    <option value="">Zona 10</option>
                                    <option value="">Carretera Interamericana</option>
                                    <option value="">San Cristóbal</option>
                                    <option value="">El Naranjo</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Nombre del responsable</label>
                                <input type="text" class="form-control" name="nombre-responsable" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Teléfono del responsable</label>
                                <input type="text" class="form-control" name="telefono-responsable" required>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Correo del responsable</label>
                                <input type="text" class="form-control" name="correo-responsable" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Indica la razón de tu cancelación</label>
                            <select class="form-select" id="" name="razon-cancelacion" required>
                                <option value="">Vacaciones</option>
                                <option value="">Viaje</option>
                                <option value="">Enfermedad</option>
                                <option value="">Estudios</option>
                                <option value="">Accidente</option>
                                <option value="">Económico</option>
                                <option value="">Lesión</option>
                                <option value="">Clima</option>
                                <option value="">Ubicación de la sede</option>
                                <option value="">Falta de tiempo</option>
                                <option value="">Mal servicio al cliente</option>
                                <option value="">Baja calidad de instructores</option>
                                <option value="">Cambio de país de residencia</option>
                                <option value="">Accidente o enfermedad</option>
                                <option value="">Embarazo</option>
                                <option value="">Cambio de deporte</option>
                                <option value="">Tráfico</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Detalla la razón de tu cancelación y cuéntanos tu 
                                experiencia en Waterproof</label>
                            <input type="text" class="form-control" name="detalle-cancelacion" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">¿Recomendarias a Waterproof con tus familiares y/o amigos? </label>
                            <select class="form-select" id="" name="recomedarias-waterproof" required>
                                <option value="">Muy probable</option>
                                <option value="">Probablemente</option>
                                <option value="">Muy poco probable</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">De 1 a 10, siendo 10 la nota más alta, ¿cómo calificarías a Waterproof? Tomando en cuenta todos los aspectos </label>
                            <select class="form-select" id="" name="calificacion-waterproof" required>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </div>
                        <legend>Nos encantaría saber cómo podemos mejorar</legend>
                        <div class="mb-3">
                            <label for="" class="form-label">¿Qué debería de empezar a hacer Waterproof?
                            </label>
                            <input type="text" class="form-control" name="que-hacer" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">¿Qué debería de dejar de hacer Waterproof?</label>
                            <input type="text" class="form-control" name="dejar-hacer" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">¿Qué debería de seguir haciendo Waterproof?
                            </label>
                            <input type="text" class="form-control" name="seguir-haciendo" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nos encantaría que compartas un testimonial positivo o una felicitación a nuestro equipo de trabajo:</label>
                            <input type="text" class="form-control" name="testimonial" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">¿A partir de que mes desea cancelar su servicio? </label>
                            <select class="form-select" id="" name="mes-cancelacion" required>
                                <option value="">1 de Enero</option>
                                <option value="">1 de Febrero</option>
                                <option value="">1 de Marzo</option>
                                <option value="">1 de Mayo</option>
                                <option value="">1 de Junio</option>
                                <option value="">1 de Julio</option>
                                <option value="">1 de Agosto</option>
                                <option value="">1 de Septiembre</option>
                                <option value="">1 de Octubre</option>
                                <option value="">1 de Noviembre</option>
                                <option value="">1 de Diciembre</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cantidad de alumnos a cancelar </label>
                            <select class="form-select" id="select-alumnos" name="alumnos-cancelar" onChange="showStudentsInputs()" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <legend>Nombre completo de los alumnos a cancelar</legend>
                        <div class="mb-3" id="alumno-1">
                            <label for="" class="form-label" >Alumno 1
                            </label>
                            <input type="text" class="form-control" name="alumnoName-1" required>
                        </div>
                        <div id="show-not">
                            <div class="mb-3" id="alumno-2">
                                <label for="" class="form-label" >Alumno 2</label>
                                <input type="text" class="form-control" name="alumnoName-2" >
                            </div>
                            <div class="mb-3" id="alumno-3">
                                <label for="" class="form-label" >Alumno 3
                                </label>
                                <input type="text" class="form-control" name="alumnoName-3" >
                            </div>
                            <div class="mb-3" id="alumno-4">
                                <label for="" class="form-label">Alumno 4</label>
                                <input type="text" class="form-control" name="alumnoName-4" >
                            </div>
                            <div class="mb-3" id="alumno-5">
                                <label for="" class="form-label" >Alumno 5</label>
                                <input type="text" class="form-control" name="alumnoName-5" >
                            </div>
                        </div>
                        
                        <!--<div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="6Lf2jjAqAAAAADY3Eek_Z0MKJkEIJkHtw2h-3sJQ"></div>
                        </div>-->
                        <div>
                            <button type="submit">Enviar cancelación</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footerG">
        <div class="footerForm">

        </div>
        <div class="footerA">
            <footer>

            </footer>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>