<?php
$scid=$_GET['sc_id'];
include 'conn.php';
$sql = "DELETE FROM smallclass WHERE sc_id=".$scid;
//echo "<br>".$sql;
$r = $conn->query($sql);
//echo "<br>".$r;
if($r)
{
    header("location:../proclasslist.html");
}
else
{
    echo "删除失败！这个小类在产品表里有外键关系！";
}
	
?>