<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="angka1" id="1">
        <input type="number" name="angka2" id="1">
        <input type="submit" name="kirim" value="Operasikan">
    </form>

    <?php
    class Aritmatika {
        public $angka1, $angka2;

        public function tambah($angka1, $angka2) {
            $this->angka1 = $angka1;
            $this->angka2 = $angka2;
            $hasil = $this->angka1 + $this->angka2;
            if ( $hasil > 80 ) {
                return "Nilai anda ".$hasil." dengan grade B";
            } else {
                return "Dibawah 80";
            }
        }

    }

    $hitung = new Aritmatika();

        if(isset($_POST['kirim'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            echo $hitung->tambah($angka1, $angka2);
        } 
    ?>
</body>
</html>