<?php 

include_once("inclu/header.php");

include_once("inclu/sidebar.php");

include_once("C:/xampp/htdocs/cms/include/config.php");


 $msg = "";
 $post="";
 $titles=""; 

 if (isset($_POST['addpost']))
{
  
 $titles = strip_tags( $_POST['title']);

 $post = $_POST['post'];

$category = $_POST['category'];

 $status= $_POST['status'];
 
 
$Postdate=date("Y-m-d");


if(empty($titles))
{
  
  $msg='<div class="alert alert-danger">
       
        <strong> من  فضلك ادخل عنوان المقال</strong>
    </div>';


}

else if(empty($post))
{

   $msg='<div class="alert alert-danger">
       
        <strong> من فضلك ادخل المقال</strong>
    </div>';
}
  


else if(isset($_FILES['file']))
{

$image_name=$_FILES['file']['name'];
     $temp = explode(".", $image_name);
       $newfilename = round(microtime(true)) . '.' . end($temp);
     $imagepath="images/posts/".$newfilename;
     move_uploaded_file($_FILES["file"]["tmp_name"],$imagepath);

       $sql= "INSERT INTO posts(Title, post, Category,Image, Author, Status, Postdate) VALUES ('$titles'
       ,'$post','$category', '$imagepath','$_SESSION[ID]','$status','$Postdate')";

if(mysqli_query($conn, $sql))
{

        $msg='<div class="alert alert-success">
       
        <strong> تمت الاضافة بنجاح </strong>
    </div>';
       
        //echo '<script type="text/javascript">location.href = "posts.php";</script>';
  }

}
else
{
  $sql= "INSERT INTO posts(Title, post, Category,Image, Author, Status, Postdate) VALUES ('$titles','$post','$category', 'images/images.png','$_SESSION[ID]','$status','$Postdate')";


       if(mysqli_query($conn, $sql))
{

        $msg='<div class="alert alert-success">
       
        <strong> تمت الاضافة بنجاح </strong>
    </div>';
       
        
  }
       
      
 //echo '<script type="text/javascript">location.href = "posts.php";</script>';
}

}


 ?>
        <div id="page-wrapper">


          <article class="col-lg-9" style="padding-top: 20px">
            <div class="row">
            <div class="col-md-10">
              <?php 
              echo $msg ;

               ?>
                           
            <div class="panel panel-info">

              <div class="panel-heading">
               اضافة مقال جديد
                
              </div>

              <div class="panel-body">
                  <form id="login-form" class="form" action=" " method="post" enctype="multypart/form-data">
                            
                    <div class="form-group">
                       <label for="title" class=" col-sm-2 control-label" > عناون المقال</label>
                      <input type="text" name="title" id="title" class="form-control" value="<?php 
                       echo $titles;?>" placeholder="ادخل اسم تصنيف جديد">
                           </div>

                        <div class="form-group">
                       <label for="post" class=" col-sm-2 control-label" > المقال</label>
                      <textarea type="text" name="post" id="post" class="form-control" placeholder="ادخل المقال">
                      </textarea>
                            </div>   

                    <div class="form-group">
                       <label for="title" class=" col-sm-2 control-label" > اختر التصنيف</label>
                      <select class="form-control" class="category" name="category">
                        <?php
                        $cat=mysqli_query($conn," SELECT * FROM category");
                        while ( $categ= mysqli_fetch_assoc( $cat)) {

                          echo '<option value="'.$categ[cat_name].'">'.$categ[cat_name].' </option>';
                          
                        }
                          ?>
                    
                      </select>
                            </div>

                       <div class="form-group">
                       <label for="file" class=" col-sm-2 control-label" > عناون المقال</label>
                      
                      <input type="file" name="file" id="file" class="form-control">
                            
                          </div>

                       <div class="form-group">
                       <label for="status" class=" col-sm-2 control-label" > حالة المقال</label>
                      
                      <select class="form-control" class="status" name="status">
                        <option value="published"> نشر</option>
                         <option value="draft"> تعطيل</option>
                            </select>
                          </div>


                           <hr>
                           <div class="form-group">
                            
                            <input  type="submit" class="btn btn-info" name="addpost" value="اضافة تصنيف">
                             
                           </div>
                        </form>
               


             
              </div>


            </div>
             </div>

           </div>


          </article>

            <!-- /.row -->
     

<?php 

include_once("inclu/footer.php");

 ?>
