<?php
$profileArray = ["nama" => "Alika Gusti Artanto",
                 "kelas" => "SI14"
];

print_r($profileArray);

$profileMultiArray = [
    [
        'nama' => 'siti',
        'kelas' => 'TkJ2'
    ], [
        'nama' => 'sri',
        'kelas' => 'TKJ3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'TKJ4'
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile ['nama'] . "<br/>";
}
  

