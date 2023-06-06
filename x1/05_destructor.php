<?php
   class Manusia {
        var $warnaRambut = "Hitam",
            $warnaKulit = "Sawo Matang",
            $bolaMata = "Biru",
            $usia = 18;

            public function __construct() {
               echo "Hi, saya sebuah konstruktor!";
            }

            public function __destruct() {
               echo "<br>Hi, saya sebuah destruktor!<br>";
            }

            function lari() {
               return "Sekarang lari...";
            }

            function jalan() {
               return "Sekarang berjalan...";
            }
   }

   $x = new Manusia(); // setiap kali membuat objek, =konstruktor juga otomatis terpanggil
   echo "<br>X ". $x->lari()."<br>";
   echo "X ".$x->jalan();

?>