<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de IUSI - Municipalidad de Jalapa</title>
    <!-- <link rel="icon" type="image/png" href="images/favicon.png" /> -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/media.css" media="screen and (max-width:768px)"/> -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
    <i class="icon-menu burger-button" id="burger-menu"></i>
    <header class="header">
      <div class="container">
        <figure class="logo">
          <img src="images/logo2.png" height="50" alt="Logo de http://munijalapa.com" class="logo2"/>
        </figure>
        <nav class="menu">
          <ol>
            <li>
              <a class="link" href="#portafolio">Consulta IUSI</a>
            </li>
            <li>
              <a class="link" href="#eventos">Decreto Ley</a>
            </li>
            <li>
              <a class="link" href="#contacto">Recordatorio por e-mail</a>
            </li>
          </ol>
        </nav>
      </div>
    </header>
    <section class="hero">
      <div class="container">
        <h1>
          Bienvenidos a <strong>IUSI - Municipalidad <br> de Jalapa.</strong> Preocupados por el <br> bienestar de la <strong>Población <br> Jalapaneca</strong> 
        </h1>
        <img class="hero-image" src="images/hero.jpg" width="500" height="300" alt="imagen principal del sitio"> 
      </div>
    </section>
    <section id="portafolio" class="portfolio">
      <div class="container" >
        <h2>Consulta para el pago de IUSI</h2>
      <article class="project">
        <nav class="navbar navbar-light bg-light">
          <form class="form-inline" method="POST" action="consulta.php">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Ingrese su DPI" aria-label="Search">
            <button class="btn bth-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
      
      
      <!-- <form action="index.php" method="POST">
        <input type="text" placeholder="Ingrese su DPI" name="dpiname" id="dpiname">
        <input type="submit" value="Consultar" id="dpiB">
        </form> -->
        <h4>Si lo desea puede realizar la busqueda por No. de Catastro, el cual se encuentra en su último recibo.</h4>
        <nav class="navbr navbar-light bg-light">
          <form class="form-inline" method="POST" action="consulta2.php">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="No. de Catastro" aria-label="Search">
            <button class="btn bth-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
        <!-- <input type="text" placeholder="Ingrese No. de Catastro" name="catastro" id="catastro"> -->
        <!-- <input type="submit" value="Consultar" id="catB"> -->

        <div class="table">
          <!-- <table border="1"> 
            <thead>
              <tr>
                <th>DPI</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody id="res">
            </tbody>
            </tbody>
          </table> -->
        </div>
      </article>   
      
        
        
        <!-- <div class="project-details">
          <h3 class="project-title">Platzi Video</h3>
          <h6 class="project-course">React Native / React</h6>
          <p class="project-date"><small><strong>Fecha:</strong> 01/07/2018</small></p>
          <p class="project-url"><small><strong>Puedes verlo en:</strong> www.platzi.com/native</small></p>
          <p class="project-description">Platzi Video fue el resultado de 3 meses de trabajo
              para crear la mejor app para enseñar el funcionamiento
              de React y React Native. Desde crear un vista-detalle, hasta patrones avanzados de nevegación, este proyecto ha sido el ejemplo de futuros creadores de aplicaciones multiplataforma</p>
        </div> -->
        <!-- <figure class="project-imageContainer">
          <img class="project-image" width="500" src="images/platzi-video-react-native.png" alt="prouyecto del curso de React Native"> -->
        </figure>
      </article>
      <!-- <article class="project">
          <div class="project-details">
            <h3 class="project-title">Platzi Video</h3>
            <h6 class="project-course">React Native / React</h6>
            <p class="project-date"><small><strong>Fecha:</strong> 01/07/2018</small></p>
            <p class="project-url"><small><strong>Puedes verlo en:</strong> www.platzi.com/native</small></p>
            <p class="project-description">Platzi Video fue el resultado de 3 meses de trabajo
                para crear la mejor app para enseñar el funcionamiento
                de React y React Native. Desde crear un vista-detalle, hasta patrones avanzados de nevegación, este proyecto ha sido el ejemplo de futuros creadores de aplicaciones multiplataforma</p>
          </div>
          <figure class="project-imageContainer">
            <img class="project-image" width="500" src="images/platzi-video-react-native.png" alt="prouyecto del curso de React Native">
          </figure>
        </article> -->
      </div>
      
    </section>
    <div class="container">
      <h2 class="event-list-title">Ley del Impuesto Único Sobre Inmuebles</h2>
    </div>
   
    <section id="eventos" class="event-list">
      <div class="container">
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/LogoCongreso.png" width="500"/>
          </figure>
          <div class="event-detail">
            <h3 class="event-title">Decreto Ley 15-98 del Congreso de la República de Guatemala</h3>
            <p class="event-description">"Los recursos provenientes de la aplicación del impuesto a que se refiere la presente ley, únicamente podrán destinarse por las municipalidades como mínimo un setenta por ciento (70%) para inversiones en servicios básicos y obras de infraestructura ..."</p>
            <a class="event-url" href="https://srp.gob.gt/wp-content/uploads/2012/04/Ley-del-Impuesto-unico-sobre-Inmuebles.pdf" target="_blank">Ver Decreto Ley PDF</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <!-- <div class="flexible-video"> -->
              <!-- <iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/LoKvxCSZw5w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
            <!-- </div> -->
            <img class="event-image" src="images/calles.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">La Municipalidad de Jalapa transformando en obras el IUSI</h3>
            <p class="event-description">El Alcalde Municipal y su Consejo, comprometidos con la población Jalapaneca y en cumplimiento de la ley, transforman el Impuesto Único Sobre Inmuebles en obras que beneficien a Todos</p>
            <a class="event-url" href="https://www.youtube.com/" target="_blank">Ver Video</a>
          </div>
        </article>
        <!-- <article class="event">
          <figure class="event-imageContainer">
            <video class="html-video" src="videos/f8.mp4" width="1280" height="720" controls></video>
            <img class="event-image" src="images/platzi-conf.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">PlatziConf México 2018</h3>
            <p class="event-description">El evento más grande sobre gente que quiere aprender más de internet. En esté evento te comparto como tener una vida de constante aprendizaje.</p>
            <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver Plática</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/platzi-conf.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">PlatziConf México 2018</h3>
            <p class="event-description">El evento más grande sobre gente que quiere aprender más de internet. En esté evento te comparto como tener una vida de constante aprendizaje.</p>
            <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver Plática</a>
          </div>
        </article> -->
      </div>
    </section>
    <section id="contacto" class="contact">
      <div class="container">
        <form action="/suscripcion/" class="form-email">
          <h3>¿Quieres que te recordemos el pago del IUSI? Dejanos tus datos:</h3>
          <input type="text" placeholder="E-mail" id="email">
          <input type="text" placeholder="DPI" id="emailDpi">
          <button>Enviar</button>
        </form>
        <div class="social">
          <a href="https://twitter.com/" class="social-link twitter"></a>
          <a href="https://facebook.com/" class="social-link facebook"></a>
          <!-- <a href="https://github.com/leonidasesteban" class="social-link github"></a> -->
          <a href="https://instagram.com/" class="social-link instagram"></a>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div>
          <p>Municipalidad de Jalapa 2020 - 2024 / P.A. Alfredo Sandoval<img src="images/muni.png" width="40" alt="platzi"></p>
        </div>
        <div>
          <p>
            Designed by <a href="https://twitter.com/Sel_Cruz">@Sel_Cruz</a>
          </p>
        </div>
      </div>
    </footer>
    <script>
      // console.log('Hola mundo! es mi primera linea en JS');
      const ipad = window.matchMedia('screen and (max-width: 767px)')
      const menu = document.querySelector('.menu');
      // console.log(menu);
      const burgerButton = document.querySelector('#burger-menu');
      // console.log(burgerButton);


      ipad.addListener(validation)

      function validation(event) {
        if (event.matches) {
          burgerButton.addEventListener('click', hideShow)
        } else {
          burgerButton.removeEventListener('click', hideShow)
        }
      }
      validation(ipad);


      function hideShow() {
        if (menu.classList.contains('is-active')) {
          menu.classList.remove('is-active');
        } else {
          menu.classList.add('is-active');
        }
      }
    </script>
</body>
</html>