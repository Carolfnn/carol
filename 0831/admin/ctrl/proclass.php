<?php


		$result=array();
			include 'conn.php';
		
	
			
			mysqli_query($conn,"set names utf8");
			$rs=mysqli_query($conn,"SELECT sc_id,sc_name,sc_detail,bigclass.bc_name FROM smallclass,bigclass WHERE smallclass.bc_id=bigclass.bc_id");
			while($row=mysqli_fetch_object($rs)){
				array_push($result,$row);
			}
			echo json_encode($result);
			$conn->close();
	
?>