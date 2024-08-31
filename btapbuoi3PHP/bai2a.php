<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bai2a.css">
    <title>Bài 2</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $invoiceId = $_POST['invoiceId'];
        $payFor = isset($_POST['payFor']) ? $_POST['payFor'] : [];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($invoiceId)) {
            echo "<div class='error'>Tất cả các trường đều là bắt buộc.</div>";
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='error'>Định dạng email không hợp lệ.</div>";
            return;
        }

        if (count($payFor) == 0) {
            echo "<div class='error'>Phải chọn ít nhất một tùy chọn 'Thanh toán cho'.</div>";
            return;
        }

        echo "<div><b>Biểu mẫu đã được gửi thành công<b>.<br>";
        echo "Tên: $firstName $lastName<br>";
        echo "Email: $email<br>";
        echo "Mã hóa đơn: $invoiceId<br>";
        echo "Thanh toán cho: " . implode(", ", $payFor) . "<br></div>";
    }
?>
</body>
</html>