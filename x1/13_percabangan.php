<?php
    class Pilihan {
        public $uang;

        public function pilihanUang($uang) {
            $this->uang = $uang;

            if ($this->uang > 50000000) {
                return "Beli Mobil";
            } else {
                return "Beli Motor";
            }
        }
    }

    $beli = new Pilihan();
    echo $beli->pilihanUang(100);
?>