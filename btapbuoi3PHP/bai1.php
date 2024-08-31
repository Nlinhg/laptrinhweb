<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <link rel="stylesheet" type="text/css" href="bai1.css">
    <script>
        function validateForm() {
            var tensach = document.forms["bookForm"]["tensach"].value;
            var tacgia = document.forms["bookForm"]["tacgia"].value;
            var nhaxuatban = document.forms["bookForm"]["nhaxuatban"].value;
            var namxuatban = document.forms["bookForm"]["namxuatban"].value;
            var namXuatBanNum = parseInt(namxuatban);

            if (tensach == "") {
                alert("Tên sách không được để trống");
                return false;
            }
            if (tacgia == "") {
                alert("Tác giả không được để trống");
                return false;
            }
            if (nhaxuatban == "") {
                alert("Nhà xuất bản không được để trống");
                return false;
            }
            if (namxuatban == "" || isNaN(namXuatBanNum) || namXuatBanNum < 1000 || namXuatBanNum > new Date().getFullYear()) {
                alert("Năm xuất bản phải là một số hợp lệ");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Thông tin sách</h2>
        <form name="bookForm" action="bai1akq.php" method="post" onsubmit="return validateForm()">
            <label for="tensach">Tên sách:</label>
            <input type="text" id="tensach" name="tensach">

            <label for="tacgia">Tác giả:</label>
            <input type="text" id="tacgia" name="tacgia">

            <label for="nhaxuatban">Nhà xuất bản:</label>
            <input type="text" id="nhaxuatban" name="nhaxuatban">

            <label for="namxuatban">Năm Xuất bản:</label>
            <input type="text" id="namxuatban" name="namxuatban">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
