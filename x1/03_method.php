<?php
   class Manusia {
        var $warnaRambut = "Hitam",
            $warnaKulit = "Sawo Matang",
            $bolaMata = "Biru",
            $usia = 18;

            function lari() {
               return "Sekarang lari...";
            }

            function jalan() {
               return "Sekarang berjalan...";
            }
   }

   $arif = new Manusia();
   $rahmat = new Manusia();
   
   echo "Warna kuliat : ".$arif->warnaKulit."<br>";
   echo "Arief sekarang : ".$arif->jalan()."<br>";

?>