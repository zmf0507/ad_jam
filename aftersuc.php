<?php

session_start();
include 'db.php';
$q = $conn->prepare("SELECT * from biz where username = ?");
$q->bindParam(1,$_SESSION['uname']);
$q->execute();
$qq = $q->fetch();
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
<link href="loader.css" rel="stylesheet"/>

        <link href="search.css" rel="stylesheet"/>
        <link href="users.css" rel="stylesheet"/>
<link href="usernew.css" rel="stylesheet"/>
    <link href="indexnew.css" rel="stylesheet"/>
  </head>
  <body class="bcol">
<div class="se-pre-con"></div>

      <div class="mob" id="mobile-nav"></div>








      <div class="showsearch" id="show">



        </div>
<?php
$que = $conn->prepare("SELECT * FROM users WHERE username = :username");
$que->bindParam(':username',$_SESSION['uname']);
$que->execute();
$rw = $que->fetch();
 ?>


 <nav>
   <ul class="men">

     <li class="zzaa"><div class="mat">
       <img class="immm" src="<?php echo $rw['img_url']; ?>">
 </div>

 </li>
 <li class="listt"><a href="bizinfo.php"><h2><?php echo $_SESSION['uname']; ?></h2></a></li>
 <li class="li"><a href="business.php"><i class="home  icon large"></i>Dashboard</a></li>
     <li class="li"><a href="createad.php"><i class="Plus  icon large"></i>Create ad</a></li>
     <li class="li"><a href="createoffer.php"><i class="Plus  icon large"></i>Create coupon</a></li>
       <li class="li"><a href="Analytics.php"><i class="bookmark icon large"></i> Analytics</a></li>

           <li class="li"><a href="Editbiz.php"><i class="pencil icon large"></i>Edit business info</a></li>
         <li class="li"><a href="logout.php"><i class="sign out icon large"></i>Logout</a></li>
   </ul>
 </nav>


<div class="main">

  <div class="ui segments">
  <div class="ui segment">
    <a  id="padd" class="ui red image label large">
      <i class="marker icon"></i>Address
    </a>
    <?php echo $qq['address']; ?>
  </div>
  <div class="ui segment">
    <a  id="padd" class="ui blue image label large">
      <i class="mail icon"></i>Business Email
    </a>
    <?php echo $qq['email']; ?>
  </div>
  <div class="ui segment">
    <a  id="padd" class="ui teal image label large">
      <i class="call icon"></i>Contact Number
    </a>
    <?php echo $qq['phone']; ?>
  </div>
  <div class="ui segment">
    <a  id="padd" class="ui green image label large">
      <i class="world icon"></i>Website
    </a>
    <?php echo $qq['website']; ?>
  </div>
  <div class="ui segment">
    <a  id="padd" class="ui orange image label large">
      <i class="info icon"></i>Business Category
    </a>
      <?php echo $qq['category']; ?>
  </div>

</div>

  <a href="editbiz.php"><button id="cht" class="ui active button large red" >
  <i class="pencil icon"></i>
    Edit Business details
  </button></a>
</div>
  </body>
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
  $('.event.example .image')
  .dimmer({
    on: 'hover'
  })
;
$('.ui.dimmable')
  .dimmer('show')
;
$('.ui.dimmable .dimmer')
  .dimmer('show')
;
  </script>
 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
 <script src="ajaxlike.js">
 </script>
    <script src="ajaxsearch.js"></script>
 <script src="ajaxlikesearch.js"></script>
      <script src="loader.js"></script>

        <script src="mostrar_nav.js"></script>

</html>
