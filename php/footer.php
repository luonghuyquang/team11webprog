</div>
<!--Footer-->
<footer class="footer text-center content-helper bg-none">
  <div class="container">
    <div class="row">
      <!-- Footer Location-->
      <div class="col-md-4 footer-section">
        <h4 class="text-uppercase mb-4">
          Contact
        </h4>
        <p id="CU" class="lead mb-0">
          <a class="link" href="tel:+358123456789">+358 12 345 6789</a>
        </p>
      </div>
      <!-- Footer Social Icons-->
      <div class="col-md-4 footer-section">
        <h4 class="text-uppercase mb-4">
          Around the Web</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="#!">
          <svg class="svg-inline--fa fa-facebook-f fa-fw" viewBox="0 0 320 512">
            <path fill="currentColor"
              d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z">
            </path>
          </svg>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!">
          <svg class="svg-inline--fa fa-twitter fa-fw" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z">
            </path>
          </svg>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!">
          <svg class="svg-inline--fa fa-instagram fa-fw" viewBox="0 0 448 512">
            <path fill="currentColor"
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
            </path>
          </svg>
        </a>
      </div>
      <!-- Footer About Text-->
      <div class="col-md-4 footer-section">
        <h4 class="text-uppercase mb-4">
          E-mail
        </h4>
        <p class="lead mb-0">
          <a class="link" href="mailto:amarillo@gmail.com">amarillo@gmail.com</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!--footer-->
</div>
</body>
<!-- review -->
<script>
  $(document).ready(function () {


    $('.rate').click(function () {

      $('.rate').each(function () {
        $(this).removeClass('rating-color');
      });

      var data = $(this).data("rate");
      for (var i = 0; i < data; i++) {
        $($('.rate')[i]).addClass('rating-color');
      }

      $("input[name='rate']").val(data);
    });

    $('.toggle-review-btn').click(function () {
      $(this).addClass('hide');
      $('.feedback-text').hide();
    });

  // getting initials for testimonial card for review

    $('.testimonial-card').each(function () {
      var firstName = $(this).find('#firstName').text();
      var lastName = $(this).find('#lastName').text();
      var intials = firstName.charAt(0) + lastName.charAt(0);
      $(this).find('#profileImage').text(intials.toUpperCase());
    });
  });
</script>

</html>