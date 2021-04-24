<?php include('./funciones/init.php') ?>

<?php
try {
  $mensaje = 'Esto es un error';
  throw new Exception($mensaje);
} catch (Exception $e) {
  echo $e->getMessage();

  $consulta = "SELECT * FROM usuarios WHERE email = ? LIMIT 1;";

  $resultados = ['email' => 'aaa', 'password' => 'gilhgufulghfuiotfuoyfouyhfouyfou'];

  if (isset($resultados) && password_verify($_POST['password'], $resultados['password'])) {
    $_SESSION['email'] = $resultados['email'];
    header('location: /index.php');
  } else {
    header('location: /login.php');
  }
  // SELECT FROM * usuarios WHERE email = 'arandi@arandi';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Use the title from a page's frontmatter if it has one -->
  <title>Amazing Store: Precios más bajos</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="/stylesheets/bootstrap.css" rel="stylesheet">
  <link href="/stylesheets/site.css" rel="stylesheet">
</head>

<body>
  <?php include('./compartidos/navegacion.php'); ?>
  <main class="mt-5">
    <div class="container">
      <div class="card-columns">
        <div class="card">
          <a href="/products/pulsera-oro-1.php"><img src="/images/product-00000.jpg" class="card-img-top" alt="Product 00000"></a>
          <div class="card-body">
            <h5 class="card-title">Pulsera Oro</h5>
            <p class="card-text">Pulsera de Oro 14 kilates</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$249.90</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/juego-reloj-bamboo-1.php"><img src="/images/product-00001.jpg" class="card-img-top" alt="Product 00001"></a>
          <div class="card-body">
            <h5 class="card-title">Juego Reloj Bamboo</h5>
            <p class="card-text">Juego de 2 relojes de madera
              bamboo</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$612.00</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/bolsa-negra-piel-1.php"><img src="/images/product-00002.jpg" class="card-img-top" alt="Product 00002"></a>
          <div class="card-body">
            <h5 class="card-title">Bolsa negra piel</h5>
            <p class="card-text">Bolsa para dama, color negro</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$999.90</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/camiseta-1.php"><img src="/images/product-00003.jpg" class="card-img-top" alt="Product 00003"></a>
          <div class="card-body">
            <h5 class="card-title">Camiseta</h5>
            <p class="card-text">Camiseta de Algodón, varias
              tallas</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$129.90</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/juego-reloj-negro-1.php"><img src="/images/product-00004.jpg" class="card-img-top" alt="Product 00004"></a>
          <div class="card-body">
            <h5 class="card-title">Juego Reloj Negro</h5>
            <p class="card-text">Juego de 2 relojes color negro</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$612.00</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/pulsera-1.php"><img src="/images/product-00005.jpg" class="card-img-top" alt="Product 00005"></a>
          <div class="card-body">
            <h5 class="card-title">Pulsera</h5>
            <p class="card-text">Pulsera de Buda, color negro,
              unisex</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$50.00</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/aretes-1.php"><img src="/images/product-00006.jpg" class="card-img-top" alt="Product 00006"></a>
          <div class="card-body">
            <h5 class="card-title">Aretes</h5>
            <p class="card-text">Aretes colro azul</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$149.50</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/audifono-inalambricos-1.php"><img src="/images/product-00007.jpg" class="card-img-top" alt="Product 00007"></a>
          <div class="card-body">
            <h5 class="card-title">Audifonos inalambricos</h5>
            <p class="card-text">Audifonos bluetooth</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$1,949.50</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/tennis-1.php"><img src="/images/product-00008.jpg" class="card-img-top" alt="Product 00008"></a>
          <div class="card-body">
            <h5 class="card-title">Tennis</h5>
            <p class="card-text">Tennis rojos, con luces led,
              RGB</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$2,599.50</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/tennis-2.php"><img src="/images/product-00009.jpg" class="card-img-top" alt="Product 00009"></a>
          <div class="card-body">
            <h5 class="card-title">Tennis para correr</h5>
            <p class="card-text">Tennis negros, comodos, para
              correr</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$1,999.50</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/mochila-1.php"><img src="/images/product-00010.jpg" class="card-img-top" alt="Product 00010"></a>
          <div class="card-body">
            <h5 class="card-title">Mochila de cuero</h5>
            <p class="card-text">Mochila de cuero, color negro</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$499.50</span></button>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="/products/zapatos-1.php"><img src="/images/product-00011.jpg" class="card-img-top" alt="Product 00011"></a>
          <div class="card-body">
            <h5 class="card-title">Zapatos de tela mezclilla</h5>
            <p class="card-text">Zapatos de tele de mezclilla,
              color azul</p>
            <div class="text-right">
              <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                <span>$1,499.50</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="/javascripts/jquery.js"></script>
  <script src="/javascripts/popper.js"></script>
  <script src="/javascripts/bootstrap.js"></script>
  <script src="/javascripts/site.js"></script>
</body>

</html>