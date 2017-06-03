<?php
session_start();
include 'db.php';
include 'redirectverify.php';
?>
<!DOCTYPE! html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_SESSION['uname']; ?> | SCONJ</title>
    <meta charset="utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="vieport" content="width=device-width"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>


    <link href="estilos.css" rel="stylesheet"/>

<link href="social.css" rel="stylesheet"/>


        <link href="search.css" rel="stylesheet"/>
        <link href="users.css" rel="stylesheet"/>
<link href="loader.css" rel="stylesheet"/>
    <link href="postedit.css" rel="stylesheet"/>
  </head>
  <body class="bcol">
  <div class="se-pre-con"></div>

<?php

$a = $_SESSION['uname'];

$sql = "SELECT * from users WHERE username = ?";
$sq = $conn->prepare($sql);
$sq->bindParam(1,$a);
$sq->execute();
$s = $sq->fetch();

?>

<div class="main">
<div id="msg" class="ui icon message">
<i class="reply icon"></i>
<div class="content">
  <div class="header">
  Hello <?php echo $s['username']; ?> ..enter the code sent to your email <?php echo $s['email']; ?>
  </div>
  <p>If you didnt recieve any verification code, log in and enter your email again to get a new verification code</p>
</div>
</div>


<div id="hidden" class="ui fluid form">
<form method="POST" action="codeverify.php" enctype="multipart/form-data">
    <div class="field">
<input placeholder="Enter verification code" required="required" type="text" name="code" value="">
    </div>

      <input class="ui fluid large blue submit button zed" type="submit" name="submitcode" value="Verify my account">
  </form>

      </div>

      <a href="logout.php"><button id="cht" class="ui active button cht large">
      <i class="reply back icon"></i>
        Log out
      </button>
      </a>
  </div>
  </body>

 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="ajaxlike.js">
 </script>
    <script src="ajaxsearch.js"></script>
 <script src="ajaxlikesearch.js"></script>
<script src="loader.js"></script>

        <script src="mostrar_nav.js"></script>

</html>
