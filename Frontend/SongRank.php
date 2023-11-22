<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/index.css"/>
<title>JINGLES Music | Song Vote</title> 
<style>
#container{ width:100%; height:100px; border-bottom:1px dashed #ccc}
#info{ height:80px; width:100%; position:relative; float:left; position:relative; top:8px; padding:0px}
</style>
</head>

<body  style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
<!--Start Menu-->
<div  style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
	<div class="menu">
    	<ul>
			<li><a href="../loginpage.php">LOGIN</a></li>
        	<li><a href="../index.php">HOME</a></li>
            <li><a href="Albums.php">ALBUMS</a></li>
            <li><a href="AboutUs.php">ABOUT US</a></li>
			<li><a href="Songs.php">VOTE</a></li>
			<li><a href="../dialog_box.php">QUERY</a></li>
            <li><a><?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?></a></li>
            
    	</ul>
    </div>
</div>
<!--End Menu-->
<!-- <div class="header_under"></div> -->
<div class="container_wrapper"><!--Start Container for the web content-->

   <div class="songcolumn">
   		<div class="header_title">&nbsp;Song List Ranking</div>
        	<?php 
			require_once('../Administrator/PHP/connect.php');
			error_reporting(E_ERROR);
			$page = 'SongRank.php';
			$dataperpage = mysqli_query($connect,"SELECT * FROM tblsongs");
			$numpage = mysqli_num_rows($dataperpage);
			$start = $_GET['start'];
			$eu = $start - 0;
			$limit = 8;
			$thisp= $eu + $limit;
			$back = $eu - $limit;
			$next = $eu + $limit;
			if(strlen($start) > 0 && !is_numeric($start)){
				echo 'Data Error';	
				exit();
			}
			$getVotes = mysqli_query($connect,"SELECT tblalbum.id,tblsongs.songdesc,tblalbum.albumimage,tblsongs.songsinger,tblsongs.songpoints FROM tblalbum,tblsongs WHERE tblsongs.songalbum = tblalbum.id ORDER BY songpoints DESC LIMIT $eu,$limit");
			while($row = mysqli_fetch_array($getVotes)){
			$r = rand(128,255);
			$g = rand(128,255);
			$b = rand(128,255);
			$color = dechex($r).dechex($g).dechex($b);
			?>
			<div id="container"><!--Data container--> 
                <div id="info">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><img src="../Administrator/PHP/upload_images/genre/<?php echo $row['albumimage']?>" width="92px"height="80px;" /></td>
                            <td>
                            	<table cellpadding="0" cellspacing="0" style="text-indent:5px">
                                    <tr>
                                        <td style="color:#06F; font-weight:bold"><?php echo strtoupper($row['songdesc'])?></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#666"><?php echo $row['songsinger']?></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#666">Votes:&nbsp;<?php echo $row['songpoints']?></td>
                                    </tr>
                                    <tr>
                                    	<td style="padding-left:5px"><div style="background:#<?php echo $color?>;width:<?php echo $row['songpoints']?>px; height:22px; font-size:11px; height:15px;"></div></td>
                                    </tr>
                                 </table>
                              </td>
                         </tr>                     
                   </table>
                </div><!--End information container-->	
            </div><!--End Data container-->	
            <?php 
			} 
			echo "<br/>";
			if($numpage>$limit){
				echo "<table align=center><tr><td align=left>";
					if($back>=0){
						echo "<a href=$page?start=$back>PREV</a>";	
					}
						echo "</td><td align=center width=200>";
							$l = 1;
								for($i = 0; $i < $numpage;$i = $i + $limit){
									if($i<>$eu){
										echo "<a href=$page?start=$i><font color=red>$l</font></a>";	
									}else{
										echo "<font color=red>$l</font>";	
									}		
										$l = $l + 1;
									}
						echo "</td><td align=right>";
							if($thisp<$numpage){
								echo "<a href=$page?start=$next>NEXT</a>";	
							}
				echo "</td></tr></table>";
			}
			
			?>
   </div><!--End song column container-->
</div><!--End Container-->
</body>
</html>