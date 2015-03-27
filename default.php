<?php 
		require('php/dbconnect.php');
		require('php/hit.php');
?>
<!doctype HTML>
<html>
	<head>
    	<title>SRM GPA Calculator</title>
 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/srm.css" />
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">    
    </head>
    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=572866186083169&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
     <nav class="navbar navbar-inverse" role="navigation">
  
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="default.php">SRM GPA CALCULATOR</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="default.php">GPA Calculator</a></li>
            <li><a href="ranking.php">Ranking</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-pencil"></span><?php echo "".hit(); ?> VISITORS</a></li>
            <li><a href="https://www.facebook.com/srmgpacalculator16"><span class="glyphicon glyphicon-user"></span> Feed_Back</a></li>
            <li><a href="https://www.facebook.com/srmgpacalculator16"><span class="glyphicon glyphicon-log-in"></span> Our_Page</a></li>
          </ul>
		  </div>
    </nav>

    <div class="container">
	<div class="jumbotron alert-warning">
    <div class="row">
    <div class="col-sm-4"><img class="logo" alt="SRM UNIVERSITY" src="img/Srmseal.png"></div>
    <div class="col-sm-8"><h3>The SRM University, formerly SRM Institute of Science and Technology, is a co-educational private university in the state of Tamil Nadu, India. It was founded in 1985 as SRM Engineering College in Kattankulathur, under University of Madras.</h3></div>
    </div>
     </div>
    </div>
 <div class="text-center"><span class="glyphicon glyphicon-headphones"><h1> <small>CALCULATE YOUR GPA DOWN HERE</small></h1></span></div>
 <br>
 <br>
 <div class="container">
 <form>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 1</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 2</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 3</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 4</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 5</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 6</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
 <div class="row">
  <div class="col-xs-2">
    <label class="form-control-static">SUBJECT 7</label>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Enter Credit">
  </div>
  <div class="col-xs-4">
    <select id="gr" class="form-control">
                	<option>Select Grade</option>
                    <option value="10">S</option>
                    <option value="9">A</option>
                    <option value="8">B</option>
                    <option value="7">C</option>
                    <option value="5">D</option>
                    <option value="0">U</option>
     </select>
  </div>
</div><br>
<div id="moread"></div>
<div class="row">
<div class="col-sm-8">
<div class="col-sm-8"></div>
<div class="col-ms-4">
<input id="cal" class="btn btn-primary btn-lg" value="calculate"  type="button">
<input id="more" class="btn btn-primary btn-lg" value="+ More_Subjects" type="button">
</div>
</div>
</div>
</form>
</div >
<div class="alert-success text-center" id="result"></div>
<br>
<div class="hidden" id="hide">
<div class="container">
<div><h2><small>Enter Your Marks in Our Ranking System by just submitting this Form.</small></h2></div>
<br>
<form class="form" role="form" action="ranking.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="register" name="register" placeholder="Register Number">
  </div>
    <div class="form-group">
    <input type="number" class="form-control" id="gpa" name="gpa" placeholder="Gpa" readonly>
  </div>
    <div class="form-group">
    <label>Pic:</label><input type="file" id="pic" name="pic" >
  </div>  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
<div class="container-fluid">
<div class="fb-like" data-href="https://www.facebook.com/srmgpacalculator16" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="row">
<div class="col-sm-12">
<div id="footer_bundle">;
<div id="footer"> © Copyrights 2014 ©R Sunder ©Aditya Kumar.
</div>
</div>
</div>
</div>
</div>

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--Calculating -->
    <script src="js/calc.js"></script>

	
    </body>
</html>