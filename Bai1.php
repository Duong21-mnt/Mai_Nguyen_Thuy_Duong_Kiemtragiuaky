<?php
// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Danh sách các số nguyên tố từ 1 đến 100:\n";
for ($n = 1; $n <= 100; $n++) {
    if (isPrime($n)) {
        echo $n . " ";
    }
}
?>