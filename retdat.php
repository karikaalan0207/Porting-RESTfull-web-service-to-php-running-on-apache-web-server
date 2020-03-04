<?php

$con = mysqli_connect('localhost','master','password');

mysqli_select_db($con,'assignment');

$rollno = $_GET['rollno'];
$query = "select * from students where rollno = '$rollno' ";

$res = mysqli_query($con,$query);

while($row = mysqli_fetch_row($res)) {

    echo "Rollno : $row[0] || Name : $row[1] || Year : $row[2]";
}
?>