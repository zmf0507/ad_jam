<?php
session_start();
include 'db.php';
?>
<!DOCTYPE! html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery MenuResponsive Demo</title>
    <meta charset="utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="vierport" content="width=device-width"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <link href="estilos.css" rel="stylesheet"/>
      <link href="social.css" rel="stylesheet"/>
        <link href="users.css" rel="stylesheet"/>
    <style>
    .small {
      width: 30px;
      height: 30px;
border-radius: 50%;
    }

    .label {
      border-radius: 50%;
    }
    .smll {
      width: 30px;
      height: 30px;
        border-radius: 50%;
    }
    </style>
  </head>
  <body style="background-color: #37474F;">
    <div class="headda">
  </div>

      <div class="mob" id="mobile-nav"></div>
      <button class="ui icon button" style="z-index:2000; position:fixed; bottom:5%; right: 5%; border-radius: 50%; width:55px; height:55px; background-color:#03A9F4; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <i  class="plus white icon large"></i>
      </button>
          <nav>
            <ul class="men">
              <div class="mat">
            <li  style="height:26%;">
              <div class="usergol">
      <img class="imagic" src="zmf.jpg">
              </div>
              </li>
      <li class="l"><h3 class="naam"><?php echo $_SESSION['uname']; ?></h3></li>
      </div>
              <li class="li"><a href="#"><i class="world icon large"></i>Community</a></li>
              <li class="li"><a href="#"><i class="student icon large"></i>People</a></li>
              <li class="li"><a href="#"><i class="mail icon large"></i>Messages</a></li>
              <li class="li"><a href="home.php"><i class="lightning icon large"></i>Notifications</a></li>
              <li class="li"><a href="logout.php"><i class="settings icon large"></i>Account</a></li>
              <li class="li"><a href="#"><i class="sign out icon large"></i>Logout</a></li>
            </ul>
          </nav>
<div class="main">

<?php
$k = $_SESSION['uname'];
$zak = "SELECT * FROM users WHERE username ='" . $k . "'";
$zmf = $conn->prepare($zak);
$zmf->execute();
$zed = $zmf->fetch();

echo '<div class="ui floating dropdown labeled search icon button" style="margin-left:2%;">
  <i class="users icon"></i>
  <span class="text">'.$zed['college'].'</span>
  <div class="menu">
    <div class="item"><a href="college.php"><div style="text-align:center;">'.$zed['college'].'</div></a></div>
    <div class="item"><a href="usersinfo.php" ><div  style="text-align:center; height:6%;">All users</div></a></div>
  <div class="item"><a href="course.php"><div style="text-align:center; height:6%;">'.$zed['course'].'</div></a></div>
    <div class="item">  <a href="year.php"><div style="text-align:center; height:6%;">'.$zed['year'].'</div></a></div>


  </div>
</div>';
 ?>

    <?php
$sql = "SELECT * FROM users WHERE college = '" . $zed['college'] . "'ORDER BY id DESC";
$r=$conn->prepare($sql);
$r->execute();

echo '<div class="ui items" style="margin-left:2%; width:96%;">';
while($row = $r->fetch())
{
  echo  '
    <div class="item" >
      <div class="ui small image">
        <img src="'.$row['img_url'].'">
      </div>
      <div class="middle aligned content">
        <div class="header">'.
          $row['username'].'
        </div>
        <div class="description">
          <p>Hey! This is '.$row['name'].'I am doing '.$row['course'].' from '.$row['college'].'</p>
        </div>
        <div class="extra">
          <div class="ui right floated button">
            Action
          </div>
        </div>
      </div>
    </div>';
}
echo '</div>';
    ?>

  </body>





<script>
  $('.ui.radio.checkbox')
  .checkbox()
;
  </script>
  <script>
  $('.ui.accordion')
    .accordion()
  ;
  </script>
  <script>
  $('select.dropdown')
  .dropdown()
;

$('.trigger.example .accordion')
  .accordion({
    selector: {
      trigger: '.title .icon'
    }
  })
;
$('.ui.dropdown')
  .dropdown()
;
</script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

         <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="mostrar_nav.js"></script>
</html>
