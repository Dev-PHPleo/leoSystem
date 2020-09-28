<?php 
    // Iniciamos o "contador"
    list($usec, $sec) = explode(' ', microtime());
    $script_start = (float) $sec + (float) $usec;
     
    /* SEU CÓDIGO PHP */
    include('admin/controler_site.php'); 
?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>DAP - DEPARTAMENTO DE ADMINISTRAÇÃO E PLANEJAMENTO DA POLÍCIA CIVIL</title>
      <link rel="stylesheet" href="css/slide-noticia.css">
      <link rel="stylesheet" href="css/estilo2.css">
      <link href="css/bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="css/font-awesome.css" rel="stylesheet">
      <script defer src="js/font-awesome.js"></script>
      <script src="js/code.js"></script>
      
      <script src="js/bootstrap4.min.js"></script>
   </head>
   <body>
      <style>
         .card-body2 {
         -webkit-box-flex: 1;
         -ms-flex: 1 1 auto;
         flex: 1 1 auto;
         padding: 0.25rem;
         padding-bottom: 3rem;
        }
                     
        .titulo-lesliga {
         font-family: 'exo-regular';
         font-size: 1rem;
         color: #cccbcb;
         }
         .badge-black {
         color: #fff;
         background-color: #474747;
         }
         .form-control:focus {
         color: #495057;
         background-color: #fff;
         border-color: #fb877a6b;
         outline: 0;
         box-shadow: 0 0 0 0rem rgba(255, 0, 0, 0.25);
         }
         .top-nav {
         background: #2d292a;
         padding: 0;
         border-bottom: 1px solid #2d292a;
         }
         .btn-primary {
         color: #fff;
         background-color: #2d292a;
         border-color: #2d292a;
         }
         .img-fluid {
         max-width: 100%;
         height: auto;
         object-fit: cover;
         }
         .card-body {
         padding: 0.25rem!important;
         }
         .card {
         border: none;
         }
         .widget-title {
         padding: 4px 0;
         font-weight: 700;
         height: 35px;
         font-family: "Nunito Sans", sans-serif;
         font-size: 24px;
         border-left: 5px solid #e31d23;
         position: relative;
         text-transform: uppercase;
         margin-bottom: 25px;
         margin-top: 19px;
         }
         .bd-r {
         content: '';
         width: 100%;
         height: 0px;
         border-bottom: 1px dotted #b7b7b7;
         display: block;
         margin-top: -15px;
         }
         .tt{
         background: white;
         padding: 0% 2%;
         }
         @media (max-width: 767px){
         .hidden-xs {
         display: none!important;
         }
         }
.section-01 .title-small {
    margin-bottom: 5px;
    font-size: 16px;
    height: 49px;
}
b, strong {
    font-weight: 100;
    font-size: 16px;
    font-family: exo-regular;
}

         .imghh{
            height: 150px;
          }
          .imghhh{
            height: 250px;
          }
      </style>

      <?php 
        // Cabecalho governo
        include('includes/barra.php');

        // Menu DAP
        include('includes/menu.php');

        // Carousel
        include('includes/carousel.php');

        // Destaques
        // include('includes/destaques.php');

        // Noticias / Legislações / Comunicados
        // include('includes/noticias_legislacoes_comunicados.php');

        // Informativos / Solicitações de Serviço
        // include('includes/informativos_servico.php');
      ?>
      
      <hr>

      <script src="/javascripts/application.js" type="text/javascript" charset="utf-8">
         $('#myTab a').click(function (e) {
         e.preventDefault()
         $(this).tab('show')
         })
         
         
         $(window).load(function() {
         var boxheight = $('#myCarousel .carousel-inner').innerHeight();
         var itemlength = $('#myCarousel .item').length;
         var triggerheight = Math.round(boxheight/itemlength+1);
         $('#myCarousel .list-group-item').outerHeight(triggerheight);
         });
         
         var monthNames = [ "January", "February", "March", "April", "May", "June",
         "July", "August", "September", "October", "November", "December" ];
         var dayNames= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]
         
         var newDate = new Date();
         newDate.setDate(newDate.getDate() + 1);    
         $('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
      </script>
      <script src="js/popper.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="js/bootstrap4.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/main.js"></script>
   </body>
</html>

<?php
    // Terminamos o "contador" e exibimos
    list($usec, $sec) = explode(' ', microtime());
    $script_end = (float) $sec + (float) $usec;
    $elapsed_time = round($script_end - $script_start, 5);

    // Exibimos uma mensagem
    echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';
?>