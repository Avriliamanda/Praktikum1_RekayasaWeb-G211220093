<?php
// Membuat variabel JSON
$json_string = '{"Nama": "Maritza", "NIM": 211220093, "Matkul": "Rekayasa Web"}';

// Decode JSON menjadi PHP Array
$array = json_decode($json_string, true);

// Akses nilai dari PHP Array
echo "Nama : " . $array['Nama'] . "\n";  
echo "NIM : " . $array['NIM'] . "\n";    
echo "Matkul : " . $array['Matkul'] . "\n";

?>