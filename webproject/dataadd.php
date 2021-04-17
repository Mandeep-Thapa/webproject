<?php
$firstn=$_POST['fName'];
$lastn=$_POST['lName'];
$email=$_POST['Email'];
$Cemail=$_POST['cEmail'];
$contact=$_POST['phoneno'];
$birthday=$_POST['dob'];
$gen=$_POST['Gender'];



include 'database.php';
$sql ="INSERT INTO signup( fName,lName,Email,cEmail,phoneno,dob,Gender ) VALUE('$firstn','$lastn','$email','$Cemail','$contact','$birthday','$gen')";
$result=mysqli_query($conn,$sql);
if($result){
    header('Location: details.php');
}
?>