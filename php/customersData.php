<?php
session_start();
include('connection.php');
try{
    $user_email = $_SESSION['user'];
    $selectID = "SELECT id FROM users WHERE email = :users_email";
    $statement1 = $conn->prepare($selectID);
    $statement1->execute(array(":users_email"=>$user_email));
    while($row=$statement1->fetch()){
      $user_id = $row['id'];
    }
    $loginQuery = "SELECT * FROM customers WHERE user_id = :users_id ";
    $statement = $conn->prepare($loginQuery);
    $statement->execute(array(":users_id"=>$user_id));
    $numberOfRecords = $statement->rowCount();
    $results_per_page = 10;
    $number_of_pages = ceil($numberOfRecords/$results_per_page);
    if(!isset($_GET['page'])){
      $page=1;
    }else{
      $page = $_GET['page'];
    }
    $starting = ($page-1)*$results_per_page;
    $loginQuery = "SELECT * FROM customers WHERE user_id = :users_id LIMIT ".$starting.','.$results_per_page;
    $statement = $conn->prepare($loginQuery);
    $statement->execute(array(":users_id"=>$user_id));
    while($customer=$statement->fetch(PDO::FETCH_OBJ)){

      $result=$result."<tr>
          <td><div>$customer->fname</div></td>
          <td><div>$customer->lname </div> </td>
          <td><div>$customer->phone</div> </td>
          <td>$customer->email</td>
          <td style='width: 5%;'>
          <button onclick=\"deleteCustomer('{$customer->id}')\"><i class='fa fa-times' style='font-size:10px'></i></button>
          <button onclick=\"editCustomer('{$customer->id}')\"><i class='fa fa-pencil' style='font-size:10px'></i></button>
          </td>
      </tr>";


    }

    $pagination = '<nav aria-label="...">
                   <ul class="pagination pagination-sm">';
    for($page=1;$page<=$number_of_pages;$page++){
      $pagination= $pagination. '<li class="page-item"><a class="page-link" href="customers.php?page='.$page.'">'.$page.'</a></li>';
    }
    $pagination= $pagination.'</ul> </nav>';
  }catch(PDOException $ex ){
    $error= "error occured". $ex->getMessage();
  }
 ?>
