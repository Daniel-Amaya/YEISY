<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Yeisy Arango</title>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/fontello.css" />
    <link rel="stylesheet" href="css/slider/nivo-slider.css">
    <link rel="stylesheet" href="css/slider/themes/default/default.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/galeria.css">
   <script src="js/jquery-3.1.1.min.js"></script>
   <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/324b746950.js"></script>
    <script type="text/javascript"> 
    
      $(window).on('load', function() {
          $('#slider').nivoSlider(); 
      }); 
    </script>
 
</head>
<body>
  

<a name="Inicio"></a>
    <header>
      
      <div class="navegacion">
        <div class="boton-menu">
          <a href="#"><span class="icon icon-menu"></span></a>
        </div>
        <nav>
          <ul class="menu">

            <li><i>Yeisy Arango</i></li>
            <li><a href="#Inicio">Inicio</a></li>
            <li><a href="#Info">Información</a></li>
            <li><a href="#Mujeres">Mujeres</a></li>
            <li><a href="#Hombres">Hombres</a></li>
            <li><a href="#Agenda">Agenda</a></li>
            <li><a href="#Contacto">Contacto</a></li>
            <li><a href="login.php">Iniciar Sesión</a></li>
            
          </ul>
        </nav>
      </div>
    </header>
 <!--- SLIDER --->
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">     
          <img src="img/slider/Slider1.jpeg" alt="" title="#htmlcaption1" />    
          <img src="img/slider/Slider1.jpeg" alt="" title="#htmlcaption2" />    
          <img src="img/slider/Slider1.jpeg" alt="" title="#htmlcaption3" />     
      </div> 
      <div id="htmlcaption1" class="nivo-html-caption">     
          <h1>Modisteria Yeisy Arango</h1>
          <p>Bienvenidos</p>
      </div>
      <div id="htmlcaption2" class="nivo-html-caption">     
        <h1>Dos</h1>
        <p></p>
    </div>
    <div id="htmlcaption3" class="nivo-html-caption">     
      <h1>Tres</h1>
      <p></p>
  </div>

<!--- FIN SLIDER --->
<a name="Info"></a>
<div class="titulos animated slideInDown">Información</div>
<!--- TARJETAS M V O --->
<section id="imgtarjetas">
    <div class="contenedor-tarjetas">
        <div class="tarjeta-contenida">
          <div class="tarjeta">
            <div class="adelante card1"><h1>Misión</h1><img src="img/mision.png"></div>
            <div class="atras">
              <p>Ofrecer al cliente el mejor servicio, calidad y valor de nuestros servicios y productos.</p>
            </div>
          </div>
        </div>
        <div class="tarjeta-contenida">
          <div class="tarjeta">
            <div class="adelante card2"><h1>Visión</h1><img src="img/vision.png"></div>
            <div class="atras">
              <p>Convertirse en una modistería de confianza, reconocida por su eficacia y su cercanía con los clientes.</p>
            </div>
          </div>
        </div>
        <div class="tarjeta-contenida">
          <div class="tarjeta">
            <div class="adelante card3"><h1>Objetivos</h1><img src="img/objetivos.png"></div>
            <div class="atras">
              <p>Satisfacer eficazmente todas las necesidades de todos nuestros clientes.</p>
            </div>
          </div>
        </div>
        <div class="tarjeta-contenida">
            <div class="starjeta">
              <div class="adelante card2"><h1></h1><img src="css/fondos/servicios.jpg"></div>
              <div class="atras-s">
                <p> <h2 class="h2s">>Confección de prendas a medida</h2><br>
                  <h2 class="h2s">Costuras y/o cortes de prendas</h2><br>
                  <h3>>Nota: No se realizan producciones en masa</h3>
                </p>
              </div>
            </div>
          </div>
      </div>
    </section>
