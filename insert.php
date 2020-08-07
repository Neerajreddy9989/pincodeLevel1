<?php

$con = mysqli_connect("localhost","root","","test1");
if(isset($_POST['name']))
{
$name=$_POST['name'];



$query=mysqli_query($con,$get);
$row=mysqli_num_rows($query);
$pincode= $_GET['pincode'];

$query= "SELECT * FROM user
        INNER JOIN user1
        ON user.pincode=user1.user
        WHERE user.pincode=$pincode";
$mysqli->query($query);

if($result= $mysqli->query($query)){
    while($row=$result->fetch_assoc()){

      $circlename = $row1['circlename'];
      $regionname = $row1['regionname'];
      $divisionname = $row1['divisionname'];
      $officename = $row1['officename'];
     $pincode = $row1['pincode'];
       $officetype = $row1['officetype'];
       $delivery = $row1['delivery'];
       $district = $row1['district'];
       $statename = $row1['statename'];
    }

    $result->close();

}

}





?>
