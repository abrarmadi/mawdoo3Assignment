<?php
$error = "";
define("DSN","mysql:host=localhost;dbname=mawdoo3");
define("USERNAME","root");
define("PASSWORD","Qaz2wsx3e");
$options = array(PDO::ATTR_PERSISTENT=>true);

  try{
      $conn = new PDO(DSN,USERNAME,PASSWORD,$options);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
      $error= "error occured". $ex->getMessage();
    }
?>
