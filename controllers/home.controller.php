<?php

require_once('function.php');


$users = getUser();

if(isset($_POST['delete']))
	{
		
		deleteUser($_POST);
		header("Location: index.php");
	}

if(isset($_POST['update']))
{

	updateUser($_POST);
	header("Location: index.php");
	

}

