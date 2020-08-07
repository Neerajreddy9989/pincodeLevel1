<?php

$con = mysqli_connect("localhost","root","","test1");
if(isset($_POST['name']))
{
$name=$_POST['name'];


$get="select * from user where pincode='$name' ";
$query=mysqli_query($con,$get);
$row=mysqli_num_rows($query);

if($row==0)
{
echo "<h2 style='color:red;' >
 WARNING:  not providing delivery services at this Pincode:
<span style='color:red;'>$name</span></h2>";
}
else{

echo"
        <tr style='width:50%'>
          <td style='width:13% color:#f51c4f;'><h5 style='color:blue;'>CircleName</h5></td>
          <td style='width:13%'><h5 style='color:black;'>Region Name</h5></td>
          <td style='width:13%'><h5 style='color:black;'>Division name</h5></td>
          <td style='width:13%'><h5 style='color:black;'>OFFICE NAME</h5></td>
          <td style='width:13%'><h5 style='color:black;'>PINCODE</h5></td>
          <td style='width:13%'><h5 style='color:black;'>OFFICE TYPE</h5></td>
          <td style='width:13%'><h5 style='color:black;'>DELIVERY</h5></td>
          <td style='width:13%'><h5 style='color:black;'>DISTRICT</h5></td>
          <td style='width:13%'><h5 style='color:black;'>STATE NAME</h5></td>
        </tr>";
while($row1 = mysqli_fetch_array($query)){
    $circlename = $row1['circlename'];
    $regionname = $row1['regionname'];
    $divisionname = $row1['divisionname'];
    $officename = $row1['officename'];
   $pincode = $row1['pincode'];
     $officetype = $row1['officetype'];
     $delivery = $row1['delivery'];
     $district = $row1['district'];
     $statename = $row1['statename'];

    echo"
        <tr>
          <td >$circlename</td>
          <td >$regionname</td>
          <td >$divisionname</td>
          <td>$officename</td>
          <td>$pincode</td>
          <td>$officetype</td>
                <td >$delivery</td>
                      <td>$district</td>
                            <td>$statename</td>
        </tr>";



}
}

}




?>
