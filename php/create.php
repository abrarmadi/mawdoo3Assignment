<?php
session_start();
include('connection.php');

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$user_email = $_SESSION['user'];

try{
  $loginQuery = "SELECT email FROM customers WHERE email = :customers_email";
  $statement = $conn->prepare($loginQuery);
  $statement->execute(array(":customers_email"=>$email));
  $result = $statement->fetchAll();

  if($result){
    echo "This customer is already exists";
  }
  else
    {
      $selectID = "SELECT id FROM users WHERE email = :users_email";
      $statement1 = $conn->prepare($selectID);
      $statement1->execute(array(":users_email"=>$user_email));
      while($row=$statement1->fetch()){
        $user_id = $row['id'];
      }
      echo $user_id;
      $insertQuery = "INSERT INTO customers(fname,lname,phone,email,user_id) VALUES (:customer_fname,:customer_lname,:customer_phone,:customer_email,:customer_id) ";
      $statement2 = $conn->prepare($insertQuery);
      $statement2->execute(array(":customer_fname"=>$fname,":customer_lname"=>$lname,":customer_phone"=>$phone,":customer_email"=>$email,":customer_id"=>intval($user_id)));

      if($statement2){
        echo "new customer has been created";
      }
    }

  }catch(PDOException $ex ){
    $error= "error occured". $ex->getMessage();
  }



?>
