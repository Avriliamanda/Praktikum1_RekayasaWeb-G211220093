<?php
// Membuat variabel JSON
$json_string = '{"Nama": "Maritza", "NIM": 211220093, "Matkul": "Rekayasa Web"}';

// Decode JSON menjadi PHP Object
$object = json_decode($json_string);

// Akses nilai dari PHP Object
echo $object->Nama;
echo $object->NIM;  
echo $object->Matkul;

?>