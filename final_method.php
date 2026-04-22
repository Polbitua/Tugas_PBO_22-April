<?php
class Induk {
    final public function aturan() {
        echo "Ini aturan tetap";
    }
}

class Anak extends Induk {}

$a = new Anak();
$a->aturan();
?>