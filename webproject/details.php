<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
<form action="dataadd.php" method="POST">
    <table>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Birthday</th>
<th>Gender</th>
<th>Action</th>

<?php
include 'database.php';
$sql = "SELECT * FROM signup";
$result=mysqli_query($conn, $sql);

if ($result){
    while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $firstn=$row['fName'];
        $lastn=$row['lName'];
        $email=$row['Email'];
        $Cemail=$row['cEmail'];
        $phoneno=$row['phoneno'];
        $birthday=$row['dob'];
        $gen=$row['Gender'];
        
        ?>


        <tr>
    <td><?php echo $id?></td>
    <td><?php echo $firstn ?></td>
    <td><?php echo $lastn ?></td>
    <td><?php echo $email?></td>
    <td><?php echo $phoneno?></td>
    <td><?php echo $birthday?></td>
    <td><?php echo $gen?></td>
    <td>
    
    <a href="delete.php ?id=<?php echo $id?> ">Delete
    </td>
        </tr>

<?php
    }
}


?>
</body>
</html>
