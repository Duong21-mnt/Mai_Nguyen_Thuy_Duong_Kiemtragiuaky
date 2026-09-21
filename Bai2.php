<?php
// 1. Tạo mảng kết hợp chứa thông tin các sản phẩm
$products = [
    [
        'name' => 'Váy lụa',
        'price' => 15000000,
        'quantity' => 5
    ],
    [
        'name' => 'Quần bò',
        'price' => 250000,
        'quantity' => 20
    ],
    [
        'name' => 'Áo giữ nhiệt',
        'price' => 900000,
        'quantity' => 10
    ],
    [
        'name' => 'Áo dài tay',
        'price' => 3200000,
        'quantity' => 8
    ]
];

// 2. Hàm tính tổng giá trị tất cả sản phẩm
function calculateTotalValue($productList) {
    $total = 0;
    foreach ($productList as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}

// 3. Hiển thị thông tin ra màn hình 
echo "============= DANH SÁCH SẢN PHẨM ============<br>";
echo "STT | Tên sản phẩm | Đơn giá | SL<br>";
echo "---------------------------------------------------<br>";

foreach ($products as $index => $product) {
    echo ($index + 1) . ". " 
        . $product['name'] . " - " 
        . number_format($product['price']) . " đ - SL: " 
        . $product['quantity'] . "<br>";
}

$totalValue = calculateTotalValue($products);
echo "TỔNG GIÁ TRỊ KHO: " . number_format($totalValue) . " đ<br>";
?>