<!--- FIN TARJETAS M V O --->
<a name="Mujeres"></a>
<div class="titulos animated slideInDown" style="width:212px;">Ropa De Mujeres</div>
<!--- GALERIA MUJERES --->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide " style="background-image:url(img/galeria/vestido.png)"><h1 class="swiper-h1">Vestidos</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/blusas.png)"><h1 class="swiper-h1">Blusas</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/pantalon.png)"><h1 class="swiper-h1">Pantalones</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/deportivo.png)"><h1 class="swiper-h1">Deportivos</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/caqueta.png)"><h1 class="swiper-h1">Chaquetas</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/fiesta.png)"><h1 class="swiper-h1">Fiesta</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div> 
    <div class="swiper-slide " style="background-image:url(img/galeria/enterizo.png)"><h1 class="swiper-h1">Enterizos</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>    
  </div> 

  <div class="swiper-pagination"></div>
</div>

<script src="js/swiper.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>
<!--- FIN GALERIA MUJERES --->
<a name="Hombres"></a>
<div class="titulos animated slideInDown" style="width:225px;">Ropa De Hombres</div>
<!--- GALERIA HOMBRES --->

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide " style="background-image:url(img/galeria/buzo.png)"><h1 class="swiper-h1">Buzos</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/deportivoh.png)"><h1 class="swiper-h1">Deportivos</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    <div class="swiper-slide " style="background-image:url(img/galeria/casual.png)"><h1 class="swiper-h1">Casual</h1> <button class="swiper-button" onclick=" window.location='galeria/galeria.php'">Ver más</button></div>
    
  </div>

  <div class="swiper-pagination"></div>
</div>

<script src="js/swiper.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>

<!--- FIN GALERIA HOMBRES --->
<a name="Agenda"></a>
<div class="titulos animated slideInDown" style="width:225px;">Agenda</div>
<!--- AGENDA --->
<section>
 

  
 
   
    <h1 style=" width: 50%; margin: auto; margin-top: 30px;">Agosto 2019</h1>
    <div class="agenda">
    <table style="height: 440px;; border:1%; width:80%;">
    <tbody>
    <tr>
    <th style="text-align: center;"><span style="color: #333333;"><span style="color: #000000;">Domingo</span></span></th>
    
    <th style="text-align: center;"><span style="color: #000000;">Lunes</span></th>
    <th style="text-align: center;"><span style="color: #000000;">Martes</span></th>
    <th style="text-align: center;"><span style="color: #000000;">Miercoles</span></th>
    <th style="text-align: center;"><span style="color: #000000;">Jueves</span></th>
    <th style="text-align: center;"><span style="color: #000000;">Viernes</span></th>
    <th style="text-align: center;"><span style="color: #000000;">Sabado</span></th>
    </tr>
    <tr>
    <td style="text-align: center;"><span style="color: #000000;">?</span></td>
    <td style="text-align: center;"></td>
    <td style="background-color: green; text-align: center"><span style="background-color: green;">1</span></td>
    <td style="background-color: green; text-align: center"><span style="background-color: green;">2</span></td>
    <td style="background-color: green; text-align: center"><span style="background-color: green;">3</span></td>
    <td style="text-align: center;"><span style="color: #000000;">4</span></td>
    <td style="text-align: center;"><span style="color: #000000;">5</span></td>
    </tr>
    <tr>
    <td style="text-align: center;"><span style="color: #000000;">6</span></td>
    <td style="text-align: center;"><span style="color: #000000;">7</span></td>
    <td style="text-align: center;"><span style="color: #000000;">8</span></td>
    <td style="text-align: center;"><span style="color: #000000;">9</span></td>
    <td style="text-align: center;"><span style="color: #000000;">10</span></td>
    <td style="text-align: center;"><span style="color: #000000;">11</span></td>
    <td style="text-align: center;"><span style="color: #000000;">12</span></td>
    </tr>
    <tr>
    <td style="text-align: center;"><span style="color: #000000;">13</span></td>
    <td style="text-align: center;"><span style="color: #000000;">14</span></td>
    <td style="text-align: center;"><span style="color: #000000;">15</span></td>
    <td style="text-align: center;"><span style="color: #000000;">16</span></td>
    <td style="text-align: center;"><span style="color: #000000;">17</span></td>
    <td style="text-align: center;"><span style="color: #000000;">18</span></td>
    <td>
    <p style="text-align: center;"><span style="color: #000000;">19</span></p>
    </td>
    </tr>
    <tr>
    <td style="text-align: center;"><span style="color: #000000;">20</span></td>
    <td style="text-align: center;"><span style="color: #000000;">21</span></td>
    <td style="text-align: center;"><span style="color: #000000;">22</span></td>
    <td style="background-color: red; text-align: center"><span style="background-color: red;">23</span></td>
    <td style="background-color: red; text-align: center"><span style="background-color: red;">24</span></td>
    <td style="background-color: red; text-align: center"><span style="background-color: red;">25</span></td>
    <td>
    <p style= "text-align: center;"><span style="color: #000000;">26</span></p>
    </td>
    </tr>
    <tr>
    <td style="text-align: center;"><span style="color: #000000;">27</span></td>
    <td style="text-align: center;"><span style="color: #000000;">28</span></td>
    <td style="text-align: center;"><span style="color: #000000;">29</span></td>
    <td>
    <p style="text-align: center;"><span style="color: #000000;">30</span></p>
    </td>
    <td style="text-align: center;"><span style="color: #000000;">31</span>
    </td>
    <td style="text-align: center;"><span style="color: #000000;"></span>
 
    </td>
