<?php 

//Buat Looping For
for ($i=1; $i <= 10; $i++) { 
    echo $i . "<br>";
}

//buat Looping jarak 2
echo "<H3>Looping Pertama</h3>";
for ($i=2; $i <= 20 ; $i+=2) { 
   echo $i . " - I Love PHP" . "<br>";
}

//buat Looping jarak 2
echo "<H3>Looping Kedua</h3>";
for ($i=20; $i >= 2 ; $i-=2) { 
    echo $i . " - I Love PHP" . "<br>";
 }

 //Buat array Loop
 echo "<H3>Array Loop</h3>";
 $buah = ["Mangga", "Apel", "Anggur"];

 foreach ($buah as $b) {
    echo $b . "<br>";
 }
?>