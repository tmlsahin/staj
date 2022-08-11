<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?=$sayfa ?> </title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="/blog/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="/blog/css/templatemo-style.css">                                   <!-- Templatemo style -->
    <link rel="stylesheet" href="/blog/css/all.min.css">
    <link rel="icon" href="/blog/img//Blogİcon.ico"/>                           

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="/blog/index.php" class="navbar-brand tm-site-name"><img src="/blog/img//BlogLogo.svg" width="150" height="92 " alt="" /></a>
                    
                    
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav ">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item <?php if($sayfa=="Home") echo"active"  ?>">
                                    <a  href="/blog/index.php" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item <?php if($sayfa=="About") echo"active"  ?>">
                                    <a href="/blog/about.php" class="nav-link">About</a>
                                </li>
                                <li class="nav-item <?php if($sayfa=="Blog") echo"active"  ?>">
                                    <a href="/blog/blog.php" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item <?php if($sayfa=="Contact") echo"active"  ?>">
                                    <a href="/blog/contact.php" class="nav-link">Contact</a>
                                </li>

                                <li class="nav-item <?php if($sayfa=="UserLogin") echo"active"  ?>">
                                    <a href="/blog/userlogin.php" class="nav-link"> <i class="fa-solid fa-user"></i>&nbsp; User </a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  
                    
                </div>                                  
            </div>            
        </div>