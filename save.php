<?php

$con     = mysqli_connect('localhost','root','','p10');
$id      = $_POST['sid'];
$sname   = $_POST['sn'];
$age     = $_POST['sa'];
$gender  = $_POST['gender'];
$country = $_POST['country'];

////Add image using PHP

$image = $_FILES['image']['name'];
$imgcopy = $_FILES['image']['tmp_name'];
move_uploaded_file($imgcopy,"images/$image");

//Add video using PHP
$video  = $_FILES['video']['name'];
$tmp    = $_FILES['video']['tmp_name'];
move_uploaded_file($tmp,"videos/".$video);


echo "Student ID : ".$id."<br>";
echo "Student Name : ".$sname."<br>";
echo "Student Age: ".$age."<br>";
echo "Gender : ".$gender."<br>";
echo "Country : ".$country."<br>";

$sql = "insert into students(id,name,age,gender,country,image,vname) values('$id','$sname','$age','$gender','$country','$image','$video')";
mysqli_query($con,$sql);
echo "Data is inserted succesfully";

?>
