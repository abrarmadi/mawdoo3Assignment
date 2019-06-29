<?php
include('connection.php');
$customer_id = $_GET['id'];
try{

    $loginQuery = "SELECT * FROM customers WHERE id = :customers_id ";
    $statement = $conn->prepare($loginQuery);
    $statement->execute(array(":customers_id"=>$customer_id ));
    while($customer=$statement->fetch(PDO::FETCH_OBJ)){

      echo $customer->fname . " ".$customer->lname. " ".$customer->phone. " ".$customer->email;
    }
  }catch(PDOException $ex ){
    $error= "error occured". $ex->getMessage();
  }
 ?>
