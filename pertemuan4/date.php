<?php 
// date
// untuk menampilkan tanggal dengan format tertentu
// l itu menampilkan hari
//     echo date("l");
// d menampilkan tanggal
//     echo date("d");
// M menampilkan bulan
//     echo date("M");
// echo date("l, d-M-Y");

// time
// UNUX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970 sampai saat ini
// echo time  ();
// echo date("l", time()+172800);
// echo date("l", time()+60*60*24*10);
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik yang sudah berlalu
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,11,25,2005));

// strtotime
echo date("l", strtotime("25 november 2005"));


?>