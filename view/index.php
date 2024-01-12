<?php
include("./particions/header.php");
?>


<div  style="background-image: url('https://www.beneficiosdavivienda.com/finanzaspersonales/images/slide-web-5.jpg'); opacity: 1;" class="p-5 mb-4 bg-light rounded-3" >
<div id="colorfondo"  style="opacity: 1; color:white; ">
<div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Bienvenido al Sistema de Administracion de <span style="color:red;">Educational plan </span> <?php  print_r($_SESSION["login"]);?></h1>
      <p class="col-md-8 fs-4">Recuerda que la validacion de reportes es muy esencial para realizar los prestamos estudiantiles</p>
      <a  href="stikers.php" class="btn btn-danger btn-lg" type="button">Agregar nuevos usuarios</a>    
    </div>
  </div>
  </div>
  <div class="row justify-content-center align-items-center g-2">
   
  <h1 style=" margin: 0px 0px 20px 0px; text-align:center; font-weight: lighter; font-size:20px; background: red; padding:10px; color:white;">Nuestra asociasion con  Davivienda nos permite validar su informacion de reportes</h1>
  
  <div class="col"><img style="width:100%; height: 100vh; margin: 10px;" src="https://i.vimeocdn.com/video/1513410149-b9776bfacfe110f1d71a91ad05a1d27e09de64425795a1d9d8fc1958927e1fbc-d?mw=1920&mh=1080&q=70"></div>
    <div class="col">
      
    <img style="width:100%; height: 100vh; margin: 10px;" src="https://www.beneficiosdavivienda.com/finanzaspersonales/images/slide-5.jpg"></div>

    <div class="col">

    <img style="width:100%; height: 100vh; margin: 10px;" src=" https://www.banorte.com/cms/banorte/imagenes/Banorte-Movil-Incode-postal-nov22.png"></div>

   
    </div>
  </div>


<?php
include("./particions/fotter.php");
?>