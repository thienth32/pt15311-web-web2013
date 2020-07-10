<?php
$soA = isset($_GET['soa']) ? $_GET['soa'] : 0;
$soB = isset($_GET['sob']) ? $_GET['sob'] : 0;
$soC = isset($_GET['soc']) ? $_GET['soc'] : 0;

// kiem tra tam giac
if($soA+$soB > $soC 
        && $soA + $soC > $soB 
        && $soB + $soC > $soA){
    $chuvi = $soA + $soB + $soC;
    $p = $chuvi/2;
    $dientich = sqrt(
        $p*($p-$soA)*($p-$soB)*($p-$soC)
    );

    echo "Chu vi tam giac: $chuvi<br>";
    echo "Dien tich tam giac: $dientich";
}else{
    header('location: b1.php?msg=Không hình thành tam giác!'); 
}

?>