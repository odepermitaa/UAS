<?php
echo "Masukkan jam kerja : ";
$jam_kerja = trim(fgets(STDIN));
echo "Masukkan golongan kerja : ";
$gol_kerja = trim(fgets(STDIN));

$jam_kerja = array(     array( 
    "Golongan" => "I", 
    "Upah" => 3000 
),     array( 
    "Golongan" => "II", 
    "Upah" => 3500 
),     array( 
    "Golongan" => "III", 
    "Upah" => 4000 
), 
array( 
    "Golongan" => "IV", 
    "Upah" => 5000 
) ); 



if ($jam_kerja<=40) {
    $upah=$jam_kerja*$gol_kerja;
    
    
    
    echo "Total Gaji  : Rp.$upah";

}else{
    echo "gaji : ". $jam_kerja*$gol_kerja*1,5; 
}






?>