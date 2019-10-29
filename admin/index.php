<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Direct MBA admission.com</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="../css/animate.min.css" rel="stylesheet"> 
	<link href="../css/style.css" rel="stylesheet" />	
	<link href="login_style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

<!-- js for login and signup forms -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- pop-up-box -->
<script src="/wp-content/themes/w3layouts/js/jquery.magnific-popup.js" type="text/javascript"></script>
      <script>
      $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
          type: 'inline',
          fixedContentPos: false,
          fixedBgPos: true,
          overflowY: 'auto',
          closeBtnInside: true,
          preloader: false,
          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-zoom-in'
        });
      });
    </script>
<!--//pop-up-box -->
<!-- //js for login and signup forms -->


</head>
 <body style="height: 200%;overflow: hidden;">
<!-- login -->
    <?php include"header.php";?>
<div class="container">
  <div Class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
    <div class="login-section" style="margin-top: 80px;">
      <div class="login">
        <div class="modal-content modal-info">
          <div class="modal-header">
            <h3>Login </h3>
          </div>
                    <div class="modal-body modal-spa">
            <div class="login-form">
              <form action="check.php" method="post">
                <input type="email" class="user" name="email" placeholder="Email" style="margin-left: 30px;margin-top: 8%;" required />
                <input type="password" class="lock" name="password" placeholder="password" style="margin-left: 30px;"required value="" />
                        <input type="hidden" name="sendbacktopage" value="" />
                <div class="signin-rit">
                  <span class="checkbox1">
                    <label class="checkbox" style="margin-left: 30px;"><input type="checkbox" style="margin-left: 2px;" name="checkbox" checked="">Remember me</label>
                  </span>
                  <a class="forgot play-icon popup-with-zoom-anim"style="margin-left: 10px;" href="#small-dialog3">Forgot Password?</a>
                <div class="clear"> </div>
                </div>
                <input type="submit" name="login" value="Login">
              </form>
             
              <!--<h5 class="or">(or)</h5>
              <div class="social-icons">
                <ul>
                  <li><a href="#"class="facebook"><img src="images/fb.jpg" title="facebook" alt="facebook" /></a></li>
                  <li><a href="#"class="twitter"><img src="images/tw.jpg" title="facebook" alt="facebook" /></a></a></li>
                  <li><a href="#"class="googleplus"><img src="images/gp.jpg" title="facebook" alt="facebook" /></a></a></li>
                </ul>
              </div>-->
            </div>
          </div>
        </div>

      <!-- //login -->
        <!-- Forgot password -->
            <div id="small-dialog3" class="mfp-hide">
                <div class="modal-content modal-info">
                  <div class="modal-header">
                    <h3>Get Password</h3>
                  </div>
                  <div class="modal-body modal-spa">
                    <div class="login-form">
                      <p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
                      <div id="step5-msg"></div>
                      <form id="step5form" action="/forgot-password-post" method="post">
                        <input type="text" class="user" name="email" placeholder="Email" required="" />
                        <input id="step5-post" type="submit" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
            </div>
      <!-- //Forgot password -->
</div>
</div>
</div>
</div>
</div>
  <br><br><br>
<div class="copyright">
      <div class="container ">
        <p>© 2018 DirectMBAAdmission. All rights reserved | Design by <a href="http://ekalavyatech.com">DirectMBAadmission</a></p>
      </div>
</div>


<script type="text/javascript">
$(document).ready(function()
{
$("#step5-post").click(function()
{
  $("#step5form").submit(function(e)
  { e.preventDefault(); //STOP default action
    e.stopImmediatePropagation();

    $("#step5-msg").html("<img src='/wp-content/themes/w3layouts/images/ajax-loader.gif'/>");
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
      url : formURL,
      type: "POST",
      data : postData,
      success:function(data, textStatus, jqXHR)
      {
        $("#step5-msg").html(''+data+'');

      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        $("#step5-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
      }
    });

      e.unbind();
      //$("#step5form").unbind('submit');
      //return false;
  });

  //$("#step5form").submit(); //SUBMIT FORM
});

});

</script>

</body>
</html>