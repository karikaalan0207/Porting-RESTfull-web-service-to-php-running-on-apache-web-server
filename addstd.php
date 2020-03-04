<?php

$con = mysqli_connect('localhost','master','password');

mysqli_select_db($con,'assignment');

$sname = $_GET['sname'];
$rollno = $_GET['rollno'];
$year = $_GET['year'];

$query = "insert into students values ('$rollno','$sname','$year')";
mysqli_query($con,$query);


?>