<?php session_start(); ?>
<?php $home_active = 'active'; ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>
<body id="homePage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- NAVBAR -->
<?php require "partials/navbar.php" ?>

<header id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indikatori -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper - slajdovi -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="assets/images/pizza1.jpg" alt="Pizza1" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Authentic Italian Pizza</h3>
          <p>Our Pizza chef is a certified pizzaiolo of the Associazione Pizzaiuoli Napoletani (Association of Neapolitan Pizzamakers)</p>
        </div>      
      </div>

      <div class="item">
        <img src="assets/images/dough.jpg" alt="Dough" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Freshly prepared every day</h3>
          <p>We let all dough rise for 24-48 hours, resulting in a very light and digestible pizza. (No bloating after!)</p>
          <p>We use 00 Caputo flour from Italy and 100% Italian extra virgin olive oil exclusively.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="assets/images/pizza2.jpg" alt="Pizza2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Highest quality ingredients</h3>
          <p>We offer buffalo mozzarella (Mozzarella di Bufala Campana D.O.P.) imported from the region around Naples and San Marzano D.O.P. tomatoes</p>
        </div>      
      </div>
      
      <div class="item">
        <img src="assets/images/oven.jpg" alt="Oven" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Wood fire oven</h3>
          <p>We cook all pizzas in an 850 degree Mario Acunto oven imported from Naples.</p> 
          <p>We cook the pizza after you order so your product is never reheated. (It reheats well at home, though.)</p>
        </div>      
      </div>
    </div>

    <!-- Levi i desno dugme -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</header>

<!-- Container (MENU) -->
<section id="menu" class="bg-1">
  <div class="container">
    <h3 class="text-center slideanimate">PIZZA MENU</h3>
    <p class="text-center slideanimate">We'll make you some real Italian pizza.<br> Choose your Pizza below and order for collection!</p>
    
    <div class="row display-flex text-center">
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Margherita.jpg" alt="Margherita">
          <p><strong>Margherita - 10€</strong></p>
          <p data-toggle="tooltip" title="Imported tomato sauce, Homemade mozzarella, Basil, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Margherita">
          <input type="hidden" name="Price" value="10">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Bianca.jpg" alt="Bianca">
          <p><strong>Bianca - 8€</strong></p>
          <p data-toggle="tooltip" title="Homemade mozzarella, ricotta, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Bianca">
          <input type="hidden" name="Price" value="8">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Marinara.jpg" alt="Marinara">
          <p><strong>Marinara - 12€</strong></p>
          <p data-toggle="tooltip" title="Imported tomato sauce, Oregano, Garlic, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Marinara">
          <input type="hidden" name="Price" value="12">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Montanara.jpg" alt="Montanara">
          <p><strong>Montanara - 12€</strong></p>
          <p data-toggle="tooltip" title="Lightly fried dough, Homemade marinara sauce, Homemade mozzarella, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Montanara">
          <input type="hidden" name="Price" value="12">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/AllaVodka.jpg" alt="AllaVodka" >
          <p><strong>Alla Vodka - 12€</strong></p>
          <p data-toggle="tooltip" title="Vodka sauce, Homemade mozzarella, Basil, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Alla Vodka">
          <input type="hidden" name="Price" value="12">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Melanzane.jpg" alt="Melanzane">
          <p><strong>Melanzane - 15€</strong></p>
          <p data-toggle="tooltip" title="Imported tomato sauce, Homemade mozzarella, Eggplant, Ricotta, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Melanzane">
          <input type="hidden" name="Price" value="15">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Pesto.jpg" alt="Pesto">
          <p><strong>Pesto - 14€</strong></p>
          <p data-toggle="tooltip" title="Homemade pesto, Homemade mozzarella, Asiago, Pecorino romano (No olive oil)">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Pesto">
          <input type="hidden" name="Price" value="14">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/BroccoliRabeSausageAsiago.jpg" alt="Broccoli Rabe Sausage">
          <p><strong>Broccoli Sausage  - 15€</strong></p>
          <p data-toggle="tooltip" title="Imported tomato sauce, Homemade mozzarella, Broccoli rabe sausage, Asiago, Basil, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Broccoli Sausage">
          <input type="hidden" name="Price" value="15">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/FigArugulaAndMascarpone.jpg" alt="Fig, Arugula, and Mascarpone">
          <p><strong>Fig & Mascarpone - 15€</strong></p>
          <p data-toggle="tooltip" title="Homemade mozzarella, Fig puree, Mascarpone, Arugula, Balsamic vinegar of Modena I.G.P. glaze">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Fig & Mascarpone">
          <input type="hidden" name="Price" value="15">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/MeatballWithRicotta.jpg" alt="Meatball with Ricotta">
          <p><strong>Meatball Ricotta  - 15€</strong></p>
          <p data-toggle="tooltip" title="Imported tomato sauce, Homemade mozzarella, Homemade meatballs, Ricotta, Basil, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Meatball Ricotta">
          <input type="hidden" name="Price" value="15">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/MargheritaDOP.jpg" alt="Margherita DOP">
          <p><strong>Margherita D.O.P. - 17€</strong></p>
          <p data-toggle="tooltip" title="San Marzano tomato sauce D.O.P., Mozzarella di bufala campana D.O.P., Basil, Pecorino romano">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Margherita D.O.P.">
          <input type="hidden" name="Price" value="17">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/LaSaporita.jpg" alt="Saporita">
          <p><strong>Saporita - 19€</strong></p>
          <p data-toggle="tooltip" title="Mom’s homemade Genovese sauce, Mozzarella di bufala D.O.P., Eggplant, Splashes of pesto and E.V.O.O.">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Saporita">
          <input type="hidden" name="Price" value="19">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Chicago.jpg" alt="Chicago Style">
          <p><strong>Chicago Style - 19€</strong></p>
          <p data-toggle="tooltip" title="Mom’s homemade Genovese sauce, Mozzarella di bufala D.O.P., Eggplant, Splashes of pesto and E.V.O.O.">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Chicago Style">
          <input type="hidden" name="Price" value="19">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Vegetarian.jpg" alt="Vegetarian">
          <p><strong>Vegetarian - 19€</strong></p>
          <p data-toggle="tooltip" title="Onion, Green Peppers, Tomato, Mushroom">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Vegetarian">
          <input type="hidden" name="Price" value="19">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/South%20Of%20The%20Border.jpg" alt="South of the Border">
          <p><strong>South of the Border - 18€</strong></p>
          <p data-toggle="tooltip" title="Mozzarella di bufala D.O.P., Tomato, Eggplant, Splashes of pesto and E.V.O.O.">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="South of the Border">
          <input type="hidden" name="Price" value="18">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Gyros.jpg" alt="Gyros Pizza">
          <p><strong>Gyros Pizza - 17€</strong></p>
          <p data-toggle="tooltip" title="Gyro Meat, Onion, Tomato, Arugula, Balsamic vinegar of Modena I.G.P. glaze">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Gyros Pizza">
          <input type="hidden" name="Price" value="17">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/The%20Empire.jpg" alt="The Empire">
          <p><strong>The Empire - 28€</strong></p>
          <p data-toggle="tooltip" title="Pepperoni, Sausage, Canadian Bacon, Bacon, Ground Beef, Mushroom,
           Onion, Green Pepper, Black Olives, Green Olives, Tomato">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="The Empire">
          <input type="hidden" name="Price" value="28">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Favorite%20Four.jpg" alt="Favorite Four">
          <p><strong>Favorite Four - 23€</strong></p>
          <p data-toggle="tooltip" title="Sausage, Mushroom, Onion, Green Pepper">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Favorite Four">
          <input type="hidden" name="Price" value="23">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/B.O.S.S.jpg" alt="B.O.S.S.">
          <p><strong>B.O.S.S. - 20€</strong></p>
          <p data-toggle="tooltip" title="Mozzarella di bufala D.O.P., Bacon, Onion, Sausage">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="B.O.S.S.">
          <input type="hidden" name="Price" value="20">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
      <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hvr-grow slideanim">
        <div class="thumbnail">
          <img src="assets/images/Meat%20Locker.jpg" alt="Meat Locker">
          <p><strong>Meat Locker - 26€</strong></p>
          <p data-toggle="tooltip" title="Sausage, Pepperoni, Canadian Bacon, Bacon, Ground Beef">Toppings Info <i class="fa fa-info-circle"></i></p>
          <?php if(isset($_SESSION['message'])): ?>
          <form action="manage_cart.php" method="POST">
          <button class="btn" name="Add_To_Cart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Meat Locker">
          <input type="hidden" name="Price" value="26">
          </form>
          <?php else: ?>
            <a href="login.php"><button class="btn">Add to Cart</button></a>
          <?php endif ?>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Container (DELIVERY) -->
