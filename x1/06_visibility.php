<?php
    class Sekolah {
        public $nama;
        private $alamat = "Cicurug";
        protected $telepon = 123;

        function tampilSekolah() {
            echo $this->alamat;
        }
    }

    $Sekolah1 = new Sekolah();

    // $Sekolah1->nama = "Wikrama";
    // echo $Sekolah1->tampilSekolah("Wikrama Banjarmasin");
    echo $Sekolah1->telepon;



































    // class Sekolah {
    //     public $nama = "Wikrama";
    //     protected $alamat = "Jl. Raya Wangun";
    //     private  $telepon = "08838";

    //     public function tampilSekolah() {
    //         return "Sekolah saya ".$this->nama." beralamat ".$this->alamat." dengan nomor telepon ".$this->telepon."";
    //     }

    //     public function showDataBaru() { // akses perubahan melalui method dalam class
    //         echo $this->nama = "Wikrama Garut<br>";
    //         echo $this->alamat = "Garut<br>";
    //         echo $this->telepon = "Telepon Garut<br>";
    //     }
    // }

    // class filialSekolah extends Sekolah {
    //     public function tampilSekolah() {
    //         return "Sekolah saya ".$this->nama." beralamat ".$this->alamat." dengan nomor telepon ".$this->telepon."";
    //     }
    // }

    // $sekolah1 = new Sekolah();

    // echo $sekolah1->tampilSekolah();
    // echo "<br>";
    // echo $sekolah1->showDataBaru();

    // echo "<hr>";

    // $filialSekolah = new filialSekolah();
    // $filialSekolah->nama = "SMAN 01 Ciawi";
    // $filialSekolah->alamat = "Ciawi";
    // $filialSekolah->telepon = "077387";

    // //properti public
    // echo "Nama sekolah : ".$filialSekolah->nama;

    // //properti protected
    // // echo "Alamat : ".$filialSekolah->alamat;
    
    // //properti protected
    // echo "Telepon : ".$filialSekolah->telepon;
    // // $filialSekolah->alamat = "Jl. Raya Tajur 04 Ciawi";
    // // $filialSekolah->telepon = "87773635882";
    // // echo $filialSekolah->tampilSekolah();
?>