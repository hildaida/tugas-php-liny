<?php 
// function (menyelesaikan tugas tertentu)
// return (eksekusi fungsi berhenti dan nilai dikembalikan (retun) ke pemanggilan fungsi)

function salam($waktu, $nama) {
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latiahn function</title>
</head>
<body>
    <h1><?= salam("pagi", "hilda"); ?></h1>
</body>
</html>