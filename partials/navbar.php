<section id="home">
    <div id="row1" class="row bg-primary text-light">
        <div class="address">
            <p>Voždovac</p>
            <h5>Braće Jerković bb<br>011/222-4XX</h5>
        </div>
        <div class="align-items-center">
            <a><img id="logo" src="assets/images/logo.png" alt=""></a>
        </div>
        <div class="social text-right">
            <a href=""><i class="fa fa-instagram fa-1x"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-tripadvisor"></i></a>
        </div>
    </div>
</section>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header" style="margin-right: 0px; margin-left: 0px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar" style="margin-right: 0px;">
            <?php if(isset($_SESSION['message'])): ?>
            <div>
                <a href="user.php"><button type="button" class="logbtn btn-default btn-sm">
                        <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
            ?>
                        <span><img src="assets/images/user.png">
                            <p>My Cart:<?php echo $count; ?></p>
                        </span>
                    </button></a>
            </div>
            <?php else: ?>
            <div>
                <a href="login.php"><button type="button" class="logbtn btn-default btn-sm">
                        <span><img src="assets/images/login.png">
                            <p>Login</p>
                        </span>
                    </button></a>
            </div>
            <?php endif ?>
            <ul class="nav navbar-nav abs-center-x">
                <li class="left <?php echo $home_active ?>"><a href="#homePage" onClick="document.location='index.php';">HOME</a></li>
                <li class="left <?php echo $menu_active ?>"><a href="#menu" onClick="document.location='index.php#menu';">MENU</a></li>
                <li class="left <?php echo $location_active ?>"><a href="#location" onClick="document.location='location.php';">LOCATION</a></li>
                <li class="right <?php echo $orders_active ?>"><a href="viewOrder.php">ORDERS</a></li>
                <li class="right <?php echo $about_active ?>"><a href="about.php">ABOUT</a></li>
                <li class="right <?php echo $contact_active ?>"><a href="contact.php">CONTACT</a></li>
            </ul>


        </div>
    </div>
</nav>