<?php

	include_once("dbconn.php");


/////////////////////////////////////////////////////////////////// INSERT ////////////////////////////////////////////////////////////////

	function db_insert($conn,$table,$fields,$values,$get_last_id){

		$sql = "INSERT INTO $table $fields
		VALUES $values";

		if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully";
		    if ($get_last_id == 1) {
		    	# code...
		    	$last_id = $conn->insert_id;
		    	return array($last_id,1);
		    }else{return array(0,1);}
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		    return array(0,0);
		}

		//mysqli_close($conn);

	}

/*
	$table = "func";
	$fields = "(username, pass, user_img)";
	$values = "('mahmoud', '123456', 'test.jpg')";
	$get_last_id = 1;
	$insert_arr = db_insert($conn,$table,$fields,$values,$get_last_id);
	if ($insert_arr[1] == 1) {
		# code...
		//echo json_encode($insert_arr);
		echo "ins_arr success";
	}

	if ($insert_arr[0] != 0) {
		# code...
		$last_id = $insert_arr[0];
	}
*/	



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////// UPDATE ////////////////////////////////////////////////////////////////

	function db_update($conn,$table,$fields_with_values,$id_name,$id){

		$sql1 = "UPDATE $table SET ";
		$sql2 = "";
		foreach ($fields_with_values as $field => $value) {
		 	# code...
			$sql2 .= $field . "=" . json_encode($value) . ",";

		 } 
		$sql2 = rtrim($sql2,',');
		$sql3 = " WHERE $id_name = $id";

		$sql = $sql1 . $sql2 . $sql3;
		//echo $sql;
		if (mysqli_query($conn, $sql)) {
		    //echo "Record updated successfully";
		    return 1;
		} else {
		    //echo "Error updating record: " . mysqli_error($conn);
		    return 0;
		}

		//mysqli_close($conn);

	}

/*
	$table = "func";
	$fields_with_values = array('username' => 'mohamed', 'pass' => '789123564');
	$id = 2;
	$upd_check = db_update($conn,$table,$fields_with_values,$id);
	if ($upd_check) {
		# code...
		echo "upd success";
	}
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





/////////////////////////////////////////////////////////////////// DELETE ////////////////////////////////////////////////////////////////

	function db_delete($conn,$table,$id_name,$id,$st_id){

		
		$sql = "DELETE FROM $table ";

		if ($st_id == 1) {
				# code...
				$sql .= "WHERE $id_name = $id";
			}

		if (mysqli_query($conn, $sql)) {
		    //echo "Record deleted successfully";
		    return 1;
		} else {
		    //echo "Error deleting record: " . mysqli_error($conn);
		    return 0;
		}

		//mysqli_close($conn);

	}

/*
	$table = "register";
	$id = 56;
	$st_id = 1;
	$del_check = db_delete($conn,$table,$id,$st_id);

	if ($del_check) {
		# code...
		echo "del success";
	}
*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////// SELECT ////////////////////////////////////////////////////////////


	function db_select($conn,$table,$fields,$id_name,$id,$st_id,$limit,$asc_desc){

			$prep_sql = "";
			foreach ($fields as $field) {
				# code...
				$prep_sql .= $field . ",";
			}
			$prep_sql = rtrim($prep_sql,',');
			
			$sql = "SELECT $prep_sql FROM $table";

			if ($st_id == 1) {
				# code...
				$sql .= " WHERE $id_name = $id";
			}

			if ($limit != '0') {
				# code...
				$sql .= " limit $limit";
			}

			

			//echo $sql."<br>";
			$result = mysqli_query($conn, $sql);


			if ($result) {
			    // output data of each row
			    /*
			    while($row = mysqli_fetch_assoc($result)) {
			    	//echo json_encode(array_keys($row));
			        echo "id: " . $row["id"]. " - username: " . $row["username"] . "<br>";
			    }
			    */

			    return $result;
			} else {
			    return null;
		

	}


}

/*
	$table = "func";
	$fields = array('*');
	$id = 38;
	$st_id = 0;
	$result = db_select($conn,$table,$fields,$id,$st_id);	

if ($result != null) {
	# code...
	while($row = mysqli_fetch_assoc($result)) {
			    	//echo json_encode(array_keys($row));
			        echo "id: " . $row["id"]. " - username: " . $row["username"] . "<br>";
			    }
}
*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

?>