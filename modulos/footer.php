<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.php" class="logo d-flex align-items-center">
          <span class="sitename">G&B</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Bogotá y Barranquilla</p>
          <p>Atención virtual o presencial</p>
          <p class="mt-3"><strong>Teléfono:</strong> <span>3188517817 - 3017543649</span></p>
          <p><strong>Correo electrónico:</strong> <span>gerencia@gonzalezballesteros.com</span></p>
        </div>

        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/gonzalezyballesteros_abogados/?igsh=MWw2eTFtbXMzc2k%3D-271%2C15#"><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Enlaces Útiles</h4>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Sobre Nosotros</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Aviso Legal</a></li>
          <li><a href="#">Política de Privacidad</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Especialidades</h4>
        <ul>
          <li><a href="#">Derecho Laboral</a></li>
          <li><a href="#">Derecho Civil</a></li>
          <li><a href="#">Seguridad Social</a></li>
          <li><a href="#">Consultoría Legal</a></li>
          <li><a href="#">Litigios Estratégicos</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <p>¿Quieres recibir actualizaciones legales y noticias relevantes?</p>
        <button id="btnMostrarFormulario" class="btn" style="background-color:#602350 !important; color:#ffffff">Suscribirse</button>
        <form action="forms/newsletter.php" method="post" class="php-email-form" id="formularioSuscripcion" style="display: none;">
          <hr>
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
              <button type="submit" class="btn w-100" style="background-color:#602350 !important; color:#ffffff">Enviar Suscripción</button>
            </div>
          </div>
          <div class="loading">Cargando</div>
          <div class="error-message d-none text-danger"></div>
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
  <div class="container text-center mt-4">
    <small class="text-white-50">© 2025 González & Ballesteros - Todos los derechos reservados.</small>
  </div>


</footer>