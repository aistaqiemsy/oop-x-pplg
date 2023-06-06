<?php
    class Nilai {
        public $indo;
        public $mtk;
        public $prod;

        public function tampilNilai($indo, $mtk, $prod) {
            $this->indo = $indo;
            $this->mtk = $mtk;
            $this->prod = $prod;

            $averageNilai = ($this->indo+$this->mtk+$this->prod ) / 3;
            
            if ($averageNilai > 90) {
                return 
                "Nilai Bahasa Indonesia : $this->indo <br>".
                "Nilai Matematika : $this->mtk <br>".
                "Nilai Produktif : $this->prod <br>".
                "Rata-Rata : $averageNilai dengan Grade A";
            } else if ($averageNilai >= 80 ) {
                return 
                "Nilai Bahasa Indonesia : $this->indo <br>".
                "Nilai Matematika : $this->mtk <br>".
                "Nilai Produktif : $this->prod <br>".
                "Rata-Rata : $averageNilai dengan Grade B";
            } else {
                return 
                "Nilai Bahasa Indonesia : $this->indo <br>".
                "Nilai Matematika : $this->mtk <br>".
                "Nilai Produktif : $this->prod <br>".
                "Rata-Rata : $averageNilai dengan status nilai < 80";
            }
        }
    }

    $nilaiSiswa = new Nilai();
    echo "Fatah <br> ".$nilaiSiswa->tampilNilai(80, 78, 90);
    echo "<hr>Qarib <br> ".$nilaiSiswa->tampilNilai(100, 100, 99);

?>