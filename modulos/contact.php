<section id="contact" class="contact section light-background">

  <!-- Section Tit -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contacto</h2>
    <div><span>¿Necesitas ayuda?</span> <span class="description-title">Agenda tu cita</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 ">
        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt" style="background-color: #602350 !important;color:#ffffff;"></i>
              <h3>DIRECCIÓN</h3>
              <p>Bogotá y Barranquilla<br>Atención en toda Colombia</p>
            </div>
          </div>
          <!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone" style="background-color: #602350 !important;color:#ffffff;"></i>
              <h3>Llámanos</h3>
              <p>3188517817 - 3017543649</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope" style="background-color: #602350 !important;color:#ffffff;"></i>
              <h3>Envíenos un correo electrónico</h3>
              <p>gerencia@gonzalezballesteros.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>

      <div class="col-lg-6">
        <form id="form_contact" method="post" action="modulos/controllers/contact.php" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Nombre" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Correo" required>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Asunto" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="4" placeholder="Estamos atento a su mensaje" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading d-none">Cargando...</div>
              <div class="error-message d-none text-danger"></div>
              <div class="sent-message d-none text-success">Your message has been sent. Thank you!</div>

              <button type="submit" id="btn_env_contact">Enviar mensaje</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section>