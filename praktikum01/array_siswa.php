<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas php</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$udin = ['id'=>1 , 'nama'=>'Udin','nim' => '01115',
         'uts'=>80,'uas'=>84,'tugas'=>78
];

$Lintang = ['id'=> 2 ,'nama'=>'Lintang','nim' => '011013',
            'uts' =>70, 'uas'=> 50,'tugas'=>68
];

$Yosi = ['id'=> 3 ,'nama'=>'Yosi','nim'=>'011012',
         'uts'=> 60,'uas'=>86,'tugas'=>70
];

$Nina = ['id'=>4 ,'nama'=>'Nina','nim'=>'011011',
         'uts'=>90,'uas'=>91,'tugas'=>82
];

$ar_nilai=[$udin,$Lintang,$Yosi,$Nina];
?>
    <h3>Daftar Nilai Siswa</h3>
    <table class="container" border="0" width="100%">
    
        <thead>
            <tr>
                <th>No</th><th>nama</th><th>Nim</th><th>Uts</th>
                <th>Uas</th><th>Tugas</th><th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($ar_nilai as $udin){
                echo'<tr><td>'.$nomor.'</td>';
                echo'<td>'.$udin['nama'].'</td>';
                echo'<td>'.$udin['nim'].'</td>';
                echo'<td>'.$udin['uts'].'</td>';
                echo'<td>'.$udin['uas'].'</td>';
                echo'<td>'.$udin['tugas'].'</td>';
                $nilai_akhir = ($udin['uts']+$udin['uas']+$udin['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
</table>
    
</body>
</html>