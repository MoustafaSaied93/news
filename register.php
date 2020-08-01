<?php  

include_once("include/header.php");
include_once("include/config.php");
include_once("include/sidebar.php");
include_once("include/function.php");

 $nameErr  = "";
 $emailErr="";
 $passwordErr="";
 $conpasswordErr="";
 $ImgErr="";

 if (isset($_POST['save']))
{
	
 $username = strip_tags( $_POST['username']);
 $Email = $_POST['Email'];
  $password = $_POST['password'];
 $confirmpassword = $_POST['confirmpassword'];
  $selectGender = $_POST['selectGender'];
  $userdescription = strip_tags($_POST['userdescription']);
 $facebookurl = htmlspecialchars( $_POST['facebookurl']); 
 $twiterurl = htmlspecialchars($_POST['twiterurl']);
$date=date("Y-m-d");

$SqlEmail=mysqli_query($conn,"select * from  users where Email='$Email'");

if(empty($username))
{
	
    $nameErr = "ادخل اسم المستخدم";

}

else if(empty($Email))
{

   $emailErr = "ادخل البريد الالكترونى";
}
  
else if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
{
 $emailErr = "ادخل بريد الكترونى صحيحا";
}

else if(empty($password))
{

$passwordErr = "ادخل كلمة المرور";

}

else if(empty($confirmpassword))
{

$conpasswordErr = "ادخل كلمة المرور";
}

else if($password!=$confirmpassword)
{

$conpasswordErr = "كلمة المرور غير متطابقة";
}


else if(mysqli_num_rows($SqlEmail)>0)
{
 $emailErr = "عذرا البريد الالكترونى مستخدم من قبل";

}

else if(isset($_FILES['file']))
{

$image_name=$_FILES['file']['name'];
       $temp = explode(".", $image_name);
        $newfilename = round(microtime(true)) . '.' . end($temp);
       $imagepath="images/Avatar/".$newfilename;
       move_uploaded_file($_FILES["file"]["tmp_name"],$imagepath);

      

       $sql="INSERT INTO users(UserName,Email, Password,Gender,Img, About_User, Facebook, Twitter,Date_Reg, Role) VALUES ('$username','$Email','$password','$selectGender','$imagepath','$userdescription','$facebookurl','$twiterurl','$date','user')";


    if (mysqli_query($conn, $sql)) {

    	$userinfo=mysqli_query($conn," select * from users where UserName ='$username'");

    	$user=mysqli_fetch_assoc($userinfo);
    	session_start();

    	$_SESSION['ID']=$user['User_ID'];
    	$_SESSION['UserName']=$user['UserName'];

    echo ' <div class="alert alert-info">
                <strong>تم ارسال طلب العضوية للموقع</strong>.
            </div>';

        echo '<script>window.location.href = "index.php";</script>';

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
else
{

	$sql="INSERT INTO users(UserName,Email, Password,Gender,Img, About_User, Facebook, Twitter,Date_Reg, Role) VALUES ('$username','$Email','$password','$selectGender','images/images.png','$userdescription','$facebookurl','$twiterurl','$date','user')";


    if (mysqli_query($conn, $sql)) {

  $userinfo=mysqli_query($conn," select * from users where UserName ='$username'");

    	$user=mysqli_fetch_assoc($userinfo);

    	$_SESSION['ID']=$user['User_ID'];
    	$_SESSION['UserName']=$user['UserName'];

    echo ' <div class="alert alert-info">
                <strong>تم ارسال طلب العضوية للموقع</strong>.
            </div>';

          header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

}



?>		
 <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
<div class="col-lg-9">
 <ol class="breadcrumb">
  <li><a href="index.php">الرئيسية</a></li>
  <li class="active">/ تسجيل عضوية</li>
</ol>
</div>
<article class="col-md-9 col-lg-9 art_bg">
	
<div class="page-header">

<h1>تسجيل عضوية جديدة  <small style="font-size:18px">الحقول المؤشر عليها مطلوبة</small></h1>
</div>
<hr>

<?php 

register();

?>

</article>

<?php 


include_once("include/footer.php");

 ?>
