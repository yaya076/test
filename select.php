<body>
<?php
 $con=mysqli_connect("localhost","root","","school");
 if (mysqli_connect_errno())
 {
   echo "Failed To Connect To MySQL" . mysqli_connect_error();
 }
 $result = mysqli_query($con,"SELECT * FROM student");
 while($row = mysqli_fetch_array($result)){
    echo $row['name'] . " " .$row['mobile'] . " " .$row['address'];
    echo "<br>";
 }
 mysqli_close($con);

?>
</body>