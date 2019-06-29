<?php
session_start();
include('connection.php');
if (isset($_POST['submit'])) {
  try{
      $email = $_POST['email'];
      $password = $_POST['password'];
      $loginQuery = "SELECT email,password FROM users WHERE email = :users_email AND  password = :users_password";
      $statement = $conn->prepare($loginQuery);
      $statement->execute(array(":users_email"=>$email,":users_password"=>$password));
      $result = $statement->fetchAll();
      if($result){
        $_SESSION['user']=$email;
        header("Location:pages/customers.php");
      }
      else
        {
          $error = "Username or password is not correct";
        }
    }catch(PDOException $ex ){
      $error= "error occured". $ex->getMessage();
    }
}?>
