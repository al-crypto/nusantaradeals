<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'web';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$productID = $_GET['productID'];
$query = "DELETE FROM cart WHERE id='".$_SESSION['id']."' AND productID='$productID'";
if(mysqli_query($conn, $query)){
    header("Location:cart.php");
}else{
    echo "<script>alert('Data gagal dihapus');javascript:history.go(-1);</script>";
    mysqli_error($conn);
}
mysqli_close($conn);
