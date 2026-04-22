<?php
class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

echo "Kali: " . Matematika::kali(4, 5) . "<br>";
echo "Bagi: " . Matematika::bagi(10, 2) . "<br>";
echo "Tambah: " . Matematika::tambah(7, 3) . "<br>";
echo "Kurang: " . Matematika::kurang(10, 4) . "<br>";
echo "Luas Persegi (sisi=6): " . Matematika::luasPersegi(6);
?>
