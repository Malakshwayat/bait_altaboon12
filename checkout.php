<?php
include "connection.php";
if (isset($_POST['product']) && isset($_POST['price']) && isset($_POST['quantity']) ) {
    $product = explode(',', $_POST['product']);
    $prices = explode(',', $_POST['price']);   
    $quantity = explode(',', $_POST['quantity']); 
    if (count($product) == count($prices) && count($product) == count($quantity)) {
        $result_invoice = mysqli_query($conn, "SELECT MAX(invoice) AS max_invoice FROM cart");
        $row = mysqli_fetch_assoc($result_invoice);
        $invoice = $row['max_invoice'] ? $row['max_invoice'] + 1 : 1;               
        mysqli_begin_transaction($conn);
        $errorOccurred = false;
        for ($i = 0; $i < count($product); $i++) {
            $product_name = trim($product[$i]);        
            $price = trim($prices[$i]);
            $qty = trim($quantity[$i]);         
            $total = $price * $qty;
  $result = mysqli_query($conn, "INSERT INTO cart (productname, productprice, quantity, invoice, total) 
 VALUES ('$product_name', '$price', '$qty', '$invoice', '$total' )");   
        }

        if (!$errorOccurred) {
            mysqli_commit($conn);
            echo "تم إضافة المنتجات بنجاح!";
        } else {
            // التراجع عن المعاملة (rollback) إذا حدث خطأ
            mysqli_rollBack($conn);
        }
    } else {
        echo "خطأ: عدد المنتجات والأسعار والكميات غير متطابق!";
    }
}
?>
