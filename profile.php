<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: account.php');
    exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'web';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT username, name, email, birth, phone, address FROM user WHERE id = ?');

// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username, $name, $email, $birth, $phone, $address);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ini buat judul halamannya -->
    <title>NusantaraDeals</title>
    <!-- menghubungkan file css style.css ke halaman ini -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <!-- ini buat pasang gambar logo startup kita lebarnya diatur 125px -->
                    <a href="index.php"><img src="images/NusantaraDeals.png" width="125px"></a>
                </div>
                <nav>
                    <!-- ini list buat menu-menu di kanan pojok atas -->
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="logout.php"><strong>LOG OUT</strong></a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>

            <div class="profile-div">
                <h1>Profile</h1>
                <div class="profile-header">
                    <div class="profile-header-text">
                        <div>Welcome back, <?= $name ?>!</div>
                    </div>
                </div>

                <div class="profile-details">
                    <strong>Account Details</strong>
                    <form action="">
                        <div class="profile-form">
                            <p>
                                <label for="id">ID</label>
                                <input type="text" name="id" id="id" value="<?= $_SESSION['id'] ?>" disabled>
                            </p>
                            <p>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" value="<?= $username ?>" disabled>
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="<?= $email ?>" disabled>
                            </p>
                            <p>
                                <label for="name">Name</label>
                                <input type="name" name="name" id="name" value="<?= $name ?>" disabled>
                            </p>
                            <p>
                                <label for="birth">Birth Date</label>
                                <input type="date" name="birth" id="birth" value="<?= $birth ?>" disabled>
                            </p>
                            <p>
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" id="phone" value="<?= $phone ?>" disabled>
                            </p>
                            <p>
                                <label for="address">Address</label>
                                <input type="text" name="addres" id="address" value="<?= $address ?>" disabled>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!----------- footer ------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/NusantaraDeals-White.png">
                    <p>Our purpose is to sutainably make the pleasure and benefits of sports accessible to the many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020</p>
        </div>
    </div>

    <!----------- js for toggle menu ------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>