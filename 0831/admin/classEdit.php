<?php
		include 'ctrl/conn.php';
//	echo $_GET['sc_id'];
	$sql="SELECT sc_id,sc_name,sc_detail,bigclass.bc_name FROM smallclass,bigclass WHERE smallclass.bc_id=bigclass.bc_id and sc_id=".$_GET['sc_id'];
//	echo $sql;
 	 $rs = $conn->query($sql);
// 	 echo "fff";
 	 $att = $rs->fetch_row();

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
		<script src="../js/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
 <style type="text/css">
       #wt{
       	width: 200px;
       	height: 200px;
       	border: 1px solid red;
       }
   </style>
   <!--<script language="JavaScript">
//			$(function () {
//				alert("....");
//			});
			$.getJSON("classEdit.php", function(data) {
				
				$("#scname").val(data[0].sc_name);
				$("#scdetail").val(data[0].sc_detail);
				$("#bcname").val(data[0].bc_name);
			});
		</script>-->
</head>

<body>
	
	<form role="form" action="ctrl/classEdit.php" method="post">
		<input type="hidden" name="scid" value="<?php echo $att[0] ?>" />
    <div class="form-group has-success has-feedback">
      <label class="control-label" for="scname">类别名称</label>
      <input type="text" class="form-control" name="scname" value="<?php echo $att[1]; ?>">
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="control-label" for="scdetail">类别介绍</label>
      <input type="text" class="form-control" name="scdetail" value="<?php echo $att[2]; ?>">
      <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
    </div>
     <label class="control-label" for="bcname">所属大类：</label>
     <select class="form-control" name="bcname">
     <?php
         include 'ctrl/conn.php';
          $sql = "select * from bigclass";
          $r = $conn->query($sql);
          $attb = $r->fetch_all();
          foreach($attb as $v)
          {
//        	echo $v[1];
              if($att[3]==$v[1])
              {
                  echo "<option value='".$v[0]."' selected='selected' >".$v[1]."</option>";
              }
              else
             {
                  echo "<option value='".$v[0]."'>".$v[1]."</option>";
             }
              
          }
          ?>
    </select>
<input type="submit" class="btn btn-success" value="修改">
    <input type="reset" class="btn btn-warning" value="取消" />
  
  
	</form>
	
</body>
</html>