<?php
$title = "Home page";
include "header.php" ?>

<!-- slider -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/Restaurant1.jpg" class="d-block w-100" alt="image"
            style="object-fit: contain; width: 100%; height: auto;">
        </div>
        <div class="carousel-item">
          <img src="../images/Restaurant2.jpg" class="d-block w-100" alt="image2"
            style="object-fit: contain; width: 100%; height: auto;">
        </div>
        <div class="carousel-item">
          <img src="../images/Restaurant3.jpg" class="d-block w-100" alt="image3"
            style="object-fit: contain; width: 100%; height: auto;">
        </div>
      </div>
    </div>
    <!-- slider -->
    <!--photo-->
    <div class="text-center content-helper bg-none">
      <div class="container">
        <div class="row align-items-start">
          <div class="col-md-6">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="responsive">
                  <div class="gallery">
                    <a target="_self" href="../images/pancakes.jpg">
                      <img src="../images/pancakes.jpg" alt="Cinque Terre" width="600" height="200">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="responsive">
                  <div class="gallery">
                    <a target="_self" href="../images/dish2.jpg">
                      <img src="../images/dish2.jpg" alt="Cinque Terre" width="600" height="200">
                    </a>
                  </div>
                </div>

              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="responsive">
                  <div class="gallery">
                    <a target="_self" href="../images/kotiliesi.webp">
                      <img src="../images/kotiliesi.webp" alt="Cinque Terre" width="600" height="200">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="responsive">
                  <div class="gallery">
                    <a target="_self" href="../images/soup.webp">
                      <img src="../images/soup.webp" alt="Cinque Terre" width="600" height="200">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="responsive">
                  <div class="gallery">
                    <a target="_self" href="../images/sweet.jpg">
                      <img src="../images/sweet.jpg" alt="Cinque Terre" width="600" height="200">
                    </a>
                  </div>
                </div>

              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="responsive">
                  <div class="gallery">
                    <a target="_self" href="../images/coffee.jpg">
                      <img src="../images/coffee.jpg" alt="Cinque Terre" width="600" height="200">
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 item">
            <h1>Your party, our passion</h1>
            <div>
              <p> In our bid to deliver authentic, undiluted experiences, we’ve introduced a
                unique regional home style
                dining experience. Always prepared with a local touch, the home-style cooking ensures that you
                maintain
                good health throughout. And at the same time it gives you the opportunity to dabble in the
                local
                delicacies.
              </p>
            </div>
            <div>
              <a href="menu.html">
                <button type="button" class="btn11">View Menu</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--iframe Menu-->
  <!--Reservation-->
  <div class="text-center content-helper">
    <div class="container">

      <div class="row">
        <div class="col-md-6 padding-bottom-30px">
          <h3>
            <div>
              Cuisine: Authentic Finnish, European
            </div>
            <hr>
            <div>
              Timing: 07:00-22:00 Mon-Sun
            </div>
          </h3>
        </div>
        <div class="col-md-6">
          <h3>
            <div>
              Party of upto 100 guests can be hosted
            </div>
            <hr>
            <div>
              Business dinning rooms avialble (upto 20 peoples)
            </div>
          </h3>
        </div>
      </div>
    </div>
  </div>
  <!--Reservation-->
  <!--Map-->
  <div class="text-center content-helper">
    <div class="container padding-bottom-30px">
      <div class="row align-items-start">
        <div class="col item padding-bottom-30px">
          <h3>Location
            <br>
            Aleksanterinkatu 46, 00100 Helsinki
          </h3>
        </div>
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas"
              src="https://maps.google.com/maps?q=Amarillo%20helsinki&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Map-->

<?php include "footer.php" ?>