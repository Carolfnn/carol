<?php
$scid=$_POST['scid'];
echo $scid;	
$scname = $_POST['scname'];
echo $scname;	
$scdetail = $_POST['scdetail'];
echo $scdetail;	
$bcid  = $_POST['bcname'];
echo $bcid;	
include 'conn.php';
$sql = "update smallclass set sc_name='".$scname."',sc_detail='".$scdetail."',bc_id=".$bcid." where sc_id=".$scid;
echo "<br>".$sql;
$r = $conn->query($sql);
if($r)
{
    header("location:../proclasslist.html");
}
else
{
    echo "修改失败！";
}
	
?>
