<?php
require 'connection.php';
if (isset($_POST['accept'])) {
    $invoiceNumber = $_POST['accept'];
   
    $sql = "UPDATE cart SET status='accepted' WHERE invoice = '$invoiceNumber'";
    if ($conn->query($sql)) {
        echo "تم قبول الفاتورة رقم $invoiceNumber بنجاح.";
    } else {
        echo "حدث خطأ أثناء قبول الفاتورة.";
    }
} elseif (isset($_POST['reject'])) {
    $invoiceNumber = $_POST['reject'];
    $sql = "UPDATE cart SET status='rejected' WHERE invoice = '$invoiceNumber'";
    if ($conn->query($sql)) {
        echo "تم رفض الفاتورة رقم $invoiceNumber بنجاح.";
    } else {
        echo "حدث خطأ أثناء رفض الفاتورة.";
    }
}
?>


