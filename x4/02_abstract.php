<?php
    abstract class Properti {
        public $nama;
        protected $alamat;
        private $telepon;

        abstract public function setValue($alamat, $telepon);
    }

    class Sekolah extends Properti {
        public function setValue($alamat, $telepon) {
            $this->alamat = $alamat;
            $this->telepon = $telepon;
        }

        public function tampilData() {
            return "$this->nama <br> $this->alamat <br> $this->telepon";
        }
    }

    $wikrama = new Sekolah();
    $wikrama->nama = "SMK Wikrama Bogor";
    $wikrama->setValue("Bogor", "9277394");

    echo $wikrama->tampilData();

?>