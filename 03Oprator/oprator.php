<!-- 1. Operator Aritmatika -->
<!-- 
Nama Operator	Simbol
Penjumlahan        +
Pengurangan 	   -
Perkalian          *
Pemangkatan	       **
Pembagian	        /
Sisa Bagi	        %
-->
<?php

function perkenalan(){
    echo "Assalamulaikmu, ";
    echo "Perkenalkan, nama saya Chandra<br/>";
    echo "Kelas XI RPL<br/>";
  }

  perkenalan();

  echo "<hr>";

$a = 5;
$b = 2;
// penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";
// pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";
// Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";
// Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";
// Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";
// Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>"; 


// 2. Operator Penugasan
// Nama Operator	                    Sombol
// Pengisian Nilai	                     =
// Pengisian dan Penambahan	            +=
// Pengisian dan Pengurangan	        -=
// Pengisian dan Perkalian	            *=
// Pengisian dan Pemangkatan	        **=
// Pengisian dan Pembagian	            /=
// Pengisian dan Sisa bagi	            %=
// Pengisian dan Peggabungan (string)	.=
$speed = 83;
// ini opertor aritmatika
$speed = $speed + 10;
// maka nilai speed akan samadengan 83 + 10 = 93
// ini operator penugasan
$speed += 10;
// sekarang nilai speed akan menjadi 93 + 10 = 103


// 3. Opeartor Increment & Decrement
$score = 10;
$score++;
$score++;
$score++;
echo $score;


// 4. Operator Relasi
// Nama Operator	              Simbol
// Lebih Besar	                    >
// Lebih Kecil	                    <
// Sama Dengan	                == atau ===
// Tidak Sama dengan	        != atau !==
// Lebih Besar Sama dengan	        >=
// Lebih Kecil Sama dengan	        <=
$a = 6;
$b = 2;
// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";
// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";


// 5. Operator Logika
// Nama Operator       	Simbol
// Logika AND      	      &&
// Logika OR	              ||
// Negasi/kebalikan/ NOT	  !
$a = true;
$b = false;
// variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";
// variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";
// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";


// 6. Operator Bitwise
// Nama	        Simbol di Java
// AND	                    &
// OR	                    |
// XOR                 	    ^
// Negasi/kebalikan	        ~
// Left Shift	            <<
// Right Shift	            >>
$a = 60;
$b = 13;
// bitwise AND
$c = $a & $b;
echo "$a & $b = $c";
echo "<br>";
// bitwise OR
$c = $a | $b;
echo "$a | $b = $c";
echo "<br>";
// bitwise XOR
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<br>";
// Shift Left
$c = $a << $b;
echo "$a << $b = $c";
echo "<br>";
// Shift Right
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<br>";


// 7. Operator Ternary
$suka = true;
// menggunakan operator ternary
$jawab = $suka ? "iya": "tidak";
// menampilkan jawaban
echo $jawab;
echo $suka;


?>