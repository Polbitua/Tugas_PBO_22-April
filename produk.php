<?php
class Produk {
    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }

    public static function totalProduk() {
        return self::$jumlahProduk;
    }
}

class Transaksi {
    final public function prosesTransaksi($produk) {
        echo "Transaksi berhasil untuk produk: " . $produk->nama .
             " dengan harga Rp" . $produk->harga . "<br>";
    }
}

// Membuat produk
$p1 = new Produk("Laptop", 7000000);
$p2 = new Produk("Smartphone", 3000000);
$p3 = new Produk("Headset", 500000);

echo "Total Produk: " . Produk::totalProduk() . "<br><br>";

$transaksi = new Transaksi();
$transaksi->prosesTransaksi($p1);
$transaksi->prosesTransaksi($p2);
$transaksi->prosesTransaksi($p3);
?>
