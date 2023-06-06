<?php
    interface HitungBangun {
        public function luas($lebar, $tinggi);
    }

    class BangunDatar implements HitungBangun {
        public $lebar, $tinggi;
        public $hasil;

        public function luas($lebar, $tinggi) {
            $this->lebar = $lebar;
            $this->tinggi = $tinggi;
            $this->hasil = $this->lebar * $this->tinggi;
            return $this->hasil;
        }
    }

    $persegi = new BangunDatar();
    echo "Hasil Luas Persegi : ".$persegi->luas(4, 6);
?>