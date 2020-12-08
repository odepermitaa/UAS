<?php


$gol1 = 1000;
$gol2 = 2000;  
$array = [ 
    [ 
        "Nama" => "Andi", 
        "Golongan" => "I",         
        "KWH" => 50, 
    ], 
    [ 
        "Nama" => "Susi", 
        "Golongan" => "II",         
        "KWH" => 150 
    ], 
    [ 
        "Nama" => "Made", 
        "Golongan" => "I", 
        "KWH" => 1000 
    ], 
    [ 
        "Nama" => "Rosa", 
        "Golongan" => "II",         
        "KWH" => 1500 
    ] 
];

array_walk($array, function($nama) use ($gol1, $gol2){
    echo "Nama : " . $nama['Nama']."\n";
    echo "Golongan : " . $nama['Golongan']."\n";
    echo "KWH : " . $nama['KWH']."\n";
    echo "Bayar : ";
        if ($nama ['Golongan'] == "I"){
            $tarif = $gol1;

        }else {
            $tarif = $gol2;
        }
        if ($nama ['KWH']<100){
            echo 100*$tarif."\n\n";
        }else if ($nama['KWH']>=1000){
            echo ($nama['KWH']*$tarif)+(0.1*($nama['KWH']*$tarif))."\n\n";
        }else{
            echo $nama['KWH']*$tarif."\n\n";
        }
});

?>