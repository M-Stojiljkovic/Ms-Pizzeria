<?php include('server.php') ?>
<?php $contact_active = 'active'; ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- NAVBAR -->
<?php require "partials/navbar.php" ?>

<!--  -->
<body>
<header class="about_bg img-fluid">
<div class="log_reg2">
<div class="text-center">
  	<h4>Contact</h4>
  </div>
<!-- Contact sekcija -->
<section id="contact" class="container">
  <h3 class="text-center"><em>Send us your feedback!</em></h3>

  <div class="row">
    <article class="col-md-4">
      <p>Call and place an order for collection</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Braće Jerković bb, Belgrade, SERBIA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +353 112224XX</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@ms-pizza.ie</p>
    </article>
    <article class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        </div>
          <textarea class="form-control" id="subject" name="subject" placeholder="Subject" rows="1"></textarea>
          <br>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
          <br>
        <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </article>
  </div>
</section>
</div>
</header>
<!-- Footer -->
<?php require "partials/footer.php"   ?>

</body>