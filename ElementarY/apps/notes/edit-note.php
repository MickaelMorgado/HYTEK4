<?php 
	include('../../dbConnection.php');

	$notetxtarea = $_POST['notetxtarea'];
	echo "UPDATE notes SET content = '$notetxtarea' WHERE id_session = $_SESSION[id_session]";
	$sql = "UPDATE notes SET content = '$notetxtarea' WHERE id_session = $_SESSION[id_session]";
	mysqli_query($link, $sql); 
	if ($debug!=true) { header("location: ../../");	}
?>