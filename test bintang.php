<?php

function cetak_bintang($angka)
    {
        for ($x=$angka; $x>0; $x--) {
            for ($z=$angka; $z>=$x; $z--) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>

    <?= cetak_bintang(5); ?>