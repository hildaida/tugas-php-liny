<?php 
// $mahasiswa = [
//     ["hilda yanti", "043040023", "hildaidha12@gmail.com", "rekayasa perangkat lunak"],
//     ["nur afni", "041040001", "afni25@gmail.com", "rekayasa perangkat lunak"]
// ];




// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "hilda yanti",
    "NRP" => "043040023",
    "email" => "hildaidha12@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "1.jpg"
    ],
    [
    "nama" => "nur afni",
    "NRP" => "041040001",
    "email" => "afni25@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "2.jpg"
    ],
    [
    "nama" => "fitri yani",
    "NRP" => "041040002",
    "email" => "yani99@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "3.jpg"
    ],
    [
    "nama" => "raisa",
    "NRP" => "041040007",
    "email" => "raisa44@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "4.jpg"
    ]
];
echo $mahasiswa[1]["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>