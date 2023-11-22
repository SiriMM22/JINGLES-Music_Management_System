<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");	
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
<head style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JINGLES | Administrator Page</title>
<link rel="stylesheet" type="text/css" href="../css/AdminStyle.css" />
<script type="text/javascript" src="../Javascript/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../Javascript/formvalidation.js"></script>
</head>

<body style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">


<!--Start Menu-->
<div style="height: 40px;
    width: 100%;
    background: url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg) repeat-x;
    -moz-box-shadow: 0px 0px 8px #000;
    -webkit-box-shadow: 0px 0px 8px #000;
    -box-shadow: 0px 0px 8px #000;
    border: 1px medium #000;">
	<div class="menu">
    	<ul>
        	<li><a href="AdminHome.php">HOME</a></li>
            <li><a href="AdminGenre.php">GENRES</a></li>
            <li><a href="AdminAlbum.php">ALBUMS</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <li><a><?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?></a></li>
    	</ul>
    </div>
</div>
<!--End Menu-->
<!-- <div class="header_under"></div> -->
<!--Start Container for the web content-->
<div class="container_wrapper">
	<!--Sidebar-->
    <div class="sidebar_menu">
    	<div>
    		<h4 class="header">JINGLES Menu</h4>
        </div>
    	<ul>
            <li><a href="AddUser.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Add User</a></li>        
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 class="header">Hello Admin <?php echo $_SESSION['name']?></h2>
        
        <div >
        <img src="..\Templates\images.jpg", height="300px">
        </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
</body>
</html>
<?php 	
}
?>