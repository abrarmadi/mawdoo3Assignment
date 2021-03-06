<?php
include('../php/signup.php');
?>
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
  <body class="signup">
   <div class="container signup-container">
     <div class="row">
       <div class="col"></div>
       <div class="col-sm-12 col-md-8">
         <div class="card signup-card">
          <div class="card-body">
              <form class="signup-form" action="" method="post" >
                <div class="form-group">
                 <label for="formGroupExampleInput">Name</label>
                 <input type="text" class="form-control" id="nameInput" placeholder="" name="name">
               </div>
               <div class="form-group">
               <label for="formGroupExampleInput2">Email</label>
               <input type="email" class="form-control" id="emailInput" placeholder="" name="email">
              </div>

              <div class="form-group">
               <label for="formGroupExampleInput">Phone</label>
               <input type="number" class="form-control" id="phoneInput" placeholder="" name="phone">
             </div>
             <div class="form-group">
              <label for="formGroupExampleInput">Password</label>
              <input type="password" required class="form-control" id="passwordInput" placeholder="" name="password">
            </div>
            <div class="form-group">
             <label for="formGroupExampleInput">Confirm Password</label>
             <input type="password" required class="form-control" id="confirmPasswordInput" placeholder="" name="confirmPassword">
           </div>
              <button type="submit" name="submit" class="btn signup-btn btn-lg">Sign Up</button>
              <span> <?php echo $error; ?></span>
            </form>
         </div>
        </div>

       </div>
       <div class="col"></div>
     </div>

  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