</tr>

    </tbody>
    </table>

  </div>


</section>

<!--- FIN AGENDA --->
<a name="Contacto"></a>
<div class="titulos animated slideInDown" style="width:225px;">Contacto</div>

<!--- FOOTER --->

<footer>

  <div class="container-footer-all">
  
      <div class="container-body">

          <div class="colum1">
              <form class= "formC" action="../controlador/enviar.php" method="post">
                  <h1>CONTACTENOS</h1>
                  <input  type="text" name="nombre" placeholder="Nombre" required />
                  <input  type="text" name="apellidos" placeholder="Apellidos" required />
                  <input  type="text" name="correo" placeholder="Correo" required />
                  <input  type="text" name="telefono" placeholder="Teléfono" required />
                 
                  <textarea
      
                    name="mensaje"
                    placeholder="Escriba aqui su mensaje"
                    required
                  ></textarea>
                  <input type="submit" value="ENVIAR" id="boton" />
                </form>

          </div>

          <div class="colum2">

              <h1>Redes Sociales</h1>

              <div class="row">
                  <img  src="img/icon/facebook.png">
                  <a href="https://www.facebook.com/profile.php?id=100010977605936">Siguenos en facebook</a>
              </div>
              
              <div class="row">
                  <img src="img/icon/instagram.png">
                  <a href="https://www.instagram.com/dyeisyd/">Siguenos en facebook</a>
              </div>
             
              <div class="row">
                  <img src="img/icon/pinterest.png">
                  <label>Siguenos en Pinteres</label>
              </div>


          </div>

          <div class="colum3">

              <h1>Informacion Contactos</h1>

              <div class="row2">
                  <img src="img/icon/house.png">
                  <label>Roblero Aures, 
                  Cerca del centro de salud civitón 
                  Calle 77 C #91 B 36
                  Segundo piso</label>
              </div>

              <div class="row2">
                  <img src="img/icon/smartphone.png">
                  <label>+57 3017093584</label>
              </div>

              <div class="row2">
                  <img src="img/icon/contact.png">
                   <label>Yeisyaap@gmail.com</label>
              </div>

          </div>

      </div>
  
  </div>
  
  <div class="container-footer">
         <div class="footer">
              <div class="copyright">
                  © 2019 Yeisy Arango  <a href=""></a>
                   
        
      </div>
    </footer>
<!--- FIN FOOTER --->

  </body>
</html>