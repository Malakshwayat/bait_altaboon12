<?php
require 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['phone']) && isset($_POST['password'])) {
        $phone = $_POST['phone'];
        $password1 = $_POST['password']; 
        $sql = "SELECT * FROM login WHERE Phone ='$phone' AND password = '$password1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            header("Location: newindex.php"); 
            exit();
        } else {
          
            echo "رقم الهاتف غير صحيح ";
        }
    } else {
        echo "رقم الهاتف غير صحيح ";
    }
}
$conn->close();
?>


