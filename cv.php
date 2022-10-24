<?php
session_start();
if (!isset($_SESSION['user'])) {
?>

  <style>
    body {
      padding: 0;
      margin: 0;
    }

    .container {
      margin: 0;
      padding: 0;
      background-color: #fff;
      display: grid;
      height: 99vw;
      place-items: center;
    }

    .text {
      font-size: 2rem;
      font-weight: 600;
      color: #000;
      border-radius: 20px;
      background-color: #dadada;
      font-family: Arial, Helvetica, sans-serif;
      padding: 20px 30px;

    }

    .ring {
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 150px;
      height: 150px;
      background: transparent;
      border: 1px solid #dadada;
      border-radius: 50%;
      text-align: center;
      line-height: 150px;
      font-family: sans-serif;
      font-size: 20px;
      color: #000;
      letter-spacing: 4px;
      text-transform: uppercase;
    }

    .ring:before {
      content: '';
      position: absolute;
      top: -3px;
      left: -3px;
      width: 100%;
      height: 100%;
      border: 3px solid transparent;
      border-top: 3px solid #000;
      border-radius: 50%;
      animation: animateC 2s linear infinite;
    }


    @keyframes animateC {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes animate {
      0% {
        transform: rotate(45deg);
      }

      100% {
        transform: rotate(405deg);
      }
    }
  </style>

  <body>
    <div class="ring">
      <span></span>
    </div>
    <div class="container">
      <p class="text">
        Has d'iniciar sessió per accedir a aquesta pàgina!
      </p>
    </div>
  </body>

<?php

// Error que aapreix 10 segons 
  header("refresh:10;url=index.php");
} else {

  // Per modificar el nom, cognoms i email al CV
  $user = $_SESSION['user'];
  $nom = $user['nom'];
  $cognoms = $user['cognoms'];
  $email = $user['email'];
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0787d9ec00.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pràctica 2</title>

    <!-- CSS -->
    <style>
      .row2 {
        display: flex;
      }

      .col1 {
        height: 100%;
      }

      body {
        display: flex;
        justify-content: center;

      }

      /* Datos personales, habilidades...*/
      .titulo {
        font-weight: bold;
        border-bottom: 2px #dadada solid;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        display: flex;
        gap: 6px;


      }

      /* Perfil, experiencia de trabajo, educación*/
      .col2 {
        margin-top: 15px;
        line-height: 1.25em;
      }

      .col2 ul {
        margin-left: -31px;
      }

      /* Imatge */
      .img {
        width: 170px;
        height: 170px;
        border-radius: 50%;
        border: 5px solid #dadada;
        align-self: center;
        margin: -85px 0px 25px 40px;
      }

      /*Germán Rossi*/
      .tituloprincipal {
        margin-left: 200px;
        color: white;
      }

      /*Puntitos de lista quitados*/

      .col1 ul {
        margin-left: -31px;
      }

      .item_lista {
        display: flex;
        gap: 7px;
        margin-bottom: 4px;
      }

      .explicacion {
        display: flex;
        margin-bottom: 10px;

      }

      /*Iconos*/
      .fa-solid {
        width: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: grey;
      }



      /*Barra de progressos*/
      .progress-bar {
        background-color: #dadada;
        justify-content: center;
        align-items: center;

      }

      .header {
        background-color: #dadada;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 120px;
      }

      .barraProgreso {
        display: flex;
        margin-bottom: 4px;
        align-items: center;
      }

      .subtitulo {
        color: #dadada;
      }

      .universidad {
        color: #dadada;
      }

      .logout {
        background-color: #dadada;
        position: absolute;
        top: 0;
        text-decoration: none;
        color: white;
        right: 0;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0 0 0 50px;
      }

      @media only screen and (max-width: 600px) {
        .row2 {
          display: flex;
          flex-direction: column;
        }

        .row2>* {
          width: 100%;
        }

        .barraProgreso {
          display: flex;
          flex-direction: column;
        }
      }
    </style>

  </head>

  <body>
    <a href="logout.php" class="logout">X</a>
    <div class="container">
      <div class="row">
        <div class="header">
          <h1 class="tituloprincipal"><?php echo ($nom . ' ' . $cognoms) ?></h1>
        </div>
      </div>
      <div class="row2 d-flex">
        <div class="col col-5 col1">
          <!-- Columna izquierda -->
          <img class="img" src="https://cdn.smehost.net/sonymusiccommx-mxprod/wp-content/uploads/2020/10/Harry_Styles.jpg">

          <!-- Datos personales -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Datos personales</div>
            <div>
              <ul>
                <li class="item_lista"><i class="fa-solid fa-user"></i><?php echo ($nom . ' ' . $cognoms) ?></li>
                <li class="item_lista"><i class="fa-solid fa-house"></i>Calle 24 5532, City Bell, La Plata</li>
                <li class="item_lista"><i class="fa-solid fa-phone"></i>1234 5678</li>
                <li class="item_lista"><i class="fa-solid fa-at"></i><?php echo ($email) ?></li>
                <li class="item_lista"><i class="fa-solid fa-calendar"></i>04/01/1995</li>
                <li class="item_lista"><i class="fa-solid fa-flag"></i>Argentina</li>
                <li class="item_lista"><i class="fa-solid fa-mobile"></i>9376 5432</li>
                <li class="item_lista"><i class="fa-solid fa-heart"></i>Soltero</li>
                <li class="item_lista"><i class="fa-solid fa-car"></i>Clase C</li>
              </ul>
            </div>
          </div>

          <!-- Habilidades -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Habilidades</div>
            <div>
              <div class="barraProgreso">
                <div class="col-6">Disciplinado</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Liderazgo</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Visionario</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Habilidad numérica</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Relaciones públicas</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


            </div>
          </div>


          <!-- idiomas -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Idiomas</div>
            <div>
              <div class="barraProgreso ">
                <div class="col-6">Español</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Inglés</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Francés</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Portugués</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <!-- Informática -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Informática</div>
            <div>
              <div class="barraProgreso ">
                <div class="col-6">Microsoft Excel</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Microsoft Word</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Software DelBol</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Contalux</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Cegit</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>




            </div>
          </div>

          <!-- Competencias -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Competencias</div>
            <div>
              <div>

                <ul>
                  <li class="item_lista"><i class="fa-solid fa-caret-right"></i>Comunicación</li>
                  <li class="item_lista"><i class="fa-solid fa-caret-right"></i>Trabajo en equipo</li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-1 col1"></div> <!-- Columna en blanco -->
        <div class="col col-6 col2">
          <!-- Columna derecha -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Perfil</div>
            <div>
              <ul>
                <p>Experiencia en diferentes proyectos de implementación y mantenimiento post implementación, como así
                  también tareas de mantenimiento correctivo y evolutivo. Proactivo, orientado a resultados, con 4 años de
                  experiencia en áreas administrativo-contables, y más de 4 años de experiencia como consultor.</p>
                <div>
                  <div class="titulo"><i class="fa-solid fa-angles-right"></i>Experiencia de trabajo</div>
                  <div>

                    <div>
                      <div class="explicacion">
                        <div class="col-5">01/2017 - Presente</div>
                        <div class="col-7">
                          <span>Consultor 8.A.P. </span>
                          <p class="subtitulo">Bunge Cono Sur</p>
                          <span>Mantenimiento Correctivo/evolutivo Modulls FI-CC-TRM. Implementación Interface con bancos
                            para registro de cobranzas por cuentas recaudadora. Implementación del registro de
                            recaudaciones a través de sistemas Lapos. Lider Funcional FICO para proyectos Upgrade.</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="explicacion">
                      <div class="col-5">08/2016-12/2016</div>
                      <div class="col-7">
                        <span>Consultor B.A.P FICO Sr.</span>
                        <p class="subtitulo">Boflek-La Plata, Buenos Aires. </p>
                        <span>Como consultor 8.AP FICO, participe activamente en los siguientes proyectos:
                          <ul>
                            <li>Banco Hipotecario - Upgrade de versión 5.0 a 6.0 </li>
                            <li>PC Arts Argentina (BANGHO)-Implementación B.A.P ALL IN ONE </li>
                            <li>Laboratorios Sanch Aventis - Soporte para LATAM</li>
                            <li>Investigación y desarrollo de casos de estudio sobre parametrización y aplicación del
                              TRM-Plazos Fijos.</li>

                        </span>

                        <div>

                          <div>

              </ul>
            </div>
          </div>
        </div>
        <div>
          <div class="explicacion">
            <div class="col-5">01/2015 - 07/2016</div>
            <div class="col-7">
              <span>Especialista 8AP FI </span>
              <p class="subtitulo">Accenture Argentina</p>
              <span>Consultor funcional del modulo FI creación de nuevas sociedades FI, configuración de operaciones
                bancarias de de extractos automáticos, configuración de nuevas estructuras de balance, configuración de
                nuevas cuentas bancarias en las distintas scoiedades del grupo de empresas , configuración parcial módulo
                activo fijo, configuración de nuevos indicadores de impuestos, soporte funcional a usuarios del módulo
                FI-AR, FI-TR, FI-GL, FI-AP. </span>
            </div>
          </div>
        </div>
      </div>


      <div class="titulo"><i class="fa-solid fa-angles-right"></i>Educación</div>
      <div>

        <div>
          <div class="explicacion">
            <div class="col-5">08/2009 - Presente</div>
            <div class="col-7">
              <span>Contador Público.</span>
              <p class="universidad">Universidad de Buenos Aires (UBA) - Buenos Aires - Promedio: 8.</p>
              <span>Durante mi formación, me he capacitado para asesorar personas y empresas en las áreas financera,
                impositiva, contable, laboral, de costos, y societaria. Diseñar, interpretar e implementar sistemas de
                información contables, dentro de las organizaciones públicas y privadas para la toma de decisiones.
              </span>


            </div>
          </div>
        </div>
      </div>
  </body>

  </html>
<?php
}
