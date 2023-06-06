<?php
    class Sekolah {
        public $nama;
        private $alamat = "Cicurug";
        protected $telepon = 123;

        function tampilSekolah() {
            echo $this->alamat;
        }
    }

    class filialSekolah extends Sekolah {
        function tampilAlamat() {
            echo $this->alamat;
        }
    }

    $Sekolah1 = new filialSekolah();

    // $Sekolah1->nama = "Wikrama";
    // echo $Sekolah1->tampilSekolah("Wikrama Banjarmasin");
    echo $Sekolah1->tampilAlamat();