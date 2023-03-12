<?php
function hitungUmur($tahunLahir){
    $tahunsekarang =2023;
    echo $tahunsekarang - $tahunLahir;
} 
hitungUmur(2001);
echo "<br>";
hitungUmur(1999);
echo "<br>";
hitungUmur(1998);
echo "<br>";
hitungUmur(2004);
echo "<br>";

function welcome($nama)
{
    echo "Hello, Selamat datanng $nama!";
}

welcome("Alika");
echo "<br>";
welcome("Gusti");