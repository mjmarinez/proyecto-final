<?php include_once("HeaderSite.php"); ?>


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
              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
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
              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
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
              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
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
              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
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
              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
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
              <a href="#" data-toggle="modal" data-target="#exampleModal">Comprar</a>
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
          <form id="contact" method="post" action="BD_Producto.php">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Cantidad" required="" name="cantidad" id="cantidad">
                </fieldset>
              </div>

              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Dirección" required="" name="direccion" id="direccion">
                </fieldset>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" required="" name="nombre" id="nombre">

            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="E-mail" required="" name="email" id="email">
                </fieldset>
              </div>

              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Teléfono" required="" name="telefono" id="telefono">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Enviar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </fieldset>
              </div>
            </div>


          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<?php include_once("FooterSite.php"); ?>