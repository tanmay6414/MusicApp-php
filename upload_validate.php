<?php
$conn=mysqli_connect("dbinsta.c25vvf0oeska.us-east-2.rds.amazonaws.com","username","password",'music_box');
	if (!$conn){
    	die("connection_aborted".mysql_connect_error());
    	echo "Connection refuse";
	}
if (isset($_POST['submit'])){
	$title=$_POST['title'];
	$artist=$_POST['artist'];
	$album=$_POST['album'];
	$genre=$_POST['genre'];
	$rdate=$_POST['rdate'];
	

	$filephoto=$_FILES['theme']['name'];
	$tfilephoto=$_FILES['theme']['tmp_name'];
	$filephoto=str_replace(' ', '', $filephoto);
	$filename=$_FILES['songpath']['name'];
	$filename=str_replace(' ', '', $filename);
	$tfilename=$_FILES['songpath']['tmp_name'];
	

	



	$dest='songs/'.$filename;
	$destp='image/'.$filephoto;

	move_uploaded_file($tfilename, $dest);
	move_uploaded_file($tfilephoto, $destp);
	$stmt="INSERT INTO songs (title,album,artist,filepath,songtheme,rdate,genre) VALUES('$title','$album','$artist','$filename','$filephoto','$rdate','$genre')";
	mysqli_query($conn,$stmt);
	header("Location: index.php");
	
}
?>
