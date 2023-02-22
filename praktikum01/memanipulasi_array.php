<?php
$arraybuah = ["Mangga","Jeruk","Melon","Apel","Sirsak"];

// mengurutkan value dari array
sort($arraybuah);

// menghapus value array paling belakang
array_pop($arraybuah);

// menghapus 
unset($arraybuah[3]);

//menambahkan array 
array_push($arraybuah,'Durian');

// menghapus value array yang paling depan
array_shift($arraybuah);

// menambahkan
array_unshift($arraybuah,'buah naga');

$arraybuah[2] = 'pisang';

foreach($arraybuah as $buah){
    echo $buah ."<br/>";
}