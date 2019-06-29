<?php
include('connection.php');

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$customer = $_GET['id'];

try{
  $updateQuery = "UPDATE customers
      SET fname = :name1, lname= :name2 , phone= :phone1, email=:email1 WHERE id=:id";
  $statement = $conn->prepare($updateQuery);
  $statement->execute(array(":name1"=>$fname , ":name2"=>$lname ,":phone1"=>$phone,":email1"=>$email,":id"=>$customer));
  if($statement->rowCount()>=1){
   echo "customer has been updated";
    }
    else{
        echo "No Changes Made";
      }


  }catch(PDOException $ex ){
    $error= "error occured". $ex->getMessage();
  }



?>
