<?php
require 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['pwd']) && isset($_POST['phone']) && isset($_POST['testpwd'])) {

        $first_name = $_POST['fname'];
        $last_name = $_POST['lname']; 
        $password = $_POST['pwd'];
        $confirm_password = $_POST['testpwd'];
        $phone = $_POST['phone'];

        if ($password !== $confirm_password) {
            echo "كلمة المرور وتأكيد كلمة المرور غير متطابقتين!";
        } else {
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO login (first_name, last_name, Phone, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $first_name, $last_name, $phone, $password_hashed);

            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            } else {
                echo "حدث خطأ أثناء إدخال البيانات.";
            }
            $stmt->close();
        }
    } else {
        echo "يرجى ملء جميع الحقول المطلوبة.";
    }
}
?>
