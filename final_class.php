<?php
final class Database {
    public function konek() {
        echo "Database terkoneksi";
    }
}

$db = new Database();
$db->konek();
?>