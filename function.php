<?php
// สร้างฟังก์ชัน showinfo()
function showinfo() {
    echo "This is my first website";
}

function cal_vat($price=0, $vat=0) {
    $total_price = $price + ($price * $vat) / 100;
    return $total_price;
}

// เรียกใช้งาน showinfo()
showinfo();

echo "<br>";

// เรียกใช้งาน cal_vat($price, $vat)
echo cal_vat(200,7);