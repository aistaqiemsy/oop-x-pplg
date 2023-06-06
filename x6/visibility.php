<?php
    class Sekolah {
        private $nama;
        public $alamat;

        public function tampilNama($nama) {
           echo "Nama sekolah saya : ".$this->$nama = $nama;
        }
    }

    $sekolah1 = new Sekolah();
    $sekolah1->tampilNama("Wikrama Bogor");

?>