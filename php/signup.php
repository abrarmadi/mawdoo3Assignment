<?php
session_start();
include('connection.php');
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $confirmPassword = $_POST['confirmPassword'];
  if($password==$confirmPassword){
  try{
    $loginQuery = "SELECT email FROM users WHERE email = :users_email";
    $statement = $conn->prepare($loginQuery);
    $statement->execute(array(":users_email"=>$email));
    $result = $statement->fetchAll();
    if($result){
      $error = "This user is already exists";
    }
    else
      {
        $insertQuery = "INSERT INTO users(name,email,phone,password)VALUES (:user_name,:user_email,:user_phone,:user_password) ";
        $statement = $conn->prepare($insertQuery);
        $statement->execute(array(":user_name"=>$name,":user_password"=>$password,":user_email"=>$email,":user_phone"=>$phone));
        $_SESSION['user']=$email;
        header("Location:http://localhost/~mac/mawdoo3/pages/customers");
      }

    }catch(PDOException $ex ){
      $error= "error occured". $ex->getMessage();
    }
}else {
  $error="password and confirm password doesn't match";
}
}?>
