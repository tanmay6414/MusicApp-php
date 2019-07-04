<?php
$title="Home Page";
include 'layout/header.php';
$conn=mysqli_connect('localhost','root','','music_box');
if (!$conn){
    die("connection_aborted".mysql_connect_error());
    echo "Connection refuse";
}
$sql = "SELECT * FROM songs";
$result = mysqli_query($conn, $sql);
?>
<div style="margin-top: 30px;margin-left: 20px;margin-right: 30px">
<table  border=2px cellspacing="20px" bordercolor="white" style="background-color: black;border-radius: 15px;" align="center">
    <tr>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=0;
    
    while($row = mysqli_fetch_assoc($result)) { 
        if ($i%5==0){?>

       <tr> <td align="center" style="width: 200px;">
            
            <?php echo '<a href="play_music.php?v='.$row['sid'] .'">'; ?>
            <?php echo "<img src='image/" . $row['songtheme'] . "' style='height:170px;width:200px;border-radius:15px 15px 0px 0px'" ?><br><br>
            <?php echo $row["title"] ?><br>
            <?php echo $row["artist"] ?></td>
            <?php echo '</a>' ?>
            
    <?php 
    $i+=1;
    }
    else{ ?>
    <td align="center" style="width: 200px;">
            <?php echo '<a href="play_music.php?v=' .$row['sid'] .'">'; ?>
            <?php echo "<img src='image/" . $row['songtheme'] . "' style='height:170px;width:200px;border-radius:15px 15px 0px 0px'" ?><br><br>
            <?php echo $row["title"] ?><br>
            <?php echo $row["artist"] ?></td>
            <?php echo '</a>' ?>
    <?php
    $i+=1;
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