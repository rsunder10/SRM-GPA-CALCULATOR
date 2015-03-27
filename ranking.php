<?php 
		require('php/dbconnect.php');
		require('php/hit.php');
		function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
	if(isset($_POST['name'])&& isset($_POST['register'])&& isset($_POST['gpa']))
	{
		$name=test_input($_POST['name']);
		$register=test_input($_POST['register']);
		$gpa=$_POST['gpa'];
		 $pic=$register;
		 $pic.='.jpg';
		 $type=$_FILES['pic']['type'];
		 $tmp=$_FILES['pic']['tmp_name'];
		 $size=$_FILES['pic']['size'];
		 
		if(!empty($name)&&!empty($register)&&!empty($gpa)&&!empty($type)&&$type="image/jpeg"&&$size<440000)
		{
			$location='rank/';
			move_uploaded_file($tmp,$location.$pic);
			$loc=$location.$pic;
			$sql ="insert into gpa(id,name,register,pic,gpa) values('','$name','$register','$loc','$gpa');";
			if(mysql_query($sql));
			
				}
		else{
		die('Error: Either the Fields are Empty or Image Type is Not Jpeg/jpg Or Size of Image is Greater than 440kb');
		}
	}
	else
	die('yup');
	
	function write(){
				$sql2="SELECT * FROM `gpa` ORDER BY `gpa` DESC ;";
				if($run=@mysql_query(mysql_real_escape_String($sql2)))
				{
					if(mysql_num_rows($run)==NULL)
					{
						echo "<h2>No Result In Database</h2>";
					}
					else
					{	$i=1;
						while($row=mysql_fetch_assoc($run))
						{	 
							$n=$row['name'];
							$r=$row['register'];
							$p=$row['pic'];
							$g=$row['gpa'];
							if($i%3==0){echo'<div class="row">';}
							echo '<div class="col-sm-4">
							
            	<div><img src='.$p.' class="img-thumbnail padd" ></div>
 				<div class="text-uppercase text-danger jumbotron" style="font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-size:20px; padding:0px;">
				<p>Your Rank:<span style="color:red">'.$i.'</span></p>
            <p>Name:'.$n.'</p>
                <p style="font-size:18px;">Register No:'.$r.'</p>
                <p>Your GPA:<span style="color:red">'.$g.'</span></p>
             </div>   
        </div>';
		if($i%3==0){echo'</div>';}
							
							$i++;
						}
					}
				}
	}

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
            <li ><a href="default.php">GPA Calculator</a></li>
            <li class="active"><a href="ranking.php">Ranking</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-pencil"></span><?php echo "".hit(); ?> VISITORS</a></li>
            <li><a href="https://www.facebook.com/srmgpacalculator16"><span class="glyphicon glyphicon-user"></span> Feed_Back</a></li>
            <li><a href="https://www.facebook.com/srmgpacalculator16"><span class="glyphicon glyphicon-log-in"></span> Our_Page</a></li>
          </ul>
		  </div>
    </nav>
    <div>
    <h1 class="text-center" style="margin-bottom:40px;">Ranking System For Your GPA</h1>
    <div class="container">
        	<?php write();?>
    </div>
    <div class="container-fluid">
    <div class="fb-like" data-href="https://www.facebook.com/srmgpacalculator16" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div id="footer_bundle">;
<div id="footer">  © Copyrights 2014 ©R Sunder ©Aditya Kumar.
</div>
</div>
</div>
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
 </html>