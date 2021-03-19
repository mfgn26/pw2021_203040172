<?php
/* 
    Muhammad Fasha G. N.
    203040172
    https://github.com/mfgn26/pw2021_203040172.git
    Pertemuan 6( 24 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Muhammad Fasha G. N.", "203040172", "TIF", "mfashagn@gmail.com."],
//     ["Sumile", "203040152", "TI", "LRtI@gmail.com"],
//     ["Duki", "203040153", "TM", "SWtM@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Muhammad Fasha G. N.", 
        "nrp" => "203040172",
        "email" => "mfashagn@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mfgn.jpg"
    ],
    [
        "nama" => "Bintang A. Y.", 
        "nrp" => "203042017",
        "email" => "FBAY@gmail.com",
        "jurusan" => "Teknik Arc.",
        "gambar" => "mfgn.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>