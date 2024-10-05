<?php
// Membuat array
$array = [
    "Nama" => "Maritza",
    "NIM" => 211220093,
    "Matkul" => "Rekayasa Web"
];

// Encode ke format JSON
$json_data = json_encode($array);

echo $json_data;
?>