<?php include('./funciones/init.php'); ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Use the title from a page's frontmatter if it has one -->
  <title>Mi carrito</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="/stylesheets/bootstrap.css" rel="stylesheet" />
  <link href="/stylesheets/site.css" rel="stylesheet" />
</head>

<body>

  <?php include('./compartidos/navegacion.php'); ?>
  <main class="mt-5">
    <?php
    echo $_COOKIE['nombre'];
    ?>
    <div class="container">
      <ul class="list-unstyled">
        <li class="media">
          <div class="w-15 mr-3">
            <img src="/images/product-00007.jpg" class="img-fluid" alt="Product 00007" />
          </div>
          <div class="media-body">
            <div class="row">
              <div class="col">
                <h5 class="mt-0">Audifonos inalambricos</h5>
                <p>
                  Audifonos bluetooth
                </p>
              </div>
              <div class="col text-right">
                <h6>$1,949.50</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="media">
          <div class="w-15 mr-3">
            <img src="/images/product-00008.jpg" class="img-fluid" alt="Product 00008" />
          </div>
          <div class="media-body">
            <div class="row">
              <div class="col">
                <h5 class="mt-0">Tennis</h5>
                <p>
                  Tennis rojos, con luces led, RGB
                </p>
              </div>
              <div class="col text-right">
                <h6>$2,599.50</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="media">
          <div class="w-15 mr-3">
            <img src="/images/product-00009.jpg" class="img-fluid" alt="Product 00009" />
          </div>
          <div class="media-body">
            <div class="row">
              <div class="col">
                <h5 class="mt-0">Tennis para correr</h5>
                <p>
                  Tennis negros, comodos, para correr
                </p>
              </div>
              <div class="col text-right">
                <h6>$1,999.50</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="media">
          <div class="w-15 mr-3">
            <img src="/images/product-00010.jpg" class="img-fluid" alt="Product 00010" />
          </div>
          <div class="media-body">
            <div class="row">
              <div class="col">
                <h5 class="mt-0">Mochila de cuero</h5>
                <p>
                  Mochila de cuero, color negro
                </p>
              </div>
              <div class="col text-right">
                <h6>$499.50</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="media">
          <div class="w-15 mr-3">
            <img src="/images/product-00011.jpg" class="img-fluid" alt="Product 00011" />
          </div>
          <div class="media-body">
            <div class="row">
              <div class="col">
                <h5 class="mt-0">Zapatos de tela mezclilla</h5>
                <p>
                  Zapatos de tele de mezclilla, color azul
                </p>
              </div>
              <div class="col text-right">
                <h6>$1,499.50</h6>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <hr>
      <div class="text-right font-weight-bold">
        <span class="text-uppercase">total:</span>
        $8,547.50
      </div>
    </div>

  </main>

  <script src="/javascripts/jquery.js"></script>
  <script src="/javascripts/popper.js"></script>
  <script src="/javascripts/bootstrap.js"></script>
  <script src="/javascripts/site.js"></script>
</body>

</html>