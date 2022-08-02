<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=yes">
    <title>Omarket - Clientes</title>
  <!-- Importaciones -->
    <link rel="shortcut icon" href="../favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/chatBot.css" rel="stylesheet" type="text/css"/>
    <link href="css/timeline.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; overflow-y:hidden">
<!-- Navbar -->
<nav style="background-image: linear-gradient(135deg, rgb(255, 88, 88) 0%, rgb(240, 152, 25));" class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container-fluid">
<div style="size: auto; background-color: white; border-radius: 10px;">
<img src="./img/logo.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
</div>
<center>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="font-size: 17px;" class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a style="font-size: 17px;" class="nav-link" href="#">Sobre nosotros</a>
        </li>
        <li class="nav-item">
          <a style="font-size: 17px;" class="nav-link" href="http://localhost/Omarket/sistema/nueva_venta.php">Eres miembro de Omarket?</a>
        </li>
    
      </ul>

    </div>
  </div></center>
</nav>
<!-- Carrusel -->

<center>
<div style="width: auto;">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="max-height: 600px">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    
      <img src="./img/slider-bg.jpg" class="d-block w-100" alt="..."  style="max-height: 839px">
      <div class="carousel-caption d-none d-md-block">
      <h1  style="font-size: 100px; color:rgb(240, 152, 25);; font-family: 'Titan One', cursive;">PROXIMAMENTE APLICACIÓN MOVIL</h1>
      </div>
    </div>
    <div class="carousel-item">
    <img src="./img/slider-bg.jpg" class="d-block w-100" alt="..." style="max-height: 839px" >
      <div class="carousel-caption d-none d-md-block">
      <h1 style="font-size: 100px; color:rgb(240, 152, 25); font-family: 'Titan One', cursive;">NUEVAS OFERTAS DEL MES SOLO EN OMARKET!</h1>
      </div>
    </div>
    <div class="carousel-item">
    <img src="./img/slider-bg.jpg" class="d-block w-100" alt="..." style="max-height: 839px" >
      <div class="carousel-caption d-none d-md-block">
      <h1 style="font-size: 100px; color:rgb(240, 152, 25); font-family: 'Titan One', cursive;">UNETE A NOSOTROS TE ESTAMOS BUSCANDO!</h1>
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
</div>
</center>
<!-- Chat bot UI start -->
<div class="chat-screen">
    <div class="chat-header">
        <div class="chat-header-title">
            Omarket - Chatbot
        </div>
        <div class="chat-header-option hide">
            <span class="dropdown custom-dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink1" style="will-change: transform;">
                    <!--
                <a class="dropdown-item" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Send Transcriptions
                    </a>
-->
                    <a class="dropdown-item end-chat" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ef4252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                        Finalizar chat
                    </a>
                </div>
            </span>
        </div>
    </div>
    <div class="chat-mail">
        <div class="row">
            <div class="col-md-12 text-center mb-2">
                <p>¡Hola 👋! Complete el siguiente formulario para comenzar a chatear con Omarket-bot.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
           <!-- <div class="col-md-12">
                    <select class="form-control  select2_el">
                        <option selected="selected">Select Option</option>
                        <option>Report Abuse</option>
                        <option>Other</option>
                    </select>
            </div>
-->
            <div class="col-md-12">
                <button class="btn btn-primary btn-rounded btn-block">Iniciar chatbot</button>
            </div>
           <div class="col-md-12">
               <div class="powered-by">Omarket ©2022</div>
           </div>
        </div>
    </div>
<!-- chat -->


    <div class="chat-body hide" style="overflow-y: auto;">
        <div class="chat-start" style="color:black"><?php 
        date_default_timezone_set('America/Mexico_City');
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " ".date('H:i') ;  ?></div>
        <div class="chat-bubble you">Bienvenido a Omarket, si necesitas ayuda simplemente responde a este mensaje, y con gusto te ayudaré.</div>
        <div class="chat-bubble you">Menú de sugerencias: <br><br>
          1.- Consultar Ticket<br><br>
          2.- Consultar Proveedores<br><br>
          3.- Puedes preguntarme sobre productos <br><br>
          4.- Misón <br><br>
          5.- Visión <br><br>
          6.- Contactar a un agente <br><br>
          7.- Nuestras Sucursales
        </div>
        <div class="scroller"></div>
        
    </div>
<!-- fin chat -->    


<!-- Input -->
<form method="post" autocomplete="off">
    <div class="chat-input hide">
        <input type="text" name="chat" id="chat" placeholder="Preguntale algo">
        <div class="input-action-icon">
            <input style="display:none" type="submit" value="Enviar" id="btn">
            <a type="submit" value="Enviar" id="btn2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></a>
        </div>
    </div>
        </form>
<!-- Fin Input -->





    <div class="chat-session-end hide">
        <h5>Esta sesión de chat ha terminado.</h5>
        <p>Gracias por chatear conmigo, si puede tomar un minuto y calificar este chat:</p>
        <div class="rate-me">
            <div class="rate-bubble great">
                <span onclick="window.location.href='validaciones.php?id=1'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg></span>
                Bueno
            </div>
            <div class="rate-bubble bad">
                <span onclick="window.location.href='validaciones.php?id=2'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-down"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg></span>
                Malo
            </div>
        </div>

        
        <div class="powered-by">Omarket ©2022</div>
    </div>
</div>
<div class="chat-bot-icon">
    <!--<img src="img/we-are-here.svg"/>-->
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square animate"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x "><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
</div>
<!-- Chat Bot Fin -->

<script type="257be86a981729866f2fa61c-text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83834093-1', 'auto');
    ga('send', 'pageview');

  </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select2.min.js"></script>
 <script>
        $(document).ready(function(){
            $(".select2_el").select2({
            });
        });
        </script>
<script>
    $(document).ready(function () {
        //Toggle fullscreen
        $(".chat-bot-icon").click(function (e) {
            $(this).children('img').toggleClass('hide');
            $(this).children('svg').toggleClass('animate');
            $('.chat-screen').toggleClass('show-chat');
        });
        $('.chat-mail button').click(function () {
            $('.chat-mail').addClass('hide');
            $('.chat-body').removeClass('hide');
            $('.chat-input').removeClass('hide');
            $('.chat-header-option').removeClass('hide');
        });
        $('.end-chat').click(function () {
            $('.chat-body').addClass('hide');
            $('.chat-input').addClass('hide');
            $('.chat-session-end').removeClass('hide');
            $('.chat-header-option').addClass('hide');
        });
    });

</script>
<script src="app.js"></script>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>