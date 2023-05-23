<?php include('server.php') ?>
<?php $about_active = 'active'; ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<!--  -->
<body>

<!-- NAVBAR -->
<?php require "partials/navbar.php" ?>

<main id="main">

<!-- Container (About Sekcija) -->
<section id="about" class="container text-center">
  <article>
    <h3>About</h3>
    <p><em>M's Pizzeria, owned by Master Chief Madrazzo, has been in business since 1967 and is known for its authentic Italian pizza. The pizzeria uses original recipes and ingredients to ensure that every pizza is made just like they do in Italy.
    <br>
    One of the key ingredients that sets M's Pizzeria apart is the use of high-quality, fresh ingredients. From the sauce to the cheese to the toppings, everything is made with the finest ingredients to ensure that every pizza is bursting with flavor.
    <br>
    Another unique aspect of M's Pizzeria is the skill and expertise of Master Chief Madrazzo. With decades of experience making pizza, he has perfected the craft of creating the perfect crust and toppings that are cooked to perfection.
    <br>
    Customers rave about the quality and taste of the pizza at M's Pizzeria, which has become a beloved institution in the local community. Whether you are a fan of classic Margherita pizza or prefer something more adventurous, like a pizza with prosciutto and arugula, M's Pizzeria has something for everyone. 
    </em></p>
    <br>
    <br>
  </article>
  
  <!-- ======= Brojac ======= -->
    <section class="counts section-bg">
      <div class="container-fluid">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa fa-smile-o" aria-hidden="true"></i>
              <span data-toggle="counter-up">215</span>
              <p><strong>Happy Customers</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span data-toggle="counter-up">64</span>
              <p><strong>Items</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa fa-ticket" aria-hidden="true"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Hard Workers</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Kraj Brojaca -->
    <br>
    <br>
    
    
  <div class="row display-flex">
    <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <p class="text-center"><strong>Association of Neapolitan Pizzamakers</strong></p>
      <a href="#demo" data-toggle="collapse">
        <img src="assets/images/APN.jpg" class="img-circle collapse-info" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Our Pizza Chef is a certified pizzaiolo of the Associazione Pizzaiuoli Napoletani (Association of Neapolitan Pizzamakers) and trained with Roberto Caporuscio of Don Antonio by Starita.</p>
      </div>
    </article>
    <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <p class="text-center"><strong>Buffalo-Milk Mozzarella</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="assets/images/bufala.jpg" class="img-circle collapse-info" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>We offer buffalo mozzarella (Mozzarella di Bufala Campana D.O.P.) imported from the region around Naples as well as our own fresh mozzarella that we make daily in the kitchen of our store</p>
      </div>
    </article>
    <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <p class="text-center"><strong>Protected Designation of Origin (D.O.P.)</strong></p>
      <a href="#demo3" data-toggle="collapse">
        <img src="assets/images/DOPseal.jpg" class="img-circle collapse-info" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>The “D.O.P.” label protects various Italian foods and certifies that the product is of the highest quality and has undergone numerous inspections.</p>
      </div>
    </article>
    <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <p class="text-center"><strong>San Marzano D.O.P. Tomatoes</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="assets/images/SanMarzanoLogo.jpg" class="img-circle collapse-info" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>We use San Marzano D.O.P. tomatoes as well as other imported Italian tomatoes.</p>
      </div>
    </article>
  </div>
</section>
</main>

<!-- Footer -->
<?php require "partials/footer.php"   ?>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="js/scripts.js"></script>
</body>