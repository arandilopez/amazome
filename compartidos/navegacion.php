  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a href="/" class="navbar-brand">Amazing Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a href="#" class="nav-link">Promociones</a>
              </li>
          </ul>
          <form class="form-inline w-50">
              <div class="input-group w-100">
                  <input type="text" class="form-control" placeholder="Buscar">
                  <div class="input-group-append">
                      <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
                  </div>
              </div>
          </form>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi cuenta</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php if (!$_SESSION['nombre']) : ?>
                          <a href="/login.php" class="dropdown-item">Iniciar
                              sesión</a>
                      <?php else : ?>
                          <a class="dropdown-item" href="#">Mis pedidos</a>
                          <a class="dropdown-item" href="#"><?php echo $_SESSION['nombre']; ?></a>
                          <form id="logout" method="POST" action="/funciones/cerrar_sesion.php">
                              <input type="hidden" name="_aqui" value="aaa" />
                          </form>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('logout').submit()">Cerrar sesión</a>
                      <?php endif; ?>
                      <!-- <div class="dropdown-divider"></div> -->

                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/carrito.php"><i class="fas fa-shopping-cart text-warning"></i> Carrito</a>
              </li>
          </ul>
      </div>
  </nav>