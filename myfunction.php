<?php 
    function tinhtoan($a,$b,$p){
        $kq=0;
        switch ($p) {
            case '+':
                $kq=$a + $b;
                break;
            case '-':
                $kq=$a - $b;
                break;
            case '*':
                $kq=$a * $b;
                break;
            case '%':
                $kq=$a % $b;
                break;
            default:
                # code...
                break;
        }
        return $kq;
    }
    function hienthi($a,$b,$p, $k){
        $kq='<div class="kq">
                <p>Bạn đã nhận được phép toán : '.$a.' '.$p.' '.$b.' = '.$k.'</p>
            </div>';
        echo $kq;
    }
?>