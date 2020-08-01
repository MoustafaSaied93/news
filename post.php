

<?php  

include_once("include/header.php");

include_once("include/sidebar.php");


?>		

<article class="col-md-9 col-lg-9 ">
	 <ol class="breadcrumb">
  <li><a href="index.php">الرئيسية</a></li>
   <li><a href="category.php">/ عنوان القسم</a></li>
  <li class="active">/ عنوان المقال</li>
</ol>
	
	<div class="col-lg-12 art_bg">
		
<div class="row">
<div class="cat-post" style="padding: 5px;margin: 10px;background:white">
<h2 style="padding: 5px;color: white;background:#0000ff5c;"> عنوان المقال</h2>
<hr>
<div class="col-md-12">
	<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" width="100%">

</div>
<hr>
<div class="col-md-12">
<div class="col-md-12">
	<p class="pull-right" style="margin-top: 9px"> <i class="fa fa-user"></i> : <a href="profile.php"> مالك</a> </p>

	<p class="pull-left" style="margin-top: 9px"><i class=" fa fa-clock-o"></i> 13-3-2019</p>
</div>

	<p>
		وريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص
	</p>

</div>
</div>



</div>

	</div>
<!-- comment area -->
<div class="col-md-12" style="padding-top: 20px">
	<div class="row">
<div class="cat-post">
<div class="col-md-2">
	<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" width="100%">

</div>

<div class="col-md-10">
	<h2 style="background:#0000ff5c;margin-bottom: 30px; padding-bottom: 20px; color: white" > عنوان التعليق</h2>
	<p>
		وريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص
	</p>
</div>
<div class="col-md-12">
<p class="pull-left">13-3-2019 <i class=" fa fa-clock-o"></i></p>
<p class="pull-right"> <i class="fa fa-user"></i>  تم التعليق بواسطة: <a href="profile.php"> مالك</a> </p>
</div>
</div>
<hr>
<div class="cat-post">
<div class="col-md-2">
	<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" width="100%">

</div>

<div class="col-md-10">
	<h2 style="background:#0000ff5c;margin-bottom: 30px; padding-bottom: 20px; color: white" > عنوان التعليق</h2>
	<p>
		وريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص
	</p>
</div>
<div class="col-md-12">
<p class="pull-left">13-3-2019 <i class=" fa fa-clock-o"></i></p>
<p class="pull-right"> <i class="fa fa-user"></i>  تم التعليق بواسطة: <a href="profile.php"> مالك</a> </p>
</div>
</div>



</div>

	</div>

	</div>



<hr><hr>
	<div class="col-lg-12" style="margin-top: 20px">
		<h3><i class="fa fa-comment"></i>اضافة تعليق جديد</h3>
		<hr>
<form>
	<fieldset>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان للتعليق</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="ادخل عنوان للتعليق" required="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">التعليق</label>
    <div class="col-sm-10">
      <textarea type="password" class="form-control" id="inputPassword3" placeholder="ادخل تعليق" required=""></textarea>
    </div>
  </div>
  
  </fieldset>
<div class="form-group">
	 <div class="col-md-6">
	 </div>
    <div class="col-md-6">
      <button type="submit" class="btn btn-danger">اضافة تعليق</button>
    </div>
  </div>
  </form>
  </div>
  



	</div>

</article>








<?php 

include_once("include/footer.php");


 ?>