<?php
session_start();
include 'db.php';




   $stmt = $conn->prepare("SELECT * FROM users WHERE email = '" . $_POST['email'] . "'");
    $stmt->execute();
    $zed = $stmt->rowCount();
    if($zed > 0)
    {
      echo "<span class='status-not-available'  style=\"font-size: 15px;\"><i class=\"mail red icon \"></i> Email is already registered </span>";
    }


?>
