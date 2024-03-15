<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="soa" id="">
        <select name="pheptinh" id="">
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="sob" id="">
        <input type="submit" name="tinhtoan" value="Tính toán">
    </form>
    <?php 
    include'./myfunction.php';
    if(isset($_POST['tinhtoan']) && ($_POST['tinhtoan'])){
        //input
        $soa=$_POST['soa'];
        $sob=$_POST['sob'];
        $pt=$_POST['pheptinh'];
        //xử lý và trả về kết quả
        $kq=tinhtoan($soa,$sob,$pt);
        //hiển thị
        hienthi($soa,$sob,$pt, $kq);
    }
    ?>
    <!-- <div class="kq">
        <p>Bạn đã nhận được phép toán : a + b = kq </p>
    </div> -->
</body>

</html>