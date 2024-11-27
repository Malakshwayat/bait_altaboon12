<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>عربة التسوق</title>
</head>
<body>
<?php require 'navabar.php';?>
<div class="container"> 
    <h1 class=include id="er">عربة التسوق</h1>
    <div id="cart"> 
    <?php require 'checkout.php';?>
    </div>
    <div class="pos">
    <div class="total" id="total"></div>
    <button id="checkout" onclick="Register()" class="ayaal">إتمام الشراء</button></div>
</div>
<?php require 'footer.php';?>

<script src="./assets/pix/js/index.js"></script>
</body>
</html>

