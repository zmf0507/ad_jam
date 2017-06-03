


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

 $j = $_POST['comment'];
 $k = $_POST['pid'];
 $l = $_SESSION['uname'];

 $sql = "INSERT INTO comments (pid,name,comment) values   ('$k','$l','$j')";

 print_r($_POST);

 try {
     $r = $conn->prepare($sql);
     $r->execute();
     if ($r) {
         echo '<div class="comment">
                     <a class="avatar">
                         <img style="height:30px;"src="zmf.jpg">
                     </a>
                     <div class="content">
                         <a class="author">' . $l . '</a>
                         <div class="metadata">
                             <span class="date">Today at 5:42PM</span>
                         </div>
                         <div class="text">' . $j . '</div>
                         <div class="actions">

                         </div>
                     </div>
                 </div>
             ';
     } else {
         print_r($r->errorInfo());
     }
 } catch (\Exception $e) {
     print_r($e);
 }
 ?>
