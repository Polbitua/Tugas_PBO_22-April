<?php
class Counter {
    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }
}

new Counter();
new Counter();

echo "Jumlah objek: " . Counter::$jumlah;
?>