<?php
    class Aritmatika {
        public $angka1, $angka2;

        public function tambah($angka1, $angka2) {
            $this->angka1 = $angka1;
            $this->angka2 = $angka2;

            return $this->angka1 + $this->angka2;
        }

    }

    $hitung = new Aritmatika();

    echo $hitung->tambah(3, 4);
?>