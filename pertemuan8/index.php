<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() // mengambil array numerik
// mysqli_fetch_assoc() 
// mysqli_fetch_array()
// mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result) );
//     var_dump($mhs["nama"]);

// var_dump($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
<?php ?>
    <tr>
        <td>1</td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/1.jpg" width="50"></td>
        <td>043040023</td>
        <td>hilda yanti</td>
        <td>hildaidha12@gmail.com</td>
        <td>rekayasa perangkat lunak</td>
    </tr>


</table>

</body>
</html>