<?php
    class Sekolah {
        public $nama;
        private $jmlSiswa;

        function setJmlSiswa($jumlah) {
            $this->jmlSiswa = $jumlah;
        }

        function getSiswa() {
            return $this->jmlSiswa;
        }
    }

    $sekolah1 = new Sekolah();

    $sekolah1->nama = "Wikrama";
    echo $sekolah1->nama;
?>