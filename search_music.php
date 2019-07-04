<?php
$title="Search Result";
include 'layout/header.php';
$conn=mysqli_connect("dbinsta.c25vvf0oeska.us-east-2.rds.amazonaws.com","username","password",'music_box');
if (!$conn){
	die("connection_aborted".mysql_connect_error());
}
if (isset($_POST['search_button'])){
	$skeyword = $_POST['search'];
	$sql = "SELECT * FROM songs WHERE title LIKE '%$skeyword%'";
	$result = mysqli_query($conn, $sql);
?>
<div style="margin-top: 30px;margin-left: 20px;margin-right: 30px; float: center;">
<table cellspacing="20px" border=2px bordercolor="white" style="border-radius: 15px;background-color:black;">
    <tr>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=0;
    
    while($row = mysqli_fetch_assoc($result)) { ?>

        <td align="center" style="width: 200px;">
            <?php echo '<a href="play_music.php?v=' .$row['sid'] .'">'; ?>
            <?php echo "<img src='image/" . $row['songtheme'] . "' style='height:170px;width:200px;border-radius:15px 15px 0px 0px'" ?><br><br>
            <?php echo $row["title"] ?><br>
            <?php echo $row["artist"] ?></td>
            <?php echo '</a>' ?>
            
    <?php 
    }
    }
}
    ?>
</tr>
</table>
</div>
<?php
include "layout/footer.php";
?>