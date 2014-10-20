<?php

	if(isset($_GET['submit']))
	{
		var name = htmlspecialchars($_GET['name']);
		var lname = htmlspecialchars($_GET['name']);
		var pass = $_GET['pass'];
		var grad = $_GET['Graduation'];
		var sex = $_GET['sex'];
	}
	else
	{
		echo "Please submit form data";
	}
	
?>