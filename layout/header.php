<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
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



<!--background="images/background.jpg"-->
