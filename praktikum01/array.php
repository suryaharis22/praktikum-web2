<?php
//Buat array

$animals = ["Burung","Kucing","Nyamuk","Singa"];
echo $animals[1]."<br>";
echo $animals[3];

echo "<br><br>";

foreach($animals as $an){
    echo $an ."<br>";
}

echo "<br><hr>";


//array asosiatif

$mahasiswa =[
    "nama"      => "Surya Azhar",
    "jurusan"   => "TI",
    "semester"  =>  "2"
];

echo $mahasiswa['jurusan'];
echo "<br>";
foreach ($mahasiswa as $key=>$value){
    echo "key :". $key ."Value:". $value . "<br>";
}

echo "<br><hr>";


//array Multidimensi didalam array ada array
$dosen =[
    ["Pak Rojul", "web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukma", "OS"]
];

echo $dosen[0][0];
echo "<br>";
echo $dosen[2][0];



?>