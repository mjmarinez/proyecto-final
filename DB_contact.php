<?php include_once("HeaderSite.php");?>

<!-- Page Content -->
<div class="page-heading contact-heading header-text" style="background-image: url(assets/img/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Hair Care & Love</h4>
              <h2>Contactos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nuestra locación</h2>
            </div>
          </div>
          <div class="col-md-8">

            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Nuestras Oficinas</h4>
              <p>Estamos ubicados justamente donde indica el mapa. Ven a visitarnos!<br><br>Si tienes algún problema con tu compra no dudes en contactarnos.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Tienes problemas? Envianos un mensaje...</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
            <h2>Registrando su mensaje...</h2>
            <?php
                                    if($_POST) 
                                    {
                                        //echo"<h3>Reserva enviada</h3>";
                                        $Nombre = $_POST['name'];
                                        $Email = $_POST['email'];
                                        $Tema = $_POST['subject'];
                                        $Mensaje = $_POST['message'];

                                        /*Validacion*/

                                        if(empty($Nombre))
                                        {
                                            echo "<h3>El campo nombre debe ser completado...</h3>";
                                        }

                                        if(empty($Email))
                                        {
                                            echo "<h3>El campo email debe ser completado...</h3>";
                                        }

                                        if(empty($Tema))
                                        {
                                            echo "<h3>El campo reserva debe ser completado...</h3>";
                                        }

                                        if(empty($Mensaje))
                                        {
                                            echo "<h3>El campo notas debe ser completado...</h3>";
                                        }

                                    
                                        /*Conexion y guardado*/

                                        if( (!empty($Nombre)) && (!empty($Email)) && (!empty($Tema)) && (!empty($Mensaje)) ) 
                                        {
                                            //echo "<h3>Puede guardar</h3>";

                                            /*Conexion a Servidor*/
                                            /*Datos del Servidor*/
                                            $Servidor="localhost";
                                            $UserDB="root";
                                            $ClaveDB="";
                                            $DB="bk_db_20186019";
                                            $Conectar = mysqli_connect($Servidor, $UserDB, $ClaveDB, $DB) or die("Error con la DB");

                                            /*SENTENCIA para Guardar (INSERT)*/

                                            $Guardar="
                                                INSERT INTO mensaje 
                                                    (nombre, email, tema, mensaje)
                                                
                                                VALUES
                                                    ( '$Nombre', '$Email',  '$Tema', '$Mensaje')
                                            ";

                                            /*EJECUCION de SENTENCIA*/

                                           if (mysqli_query ($Conectar, $Guardar)) 
                                           {
                                               echo "<h3>Mensaje enviado...</h3>";
                                           }
                                           else 
                                           {
                                                echo "<h3>Proceso fallido...</h3>";
                                           }
                                        }

                                        else 
                                        {
                                            echo "<h3>Faltan campos por completar.</h3>";
                                        }
                                    } 
                                    else
                                    {
                                        echo"<h3>No enviado</h3>";
                                    }
                                ?>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/img/smiel.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">Contactaremos contigo pronto!</h5>
          </div>
        </div>
      </div>
    </div>

<?php include_once("FooterSite.php");?>
