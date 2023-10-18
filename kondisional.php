<?php
$angka = -5;
if($angka < 0){
    echo 'Angka negatif';
} else {
    echo'Angka positif ';
};
//Output : Angka Negatif
$input = 3;
switch($input){
    case "1":
    echo"Inputan adalah satu";
    break;
    case "2":
    echo"Inputan adalah dua";
    break;
    case "3":
    echo"Inputan adalah tiga";
    break;
    default:
    echo"Tidak ada input yang cocok dengan pilihan anda.";
    }
    /* Output: Inputan adalah tiga
    Jika nilai dari variable `$input` bukan sama dengan `case`,
    maka akan menampilkan pesan “Tidak ada input yang cocok
    */
?>