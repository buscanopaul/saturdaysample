<?php


	require_once('includes/connection.php');

	function getUser()
	{


		$query = "SELECT * FROM tbl_users";

		$result = mysql_query($query);

		while($fetchAssoc = mysql_fetch_assoc($result))
		{

			$info[] = $fetchAssoc;


		}

		if(empty($info))
		{

			return null;

		}
		return $info;

	}

	function insertUser($POST)
	{

		$query = "INSERT INTO tbl_users (firstname, lastname, age)
		VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['age']}')";

		$result = mysql_query($query);

		if($result)
		{

			return  null;


		}
		return true;
	}

	function deleteUser($POST)
	{


		$query = "DELETE FROM tbl_users WHERE id='{$POST['id']}' ";

		$result = mysql_query($query);

		if($result == false)
		{

			return null;

		}
		return true;
	}

	function updateUser($post)
	{

		$query = "UPDATE tbl_users SET  firstname = '{$post['firstname']}', lastname = '{$post['lastname']}' , age = '{$post['age']}' WHERE id='{$post['id']}' ";

		$result = mysql_query($query);



		if($result == false)
		{

			return null;

		}
		return true;

	}