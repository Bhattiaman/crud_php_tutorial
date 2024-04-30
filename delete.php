<?php
include 'dbcon.php';
$id = $_GET['id']; 

$deletequery = "DELETE FROM registration WHERE id=$id";
$query = mysqli_query($con, $deletequery);

if ($query) {
    echo "<script>alert('Data deleted successfully');</script>";
    header('location: select.php');
} else {
    echo "<script>alert('Data not deleted');</script>";
}
?>
