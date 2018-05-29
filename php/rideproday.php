<!-- Aqui el head -->
<?php include("secciones/head.php"); ?>
<!-- Aqui la barra de navegacion -->
<?php include("secciones/navbar.php"); ?>
<!-- Content -->
<div class="parallax-container slider-top2">
   <div class="row">
      <div class="col s6 header-position">
         <div class="col s5">
            <div class="row">
               <div class="col s12">
                  <img class="" width="80%" src="../imagenes/banderas3.png">
               </div>
            </div>
            <div class="row">
               <div class="col s12">
                  <div class="textobannerrideproday" >
                     <span class="textosdecorados paralelogramo2">&nbsp;RIDEPRO</span><span class="paralelogramo2 textosdecorados2">&nbsp;DAY</span><br>
                     <span class="textosdecorados3 paralelogramo2">&nbsp;07-04-18</span>
                     <a href="#" class="btn-hover">
                        <div class="paralelogramo tamañonormal">
                           <img class="navbar-item-img" src="../imagenes/RP.png" alt="">
                           <p class="black-text">Inscríbete</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s7" style="margin-top: 2rem;">
            <img class="" width="100%" src="../imagenes/RP.png">
         </div>
      </div>
   </div>
   <div class="parallax">
      <img class="imgenparallax" width="100%" src="../imagenes/portadarideproday.jpg">
   </div>
</div>
<section class="row container">
   <div class="col m8">
      <div>
         <h2 class="section-subheading" style="color: black; font-size: 2rem; letter-spacing: 5px;">
            <img height="34px" src="../imagenes/chulos.jpeg" alt="">
            BIENVENIDOS AL RIDEPRODAY
         </h2>
         <hr style="height: 2px; background-color: red;">
         <div class="col m12 text-section textosparrafos" style="margin-top: 0px;">
            <p>
               Desde las 7 am abrimos las puertas del mejor escenario de los deportes a motor en Colombia, el Autódromo de tocancipa. Podrás participar en un curso de manejo dictado por pilotos profesionales con enfoque en ciudad carretera y pista o en unas prácticas libres donde giras en pista en unas tandas de 20 minutos a lo largo del Día divididas por tu nivel de manejo o el cilindraje de tu moto. El evento cuenta con toda la asistencia de profesionales y todas las normas de seguridad.
            </p>
         </div>
      </div>
   </div>
</section>
<section class="">
   <div class="">
      <img class="imgenparallax" width="100%" src="../imagenes/rideprodaypista.jpg">
   </div>
</section>

<?php include("secciones/rideproday/cursos.php"); ?>



<div class="row container nomargenabajo">
   <div class="col s6 displaytable altura500 ">
      <div class="alinearv relative">
         <div class="absolute2">
            <span class="paralelogramo2 textosdecorados4">&nbsp;¿Más información?</span><br>
            <span class="paralelogramo2 textosdecorados5">&nbsp;Escríbenos</span>
         </div>
         <img class="imagenautodromo2" src="../imagenes/ChulosRideproday.png" alt="">
      </div>
   </div>
   <form class="col s6 displaytable altura500 ">
      <div class="alinearv">
         <div class="row nomargenabajo">
            <div class="input-field col s12">
               <img class="prefix prefix2" src="../imagenes/cascos2.png" alt="">
               <input id="icon_prefix" type="text" class="validate">
               <label class="vener2" for="icon_prefix">Nombre</label>
            </div>
            <div class="input-field col s12">
               <i class="material-icons prefix ">mail_outline</i>
               <input id="email" type="email" class="validate">
               <label class="vener2" for="email">Email</label>
            </div>
            <div class="input-field col s12">
               <img class="prefix prefix3" src="../imagenes/banderas2.png" alt="">
               <textarea id="textarea1" class="materialize-textarea"></textarea>
               <label class="vener2" for="textarea1">¿Cómo podemos ayudarte?</label>
            </div>
         </div>
         <div class="paralelogramo tamañonormal botonformulario">
            <img class="navbar-item-img" src="../imagenes/RP.png" alt="">
            <a class="black-text">Enviar</a>
         </div>
   </form>
   </div>
</div>
<!-- * END Content -->
<!-- Incluir Contacto -->
<?php include("secciones/contacto.php"); ?>
<!-- Aqui el footer -->
<?php include("secciones/footer.php"); ?>
