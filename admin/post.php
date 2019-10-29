<!DOCTYPE html>
<html lang="en">
<head>
  <title>Direct MBA admission.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Direct MBA admission.com</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="../css/animate.min.css" rel="stylesheet"> 
	<link href="../css/style.css" rel="stylesheet" />	
	<!--Textarea -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="text/css/froala_editor.css">
  <link rel="stylesheet" href="text/css/froala_style.css">
  <link rel="stylesheet" href="text/css/plugins/code_view.css">
  <link rel="stylesheet" href="text/css/plugins/image_manager.css">
  <link rel="stylesheet" href="text/css/plugins/image.css">
  <link rel="stylesheet" href="text/css/plugins/table.css">
  <link rel="stylesheet" href="text/css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

 
  <style>
  body{
	  background-color:white;
  }
  .divhead1
{
     
    border-style:solid ;
	margin-top:-35px;
    color: #E6E6FA;
    border-radius: 5px;
    width: 100%;
	height: 100%
    font-size: 30px;
	text-align: left;
}

    div#editor {
      width: 60%;
      margin: auto;
      text-align: left;
    }
	 input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 3px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:25px;
	font-style:bold;
	
}
textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}
.file {
  visibility: hidden;
  position: absolute;
}


</style>
</head>
<body>
<?php include "header.php";?>
<div class="container">
  
<br><br><br>
  <div class="row">
    <div class="col-sm-12"><h1 class="jumbotron" style="color:black;"> New Post </h1>
	<div class="divhead1">
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<div  id="editor"  class="form-group">
		<br><br>
			<label style="color:Blue;">Post Image</label>
			<div class="input-group col-xs-12">
					<input type="file" class="form-control input-lg" name="image" placeholder="Upload Image">
			</div>
		</div>
		<br><br>
		<div id="editor" style=" margin: auto;">
			<label style="color:Blue;">Post Heading</label>
			<input type="text" style="color:Black;" name="postName" placeholder="Post Name"/>
		</div>
		<br><br>	
		<div id="editor">
			<label style="color:Blue;">Post Description</label>
			 <textarea id='edit' name="description" style="margin-top: 30px;" placeholder="Type some text">
      
      </textarea>
		</div>
		<br><br>
		<div id="editor">
			<input type="submit" name="submit" value="Post"/>
		</div>
		<br><br>
	  </form>
	</div>
  </div>
 </div>
 
 </div>
 <br><br><br><br>
</div>
<div class="copyright">
      <div class="container ">
        <p>© 2018 DirectMBAAdmission. All rights reserved | Design by <a href="http://ekalavyatech.com">DirectMBAadmission</a></p>
      </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="text/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="text/js/plugins/entities.min.js"></script>

  <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            $('#edit').parents('form').on(submit, function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      });
  </script>
</body>
</html>
