
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
    <link href="../css1/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css1/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="../css/superslides.css">
    <!-- Slick slider css file -->
    <link href="../css1/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="../css1/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="../css1/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="../css1/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="../css1/themes/default-theme.css" rel="stylesheet">
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


  
<?php

include "admin/db.php";
include "header.php";
// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM mba_posts";
$result = mysqli_query($con,$sql) or trigger_error($con, E_USER_ERROR);
$r = mysqli_fetch_row($result); 
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 3;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT id,image,postName,description FROM mba_posts LIMIT $offset, $rowsperpage";
$result = mysqli_query($con, $sql) or trigger_error($con, E_USER_ERROR);

// while there are rows to be fetched...
while ($list = mysqli_fetch_assoc($result)) {
   // echo data
  ?>
  <section>
      <div class="container">
        <div class="row"><div class="">
           <!-- start single blog archive -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp">
                   <div class="row">
                    <div class="col-sm-6 text-center">
                    <div class="blogimg_container">
                        <input type="hidden" name="id" value="<?php echo $list['id'];?>">
                      <a href="#" class="blog_img">
                        <img src="<?php echo $list['image'];?>" style="height: 250px; width:400px;margin-top: 28px;">
                      </a>
                    </div>
                    </div>
                     <div class="col-sm-6" style="float: right;">
                    <h2 class="blog_title" style="margin-left: -20px;"><a href="blog-single.html"></a><?php echo $list['postName'];?></h2> <?php

                        if (strlen($list['description']) > 500) {

                        // truncate string
                         $stringCut = substr($list['description'], 0, 300);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $list['description'] = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                        $hr = "blog2.php?id=" .$list['id'];
                        $list['description'] .= "... <a class='blog_readmore' href=";
                        $list['description'] .=  $hr .">Read More</a>";
                    }
                    echo $list['description'];

                    ?>
                   </div>
               </div>
                  </div>
                </div>
                <!-- start single blog archive -->
              </div>
              </div>
              </div>
              </section>


<?php              
}// end while 
?>
<nav class="text-center">
    <ul class="pagination wow fadeInLeft">
<?php 
/******  build the pagination links ******/
// range of num links to show
$range = 3;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
  ?>
    <li><?php echo "<a href='{$_SERVER['PHP_SELF']}?currentpage=1'>Prev</a> ";?></li>
  <?php
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page 
   ?>             
      <li><?php echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";?></li>
  <?php
} // end if 
?>
<?php
// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
        ?>
          <li><a href="#"><?php echo "<b style='color:red;'>$x</b>";?></a></li>
        <?php
      // if not current page...
      } else {
         // make it a link
        ?>
        <li><?php echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";?></li>
         <?php
      } // end else
   } // end if 
} // end for

// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   ?>                
  <li><?php echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";?></li>
  <?
   // echo forward link for lastpage
  ?>
  <li><?php echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>Next</a> ";?></li>
   <?php
} // end if
/****** end build pagination links ******/
?>
</ul>
</nav>

     <div class="copyright">
            <div class="container">
                <p>© 2018 DirectMBAAdmission. All rights reserved | Design by <a href="http://ekalavyatech.com">DirectMBAadmission</a></p>
            </div>
        </div>
    <!-- js for portfolio  -->
    <script src="js/jquery.chocolat.js "></script>
    <link rel="stylesheet " href="css/chocolat.css " type="text/css" media="all" />
    <!--light-box-files -->
    <script type="text/javascript">
        $(function () {
            $('.portfolio-grids a').Chocolat();
        });
    </script>
    <!-- /js for portfolio  -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
    <script src="js/bootstrap.js"></script>
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