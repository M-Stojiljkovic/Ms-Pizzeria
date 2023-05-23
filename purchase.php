<?php
session_start();
require "connection.php";

if(mysqli_connect_error()){
    echo "<script>
    alert('Cannot connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($db,$query1))
        {
            $username = $_SESSION['username'];
            $Order_Id=mysqli_insert_id($db);
            $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`, `username`) VALUES (?,?,?,?,?)";
            $stmt=mysqli_prepare($db, $query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isiis",$Order_Id,$Item_Name,$Price,$Quantity,$username);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed');
                window.location.href='index.php';
                </script>";
            }
            else
            {
            echo"<script>
            alert('SQL Query Prepare Error');
            window.location.href='mycart.php';
            </script>";
            }
        }
        else
        {
            echo"<script>
            alert('SQL Error');
            window.location.href='mycart.php';
            </script>";
        }
    }
}

?>