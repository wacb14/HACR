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

<!-- Menu de navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top"> <!-- navbar-dark bg-dark -->
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="imagenes/Logo_HACRS.svg" width="150" class="d-inline-block align-top">
        <!-- <span class="hidden">Bootstrap</span> -->
    </a>
    <button 
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item dropdown">
            <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                HOSPITAL <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Organización</a></li>
                <li><a class="dropdown-item" href="#">Mision y vision</a></li>
                <li><a class="dropdown-item" href="#">Reseña histórica</a></li>
                <li><a class="dropdown-item" href="#">Directorio</a></li>
                <li><a class="dropdown-item" href="#">Documentos de Gestión</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link d" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SERVICIOS <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Staff medicos</a></li>
                <li><a class="dropdown-item" href="#">Cartera de servicios</a></li>
                <li><a class="dropdown-item" href="#">Consultorios Externos</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link d" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                BOLETINES <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Epidemiológico</a></li>
                <li><a class="dropdown-item" href="#">Estadística</a></li>
                <li><a class="dropdown-item" href="#">Sala Situacional</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropd" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                CONVOCATORIAS <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Convocatoria CAS</a></li>
                <li><a class="dropdown-item" href="#">Nombramiento</a></li>
                <li><a class="dropdown-item" href="#">Contratación de Terceros</a></li>
                <li><a class="dropdown-item" href="#">Contratación D.L. 276</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                NOTICIAS <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Notas de prensa</a></li>
                <li><a class="dropdown-item" href="#">Noticias de interes</a></li>
            </ul>
        </li>

        <li class="nav-item"> <a class="nav-link" href="#">COVID-19</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">CONVENIOS</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">CONTACTOS</a> </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Banner informativo -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="imagenes/banner/01.jpg" class="d-block" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Primera etiqueta para la diapositiva</h4>
                    <p>Contenido para el banner informativo de la diapositiva N° 001.</p>
                </div>
                </div>

                <div class="carousel-item">
                <img src="imagenes/banner/02.jpg" class="d-block" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Segunda etiqueta para la diapositiva</h4>
                    <p>Contenido para el banner informativo de la diapositiva N° 002.</p>
                </div>
                </div>

                <div class="carousel-item">
                <img src="imagenes/banner/03.jpg" class="d-block" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tercera etiqueta para la diapositiva</h4>
                    <p>Contenido para el banner informativo de la diapositiva N° 003.</p>
                </div>
                </div>
                
                <div class="carousel-item">
                <img src="imagenes/banner/04.jpg" class="d-block" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tercera etiqueta para la diapositiva</h4>
                    <p>Contenido para el banner informativo de la diapositiva N° 003.</p>
                </div>
                </div>

                <div class="carousel-item">
                <img src="imagenes/banner/05.jpg" class="d-block" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tercera etiqueta para la diapositiva</h4>
                    <p>Contenido para el banner informativo de la diapositiva N° 003.</p>
                </div>
                </div>

                <div class="carousel-item">
                <img src="imagenes/banner/06.jpg" class="d-block" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tercera etiqueta para la diapositiva</h4>
                    <p>Contenido para el banner informativo de la diapositiva N° 003.</p>
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
    </div><!-- Cierre del row - banner -->
