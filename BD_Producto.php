<?php include_once("HeaderSite.php");?>


<div class="page-heading about-heading header-text" style="background-image: url(assets/img/foambubbles2912.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Hair Care & Love</h4>
              <h2>Productos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/img/Full_shampoo_front.jpg" alt="">

              <div class="down-content">
                <h4>Living Proof Perfect hair Day Full Shampoo</h4>

                <h6><small>USD$</small> $29 <small></small></h6>


                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 15</strong> &nbsp;&nbsp;&nbsp;&nbsp;
              
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Revisar orden</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/img/2.jpg" alt="">

              <div class="down-content">
                <h4>Cantu Argan Oil Leave-In Conditioning Repair Cream 16 oz</h4>

                <h6><small>USD$</small> $6.49 <small></small></h6>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 8</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Revisar orden</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/img/3.jpg" alt="">

              <div class="down-content">
                <h4>Alikay Naturals Honey and Sage Deep Conditioner 8 oz</h4>

                <h6><small>USD$</small> $16.95 <small></small></h6>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 21</strong> &nbsp;&nbsp;&nbsp;&nbsp;
          
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Revisar orden</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/img/Restore_Perfecting_Spray_front.jpg" alt="">

              <div class="down-content">
                <h4>Living proof Restore Instant Protection</h4>

                <h6><small>USD</small> $28.00 <small></small></h6>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 14</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Revisar orden</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/img/eden.jpg" alt="">

              <div class="down-content">
                <h4>Eden Body Works Jojoba Monoi Deep Conditioner 16 oz</h4>

                <h6><small>USD</small> $9.95 <small></small></h6>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 7</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Revisar orden</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/img/NF_VanishingOil_Front.jpg" alt="">

              <div class="down-content">
                <h4>Living proof frizz Vanishing Oil</h4>

                <h6><small>USD</small> $30.00 <small></small></h6>


                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 9</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Revisar orden</a>
                </span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Comprar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
            <h2>Registrando su orden...</h2>
            <?php
                                    if($_POST) 
                                    {
                                        //echo"<h3>Reserva enviada</h3>";
                                        $Nombre = $_POST['nombre'];
                                        $Email = $_POST['email'];
                                        $Cantidad = $_POST['cantidad'];
                                        $Direcc = $_POST['direccion'];
                                        $Tel = $_POST['telefono'];

                                        /*Validacion*/

                                        if(empty($Nombre))
                                        {
                                            echo "<h3>El campo nombre debe ser completado...</h3>";
                                        }

                                        if(empty($Email))
                                        {
                                            echo "<h3>El campo email debe ser completado...</h3>";
                                        }

                                        if(empty($Cantidad))
                                        {
                                            echo "<h3>El campo reserva debe ser completado...</h3>";
                                        }

                                        if(empty($Direcc))
                                        {
                                            echo "<h3>El campo notas debe ser completado...</h3>";
                                        }

                                        if(empty($Tel))
                                        {
                                            echo "<h3>El campo notas debe ser completado...</h3>";
                                        }

                                        /*Conexion y guardado*/

                                        if( (!empty($Nombre)) && (!empty($Email)) && (!empty($Cantidad)) && (!empty($Direcc)) && (!empty($Tel)) ) 
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
                                                INSERT INTO compra 
                                                    (cantidad, direccion, nombre, email,  telefono)
                                                
                                                VALUES
                                                    ('$Cantidad', '$Direcc', '$Nombre', '$Email',  '$Tel')
                                            ";

                                            /*EJECUCION de SENTENCIA*/

                                           if (mysqli_query ($Conectar, $Guardar)) 
                                           {
                                               echo "<h3>Orden registrada...</h3>";
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
          <div class="modal-footer">
           
          </div>
        </div>
      </div>
    </div>

<?php include_once("FooterSite.php");?>
