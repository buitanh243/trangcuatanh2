<?php 
$d = 10; 
$c = 20;


function Sum($a,$b) {
   echo $a+$b.'<br>';
}

Sum($d,$c);
Sum(40,50);

function sayhello($name) {
    echo 'Hello '. $name;
}

sayhello('Tanh');

// khi retturn phải echo ra mới được


//Hàm gọi hàm
$n = 0;
$sum = 0;
while ($n<10) {
    $n++;
    $sum +=$n;
}

echo '<br>'.$sum;

function chan($chan) {
    if($chan%2==0) return true;
    return false;
}

function Sumchan($n) {
    $s = 0;
    for($i = 1; $i<=$n;$i++) {
        if (chan($i))
            $s+=$i;
    }
    return $s;
}

echo '<br>Ket qua:' . Sumchan(11);
?>