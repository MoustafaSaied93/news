<?php 

include_once("include/config.php");
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link 
  rel="stylesheet"
  href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
  integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"
  crossorigin="anonymous">
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="css/style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<style>
  .navbar .nav-item .dropdown-menu{ display: none; }
  .navbar .nav-item:hover .nav-link{ color: #fff;  }
  .navbar .nav-item:hover .dropdown-menu{ display: block; }
  .navbar .nav-item .dropdown-menu{ margin-top:0; }
  .bg-prim {
    background-color:#455E73;
}
</style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-prim">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="#">الرئيسية </a> </li>

<?php 

$Categ=mysqli_query($conn," SELECT * FROM category");

while ( $quer=mysqli_fetch_assoc($Categ)) {

echo '
     <li class="nav-item"><a class="nav-link" href="#">'.$quer['cat_name'].' </a></li>
     ';
  
}




 ?>


 

  </ul>
  <?php
  if(isset($_SESSION['ID']))
  {





    ?>
  <ul class="navbar-nav ml-auto">
   
    <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> الاعدادات </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#"> الصفحة الشخصية</a></li>
        <?php 
       if($_SESSION['Role']=='admin')
        echo' <li><a class="dropdown-item" href="admincp/index.php"> لوحة التحكم</a></li>'


         ?>
        
        <li><a class="dropdown-item" href="logout.php"> تسجيل الخروج </a></li>
        </ul>
    </li>
  </ul>
    <?php
  }
  else
  {

echo '
  <ul class="navbar-nav ml-auto">
  
  <li class="nav-item"><a class="nav-link" href="register.php">التسجيل</a></li>
  </ul>
';



  }

     ?>
  </div> <!-- navbar-collapse.// -->
</nav>

<hr>

<!-- logo site -->
<section id="logo">
	<img src="images/logo.png" width="320px" />
</section>

<!-- end logo site -->

<!-- body -->
<section class="container-fluid" style="margin-top: 20px;">