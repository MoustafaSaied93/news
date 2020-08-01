
<?php 

include_once("session.php");

 ?>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">لوحة التحكم</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="padding-right: 30px">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>

                    </a>
                   
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#SettingModal" ><i class="fa fa-user fa-fw"></i> حساب المستخدم</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> تسجيل خروج</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="/HomePage/Index"><i class="fa fa-dashboard fa-fw"></i> لوحة التحكم</a>
                        </li>

                      
                            <li>
                                <a href="category.php"><i class="fa fa-list"></i> التصنيفات</a>
                                
                               
                            </li>

                        <li>
                            <a  href="newpost.php"><i class="fa fa-pencil"></i> اضافة مقال جديد</a>
                        </li>

                        <li>
                            <a href="/Messages/Index"><i class="fa fa-file-o"></i> المقالات</a>
                        </li>

                        <li>
                            <a href="/Orders/Index"><i class="fa fa-user"></i> الاعضاء</a>
                        </li>

                        <li>
                            <a href="/Orders/Index"><i class="fa fa-comments-o"></i> التعليقات</a>
                        </li>

                        <li>
                            <a href="/Orders/Index"><i class="fa fa-star"></i> الصفحة الشخصية</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <i class="fa fa-fw fa-cog"></i>
                                <span>اعدادات الموقع</span>
                            </a>
                        </li>
                        
                                              
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        </div>