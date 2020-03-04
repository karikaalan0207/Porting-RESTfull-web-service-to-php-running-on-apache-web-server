<?php

$con = mysqli_connect('localhost','master','password');

mysqli_select_db($con,'assignment');

$rollno = $_GET['rollno'];


$query = "delete from students where rollno = '$rollno'";
mysqli_query($con,$query);


?>