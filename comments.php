<?php
session_start();
include 'db.php';
include 'redirect.php';

    $k = $_REQUEST['pid'];
    $l =$_SESSION['uname'];
$j =$_POST['comment'];

   $sql = "INSERT INTO comments (pid,name,comment) values ('$k','$l','$j')";
   $r = $conn->prepare($sql);
$r->execute();

$sql = "SELECT * FROM posts WHERE pid=:pid";
$r = $conn->prepare($sql);
$r->bindParam(':pid',$k);
$r->execute();
$ry = $r->fetch();

$t = $ry['name'];
$e="comment";
$sql = "INSERT INTO notify (foruser,fromuser,action,link) values ('$t','$l','$e',$k)";
$rr = $conn->prepare($sql);
$rr->execute();
if($r && $rr)
{
header("location: social.php#$k");
}


 ?>
