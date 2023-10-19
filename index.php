<?php 
include 'modelos/config.php';
include 'modelos/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoGol</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=PT+Serif:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
            <!-- Para que se puedan mostrar el contenido del desplegable -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/contenido.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- JavaScript de Bootstrap y jQuery (asegúrate de que jQuery esté incluido) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
      /* Cambiar el color del texto a blanco en la barra de navegación */
      .navbar-light .navbar-nav .nav-link {
          color: white !important;
      }
  </style>
</head>
<body>
    <header>
        <nav class="navbar  navbar-expand-lg navbar-light " style="background-color: #2b2a2c">
            <a class="navbar-brand" href="#">
              <img height="75" src="assets/imagenes/AutoGol.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Idioma
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Español</a>
                    <a class="dropdown-item" href="#">Ingles</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./vistas/equipos.php">Jersey<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./vistas/login.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Jugadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="cart-link">
                      <i class="fa fa-shopping-cart"></i> Carrito (<span id="cart-count">0</span>)
                    </a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
            
            </div>
        </nav>
         <!-- la segunda barra de navegación -->
         <nav class="navbar navbar-light bg-gold">
          <div class="container">
              <div class="text-center" style="width: 92%;">
                  <a class="navbar-brand" href="#" style="margin: 0 auto;">LO MAS NUEVO DEL FUTBOL</a>
              </div>
          </div>
      </nav>
    </header>
    <div class="container">
      <h3 class="h3"></h3>
      <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                  <div class="product-image5">
                      <a href="#">
                          <img class="pic-1" src="assets/imagenes/America.jpeg">
                          <img class="pic-2" src="assets/imagenes/america2.jpeg">
                      </a>
                      <ul class="social">
                          <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <a href="#" class="select-options"><i class="fa fa-arrow-right "></i> Select Options</a>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Camiseta Club America Aguilas 2023/24 Primera Equipación Local Hombre Nike - Versión Replica</a></h3>
                      <div class="price">$500.00</div>
                  </div>
              </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                  <div class="product-image5">
                      <a href="#">
                          <img class="pic-1" src="assets/imagenes/Chivas.jpeg">
                          <img class="pic-2" src="assets/imagenes/chivas2.jpeg">
                      </a>
                      <ul class="social">
                          <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Camiseta Chivas 2023/24 Primera Equipación Local Hombre Puma - Versión Replica</a></h3>
                      <div class="price">$10.00 - $12.00</div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                  <div class="product-image5">
                      <a href="#">
                          <img class="pic-1" src="assets/imagenes/cruzazul.jpeg">
                          <img class="pic-2" src="assets/imagenes/cruzazul2.jpeg">
                      </a>
                      <ul class="social">
                          <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Camiseta Cruz Azul 2023/24 Primera Equipación Local Hombre - Versión Replica</a></h3>
                      <div class="price">$11.00 - $15.00</div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                  <div class="product-image5">
                      <a href="#">
                          <img class="pic-1" src="assets/imagenes/Pumas.jpeg">
                          <img class="pic-2" src="assets/imagenes/pumas2.jpeg">
                      </a>
                      <ul class="social">
                          <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Camiseta Pumas UNAM 2023/24 Segunda Equipación Visitante Hombre Nike - Versión Replica</a></h3>
                      <div class="price">$11.00 - $15.00</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr>
  <main>
    <section>
      <!-- Carrusel de cursos -->
      <div id="carruselCursos" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="curso_columna col-md-6">
                <img src="./assets/imagenes/bannerAzul.jpeg" alt="">
                <div class="info_curso">
                  <h3>Cruz Azul</h3>
                  <p>Cruz Azul es un club de fútbol profesional con sede en la ciudad de México, México. También es conocido como "La Máquina Azul" o "La Máquina Azul". El club fue fundado en 1927</p>
                </div>
              </div>
              <div class="curso_columna col-md-6">
                <img src="./assets/imagenes/bannerAme.jpeg" alt="">
                <div class="info_curso">
                  <h3>América</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Agregar más elementos de carrusel aquí -->
          <div class="carousel-item">
            <div class="row">
              <div class="curso_columna col-md-6">
                <img src="./assets/imagenes/bannerPuma.jpeg" alt="">
                <div class="info_curso">
                  <h3>Pumas UNAM</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                </div>
              </div>
              <div class="curso_columna col-md-6">
                <img src="./assets/imagenes/bannerAzul.jpeg" alt="">
                <div class="info_curso">
                  <h3>Cruz Azul</h3>
                  <p>Información adicional de Cruz Azul...</p>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Agregar más elementos de carrusel aquí -->
        </div>
        <a class="carousel-control-prev" href="#carruselCursos" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carruselCursos" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
  </main>
  
  
  
  <footer id="dk-footer" class="dk-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="dk-footer-box-info">
                    <a href="index.php" class="footer-logo">
                        <img src="./assets/imagenes/AutoGol.png" alt="footer_logo" class="img-fluid">
                    </a>
                    <p class="footer-info-text">
                       Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                    </p>
                    <div class="footer-social-link">
                        <h3>Follow us</h3>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100089225509845">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social link -->
                </div>
                <!-- End Footer info -->
                <div class="footer-awarad">
                    <img src="images/icon/best.png" alt="">
                    <p>Best Design Company 2019</p>
                </div>
            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us">
                            <div class="contact-icon">
                                <i class="fa fa-map-o" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                <h3>Neutla, Comonfort GTO</h3>
                                <p>Calle San Martin #13</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="contact-us contact-us-last">
                            <div class="contact-icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                <h3>95 711 9 5353</h3>
                                <p>Give us a call</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Contact Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-left-widget">
                            <div class="section-heading">
                                <h3>Useful Links</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <ul>
                                <li>
                                    <a href="./vistas/aboutus.html">About us</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="./vistas/contactus.html">Contact us</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Faq</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Widget -->
                    </div>
                    <!-- End col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget">
                            <div class="section-heading">
                                <h3>Subscribe</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <p><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                            Reference site about Lorem Ipsum, giving information on its origins, as well.</p>
                            <form action="#">
                                <div class="form-row">
                                    <div class="col dk-footer-form">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                        <button type="submit" >
                                            <i class="fa fa-send" ></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End form -->
                        </div>
                        <!-- End footer widget -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Copyright © 2019, All Right Reserved Seobin</span>
                </div>
                <!-- End Col -->
                <div class="col-md-6">
                    <div class="copyright-menu">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Copyright Container -->
    </div>
    <!-- End Copyright -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
        <button class="btn btn-dark" title="Back to Top" style="display: block;">
            <i class="fa fa-angle-up"></i>
        </button>
    </div>
    <!-- End Back to top -->
</footer>

</body>
</html>