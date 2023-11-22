<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml; background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JINGLES </title>
<link rel="stylesheet"  type="text/css" href="CSS/index.css" />
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.error').delay(1200).fadeOut('normal');
	$('.success').delay(1200).fadeOut('normal');	
});
</script>
<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    // use this to pull the divs in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    // uncomment below to pull the divs randomly
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});

</script>

<!--CSS Style-->
<style type="text/css">
#slideshow {
    position:relative;
    height:272px;
}

#slideshow DIV {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
    height: 272px;
    background-color: #FFF;
}

#slideshow DIV.active {
    z-index:10;
    opacity:1.0;
}

#slideshow DIV.last-active {
    z-index:9;
}

#slideshow DIV IMG {
    height: 272px;
	width:630px;
    display: block;
    border: 0;
    margin-bottom: 10px;
}

.news_content ul{ padding:0px; margin:0px;}
.news_content ul li{
	padding-top:10px;
	padding-left:5px;
	list-style:none; 
	font-size:11px;
}
.news_content ul li a{
	text-decoration:none;
	color:#7E7E7E;
	font-family:Georgia, "Times New Roman", Times, serif;
}
.news_content ul li a:hover{
	text-decoration:underline;
	color:#09F;
}
#table{
	color:#7E7E7E;
	font-family:Georgia, "Times New Roman", Times, serif; font-size:11px;}

#apDiv1 {
	position:absolute;
	width:630px;
	height:272px;
	z-index:1;
	border:1px solid #FFF;
	left: 31px;
	top: 23px;
}

</style>
</head>

<body style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
<!--Start Menu-->
<div class="header_menu" style="background:url(https://cdn4.vectorstock.com/i/1000x1000/40/68/abstract-blue-musical-background-with-golden-notes-vector-3014068.jpg)">
	<div class="menu">
    	<ul>
            <li><a href="loginpage.php">LOGIN</a></li>
        	<li><a href="index.php">HOME</a></li>
            <li><a href="Frontend/Albums.php">ALBUMS</a></li>
            <li><a href="Frontend/AboutUs.php">ABOUT US</a></li>   
			<li><a href="Frontend/Songs.php">VOTE</a></li>
            <li><a href="dialog_box.php">QUERY</a></li>			
            <li><a><?php
				$today = date('F j, Y');
				echo '&nbsp;Today is '.$today;
				?></a></li>
    	</ul>
    </div>
</div>
<!--End Menu-->
<div  style="text-align: center;
    background-color: lightgreen;"><h3  >JINGLES - Music Database Management project </h3> </div>
<div class="container_wrapper"><!--Start Container for the web content-->
    <div class="home_content"> <!--Start Web Content-->
        <div class="banner">
        	<!--Banner place-->
          <div id="apDiv1">
          
         	<div id="slideshow">
   				 <div class="active">
      			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNcwenSgLqt_40YrwsLrjfwWXUmJgxK0d1Jw&usqp=CAU" alt="Slideshow Image 1" />
        			
   				 </div>

					<div>
      				 <img src="https://i0.wp.com/www.titanui.com/wp-content/uploads/2013/08/19/Cool-Night-Music-Party-Background-Vector-02.jpg" alt="Slideshow Image 3" />
      			
   				 </div>
  				  <div>
      				 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiZwByy9QU3CMoLMygM9jQ6qWG-6nKgUX-v2gXalSer8yCyBHDljsu0ah6y5v0zQ8LsOY&usqp=CAU" alt="Slideshow Image 2" />
      				 
   				 </div>
    
   				 
    
    			<div>
       				 <img src="https://images4.alphacoders.com/120/120318.jpg" alt="Slideshow Image 4" />
       				 
   				 </div>
    
			</div>

          
          
          </div>
        </div>
        <div class="vote_container"> 
        	<form id="vote" name="vote" method="post"  action="vote.php">
            	<div class="header_vote"> 
                	<div style="padding:10px;
	text-align:center;
	font-family:Bernard MT Condensed;
	border-bottom:1px solid #999;
	color:#0a056e;">Genre Votes</div>
                    <div id="message">Please Vote for you favorite song genre listed below.<a href="ShowVoteStat.php" id="link"><br>See Statistic here!</a></div>  
                    <br />
                    <?php
					require_once('Administrator/PHP/connect.php');
					$getVote = mysqli_query($connect,"SELECT * FROM tblvotes");
					while($row = mysqli_fetch_array($getVote)){
					?>
    				<input type="radio" name="id" value="<?php echo $row['vid'] ?>"/>&nbsp;<label><?php echo $row['vname']?></label><br />
                    <?php } ?>
					<input type="submit" value="Vote" id="vote" name="vote"/>
                    <?php
                    if(isset($_GET['error'])==1){
                    ?> 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <div class="error">Wait after 24 hours</div> 
                    <?php 
					} 
					if(isset($_GET['success'])==1){
					?>       
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      <div class="success">Thank you</div> 
                    <?php } ?>
                </div>
            </form>
        </div>        
    </div> <!--End Web Content-->    