</div>

    <!-- Seccion actualizacion covid-19 -->
    <div class="container-fluid container-covid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <article >
                    <img src="imagenes/vacuna_covid1.jpg" alt="">
                </article>
            </div>

            <div class="col-md-6 col-lg-5">
                <article ">
                    <h4>Vacuna contra la Covid-19</h4>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque neque ducimus, aperiam ipsum culpa illo voluptates quas, explicabo ratione ipsam soluta voluptatem vel nisi quo modi quasi! Inventore dolore molestias ab vero tempora, repellendus, pariatur dolorem porro tempore odit repellat magni distinctio! Modi delectus hic fuga esse sunt neque minima tempore quaerat reprehenderit ea perspiciatis optio cum accusamus labore ratione ut exercitationem in eos quos, mollitia dicta nesciunt. Necessitatibus dicta accusamus ab ipsum quidem eligendi nobis culpa, suscipit cumque expedita provident alias ratione debitis fugit libero, voluptatum rem. Enim repudiandae vitae dolore. Soluta rerum eligendi tempora. </p>
                </article>
            </div>

            <!-- Informacion del director -->
            <div class="col-md-6 col-lg-3 info_direct">
                <img src="imagenes/Director.png" alt="">
                <div class="datos-direct">
                    <h6>DR. CHRISTIAN JOEL CAMACHO PEREZ</h6>
                    <p>DIRECTOR</p>
                </div>
            </div>
        </div><!-- Cierre row - covid -->
    </div><!-- Cierre container - Covid -->

        <!-- Seccion actualizacion covid -->
        <div class="row justify-content-center contenedor-act-covid">
            <div class="col-md-12">
                <h4>Covid-19 Actualizacion al 25 de Julio</h4>
            </div>
            
            <div class="col-6 col-sm-4 col-md-2">
                <div class="act-covid-caja"><h1>1127</h1>
                    <div class="act-covid-contenido">Casos confirmados</div>
                </div>    
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="act-covid-caja"><h1>151</h1>
                    <div class="act-covid-contenido">Personas fallecidas</div>
                </div>    
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="act-covid-caja"><h1>11</h1>
                    <div class="act-covid-contenido">Personas hospitalizadas</div>
                </div>    
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="act-covid-caja"><h1>59</h1>
                    <div class="act-covid-contenido">Camas libres</div>
                </div>   
            </div>
            
            <div class="col-6 col-sm-4 col-md-2">
                <div class="act-covid-caja"><h1>38</h1>
                    <div class="act-covid-contenido">Intervenciones quirúrgicas</div>
                </div>
            </div>

        </div><!-- Cierre row - Covid-actualizacion -->
    </div><!-- Cierre container - Covid -->

    
    <!-- Seccion noticias, info direct y fb -->
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-7 noticias">
            <h3>Noticias</h3>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio non blanditiis ipsum dignissimos
                 facilis modi distinctio, quidem fuga ducimus dolorum nesciunt vel aspernatur earum laborum
                 expedita, odio amet, doloribus molestiae?
            </p> -->
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

    <!-- SECCION CARTERA DE SERVICIOS -->
    <div class="container-fluid contenedor-servicios">
    <div class="container">
        <div class="row">
            <h3>Cartera de Servicios</h3>

            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/01_cirugia.png"> 
                            <p class="servicio-titulo">Cirugia</p>   
                        </div>
                        <div class="info">
                            <h3>Cirugia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/02_traumatologia.png"> 
                            <p class="servicio-titulo">Traumatologia</p>   
                        </div>
                        <div class="info">
                            <h3>Traumatologia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/03_neurologia.png"> 
                            <p class="servicio-titulo">Neurologia</p>   
                        </div>
                        <div class="info">
                            <h3>Neurologia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/04_obstericia.png"> 
                            <p class="servicio-titulo">Obstericia</p>   
                        </div>
                        <div class="info">
                            <h3>Obstericia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/05_odontologia.png"> 
                            <p class="servicio-titulo">Odontologia</p>   
                        </div>
                        <div class="info">
                            <h3>Odontologia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/06_cardiologia.png"> 
                            <p class="servicio-titulo">Cardiologia</p>   
                        </div>
                        <div class="info">
                            <h3>Cardiologia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/07_ginecologia.png"> 
                            <p class="servicio-titulo">Ginecologia</p>   
                        </div>
                        <div class="info">
                            <h3>Ginecologia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/08_niño_sano.png"> 
                            <p class="servicio-titulo">Niño Sano</p>   
                        </div>
                        <div class="info">
                            <h3>Niño Sano</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/09_neumologia.png"> 
                            <p class="servicio-titulo">Neumologia</p>   
                        </div>
                        <div class="info">
                            <h3>Neumologia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/10_dx_Imagen.png"> 
                            <p class="servicio-titulo">Dx Imagen</p>   
                        </div>
                        <div class="info">
                            <h3>Dx Imagen</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/12_farmacia.png"> 
                            <p class="servicio-titulo">Farmacia</p>   
                        </div>
                        <div class="info">
                            <h3>Farmacia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>
            
            <div class="col-6 col-md-3 col-lg-2"> 
                <div class="ih-item square colored effect13 bottom_to_top caja-servicios">
                    <a href="#">
                        <div class="">
                            <img class="img" src="imagenes/servicios/11_farmacia.png"> 
                            <p class="servicio-titulo">Farmacia</p>   
                        </div>
                        <div class="info">
                            <h3>Farmacia</h3>
                            <p>Breve descripcion del servicio brindado</p>
                        </div>
            </a></div></div>

        </div><!-- Cierre de row de cartera de servicio -->
    </div> <!-- Cierre de container de cartera de servicio -->
    </div>

    <!-- Seccion de videos -->
    <div class="col-md-12 contenedor-videos">
        <!-- <h3>Videos</h3> -->
            <div class="row">
                <div class="col-sm-6"><div class=" ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/tABeQziuJYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        
                </div></div>

                <div class="col-sm-6"><div class=" ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/oA8BWAyJWh0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div></div>



        </div> <!--Cierre de row de seccion videos -->
    </div>

    <!-- Enlaces de interes -->
    <div class="container-fluid contenedor-enlaces">
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col"><a href="https://www.susalud.gob.pe/" target="_blank"><img src="imagenes/interes/01.png" class="d-block"></a></div>
                    <div class="col"><a href="http://www.sis.gob.pe/index.asp" target="_blank"><img src="imagenes/interes/02.png" class="d-block"></a></div>
                    <div class="col"><a href="http://www.minsa.gob.pe/" target="_blank"><img src="imagenes/interes/03.png" class="d-block"></a></div>
                    <div class="col"><a href="http://www.inei.gob.pe/" target="_blank"><img src="imagenes/interes/04.png" class="d-block"></a></div>
                    <div class="col"><a href="http://www.websalud.minsa.gob.pe/" target="_blank"><img src="imagenes/interes/05.png" class="d-block"></a></div>
                    <div class="col"><a href="http://www.cmp.org.pe/" target="_blank"><img src="imagenes/interes/06.png" class="d-block"></a></div>
                    <div class="col"><a href="http://www.reniec.gob.pe/" target="_blank"><img src="imagenes/interes/07.png" class="d-block"></a></div>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="row">
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/08.png" class="d-block"></a></div>
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/09.png" class="d-block"></a></div>
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/10.png" class="d-block"></a></div>
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/11.png" class="d-block"></a></div>
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/12.png" class="d-block"></a></div>
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/13.png" class="d-block"></a></div>
                    <div class="col"><a href="" target="_blank"><img src="imagenes/interes/14.png" class="d-block"></a></div>
                </div>
            </div>
        </div><!-- Cierre de carrusel inner -->

            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
    </div>
    </div>
    </div>
    
    <!-- Seccion Ubicacion e informacion del hospital -->

    <div class="col-md-12">
        <div class="ratio ratio-21x9 contenedor-ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1933.3977917164184!2d-71.22844782263243!3d-14.265140409354217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91692ac3ac7e6c6d%3A0xb3c6c35f7e2c9018!2sSicuani!5e0!3m2!1ses!2spe!4v1629827821760!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="row">
                <div class="col-md-4 caja-contactos">
                    <div class="d-none d-sm-block">
                    <h5> Contáctanos</h5>
    
                    <h6><i class="fas fa-map-marker-alt"></i>  Dirección</h6>
                    <p>Av. Manuel Callo Zevallos N° 519 – Sicuani – Canchis - Cusco</p>
    
                    <h6><i class="fas fa-phone-alt"></i></i>  Teléfono</h6>
                    <p>084-795469</p>
    
                    <h6><i class="far fa-envelope"></i>  Correo</h6>
                    <p>unid_estad_inf@hospitalsicuaniacr.gob.pe</p>
                    </div>
    
                </div>
                </div>
        </div>
    </div>











    <footer>
        <span> Copyright © 2021 Hospital Alfredo Callo Rodríguez - Sicuani Todos  los derechos reservados</span><br>
        <span> <>Diseñado y programado por la Unidad de Estadística e Informática</span><br>
        <!-- <span> Telefono: 084-795469</span> -->
    </footer>




        </div> <!-- Cierre del row --> 
    </div> <!-- Cierre del contenedor -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
