<?php
$d = date("Y年m月d日");
echo $d."<br>";
echo date("Y-m-d H:i:s");

$t = date("s");
if($t>= 30){
    echo '<p style="color:red;">30秒以上</p>';
}elseif($t <= 29){
    echo '<p style="color:blue;">29秒以下</p>';
}

echo "<p>現在：".$t."秒</p>";
?>