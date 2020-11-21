<?php
$rate = 28.3;
$data = array(50000,300000,45000,80000,120000);
for ($i=0; $i < count($data); $++){
	echo "新台幣". $data[$i] . "換算成美金" .
    round($data)[$i]/$rate, 2) . "元<br>";
}

?>