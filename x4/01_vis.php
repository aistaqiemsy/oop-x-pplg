<?php
    class Sekolah {
        private $nama;
        protected $jumlahSiswa = 50;

        function tampilSekolah() {
            echo $this->nama = "Wikrama Bogor";
        }
    }

    class filialSekolah extends Sekolah {
        function tampilJumlah() {
            echo $this->jumlahSiswa;
        }
        
        function tampilNama() {
            echo $this->nama;
        }
    }

    $sekolah1 = new Sekolah();
    $sekolah2 = new filialSekolah();

    echo $sekolah1->tampilSekolah();
    echo "<br>Jumlah Siswa : ";
    echo $sekolah2->tampilJumlah();
    echo "<hr>Nama Sekolah : ";
    echo $sekolah2->tampilNama();
?>