<div class="img_container"><!--Start image container-->
			
       
<div class="col1"><!--Start Bottom web content-->
   	 <div class="header">
    		<div style="padding:10px;
	text-align:center;
	font-family:Bernard MT Condensed;
	border-bottom:1px solid #999;
	color:#0a056e;">NEW RELEASE</div>
            <?php 
			require_once('Administrator/PHP/connect.php');
			$sql = mysqli_query($connect,"SELECT * FROM tblalbum ORDER BY id DESC LIMIT 7");
			while($rowAlbum = mysqli_fetch_array($sql)){
			?>
            <div class="album_holder">
            	<div class="content_holder">
                	<div class="content">
                    <?php echo "<img src=Administrator/PHP/upload_images/genre/$rowAlbum[albumimage] height=50 width=60>"?>
                    <div class="left">
                    <?php
						echo '<label id=title>&nbsp;<a href=Frontend/ViewSongs.php?id='.$rowAlbum['id'].' id=link>'.$rowAlbum['albumname'].'</a></label><br/>';
						echo '<label id=title1>&nbsp;'.$rowAlbum['albumsinger'].'</label><br/>';
						echo '<label id=title1>&nbsp;'.$rowAlbum['albumwriter'].'</label>';
					?>
                    </div><!--end left-->
                	</div>
                </div>
            </div>
            <?php } ?>	
        </div>
    </div>
	<div class="col2">
    	<div class="header">
    		<div style="padding:10px;
	text-align:center;
	font-family:Bernard MT Condensed;
	border-bottom:1px solid #999;
	color:#0a056e;">JINGLES TOP 10 SONGS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Frontend/SongRank.php" id="link" style="font:Verdana, Geneva, sans-serif; font-size:12px;color:#0a056e;">See Rankings</a></div>
            <table cellpadding="0" cellspacing="0" height="230" id="table"> 
                <tr style="color:#7E7E7E; ">
                    <th style="border-bottom:1px dashed #CCC">Title</th><th style="border-bottom:1px dashed #CCC">Statistics</th>
                </tr>
				<?php 
				$getVotes = mysqli_query($connect,"SELECT songfile,songpoints FROM tblsongs WHERE songpoints >=1 ORDER BY songpoints DESC LIMIT 6") or die (mysqli_error());
				while($row = mysqli_fetch_array($getVotes)){
				$r = rand(128,255);
				$g = rand(128,255);
				$b = rand(128,255);
				$color = dechex($r).dechex($g).dechex($b);
        		?>
                <tr>
                    <td align="left" width="228" style="border-bottom:1px dashed #CCC; text-indent:5px;"><?php echo preg_replace("/\\.[^.\\s]{3,4}$/", "", $row['songfile'])?></td>
                    <td style="border-bottom:1px dashed #CCC; text-indent:5px;" width="142"><div style="background:#<?php echo $color?>;width:<?php echo $row['songpoints']?>px; height:22px; font-size:11px; height:15px;"></div></td>
                </tr>
				<?php
                }
                ?>
            </table>
			</div>
			<!-- <div class="header">
    		<div id="news_header">NEWS</div> 
                <div class="news_content">
                    <ul>
                    	<li><a href="#">BMEG music start community projects</a></li>
                        <li><a href="#">Parokya ni Edgar is now in BMEG</a></li>
                        <li><a href="#">BMEG financial statement release</a></li>
                        <li><a href="#">BMEG Music Company Annual Report</a></li>
                        <li><a href="#">BMEG International Expansion</a></li>
                        <li><a href="#">BMEG music </a></li>
                        <li><a href="#">BMEG music opens its new office in Cebu</a></li>
                        <li><a href="#">Callalily contract signing with BMEG music</a></li>
                        <li><a href="#">BMEG music teamed up with Star Records for big productions</a></li>
                        <li><a href="#">BMEG music start community projects</a></li>
                    </ul>
                </div>
        	</div>  -->
    	</div>


    	<div class="col3">
    	<div class="header">
    		<div style="padding:10px;
	text-align:center;
	font-family:Bernard MT Condensed;
	border-bottom:1px solid #999;
	color:#0a056e;">FEATURED NEW SONGS</div>
            <?php 
			$sql = mysqli_query($connect,"SELECT tblsongs.id,tblsongs.songfile,tblalbum.albumimage,tblalbum.albumname,tblsongs.songsinger FROM tblsongs,tblalbum WHERE tblsongs.songalbum = tblalbum.id AND songgen = 'Patriotic' ORDER BY id DESC LIMIT 7");
			while($rowAlbum = mysqli_fetch_array($sql)){
			?>
            <div class="album_holder">
            	<div class="content_holder">
                	<div class="content">
                		<?php echo "<img src=Administrator/PHP/upload_images/album/$rowAlbum[albumimage] height=50 width=60>"?>		<div class="left"><!--Start music information container-->
                        <?php
						echo '<label id=title>&nbsp'.$rowAlbum['albumname'].'</label><br/>';
						echo '<label id=title1>&nbsp;'.$rowAlbum['songsinger'].'</label><br/>';
						?>
                        <a href="Administrator/PHP/songs/<?php echo $rowAlbum['songfile']?>" id="link">Play</a>
                    </div><!--ENd music information container-->

                    </div>
                </div><!--End content holder-->
            </div><!--End album holder-->
            <?php } ?>      
            </div><!--End header-->           
    	</div><!--End col3-->
    </div><!--End col2-->
  </div><!--End Bottom web content--> 
</div><!--End Container-->
</body>
</html>
