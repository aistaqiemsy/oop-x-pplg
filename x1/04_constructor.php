<?php
   class Manusia {
        var $warnaRambut = "Hitam",
            $warnaKulit = "Sawo Matang",
            $bolaMata = "Biru",
            $usia = 18;

            // public function __construct() {
            //    echo "Hi, saya sebuah konstruktor!";
            // }

            public function __construct() {
               echo "Hi, saya berasal dari method konstruktor!";
            }

            function lari() {
               return "Sekarang lari...";
            }

            function jalan() {
               return "Sekarang berjalan...";
            }
   }

   $arif = new Manusia(); // setiap kali membuat objek, =konstruktor juga otomatis terpanggil
   echo "<br>Arief : ".$arif->jalan()."<br>";

   $lastria = new Manusia();
   $lastria1 = new Manusia();
   $lastria2 = new Manusia();
?>