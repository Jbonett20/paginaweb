<style>
  /* Personalización del acordeón activo */
  .accordion-button:not(.collapsed) {
    background-color: #602350;
    color: #fff;
  }

  .accordion-button:focus {
    box-shadow: none;
  }

  .accordion-button::after {
    filter: invert(1); /* Cambia el ícono a blanco en modo activo */
  }
</style>

<section id="faq" class="faq section bg-light py-5">
  <div class="container">

    <div class="container section-title" data-aos="fade-up">
        <h2>Preguntas frecuentes</h2><br>
        <div><span>Asesoría clara, respuestas concretas </span></div>
      </div><!-- End Section Title -->

    <!-- Accordion -->
    <div class="accordion" id="faqAccordion">

      <!-- F.A.Q Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            ¿Cómo saber si estoy cotizando correctamente para mi pensión?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Analizamos tu historial laboral y de aportes para verificar si estás cumpliendo con los requisitos del sistema pensional colombiano. También te orientamos sobre qué régimen te conviene más, cómo optimizar tus cotizaciones y qué hacer en caso de inconsistencias en tu historia laboral.
          </div>
        </div>
      </div>

      <!-- F.A.Q Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            ¿Cuáles son las obligaciones laborales que tiene una empresa en Colombia?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <ul class="mb-0">
              <li>Tener Reglamento Interno de Trabajo</li>
              <li>Tener Reglamento de Higiene y Seguridad Industrial</li>
              <li>Tener Autorización para Laborar Horas Extras</li>
              <li>Contar con un vigía de seguridad y salud en el trabajo</li>
              <li>Conformar el Comité de Convivencia Laboral</li>
              <li>Entre otros.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- F.A.Q Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            ¿Cómo evitar sanciones del Ministerio de Trabajo?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Cumpliendo con las obligaciones laborales, seguridad social, pago oportuno de salarios y prestaciones sociales, prevención y salud en el trabajo, entre otros.
          </div>
        </div>
      </div>

      <!-- F.A.Q Item 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
            ¿Qué medidas preventivas debo implementar para evitar demandas laborales?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <ul class="mb-0">
              <li>Documentación integral y contratos claros</li>
              <li>Cumplimiento riguroso de pagos y prestaciones</li>
              <li>Implementación y actualización del SG-SST</li>
              <li>Reglamento interno y políticas claras</li>
              <li>Formación y comunicación continua</li>
              <li>Control y supervisión de la jornada laboral</li>
              <li>Auditorías internas periódicas</li>
              <li>Asesoría legal preventiva</li>
            </ul>
          </div>
        </div>
      </div>

    </div><!-- End Accordion -->

  </div>
</section>
