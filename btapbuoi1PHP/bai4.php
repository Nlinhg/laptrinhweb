<!DOCTYPE html>
<html>
<head>
    <title>Bài 4</title>
    <link rel="stylesheet" href="bai4.css">
</head>
<body>
    <div class="container">
        <h1>Array Functions</h1>
        <?php
        // Tạo mảng
        $numbers = array(5, 2, 9, 1, 7, 3);
         echo "<div class='result'>Mảng ban đầu: <code>" . htmlspecialchars("5, 2, 9, 1, 7, 3") . "</code></div>";

        // In ra giá trị lớn nhất
        echo "<div class='result'>Giá trị lớn nhất trong mảng: " . max($numbers) . "</div>";

        // In ra giá trị nhỏ nhất
        echo "<div class='result'>Giá trị nhỏ nhất trong mảng: " . min($numbers) . "</div>";

        // Tính tổng các phần tử
        $sum = 0;
        foreach ($numbers as $num) {
            $sum += $num;
        }
        echo "<div class='result'>Tổng các phần tử trong mảng: " . $sum . "</div>";

        // Sắp xếp mảng tăng dần và in ra
        sort($numbers);
        echo "<div class='result'>Mảng sau khi sắp xếp tăng dần: " . implode(", ", $numbers) . "</div>";

        if (in_array(7, $numbers)) {
            echo "<div class='result'>7 có trong mảng</div>";
        } else {
            echo "<div class='result'>7 không có trong mảng</div>";
        }

        // Đếm số lượng phần tử
        $count = count($numbers);
        echo "<div class='result'>Số lượng phần tử trong mảng: " . $count . "</div>";
        ?>
    </div>
</body>
</html>