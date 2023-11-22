<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JINGLES | Login</title>
<link rel="stylesheet"  type="text/css" href="Frontend/CSS/index.css"/>
<script type="text/javascript" src="Administrator/Javascript/jquery-1.6.2.min.js"></script>
<style>
#loginform{
	padding:0px;
	margin:0px;
	width:310px;
	height:400px;
	margin-left:auto;
	margin-right:auto;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('.error').delay(1500).fadeOut('normal');	
	$('.success').delay(1500).fadeOut('normal');	
});
</script>
</head>

<body>
<!--Start Menu-->
<div class="header_menu">
	<div class="menu">
		<ul>
        	<li><a href="../index.php">HOME</a></li>
            <li><a href="Frontend/Albums.php">ALBUMS</a></li>
            <li><a href="Frontend/AboutUs.php">ABOUT US</a></li>
            <li><a><?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?></a></li>
        </ul>
    </div>
</div>
<!--End Menu-->
<div class="header_under"></div>
	<!--Start Container for the web content-->
		<div class="playlist_wrapper">
        	<div class="submenu"></div>
        		<div id="loginform">
                <div id="header_title">Admin Login Form</div>
                
            	<form action="login.php" method="post" id="form">
                	<table>
                    	<tr>
                        	<td>Username</td>
                            <td><input type="text" name="username" size="39" color="white"/></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                            <td><input type="password" name="password" size="39"/></td>
                        </tr>
                         <tr>
                        	<td>&nbsp;</td>
                            <td><input type="submit" value="Login"/>&nbsp;<input type="reset" value="Cancel"/></td>
                        </tr>
                    </table>
                </form>
                <?php
				if(isset($_GET['error_log'])){
				?>
                <div class="error">Enter Proper Login Details!</div>
               	<?php }?>
            </div>
        </div>
	</div><!--End Container-->
</body>
</html>