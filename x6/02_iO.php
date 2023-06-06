<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I/O TextField</title>
</head>
<body>
    <form action="#" method="post">
        Masukan nama anda <br>
        <input type="text" name="txNama" id="">
        <input type="submit" value="Simpan" name="btSimpan">
    </form>
</body>
</html>

<?php

    class Biodata {
        public $nama;

        public function setNama($nama) {
            $this->nama = $nama;
            if ($this->nama != "") {
                return $nama;
            } else {
                return "Data butuh diisi!"; 
            }
            
        }
    }

    $biodata = new Biodata();
    if(isset($_POST['btSimpan'])) {
        echo $biodata->setNama($_POST['txNama']);
    }
?>