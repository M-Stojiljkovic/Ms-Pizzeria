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
<?php $orders_active = 'active'; ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>

<body>

    <!-- NAVBAR -->
<?php require "partials/navbar.php" ?>
<main id="main">
 
    <?php  if (isset($_SESSION['username'])) : ?>
    <div class="container">
        <div class="table-wrapper" id="empty">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Order <b>History</b></h2>
                    </div>
                </div>
            </div>
            <a onclick="history.back()"><i class="fa fa-caret-left fa-2x" aria-hidden="true">Back</i></a>
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>	
                        <th>Total</th>					
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $sql = "SELECT * FROM user_orders WHERE `username`= '".$_SESSION['username']."'";
                        $result = mysqli_query($db, $sql);
                        $counter = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $Order_Id = $row['Order_Id'];
                            $Item_Name = $row['Item_Name'];
                            $Price = $row['Price'];
                            $Quantity = $row['Quantity'];
                            $Total = $row['Price'] * $row['Quantity'];
                            $Date = $row['Date'];
                            
                            
                            $counter++;
                            
                            echo '<tr>
                                    <td>' . $Order_Id . '</td>
                                    <td>' . $Item_Name . '</td>
                                    <td>' . $Price . '€</td>
                                    <td>x' . $Quantity . '</td>
                                    <td>' . $Total . '€</td>
                                    <td>' . $Date . '</td>  
                                </tr>';
                        }
                        
                        if($counter==0) {
                            ?><script> document.getElementById("empty").innerHTML = '<div class="col-md-12 my-5"><div class="card1"><div class="card-body cart"><div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3"><h3><strong>You have not ordered any items.</strong></h3><h4>Please order to see order history here</h4> <a href="index.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Continue</a> </div></div></div></div>';</script> <?php
                        }
                    
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
        
            <?php endif ?>

    
</main>
<?php require "partials/footer.php"   ?>
</body>