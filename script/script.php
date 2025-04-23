<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- Incluir jQuery desde jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  const img = document.querySelector('.img_logo');
  const zoomPreview = document.getElementById('zoom-preview');

  img.addEventListener('mouseover', (e) => {
    zoomPreview.style.display = 'block';
  });

  img.addEventListener('mousemove', (e) => {
    zoomPreview.style.top = (e.pageY + 20) + 'px';
    zoomPreview.style.left = (e.pageX + 20) + 'px';
  });

  img.addEventListener('mouseout', () => {
    zoomPreview.style.display = 'none';
  });
</script>

