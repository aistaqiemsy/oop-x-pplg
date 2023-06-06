<?php
   class Sekolah {
      var $nama = "SMK Wikrama Bogor",
          $warna = "Jingga",
          $jumlahRuang = 100,
          $jmlSiswa = 1800;

          function gerbangBuka() {
            return "saat ini dibuka...";
          }

          function gerbangTutup() {
            return "saat ini ditutup...";
          }
   }

   $sekolah1 = new Sekolah();
   $sekolah2 = new Sekolah();

   echo var_dump($sekolah1);
   echo "<br>";
   $sekolah2->nama = "SMPN 3 Megamendung";
   echo var_dump($sekolah2); 
   echo "<br>";
   echo "Gerbang : ".$sekolah2->gerbangBuka();
   echo "<br>";
   echo "Gerbang : ".$sekolah2->gerbangTutup();
   
   
   
   
   
   
   
   
   
   
   
   
   // class Manusia {
   //       var $warnaRambut = "Hitam",
   //          $warnaKulit = "Sawo Matang",
   //          $bolaMata = "Biru",
   //          $usia = 18;

   //          function lari() {
   //             return "Sekarang lari...";
   //          }

   //          function jalan() {
   //             return "Sekarang berjalan...";
   //          }
   // }

   // $arif = new Manusia();
   // $rahmat = new Manusia();
   // echo"CEK PEMBUATAN OBJEK";
   // echo "<hr>";
   // echo var_dump($arif);
   // echo "<br>Warna mata : ".$arif->bolaMata="Biru";
   
   // echo "<br>";
   // echo var_dump($rahmat);
?>