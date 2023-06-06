<?php
    interface doWhat{
        public function berbunyi($bunyi);
    }

    abstract class Hewan implements doWhat{
        abstract public function NamaHewan($nama);
    }

    class NamaHewan extends Hewan {
        var $nama, $bunyi;
        function namaHewan($nama) {
            $this->nama = $nama;
            return $nama;
        }
        function berbunyi($bunyi) {
            $this->bunyi = $bunyi;
            return $bunyi;
        }

        function tampilData() {
            echo "Hewanmu : ".$this->nama."<br>";
            echo "Berbunyi : ".$this->bunyi."<br>";
        }
    }

    $hewanku = new NamaHewan();
    $hewanku->namaHewan("Kuda");
    $hewanku->berbunyi("Tertawa");
    $hewanku->tampilData();

?>