<?php 
// $_GET

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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&NRP=<?= $mhs["NRP"]; ?>
                &email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>      
    <?php endforeach; ?>
    </ul>
</body>
</html>