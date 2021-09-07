<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Pagina principal</title>    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/ihover.css">
</head>
<body>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/banner/01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/banner/01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/banner/01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    





























<!-- Seccion noticias, info direct y fb -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-7 noticias">
            <h3>Noticias</h3>
            <div class="row">
                <div class="col-md-6 contenedor_noticias">
                    <div class="caj-noticias">
                        <img src="imagenes/noticias/noticia01.jpg" alt="">
                        <article>
                            <p class = "noticias-titulo">ACTIVIDAD EXTRA MURAL – MEDIDAS PREVENTIVAS DEL COVID-19.</p>
                            <hr>
                            <p>Información básica sobre el COVID -19., cuidados en las personas Adultas mayores que son beneficiarios del Centro Integral del Adulto Mayor. - Vacunación a las personas de la tercera edad a quienes les falta la vacuna contra el Neumococo.

                            PARTICIPACION : Lic. Enf. Mariela Escalante Tito – Promoción de la Salud, Lic. Sonia Molina León – Estrategia Sanitaria del adulto mayor, Lic. Com. Carmen Haydee Umeres Zamora – Relaciones Publicas [..]</p><br>
                            <button class="noticia-btn" onclick = "location='boletines/Boletin_epidemiologico_01_2021.pdf'">Seguir leyendo  <i class="fas fa-book-reader"></i></button>
                        </article>
                    </div>
                </div>

                <div class="col-md-6  contenedor_noticias">
                    <div class="caj-noticias">
                        <img src="imagenes/noticias/noticia02.jpg" alt="">
                        <article>
                            <p class = "noticias-titulo">HOSPITAL ALFREDO CALLO RODRIGUEZ APERTURO NUEVO AMBIENTE DE ATENCION AL USUARIO.</p>
                            <hr>
                            <p>Hoy lunes 21 desde tempranas horas de la mañana se apertura nuevo ambiente destinado a la Plataforma de Atención al Usuario en Salud PAUS, ubicado al ingreso del Hospital Alfredo Callo Rodríguez, cuya finalidad es fortalecer la calidad de atención al usuario, brindara orientación y absolución de las consultas y reclamos que presenten los clientes o terceros legitimados ante los servicios que se oferta en esta institución de salud [..]</p><br>
                            <button class="noticia-btn" onclick = "location='boletines/Boletin_epidemiologico_01_2021.pdf'">Seguir leyendo  <i class="fas fa-book-reader"></i></button>
                        </article>
                    </div>
                </div> 

            </div> <!-- Cierre de row de 02 noticias  -->
        </div>

        <!-- plugin Facebook -->
        <div class="col-md-6 col-lg-3 contenedor-fb">
            <iframe class="embed-responsive-item iframe-fb"
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHospital-Alfredo-Callo-Rodriguez-2283205708612640%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
            width="400" height="500" style="border:none;overflow:hidden" scrolling="no"
            frameborder="0" allowTransparency="true" allow="encrypted-media">
            </iframe>             
        </div>

    </div><!-- Cierre de row de noticias, informacion director y fb -->
</div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
