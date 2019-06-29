<?php
include('../php/customersData.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/customers.css">

  </head>
  <body class="customers">

    <div class="container-fluid">
       <div class="row">
        <div class="col-xs-12 col-4"></div>
        <div class="col-xs-12 col-4"></div>
        <div class="col-xs-12 col-4 customers-logout">
         <a href="../php/logout.php"><button id="customers"type="button"  class="btn btn-outline-primary">Logout</button></a>
       </div>
      </div>
      <div class="row">
        <div class="col"></div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <a href="new_customer.php"><button id="create-customers"type="button"  class="btn btn-outline-primary">Create Customer</button></a>
            <hr>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr><th>First Name</th><th>Last Name</th><th>Phone</th><th>Email</th><th>Actions</th></tr>
                </thead>

                <tbody>
                 <?php echo $result;?>
                </tbody>
            </table>
            <div class="pagination">
             <?php echo $pagination ?>
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
