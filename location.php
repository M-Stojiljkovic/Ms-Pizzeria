<?php include('server.php') ?>
<?php $location_active = 'active'; ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- NAVBAR -->
<?php require "partials/navbar.php" ?>
<section class="del2">
<h1>Location and Delivery</h1>
</section>
<!--  -->
<section class="delivery2">
   <div class="car_box2 slide">
       <img src="assets/images/delivery2.png">
   </div> 
   <div class="del_box2 fadeInLeft">
       <h3>The minimum amount for delivery is RSD 650.00</h3>
       <h3>It is possible to pay with payment cards<br>(must be specified when ordering)</h3>
       <h3>You can order delivery until 10pm</h3>
       <h1>M's Pizzeria:<br> Voždovac</h1>
       <p>011/222-4XX</p>
       <h3>Check the map below to see if your address is within our delivery zones.</h3>
   </div>
</section>

<!-- Google Mape -->

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1TMnSVO8wdq9Xs_7_svDKSIBRZHKACKc&ehbc=2E312F" width="100%" height="700" allowfullscreen></iframe>


<!-- Footer -->
<?php require "partials/footer.php"   ?>

</body>