
<?php 
include_once("include/function.php");
$nameErr  = "";
 $passErr="";
if(isset($_POST['submit']))

{


$user=$_POST['user'];

$password=$_POST['password'];
 if(empty($user))
 {

 $nameErr='ادخل اسم المستخدم او البريد';
 }

 else if(empty($password))
{


     $passErr ='ادخل كلمة المرور';
            
}


else
{
	$sql=mysqli_query($conn,"select * from  users where( UserName='$user' OR Email='$user') AND 	Password='$password'");

	if(mysqli_num_rows($sql)!=1)
	{

$passErr ='البريد الالكترونى او كلمة المرور غير صحيحة';

	}

	else
	{
		$user=mysqli_fetch_assoc($sql);

		$_SESSION['ID']=$user['User_ID'];
		$_SESSION['User']=$user['UserName'];
		$_SESSION['Email']=$user['Email'];
		$_SESSION['Password']=$user['Password'];
		$_SESSION['Gender']=$user['Gender'];
		$_SESSION['Img']=$user['Img'];
		$_SESSION['Role']=$user['Role'];
		
		echo '<meta http-equiv="refresh" content="3" >';
		
	}


}
}



 ?>

 <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>

<aside class="col-md-3 clo-lg-3 sid_bg">
		

		<?php 
         loginuser();
		 ?>
		</aside>