<?php
session_start();
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'web';
    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    if(isset($_GET["submit"])){
        if(!empty("SizeDipilih") && !empty("jml")){
            $sizedipilih = $_GET["SizeDipilih"];
            $jml = $_GET["jml"];
            $productID = $_GET['productID'];
            $userID = $_SESSION['id'];

            $query = "INSERT INTO cart(userID, productID, size, quantityOrdered) VALUES($userID, $productID, $sizedipilih, $jml)";
            echo $query;
            if ($stmt = $conn->prepare('INSERT INTO cart(userID, productID, size, quantityOrdered) VALUES(?, ?, ?, ?)')) {
                $stmt->bind_param('iisi',$userID, $productID, $sizedipilih, $jml);
                $stmt->execute();
                header('Location: products.php');
            } else {
                echo 'Could not prepare statement!'.mysqli_error($conn);
            }
            $stmt->close();
        }
    }
