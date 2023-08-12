<?php
function luas_lingkaran($jari_jari) {
    $luas = 3.14 * $jari_jari * $jari_jari;
    return number_format($luas, 2);
}

function keliling_lingkaran($jari_jari) {
    $keliling = 2 * 3.14 * $jari_jari;
    return number_format($keliling, 2);
}

function luas_persegi($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return number_format($luas, 2);
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $panjang = $i / 3;
        $lebar = $i / 5;
        echo luas_persegi($panjang, $lebar) . PHP_EOL;
    } elseif ($i % 3 == 0) {
        $jari_jari = $i / 3;
        echo luas_lingkaran($jari_jari) . PHP_EOL;
    } elseif ($i % 5 == 0) {
        $jari_jari = $i / 5;
        echo keliling_lingkaran($jari_jari) . PHP_EOL;
    } else {
        echo number_format($i, 2) . PHP_EOL;
    }
}
