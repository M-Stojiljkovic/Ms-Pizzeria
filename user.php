<?php include('server.php');

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!-- HEAD -->
<?php require "partials/head.php" ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- NAVBAR -->
    <?php require "partials/navbar.php" ?>

    <!-- User stranica -->
    <header class="form_bg">
        <div class="container">
           <?php if (isset($_SESSION['cart'])) : ?>
            <div class="alert alert-info mb-0 text-center">
                <strong>Info!</strong> online payment are currently disabled so please choose cash on delivery.
            </div>
            <?php endif  ?>
            <div id="title" class="col-lg-12 text-center bg-dark mb-3">
                <h1>My Account & Cart</h1>
            </div>
            <div>
                <!-- notifikacija -->
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                  <p>
                  <?php 
          	         echo $_SESSION['success']; 
          	         unset ($_SESSION['success']);
                  ?>
                  </p>
                </div>
                <?php endif ?>

                <!-- logged in korisnička informacija -->
                <?php  if (isset($_SESSION['username'])) : ?>
                <div class="acc_cart">
                <p class="col-lg-6">Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                &brvbar; &nbsp;<a href="viewOrder.php">Order History</a></p></div>
                <button onclick="window.location.href='logout.php';" class="lgt_btn btn btn-danger" type="button">Logout</button>
                <?php endif ?>
                <!-- Ovde ide if -->
                <?php if(isset($_SESSION['cart'])) : ?>
                <div class="col-lg-9">
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Serial No.</th>
                                <th class="text-center" scope="col">Item Name</th>
                                <th class="text-center" scope="col">Item Price</th>
                                <th class="text-center" scope="col">Quantity</th>
                                <th class="text-center" scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
    <?php
     if(isset($_SESSION['cart']))
     {
     foreach($_SESSION['cart'] as $key => $value) 
     {
         $sr=$key+1;
         echo"
         <tr>
         <td>$sr</td>
         <td>$value[Item_Name]</td>
         <td>$value[Price]€<input type='hidden' class='iprice' value='$value[Price]'></td>
         <td>
         <form action='manage_cart.php' method='POST'>
         <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10' >
         <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
         </form>
         </td>
         <td class='itotal'></td>
         <td>
            <form action='manage_cart.php' method='POST'>
            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button></td>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>
        </td>
        </tr>
         ";
     }
         if($sr == 0){
         unset($_SESSION['cart']);
         echo"<script>
             window.location.href = 'user.php';
         </script>";
         }
     }
    ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3">
                    <br>
                    <div class="border bg-light rounded p-4">
                        <p>Grand Total:</p>
                        <h2 class="text-right" id="gtotal"></h2>
                        <br>
                        <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
            {
            
            ?>
                        <form action="purchase.php" method="POST">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone_no" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1" style="color: black;">
                                    Cash On Delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Online Payment
                                </label>
                            </div>
                            <button class="btn btn-primary btn-block" name="purchase">Purchase</button>
                        </form>
                        <?php 
            }
            ?>
                    </div>
                </div>
<?php endif ?>
           <?php if(!isset($_SESSION['cart'])) :?>
           <div class="col-md-12 my-5">
               <div class="card">
                   <div class="card-body cart">
                       <div class="col-sm-12 empty-cart-cls text-center">
                           <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                           <h3 style="color: white;"><strong>Your Cart is Empty</strong></h3>
                           <a href="index.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Continue</a>
                       </div>
                   </div>
               </div>
           </div>
           <?php endif ?>
           
            </div>
            <script>
                //Ukupna cena(Total)

                var gt = 0;
                var iprice = document.getElementsByClassName('iprice');
                var iquantity = document.getElementsByClassName('iquantity');
                var itotal = document.getElementsByClassName('itotal');
                var gtotal = document.getElementById('gtotal');

                function subTotal() {
                    gt = 0;
                    for (i = 0; i < iprice.length; i++) {
                        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value) + '€';
                        gt = gt + (iprice[i].value) * (iquantity[i].value);
                    }
                    gtotal.innerText = gt + '€';
                }

                subTotal();
            </script>
        </div>
    </header>
    <!-- Footer -->
    <?php require "partials/footer.php"   ?>
</body>