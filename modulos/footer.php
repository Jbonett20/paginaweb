<footer id="footer" class="footer dark-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="sitename">G&B</span>
      </a>
      <div class="footer-contact pt-3">
        <p>A108 Calle Adam</p>
        <p>New York, NY 535022</p>
        <p class="mt-3"><strong>Teléfono:</strong> <span>3017543649 - 3188517817</span></p>
        <p><strong>Correo electrónico:</strong> <span>gerencia@gonzalezballesteros.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Enlaces Útiles</h4>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Sobre nosotros</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Términos de servicio</a></li>
        <li><a href="#">Política de privacidad</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Nuestros Servicios</h4>
      <ul>
        <li><a href="#">Diseño Web</a></li>
        <li><a href="#">Desarrollo Web</a></li>
        <li><a href="#">Gestión de Productos</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Diseño Gráfico</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Nuestro Boletín</h4>
      <p>¡Suscríbete y conoce todo sobre nuestros productos y servicios!</p>
      <button id="btnMostrarFormulario" class="btn btn-primary">Suscribirse</button>
      <form action="forms/newsletter.php" method="post" class="php-email-form" id="formularioSuscripcion" style="display: none;">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
          </div>
          <div class="col-md-6">
            <input type="tel" class="form-control" name="telefono" placeholder="Teléfono" required>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Enviar Suscripción</button>
          </div>
        </div>
        <div class="loading">Cargando</div>
        <div class="error-message"></div>
        <div class="sent-message">Tu solicitud de suscripción ha sido enviada. ¡Gracias!</div>
      </form>
      <script>
        document.getElementById('btnMostrarFormulario').addEventListener('click', function() {
          const formulario = document.getElementById('formularioSuscripcion');
          formulario.style.display = formulario.style.display === 'none' ? 'block' : 'none';
        });
      </script>
    </div>

  </div>
</div>

</footer>
