<?php

$data = isset($_GET['number']) ? $_GET['number'] : [];

for ($i=0; $i < count($data); $i++) { 
    echo "$data[$i]<br>";
}

// echo tổng của tất cả các input
?>