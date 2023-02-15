<?php
$title = "Menu Page";
include "header.php" ?>

<div class="row">
        <div class="column left">
          <br><a class="menu" href="../html/breakfast.html" target="iframe_a"><img id="img1" src="../images/breakfast.jpg"
              alt="Image" width="200px"></a><br><a class="menu" href="../html/breakfast.html"
            target="iframe_a">BREAKFAST</a><br>

          <a class="menu" href="../html/lunch.html" target="iframe_a"><img id="img1" src="../images/lunch.jpg" alt="Image"
              width="200px"></a><a class="menu" href="../html/lunch.html" target="iframe_a">LUNCH</a><br>
          <a class="menu" href="../html/dinner.html" target="iframe_a"><img id="img1" src="../images/dinner.jpeg" alt="Image"
              width="200px"></a><a class="menu" href="../html/dinner.html" target="iframe_a">DINNER</a>


        </div>
        <!--create column3-->
        <div class="column center">
          <br><a class="menu" href="../html/salad.html" target="iframe_a"><img id="img1" src="../images/salad.jpg" alt="Image"
              width="200px"></a><a class="menu" href="../html/salad.html" target="iframe_a">SALADS</a>
          <a class="menu" href="../html/dessert.html" target="iframe_a"><img id="img1" src="../images/dessert.jpg" alt="Image"
              width="200px"></a><a class="menu" href="../html/dessert.html" target="iframe_a">DESSERTS</a><br>
          <a class="menu" href="../html/drinks.html" target="iframe_a"><img id="img1" src="../images/drink.jpg" alt="Image"
              width="200px"></a><a class="menu" href="../html/drinks.html" target="iframe_a">DRINKS</a>
        </div>
        <!--end of column03-->
        <!--create column2-->
        <div class="coumn right">
          <br>
          <!--make a responsive-->
          <div class="Un-order">
            <ul>
              <li><a class="menu" href="../html/breakfast.html" target="iframe_a">BREAKFAST</a> </li>
              <li class="min"><a class="menu" href="../html/lunch.html" target="iframe_a">LUNCH </a> </li>
              <li class="min1"><a class="menu" href="../html/lunch.html" target="iframe_a">LUNCH &nbsp;</a> </li>
              <li class="min" id="line1">&nbsp;&nbsp;&nbsp;<a class="menu" href="../html/dinner.html"
                  target="iframe_a">DINNER</a> </li>
              <li class="min1" id="line1"><a class="menu" href="../html/dinner.html" target="iframe_a">DINNER</a> </li>
            </ul>
            <ul>
              <li id="line"><a class="menu" href="../html/salad.html" target="iframe_a">SALADS</a></li>
              <li><a class="menu" href="../html/dessert.html" target="iframe_a">DESSERTS</a></li>
              <li><a class="menu" href="../html/drinks.html" target="iframe_a">DRINKS</a>&nbsp;</li>
            </ul>
          </div>
          <!--add a iframe-->
          <iframe src="../images/ifram.jpg" name="iframe_a" height="555px" width="100%" title="Iframe Example"></iframe>
          <h1>Menu</h1>
        </div>
      </div>

<?php include "footer.php" ?>