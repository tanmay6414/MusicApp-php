<?php  

$title="Upload Song";
include 'layout/header.php';
?>
<div style="float: right;width: 60%">
	<?php
	$conn=mysqli_connect("dbinsta.c25vvf0oeska.us-east-2.rds.amazonaws.com","username","password",'music_box');
		if (!$conn){
		die("connection_aborted".mysql_connect_error());
		echo "Connection refuse";
	}
$sql = "SELECT * FROM songs";
$result = mysqli_query($conn, $sql);
?> 
	<div  style="margin-top: 30px;margin-left: 20px;margin-right: 30px">
<table border=2px bordercolor="white" cellspacing="20px" style="border-radius: 15px;background-color:black;" align="center">
    <tr>

</tr>
</table>
</div>
	
</div>
<div style="float: left;margin-top: 40px">
	<div style=" width: 100%; color: white;background-image: url('images/beat.jpg');text-align: center;border: 1px solid #B0C4DE;border-radius: 10px 10px 10px 10px;padding: 20px;margin: 10px;">
  		<h2>Upload Song</h2>
  	</div>
  	<div style="border-radius: 10px 10px 10px 10px;">
		<form action="upload_validate.php" method="POST" name="upform" style="background: #3a3838;width: 100%; padding: 20px; border: 1px solid #B0C4DE;margin: 10px; border-radius: 15px" enctype="multipart/form-data" >
			<div class="input-group" >
		  		<label>Song Theme</label>
		  		<input type="file" name="theme"style="background-color: white"  >
	  		</div>
			<div class="input-group" >
		  		<label>Song Title</label>
		  		<input type="text" name="title" >
	  		</div>
	  		<div class="input-group" >
		  		<label>Select Song</label>
		  		<input type="file" name="songpath" style="background-color: white" >
	  		</div>
	  		<div class="input-group" >
		  		<label>Song Album</label>
		  		<input type="text" name="album" >
	  		</div>
	  		<div class="input-group" >
		  		<label>Song Artist</label>
		  		<input type="text" name="artist" >
	  		</div>
	  		<div class="input-group" >
		  		<label>Song Genre</label>
		  		<input type="text" name="genre" >
	  		</div>
	  		<div class="input-group" >
		  		<label>Song Realise Date</label>
		  		<input type="date" name="rdate" >
	  		</div>
	  		<div class="input-group">
  				<button type="submit" class="btn" name="submit">Upload</button>
  			</div>
		</form>
	</div>
</div>

<?php
echo "<div style='margin-top:800px'>";
include "layout/footer.php";
echo "</div>";
?>