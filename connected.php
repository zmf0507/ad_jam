<?php
session_start();
include 'db.php';
include 'redirect.php';
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
    <meta name="vierport" content="width=device-width"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>


    <link href="estilos.css" rel="stylesheet"/>
      <link href="social.css" rel="stylesheet"/>
        <link href="users.css" rel="stylesheet"/>
        <link href="search.css" rel="stylesheet"/>
    <style>
  a {
    color: black;
  }
    </style>

  </head>
  <body style="background-color: #37474F;">


      <div class="mob" id="mobile-nav"></div>



      <div class="headda">
        <div class="ui category search zed">
            <a href="social.php"><div class="ui icon input" id="zed">

        <i id="icon" class="home icon large"></i>
          </div></a>
        </div>
    </div>

    <div class="ui mini horizontal statistic scoins" id="scoins">
      <div class="value">
        <?php
        $que = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $que->bindParam(':username',$_SESSION['uname']);
        $que->execute();
        $rw = $que->fetch();
        echo '<span>'.$rw['scoins'].'<i class="database icon" id="datab"></i></span>';
        ?>
      </div>
    </div>


      <div class="showsearch" id="show">

        <div class="results">
          <h3>Search for any keyword and get exact results</h3>
        </div>

        </div>
<?php
$que = $conn->prepare("SELECT * FROM users WHERE username = :username");
$que->bindParam(':username',$_SESSION['uname']);
$que->execute();
$rw = $que->fetch();
 ?>
<button class="ui icon button" style="z-index:2000; position:fixed; bottom:5%; right: 5%; border-radius: 50%; width:55px; height:55px; background-color:#03A9F4; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <i  class="plus white icon large"></i>
</button>
    <nav>
      <ul class="men">
        <div class="mat">
      <li  style="height:26%;">
        <div class="usergol">
<img class="imagic" src="<?php echo $rw['img_url']; ?>">
        </div>
        </li>
<li class="l"><h3 class="naam" style="color:white;"><?php echo $_SESSION['uname']; ?></h3></li>
</div>
        <li class="li"><a href="#"><i class="world icon large"></i>Community</a></li>
        <li class="li"><a href="usersinfo.php"><i class="student icon large"></i>People</a></li>
        <li class="li"><a href="#"><i class="mail icon large"></i>Messages</a></li>
        <li class="li"><a href=""><i class="lightning icon large"></i>Notifications</a></li>
        <li class="li"><a href="home.php"><i class="settings icon large"></i>Account</a></li>
        <li class="li"><a href="logout.php"><i class="sign out icon large"></i>Logout</a></li>
      </ul>
    </nav>

<?php
$a = $_REQUEST['name'];
?>
<div class="main" style="background-color:#37474F;">
  <div id="msg" class="ui icon message">
<i class="add user icon"></i>
  <div class="content">
    <div class="header">
      Yeah!!!..you are now connected to <?php echo $a; ?>.
    </div>
    <p>Say hi to <?php echo $a; ?> and make your link stronger.
  </div>
</div>

<a href="sconjify.php?uname=<?php echo $a; ?>"><button id="cht" class="ui active button cht large">
<i class="mail icon"></i>
  I wanna talk with <?php echo $a; ?>
</button>
</a>
<a href="usersinfo.php"><button id="cht" class="ui active button large" style="background-color: #f44336;">
<i class="remove icon"></i>
  No, sometimes later
</button></a>
  </div>
  </body>
  <script>
    $('.ui.radio.checkbox')
    .checkbox()
  ;

    $('.ui.accordion')
      .accordion()
    ;

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
 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="ajaxlike.js">
 </script>
 <script src="ajaxlikesearch.js"></script>
   <script src="ajaxsearch.js"></script>

        <script src="mostrar_nav.js"></script>

</html>