<section class="delivery">
   <div class="del_box">
       <h1 class="slideanim">Delivery service</h1>
       <h3 class="slideanim">Every day from 8am to 10pm</h3>
       <button class="button1 slideanim" onclick="window.location.href = 'location.php';">Delivery area</button>
       
   </div>
   <div class="car_box slideanim">
       <img src="assets/images/delivery.png">
   </div> 
</section>

<!-- Testimonials (Galerija)-->
<section class="section-testimonials">
    <div class="testimonials-container slideanim">
        <h1>Pizza of the highest<br> Italian standard</h1>
        <button class="button2" onclick="window.location.href = 'about.php';">Find out more!</button> <br>
        <img src="assets/images/chief.png">
    </div>

    <div class="gallery slideanim">
        
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-1.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-2.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-3.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-4.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-5.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-6.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-7.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-8.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-9.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-10.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-11.jpg" />
        </figure>
        <figure class="gallery-item">
            <img src="assets/images/gallery/gallery-12.jpg" />
        </figure>
    </div>
</section>

<section class="testimonial">
	<h3 id="testimonial">Testimonials</h3>
	<h1>Customer Say</h1>
	<img src="assets/images/headshot-customer.jpg">
	<h2>John Doe</h2>
	<p>Art Director</p>
	<span>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</span>
	<p>My uncle is a local and has talked about this pizza place many times. When I went to visit him, I was finally able to try it. <br>
    I enjoyed that it was a thinner dough and had light sauce. Pizza is my favorite food and this pizza place was spot on.</p>
</section>

<!-- Footer -->
<?php require "partials/footer.php"   ?>
</body>
