<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");	
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JINGLES | Administrator Page</title>
<link rel="stylesheet" type="text/css" href="../css/AdminStyle.css" />
<script type="text/javascript" src="../Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../Javascript/formvalidatealbum.js"></script>
</head>
<script type="text/javascript">
function upload(){
	document.getElementById('form').onsubmit = function(){
		document.getElementById('form').target='uploadframe';
		document.getElementById('status').innerHTML=status;
	}
}
window.onload=upload;
</script>
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
    	<h4 class="header">JINGLES Menu</h4>
    	<ul>
        	<li><a href="AdminAlbum.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Add New Album</a></li>
            <li><a href="AdminViewAlbums.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;View Records</a></li> 
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 class="header">Albums</h2>	
        	<div class="form">
                 <div class="success"></div>
                 <span id="status"></span>
            	<form  method="post" id="form" enctype="multipart/form-data" action="AdminAddAlbum.php" target="uploadframe">
                    <div>
                     <iframe src="" id="uploadframe" name="uploadframe" 
                     style="width:0px; height:0px; border:0px;"></iframe>
                     </div>
                	<div>
                    	<label for="Album">Album Gen</label>
                        <select name="txtgen" id="txtgen" style="width:220px;">
                        	<option value="GENRE" selected="selected">SELECT GENRE</option>
                        <?php 
							require_once('connect.php');
							$getGen = mysqli_query($connect,"SELECT id,genname FROM tblgenre");
							while($rowgen = mysqli_fetch_array($getGen)){
						?>
                        	<option value="<?php echo $rowgen['id'] ?>"><?php echo $rowgen['genname']?></option>
                        <?php
							}
						?>
                        </select>
                    </div>
                	<div>
                    	<label for="Album">Album Name</label>
                        <input type="text" name="txtalbum" id="txtalbum" placeholder="Album" size="39"/>
                    </div>
                    <div>
                    	<label for="Singer">Album Singer(s)</label>
                        <input type="text" name="txtsinger" id="txtsinger" placeholder="Singer" size="39"/>
                    </div>
                     <div>
                    	<label for="Writer">Album Writer(s)</label>
                        <input type="text" name="txtwriter" id="txtwriter" placeholder="Writer" size="39"/>
                    </div>
                    <div>
                    	<label for="Description">Description</label>
                        <textarea rows="8" cols="50" placeholder="Album Description" name="txtdesc" id="txtdesc"></textarea>
                    </div>
                    <div>
                    	<label for="Image">Album Cover</label>
                        <input type="file" name="txtimage" id="txtimage"/>
                    </div>
                    <div>
                    	<input type="submit" value="Add Album" id="button1"/>
                        <input type="reset" value="Cancel" id="button2"/>
                    </div>
                   
                </form>
            </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
</body>
</html><?php } ?>