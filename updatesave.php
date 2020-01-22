<?php
  $con = mysqli_connect('localhost','root','','p10');
  $_GET['id'];
  $_GET['sn'];
  $_GET['sage'];
  $_GET['gen'];
  $_GET['con'];
  $_GET['img'];

?>
<html>
<body>
  <form action="" method="GET">

   Student ID : <input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br><br>
   Student Name : <input type="text" name="sn" value="<?php echo $_GET['sn']; ?>"><br><br>
   Student Age : <input type="text" name="sage" value="<?php echo $_GET['sage']; ?>"><br><br>
   Genders : <input type="radio" name="gen" value="Female">Female
             <input type="radio" name="gen" value="Male">Male
             <br><br>
             Country : <select name="con" id="con" value="<?php echo $_GET['con']; ?>">
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Canada">Canada</option>
                      <option value="USA">USA</option>
             </select><br><br>
      Image : <input type="file" name="img" id="picture" value="<?php echo $_GET['img']; ?>"><br><br>
      <input type="submit" name="submit" value="Update">
    </form>

    <?php
        if(isset($_GET['submit'])){
            $uid = $_GET['id'];
            $uname = $_GET['sn'];
            $uage = $_GET['sage'];
            $ugen = $_GET['gen'];
            $ucon = $_GET['con'];
            $uimg = $_GET['img'];

            $sql = "UPDATE STUDENTS SET NAME='$uname',AGE='$uage',GENDER='$ugen',COUNTRY='$ucon',IMAGE='$uimg ' WHERE ID='$uid'";
            $update = mysqli_query($con,$sql);
            if($update){
              echo "Data is Updated Successfully! <a href='display.php'> Click here to see updated data</a>";

            }
            else{
              echo "Data is not Updated";
            }
        }

    ?>
</body>
</html>
