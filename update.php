<?php

$con = mysqli_connect('localhost','root','','p10');
$sql = "select * from students";
$res = mysqli_query($con,$sql);
 ?>

 <html>
 <body>
   <table border="1" width="800" height="100">
      <tr>
          <td style="text-align:center" width="100"><b>Student ID</b></td>
          <td style="text-align:center" width="100"><b>Student Name</b></td>
          <td style="text-align:center" width="100"><b>Student Age</b></td>
          <td style="text-align:center" width="100"><b>Gender</b></td>
          <td style="text-align:center" width="100"><b>Country</b></td>
          <td style="text-align:center" width="150"><b>Image</b></td>
            <td style="text-align:center" width="150"><b>Action</b></td>


      </tr>
      <?php
        while($row=mysqli_fetch_assoc($res)){
          ?>
          <tr>
              <td style="text-align:center"><?php echo $row["id"] ?></td>
              <td style="text-align:center"><?php echo $row["name"] ?></td>
              <td style="text-align:center"><?php echo $row["age"] ?></td>
              <td style="text-align:center"><?php echo $row["gender"] ?></td>
              <td style="text-align:center"><?php echo $row["country"] ?></td>
              <td style="text-align:center"><?php echo '<span><img src="images/'.$row["image"].'"style="width:100px;height:100px;"</span>' ?></td>
              <td style="text-align:center;"><a href="updatesave.php?id=<?php echo $row["id"] ?>&sn=<?php echo $row["name"] ?>&sage=<?php echo $row["age"] ?>&gen=<?php echo $row["gender"] ?>&con=<?php echo $row["country"] ?>&img=<?php echo $row["image"] ?>">Update</a></td>

          </tr>

          <?php
        }
      ?>
   </table>
</body>
</html>
