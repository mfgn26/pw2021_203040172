<<<<<<< HEAD
<?php
/*
Muhammad Fasha Ginting Najiyulloh
203040172
https://github.com/mfgn26/pw2021_203040172.git
Pertemuan 3 - 18 Februari 2021
Belajar mengenai variabel pada PHP 
*/
?>
<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//   echo "Hello World! <br>";
// }
// $i = 10;
// while( $i < 5 ) {
//  echo "Hello World! <br>";
// $i++;
// }
// $i = 10;
// do {
//   echo "Hello World! <br>";
// $i++;
// } while( $i < 5 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver; 
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php if( $i % 2 == 1 ) : ?>
        <tr class = "warna-baris">
    <?php else : ?>
        <tr>
    <?php endif; ?>
        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
            <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
        </tr>
            <?php endfor; ?>
    </table> 
</body>
=======
<?php
/*
Muhammad Fasha Ginting Najiyulloh
203040172
https://github.com/mfgn26/pw2021_203040172.git
Pertemuan 3 - 18 Februari 2021
Belajar mengenai variabel pada PHP 
*/
?>
<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//   echo "Hello World! <br>";
// }
// $i = 10;
// while( $i < 5 ) {
//  echo "Hello World! <br>";
// $i++;
// }
// $i = 10;
// do {
//   echo "Hello World! <br>";
// $i++;
// } while( $i < 5 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver; 
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php if( $i % 2 == 1 ) : ?>
        <tr class = "warna-baris">
    <?php else : ?>
        <tr>
    <?php endif; ?>
        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
            <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
        </tr>
            <?php endfor; ?>
    </table> 
</body>
>>>>>>> f28fa6f081f2ff5cdb7cd428e14b7e4f33391a7e
</html>