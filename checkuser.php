<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Regsiter | SCONJ</title>

  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/form.js"></script>
  <script src="../dist/components/transition.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
      <link rel="stylesheet" type="text/css" href="new.css">
    </head>
    <body>
    </body>
    </html>

<?php
session_start();
include 'db.php';



   $stmt = $conn->prepare("SELECT * FROM users WHERE username = '" . $_POST['fname'] . "'");
    $stmt->execute();
    $zed = $stmt->rowCount();
    if($zed > 0)
    {
      echo "<span class='status-not-available ' style=\"font-size: 15px;\"> <i class='remove circle  icon  red'></i>Username is not Available</span>";
    }
    else {
        echo "<span class='status-not-available' style=\"font-size: 15px;\"> <i class='check circle icon large green'></i>Username available</span>";
    }


?>
