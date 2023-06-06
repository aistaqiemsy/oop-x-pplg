<?php
    interface hitung {
        public function hitungLuas();
        public function hitungKeliling();

    }

    abstract class Jenis {
        abstract public function jenisBangun();
    }

    class Persegi implements hitung {
        private $panjang = 5;
        private $lebar = 6;
        public function hitungLuas() {

            return $this->panjang*$this->lebar;
        }

        public function hitungKeliling() {
            return ($this->panjang+$this->lebar)*2;
        }

    }

    $tampilHitungPersegi = new Persegi();
    echo "Luas persegi : ".$tampilHitungPersegi->hitungLuas().
         ", memiliki keliling : ".$tampilHitungPersegi->hitungKeliling();
?>