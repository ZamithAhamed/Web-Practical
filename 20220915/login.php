<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = new mysqli($host,$user,$pass,$db);

if (!$con) {
	echo "There are some problems with connceting to the database";
}

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$reg = $_POST['reg'];


if ($name == "" || $id =="" || $age=="" || $reg="")
	echo "Error in inserting Data, All the fields are required";
elseif (!str_contains($id, "IM/2019/"))
		echo "Invalid ID";
	elseif ($age>25) {
		echo "Invalid Age";
	}else{

		$sql = "SELECT * FROM user WHERE id = '$id' AND Name = '$name' AND Age =$age";
		$result = mysqli_query($con,$sql) or die(mysql_error());
		$rows = mysqli_num_rows($result);

		if($rows > 0){
		    echo "Print Id";
		}
		else{
		    echo "Not Found";
		}  




	}




?>