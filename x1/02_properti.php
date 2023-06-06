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
   echo"CEK PEMBUATAN OBJEK";
   echo "<hr>";
   echo var_dump($arif);
   echo "<br>";
   echo var_dump($rahmat);
   echo "<hr>";
   echo"AKSES PROPERTI";
   echo "<br>";
   echo "Nama : Arif<br>";
   echo "Warna kulit : ".$arif->warnaKulit."<br>Warna rambut : ".$arif->warnaRambut;
?>