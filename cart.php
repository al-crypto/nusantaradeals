<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'web';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

function query($query)
{
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_object($result)) {
		$rows[] = $row;
	}
	return $rows;
}
$produk = query("SELECT * FROM products");
$cartList = query("SELECT *, quantityOrdered*price as calc FROM products INNER JOIN cart ON products.productID = cart.productID WHERE id=" . $_SESSION['id']);
$subtotal = query("SELECT SUM(quantityOrdered*price) as sum, SUM(quantityOrdered*price)-10000 as sumAfterTax FROM products INNER JOIN cart ON products.productID = cart.productID WHERE id=" . $_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini buat judul halamannya -->
	<title>All Products - NusantaraDeal</title>
	<!-- menghubungkan file css style.css ke halaman ini -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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
					<li><a href="account.php"><strong>My Account</strong></a></li>
				</ul>
			</nav>
			<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>

	<!----------- cart items details ------->

	<div class="small-container cart-page">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<?php foreach ($cartList as $cartl) : ?>
				<tr>
					<td>
						<div class="cart-info">
							<img src="<?= $cartl->thumbnail ?>">
							<div>
								<p><?= $cartl->productName ?></p>
								<small>Rp <?= $cartl->price ?></small>
								<br>
								<a href="delete_cart.php?productID=<?= $cartl->productID ?>">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="<?= $cartl->quantityOrdered ?>" min="1"></td>
					<td>Rp <?= $cartl->calc ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<div class="total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>Rp <?= $subtotal[0]->sum ?></td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>Rp 10000</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>Rp <?= $subtotal[0]->sumAfterTax ?></td>
				</tr>
			</table>
		</div>
	</div>

	<!----------- footer ------->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download aplikasi kami</h3>
					<p>Download aplikasi untuk Android and IOS.</p>
					<div class="app-logo">
						<img src="images/play-store.png">
						<img src="images/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/NusantaraDeals-White.png">
					<p>Kami mempunyai tujuan untuk mengangkat pasar fashion lokal asli Nusantara.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog</li>
						<li>Policy</li>
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