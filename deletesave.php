<?php
 $con = mysqli_connect('localhost','root','','p10');
 $did = $_GET['id'];
 $sql = "DELETE FROM STUDENTS WHERE id='$did'";
 mysqli_query($con,$sql);
 echo "Data is Deleted succesfully! <a href='display.php'> Click here to see New Data </a>";

 ?>
