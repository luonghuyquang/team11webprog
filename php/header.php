<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AMARILLO</title>
  <!--Bootstrap CSS code-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!--Bootstrap JS code-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


  <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">

  <!--Local CSS files to be merged together-->
  <link rel="stylesheet" href="../style/style2.css">
  <link rel="stylesheet" href="../style/style.css">

  <!--go to top button-->
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("quangBtn").style.display = "block";
      } else {
        document.getElementById("quangBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
 <script src="../javascript/javascript.js"></script>
</head>

<body>
  <div>
    <button onclick="topFunction()" id="quangBtn" title="Go to top"><i class="fa fa-caret-square-o-up"
      style="font-size:36px;color:#5C2018"></i></button>
    <!--This is the Header part, it has the top navigation links-->
    <header>
      <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><image class ="logo11" src="../images/logo1.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'class="nav-link active"';} else {echo 'class="nav-link"';} ?> href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a <?php if(basename($_SERVER['PHP_SELF']) == 'menu.php'){echo 'class="nav-link active"';} else {echo 'class="nav-link"';} ?> href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a <?php if(basename($_SERVER['PHP_SELF']) == 'reservation.php'){echo 'class="nav-link active"';} else {echo 'class="nav-link"';} ?> href="reservation.php">Reservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#CU">Contact</a>
              </li>
              <li class="nav-item">
                <a <?php if(basename($_SERVER['PHP_SELF']) == 'about.php'){echo 'class="nav-link active"';} else {echo 'class="nav-link"';} ?> href="about.php">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--End of Header part-->
    <div>