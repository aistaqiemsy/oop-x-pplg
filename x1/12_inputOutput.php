<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Input Output</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Angka 1</td>
                <td><input type="text" name="angka" id="1"></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td><input type="text" name="angka2" id="2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    
    <hr>

    <?php
        class Siswa {
            public $angka, $angka2;
           function setAngka($angka, $angka2) {
            $this->angka = $angka;
            $this->angka2 = $angka2; 

                if ($angka == 0 && $angka2 == 0 ) {
                    return "0! Tidak boleh..";
                } else if ($angka == null) {
                    return "Data Kosong!";
                } else {
                    return $angka;
                }        
           }
        }

        $tampilNama = new Siswa();

        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];
                
            echo $tampilNama->setAngka($angka, $angka);
        }
    ?>
</body>
</html>