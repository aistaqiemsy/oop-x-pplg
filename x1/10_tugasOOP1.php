<?php
    class Sekolah {
        public $nama;
        public $alamat;
        private $jumlahSiswa;
        protected $jumlahGuru;
        protected $jumlahKelas;

        //public function sebagai setter dan menampilkan data
        function setData($nama, $alamat, $jumlahSiswa, $jumlahGuru, $jumlahKelas) {
            echo "Sekolah ".$this->nama = $nama." beralamat di ".$this->alamat = $alamat.
            " dengan jumlah siswa ".$this->jumlahSiswa = $jumlahSiswa." dan jumlah guru ".$this->jumlahGuru = $jumlahGuru.
            " serta fasilitas jumlah kelas ".$this->jumlahKelas = $jumlahKelas;
        }
    }

    $sekolah1 = new Sekolah();
    echo $sekolah1->setData("Wikrama", "Tajur", 100, 50, 21);
    echo "<hr>";
    class filialSekolah extends Sekolah {
        function ambilDataParents($nama, $alamat) {
            $this->nama = $nama;
            $this->alamat = $alamat;
            echo $this->setData($nama, $alamat, 150, 75, 20);
        }
    }

    $sekolah2 = new filialSekolah();
    echo $sekolah2->ambilDataParents("Wikrama Garut", "Garut");
?>