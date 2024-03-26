<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manusia</title>
<style>
    .container {
        text-align: center;
    }
</style>
</head>
<body>

<div class="container">
    <?php

    class Manusia {
        // Properti
        public $nama;
        public $umur;

        // Metode
        public function setNama($nama) {
            $this->nama = $nama;
        }

        public function setUmur($umur) {
            $this->umur = $umur;
        }

        public function getInfo() {
            return "Nama: " . $this->nama . ", Umur: " . $this->umur;
        }
    }

    // Membuat objek
    $orang = new Manusia();
    $orang->setNama("Riyanti");
    $orang->setUmur(18);
    echo $orang->getInfo();  // Output: Nama: Riyanti, Umur: 18

    ?>
</div>

</body>
</html>
