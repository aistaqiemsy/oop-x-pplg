<?php

    interface bangunRuang{
        function balok();
    }
    abstract class Perhitungan implements bangunRuang {

        var $sisi1,
            $sisi2, 
            $sisi3;
        abstract public function luas($_panjang, $_lebar);
        public $hasil;

        public function balok(){
            $result = $this->sisi1 * $this->sisi2 * $this->sisi3;
            return $result;
        }
    }

    class Persegi extends Perhitungan {
        public $panjang, $lebar;

        public function luas($_panjang, $_lebar) {
            $this->hasil = $this->panjang = $_panjang * $this->lebar = $_lebar;
            
            return $this->hasil; 
        }
    }

    class Kubus extends Perhitungan{
        function hasil(){
            
        }
    }
    $bangunDatar = new Persegi();
    $luasPersegi = $bangunDatar->luas(10, 8);

    echo "Hasil hitung luas persegi dengan panjang "
        .$bangunDatar->panjang." dan lebar "
        .$bangunDatar->lebar." yaitu : ".$luasPersegi;
?>