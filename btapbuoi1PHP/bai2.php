<?php
$data = [];
for ($i = 1; $i <= 100; $i++) {
    $data[] = [
        'stt' => $i,
        'ten_sach' => "Tensach{$i}",
        'noi_dung' => "Noidung{$i}"
    ];
}
?>

<?php
$items_per_page = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_index = ($page - 1) * $items_per_page;
$current_page_data = array_slice($data, $start_index, $items_per_page);
$total_pages = ceil(count($data) / $items_per_page);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bai2.css">
    <title>Bài 2</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php foreach ($current_page_data as $row): ?>
            <tr>
    <td><?= $row['stt']; ?></td>
    <td><?= "Tên sách " . $row['stt']; ?></td> 
    <td><?= "Nội dung " . $row['stt']; ?></td>
</tr>

        <?php endforeach; ?>
    </table>

    <div class=pagination>
        <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1; ?>">Trang trước</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endfor; ?>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?= $page + 1; ?>">Trang tiếp theo</a>
        <?php endif; ?>
    </div>
</body>
</html>
