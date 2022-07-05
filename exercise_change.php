<?php
// รับค่าจากฟอร์มแบบ method post
$price = $_POST['sale_price'];
$pay   = $_POST['pay_amount'];

// คำนวณหาเงินทอน
$change = $pay - $price;
if($change == 0){
    $value = "รับเงินมาพอดี";
}elseif($change < 0){
    $value = "จ่ายเงินมาไม่ครบ";
}else{
    $value = "เงินทอน ".$change." บาท";
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคิดเงินทอน</title>
</head>
<body>
    <h1>โปรแกรมคิดเงินทอน</h1>
    <form action="exercise_change.php" method="post">
        <label for="sale_price">ราคาสินค้า</label>
        <input type="number" name="sale_price" id="sale_price"><br>

        <label for="pay_amount">จ่ายเงินมา</label>
        <input type="number" name="pay_amount" id="pay_amount"><br>

        <input type="submit" value="คำนวณ" name="submit">
        <hr>
        <p><?php echo $value; ?></p>
    </form>
</body>
</html>
