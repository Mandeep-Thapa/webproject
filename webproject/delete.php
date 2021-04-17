<?php

include 'database.php';
$id = $_GET['id'];

$sql = "DELETE FROM  signup WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header('Location: details.php');
}


?>