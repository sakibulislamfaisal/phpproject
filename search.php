<?php
    if(isset($_POST['Search'])){
      $search = $_POST['Search'];
      $query  = "select * from `students` where id= ".$search."";
      $search_result = filterTable($query);
    }
    else{
         $query = "select * from students";
         $search_result = filterTable($query);
    }

    function filterTable($query){
      $con = mysqli_connect('localhost','root','','p10');
      if($res =mysqli_query($con,$query)){
        return $res;
      }
    }
?>



<html>
<body>
  <form action="" method="post">
     <input type="text" name="Search" placeholder="Search by ID"><br><br>
     <button type="submit" name="btn">Search</button><br><br>

     <table border="1" width="800" height="100">
        <tr>
            <td style="text-align:center" width="100"><b>Student ID</b></td>
            <td style="text-align:center" width="100"><b>Student Name</b></td>
            <td style="text-align:center" width="100"><b>Student Age</b></td>
            <td style="text-align:center" width="100"><b>Gender</b></td>
            <td style="text-align:center" width="100"><b>Country</b></td>
            <td style="text-align:center" width="150"><b>Image</b></td>
            <td style="text-align:center" width="100"><b>Video</b></td>
        </tr>

        <?php
          while($row=mysqli_fetch_array($search_result)) :  ?>
            <tr>
                <td style="text-align:center"><?php echo $row["id"] ?></td>
                <td style="text-align:center"><?php echo $row["name"] ?></td>
                <td style="text-align:center"><?php echo $row["age"] ?></td>
                <td style="text-align:center"><?php echo $row["gender"] ?></td>
                <td style="text-align:center"><?php echo $row["country"] ?></td>
                <td style="text-align:center"><?php echo '<span><img src="images/'.$row["image"].'"style="width:100px;height:100px;"</span>' ?></td>
              <td style="text-align:center"><?php echo '<span><video controls  src="videos/'.$row["vname"].'"style="width:180px;height:120px;"</video></span>' ?></td>

            </tr>

            <?php   endwhile;    ?>
     </table>
  </form>
</body>
</html>
