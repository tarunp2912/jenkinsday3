<?php include 'inc/connection.php';?>

<?php
session_start();
if(isset($_REQUEST["submit"]))
{
    $e= $_REQUEST["email"];
    $p= $_REQUEST["password"];
    $result= $con->query("select * from tbl_login where email='$e' and password='$p'");
    $rowcount= $result->num_rows;
    if($rowcount==1)
    {
        $row=$result->fetch_object();
        $_SESSION["name"]=$row->name;
        header('location:dashboard.php');
    }
    else
    {
        echo "<script>alert('invalid username or password');</script>";
    }
    
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"></a>
  </div>
    <br/>      <br/> <br/> 

  <h2 class="form-heading">Cloth Store</h2>
  <div class="app-cam" style="position: relative; bottom: 20px;">
      <form action="" method="post">
		<input type="text" class="text" value="E-mail address" name= "email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" value="Login" name="submit" ></div>
		
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>
