<?php
session_start();
$customer_id= $_GET['id'];
if(!isset($_SESSION['user'])){
  header("location:../index.php");
}?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">

  </head>
  <body class="edit" onload="loadData()">
   <div class="container edit-container">
     <div class="row">
       <div class="col"></div>
       <div class="col-sm-12 col-md-8">
         <div class="card edit-card">
          <div class="card-body edit-card-customer">
              <a href="../php/logout.php"><button id="customers"type="button" class="btn btn-outline-primary">Logout</button></a>
              <form class="edit-form" action="" method="post" id="edit-customer" data-cid='<?php echo $customer_id?>'>
               <div class="form-group">
                 <label for="formGroupExampleInput">First Name</label>
                 <input type="text" required class="form-control" id="nameInput" placeholder="" name="firstName">
               </div>
               <div class="form-group">
               <label for="formGroupExampleInput2">Last Name</label>
               <input type="text" required class="form-control" id="name2Input" placeholder="" name="lastName">
              </div>

              <div class="form-group">
               <label for="formGroupExampleInput">Phone</label>
               <input type="number" class="form-control" id="phoneInput" placeholder="" name="phone">
             </div>
             <div class="form-group">
              <label for="formGroupExampleInput">Email</label>
              <input type="email"  required class="form-control" id="emailInput" placeholder="" name="email">
            </div>

              <button type="submit" name="submit" class="btn create-btn btn-lg">Update</button>
              <div id="result"></div>
            </form>
         </div>
        </div>

       </div>
       <div class="col"></div>
     </div>

  </div>
  <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
          integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
          crossorigin="anonymous"></script>
          <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
          <script src="../js/app.js"></script>
  </body>
</html>
