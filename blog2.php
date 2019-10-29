<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Campus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">






 <!--=============================================== 
      Template Design By WpFreeware Team.
      Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title> Blog Archive</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css1/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css1/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css1/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css1/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css1/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



  
</head>
<body>
    <?php include "header.php";
    include "admin/db.php";

    $id  = $_GET['id'];
        
$query = "SELECT * FROM mba_posts where id = '$id' ";

mysqli_query($con, $query) or die(mysqli_error($con));
$result = $con->query($query);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_array()) {
    $id = $row['id'];
    $name = $row['postName'];
    $decs = $row['description'];
    $image = $row['image'];
    
     
?>
<section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-sm-6">
                  <div class="single_blog">
                    <form action="" method="post" enctype="multipart/form-data" id="updateform">
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" style="width:100% ; height:400px;" src="<?php echo $image;?>">
                      </a>
                    </div>
                    </form>
                  </div>
                </div>
                <div class="col-sm-6">
                <br>
                    <u><h2 class="blog_title" style="margin-top: -30px;"><a><?php echo $name;?></a></h2></u>
                <br>
                <P>
                   <?php

                    
                        if (strlen($decs) > 1000) {

                        // truncate string
                         $stringCut = substr($decs, 0, 1000);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $decs = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                        
                    }
                    echo $decs . "..";

                    ?>
                </P>
                <br>
                </div>
            </div>
        <?php                          
}}
 
?>    
            <?php 
    include "admin/db.php";

    $id  = $_GET['id'];
        
$query = "SELECT * FROM mba_posts where id = '$id' ";

mysqli_query($con, $query) or die(mysqli_error($con));
$result = $con->query($query);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_array()) {
    $id = $row['id'];
    $name = $row['postName'];
    $decs = $row['description'];
    $image = $row['image'];
    
     
?>
            <div class="row">
                <div class="col-sm-12">
                <br>
                    <p><?php
                        
                        // truncate string
                         $stringCut = substr($decs, 998, 1000000);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $decs = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                        
                    
                    echo $decs . "..";

                    ?></p>
                <br>
                </div>                 
            </div>
            
                    
<?php                          
}}
 
?>  
         </div>
     </div>
 </section>

    <!--=========== END COURSE BANNER SECTION ================-->

 

     <div class="copyright">
            <div class="container">
                <p>© 2018 DirectMBAAdmission. All rights reserved | Design by <a href="http://ekalavyatech.com">DirectMBAadmission</a></p>
            </div>
        </div>
    <!-- js for portfolio  -->
    <script src="../js/jquery.chocolat.js "></script>
    <link rel="stylesheet " href="../css/chocolat.css " type="text/css" media="all" />
    <!--light-box-files -->
    <script type="text/javascript">
        $(function () {
            $('.portfolio-grids a').Chocolat();
        });
    </script>
    <!-- /js for portfolio  -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
    <script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
</body>
</html>