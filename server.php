<?php
session_start();



require "connection.php";

// inicijalizcija promenljivih
$username = "";
$email    = "";
$errors = array(); 




// REGISTER USER
if (isset($_POST['reg_user'])) {
  // primi sve ulazne vrednosti iz obrasca
  $username = $db->escape_string($_POST['username']);
  $email = $db->escape_string($_POST['email']);
  $password_1 = $db->escape_string($_POST['password_1']);
  $password_2 = $db->escape_string($_POST['password_2']);

  // validacija forme: moramo se postarati da je forma pravilno popunjena ...
  // dodavajući (array_push()) odgovarajuća greška do $errors array-a
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // prvo proveri bazu da budemo sigurni 
  // da korisnik vec ne postoji sa istim username-om/email-om
  $sql_u = "SELECT * FROM users WHERE username='$username'";
  $sql_e = "SELECT * FROM users WHERE email='$email'";
  $result_u = mysqli_query($db, $sql_u);
  $result_e = mysqli_query($db, $sql_e);
  
  
  if (mysqli_num_rows($result_u) > 0) {
    array_push($errors, "Username already exists");
  }if (mysqli_num_rows($result_e) > 0){
    array_push($errors, "Email already exists");
    }

  // Konačno, registruj korisnika ako nema grešaka u formi
  if (count($errors) == 0) {
  	$password = md5($password_1);//enkriptovanje šifre pre slanja u bazu

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['message'] = "You are now logged in";
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      $_SESSION['message'] = "You are now logged in";
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>