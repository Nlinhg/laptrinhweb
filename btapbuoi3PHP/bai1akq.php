<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <link rel="stylesheet" type="text/css" href="bai1akq.css">
</head>
<body>
    <div class="container">
        <h2>Thông tin sách</h2>
        <div class="data-item">
            <span>Tên sách:</span> <?php echo htmlspecialchars($_POST["tensach"]); ?>
        </div>
        <div class="data-item">
            <span>Tên tác giả:</span> <?php echo htmlspecialchars($_POST["tacgia"]); ?>
        </div>
        <div class="data-item">
            <span>Nhà xuất bản:</span> <?php echo htmlspecialchars($_POST["nhaxuatban"]); ?>
        </div>
        <div class="data-item">
            <span>Năm xuất bản:</span> <?php echo htmlspecialchars($_POST["namxuatban"]); ?>
        </div>
    </div>
</body>
</html>
