<?php
/* 
    Muhammad Fasha G. N.
    203040172
    https://github.com/mfgn26/pw2021_203040172.git
    Pertemuan 7( 26 Februari 2021 )
    Materi Minggu ini mempelajari mengenai GET & POST
*/
?>

<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Muhammad Fasha G. N.", 
        "nrp" => "203040172",
        "email" => "mfashagn@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mfgn.jpg"
    ],
    [
        "nama" => "Bambang Pamungkas", 
        "nrp" => "203040152",
        "email" => "GPtM@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "mfgn.jpg"
    ]
];
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
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
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>