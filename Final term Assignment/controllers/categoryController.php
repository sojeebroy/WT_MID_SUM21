<?php 'models/db_config.php';

$err_db="";

	if(isset($_POST["add_category"]))
	{
		$rs=insertCategory($_POST["name"]);
		if($rs===true)
		{
			header("Location:all_category.php");
		}
		$err_db=$rs;
	}

	function insertCategory($name)
	{
		$query="insert into categories values(NULL,'$name')";
		return execute($query);
	}
?>