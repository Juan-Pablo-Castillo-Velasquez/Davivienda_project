<!-- Footer -->
<br>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Form -->

    <section class="mb-4">
      <p>
          ¡Bienvenido a PinZone, tu destino para los mejores pines coleccionables! Sumérgete en el fascinante mundo de los pines con nuestra amplia selección de diseños únicos y exclusivos.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Nuestras redes sociales</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://web.facebook.com/profile.php?id=100094106404055" class="text-white"><i class="fab fa-facebook"></i> Facebook</a>
            </li>
            <li>
              <a href="https://twitter.com/PinZone193172" class="text-white"><i class="fa-brands fa-twitter" style="color: #f7f7f7;"></i> Twitter</a>
            </li>
            <li>
              <a href="https://www.instagram.com/el_pin_zone/" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
            </li>
            <li>
              <a href="https://www.reddit.com/" class="text-white"><i class="fab fa-reddit"></i> Reddit</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->

        <div class="col-lg-3 col-md-7 mb-4 mb-md-0">
          <h5 class="text-uppercase">Categorias</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="usuarios.php" class="text-white">Usuarios</a>
            </li>
            <li>
              <a href="" class="text-white">asociasion</a>
            </li>
            <li>
              <a href="https://www.davivienda.com/wps/portal/personas/nuevo/personas/quienes_somos/sobre_nosotros" class="text-white">Sobre davivienda</a>
            </li>
            <li>
              <a href="https://proveedores.davivienda.com/?page_id=117#:~:text=El%20registro%20de%20la%20empresa%20debe%20ser%20realizado,anual%20de%20documentos%20solicitados%20en%20la%20plataforma%20ARIBA." class="text-white">Registros</a>
            </li>
          </ul>
        </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:Educational Plan
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
const confimar=document.querySelectorAll("#modificar").forEach(e=>{
    e.addEventListener("click",(a)=>{
        x=confirm("seguro que deseas borrar este usuario ")
        if(x){
            alert("usuario borrado exitosamente ")
        }else{
            alert("usuario  no borrado")
            a.preventDefault()
        }
    })

})
window.addEventListener('load', function() {
  var loader = document.getElementById('loader-container');
  setTimeout(() => {
  loader.style.display = 'none';
    
  }, 2000);
});

const verificacionBtn = document.querySelector("#verificacion");
  verificacionBtn.addEventListener("click", (e) => {
    const confirmation = confirm("¿Seguro que quiere enviar esta petición?");
    if (confirmation) {
      alert("Petición enviada correctamente. En 5 minutos, un asesor se comunicará contigo.");
    } else {
      e.preventDefault();
      alert("Petición no registrada.");
    }
  });
</script> 
</body>
</html>