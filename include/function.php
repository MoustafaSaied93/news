<?php 

function register()
{

if(isset($_SESSION['ID']))
{

echo ' <div class="alert alert-danger">
                <strong> عذرا يا  انت مسجل لدينا بالفعل</strong>.
            </div>';

}

else
{

	echo '<form action="" method="post" id="register" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="username">اسم المستخدم</label>  
          <div class="col-md-9">
          <input id="username" name="username" type="text" placeholder="اسم المستخدم" class="form-control input-md">
           <span class = "error">* <?php echo $nameErr;?></span>
          </div>
        </div>
      
<br><br>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="Email">البريد الالكترونى</label>  
          <div class="col-md-9">
          <input id="Email" name="Email" type="text" placeholder="البريد الالكترونى" class="form-control input-md"> 
            <span class = "error">* <?php echo $emailErr;?></span> 
          </div>
        </div>
        <br><br>
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="password">كلمة المرور</label>
          <div class="col-md-9">
            <input id="password" name="password" type="password" placeholder="كلمة المرور " class="form-control input-md">
              <span class = "error">* <?php echo $passwordErr;?></span> 
          </div>
        </div>
        <br><br>
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="confirmpassword">تاكيد كلمة المرور</label>
          <div class="col-md-9">
            <input id="confirmpassword" name="confirmpassword" type="password" placeholder="تاكيد كلمة المرور" class="form-control input-md">
              <span class = "error">* <?php echo $conpasswordErr;?></span> 
          </div>
        </div>
         <br><br>

        <div class="form-group">
          <label class="col-md-3 control-label" for="selectGender">الجنس</label>
          <div class="col-md-9">
            <select id="selectGender" name="selectGender" class="form-control">
		        <option value="">اختر النوع:</option>
		        <option value="male">ذكر</option>
		        <option value="female">انثى</option>
		       		       
            </select>

          </div>
        </div>

        <br><br>
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="file">صورة شخصية</label>
          <div class="col-md-9">
            <input type="file" name="file">
            <span class = "error">* <?php echo $ImgErr;?></span> 
          </div>
          </div>
        </div>
  <br><br>
       
         <div class="form-group">
          <label class="col-md-3 control-label" for="userdescription">وصف مختصر عنك</label>
          <div class="col-md-9">
            <textarea id="userdescription" name="userdescription" type="text" placeholder="وصف" class="form-control input-md" required="">
            </textarea>
          </div>
        </div>

         <br><br><br>
       
         <div class="form-group">
          <label class="col-md-3 control-label" for="facebookurl"><i class="fa fa-facebook-square" style="font-size:40px" aria-hidden="true"></i></label>
          <div class="col-md-9">
         <input id="facebookurl" name="facebookurl" type="text" placeholder=" ادخل رابط صفحتك على الفيس بوك"class="form-control input-md">
        </div>

        <br><br><br>
       
         <div class="form-group">
          <label class="col-md-3 control-label" for="twiterurl"><i class="fa fa-twitter" style="font-size:40px" aria-hidden="true"></i></label>
          <div class="col-md-9">
         <input id="twiterurl" name="twiterurl" type="text" placeholder="رابط صفحتك على تويتر"class="form-control input-md">
        </div>
<br><br>

        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-6 control-label" for="save"></label>
          <div class="col-md-6">
            <button id="save" name="save" class="btn btn-success"> تسجيل عضوية</button>
            
          </div>
          <div id="result">
          </div>
        </div>


        </fieldset>
        </form>';



}




}


function loginuser()
{

if(isset($_SESSION['ID']))
{
	echo '<div class="col-md-12">
		<div class="row">

		<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="card">
				<h4 class="card-header"> اهلا وسهلا بك يا   '.ucwords($_SESSION['User']).'</h4>
				<div class="card-body">
						<img src="'.$_SESSION['Img'].'" 
					<hr><hr>

					<div class="col-md-12">
						<div class="row">
							<p><b style="font-size: 14px">  البريد الالكترونى   :.' .$_SESSION['Email'].'  </b> </p>
							<p><b style="font-size: 14px">  الجنس :  '. $_SESSION['Gender'].' </b> </p>
							<hr>
							<p><b style="font-size: 14px">   الصلاحية   '.$_SESSION['Role'].' </b> </p>
					</div>


					</div>
					<div class="panel-footer">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<a href="" class="btn btn-info btn-sm pull-right" style="font-size: 14px">الصفحة الشخصية</a>
								</div>

								<div class="col-md-6">
								';
								if($_SESSION['Role']=='admin')
								{
								echo '<a href="admincp/index.php" class="btn btn-danger btn-sm pull-left" style="font-size: 14px">لوحة التحكم</a>';
								}
								echo '
								</div>



							</div>
							<div class="clearfix">
								

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			</div>
		</div>
		';



}

else
{
	echo '<div class="col-md-12">
		<div class="row">

		<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="card">
				<h4 class="card-header">تسجيل الدخول</h4>
				<div class="card-body">
						<img src="images/images.png" />

					<form  method="post" action="">

						<input type="hidden" class="hide" id="csrf_token" name="csrf_token" value="C8nPqbqTxzcML7Hw0jLRu41ry5b9a10a0e2bc2">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>اسم المستخدم او البريد</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
										</div>
										<input type="text" class="form-control" name="user"placeholder="البريد الالكترونى">
									</div>
									 <span class = "error">* <?php echo $nameErr;?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>كلمة المرور</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-unlock" aria-hidden="true"></i></span>
										</div>
										<input type="password" name="password" class="form-control"  placeholder="كلمة المرور">
									</div>
									<span class = "error">* <?php echo $passErr;?></span>
								</div>
							</div>
						</div>
						
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="hidden" name="redirect" value="">
								<input type="submit" class="btn btn-primary btn-lg btn-block" value="تسجيل الدخول" name="submit">
							</div>
						</div>
					</form>
					<hr>

					<div class="panel-footer">
						<i class="fa fa-exclamation-triangle" style="color:red"></i>
						اذا لم تكن مسجل لدينا
						<a href="register.php">اضغط هنا</a>

					</div>
				</div>
			</div>
		</div>
	</div>
			</div>
		</div>';


}

}





 ?>