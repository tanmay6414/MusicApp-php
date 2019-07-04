
	<?php
	$conn=mysqli_connect('localhost','root','','music_box');
	if (!$conn){
    	die("connection_aborted".mysql_connect_error());
    	echo "Connection refuse";
	}
	$dstsong="songs/";
	$dsttheme="image/";
	$songid=$_GET["v"];
	$sql_select_id="SELECT * from songs where sid=".$songid ."";
	$result=mysqli_query($conn, $sql_select_id);
	$row = mysqli_fetch_assoc($result);
	$songname =$row['title'];
	$songpath=$row['filepath'];
	$songartist=$row['artist'];
	$songalbum=$row['album'];
	$songtheme=$row['songtheme'];
	$songrele=$row["rdate"];

	$srcsong=$dstsong.$songpath;
   	$srctheme=$dsttheme.$songtheme
   		?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $songname; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">
	a{
		color: white;
		text-decoration: none;
	}

	a:hover{
		color: #d8cedd;
		text-decoration: none;
	}
	#songtitle{
		color:white;
	}
	.parent{
  	margin: auto;
  	width: 60%;

 	 padding: 10px;
	}
	.span{
		color: yellow
	}

	.button {
		font-size: 15px;
		cursor: pointer;
		color: black;
		background-color: #cee0d9;
		border: none;
		border-radius: 10px;
		height: 30px;
	    width: 100px
	}

	.button:hover {background-color: #d0d0d8}
	</style>
<body background="images/background.jpeg">

	<div style="width: 100%;height: 75px;">
		<div style="float: left">
			<table style="margin-left: 10px" cellspacing="10px">
				<tr>
					<td><img src="images/icon1.jpg" style="height: 60px;width: 60px;border-radius: 20px"></td>
					<td ><img src="images/name.png" style="border-radius: 20px"></td>
				</tr>
			</table>
		</div>

		

		<div style="float: left; margin-left: 100px">
			<form style="all:unset" action="search_music.php" method="post">
			<table cellspacing="10px" style="margin-top: 20px">
				<tr>
					
					<th><a href="index.php"><span style="font-size: 25px">Home</span></a></th>
					<th><a href=""><span style="font-size: 25px">My Music</span></a></th>
					<th><a href="upload.php"><span style="font-size: 25px">Upload Music</span></a></th>
					<th><input type="text" name="search" style="border-radius: 10px; height: 30px;width: 350px" placeholder="Search Song"></th>
					<th><button style="border: none;background: none" type="submit" name="search_button"><img src="images/search.png" style="height: 30px;width: 30px"></button></th>
						
				</tr>
			</table>
		</form>
		</div>
		
		

		<div style="float: right;">
			<a href="login.php"><button class="button" style="margin-top: 30px;margin-right: 20px"><b>Log Out</b></button></a>
		</div>
	</div>
	<hr style="width: 100%">

   		<div class ="parent">
   			<div name ="image">
   				 <img src="<?php echo $srctheme ?>" height=200 width=200> 
   			</div>
   			<div name ="song" display="inline-block">
   				<div name="songname" id="songtitle">
   					<h6>Now Playing <span class=span > <?php echo $songname ?></span></h6>
   					<h6>Artist  <span class =span > <?php echo $songartist ?></span></h6>
   					<h6>Release Date <span class =span > <?php echo $songrele ?></span></h6>
   					<h6>Album <span class =span > <?php echo $songalbum?></span></h6>

   					</div>	
   				<div name ="control"><?php 
   					echo '<audio controls>';
      			echo    '<source src='.$srcsong.'>';
   		echo '</audio>';
   		?>
		
   				</div>
   			</div>
   		</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>