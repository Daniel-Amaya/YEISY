<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Yeisy Arango</title>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <link rel="stylesheet" href="css/login.css" />
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
          <a href=""><span class="fas fa-bars"></span></a>
        </div>
        <nav>
          <ul class="menu">

            <li><i>Yeisy Arango</i></li>
            <li><a href="index.php">Inicio</a></li>
           
            
          </ul>
        </nav>
      </div>
    </header>

<form class="formlogin" action="../controlador/login.php" method="POST">
        <h1>Iniciar sesión</h1>
    <div class="contenedorlogin">
        <div class="input">
            <i class="icon far fa-user"></i> 
            <input type="text" name="user" placeholder="Usuario" required />
        </div>  
        <div class="input">
            <i class="icon fas fa-key"></i>
            <input type="password" name="password" placeholder="Contraseña" required />
        </div>
     
            <input type="submit" value="Entrar" class="button"/>
        

    </div>
</form>
</body>

</html>