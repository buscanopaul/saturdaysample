<?php


require_once 'function.php';




if(isset($_POST['submit']))
{

	insertUser($_POST);
	header("Location: index.php");

}