<?php
//membuat array
$arraybuah = ["Mangga","Jeruk","Melon","Apel","Sirsak"];

//cara pertama
print_r ($arraybuah);
echo "<br/>";
// cara kedua
var_dump($arraybuah);
echo "<br/>";
// cara ketiga
foreach($arraybuah as $buah){
    echo $buah ."<br/>";
}