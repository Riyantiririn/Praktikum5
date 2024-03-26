<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengolahan</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Mengubah warna teks untuk keterangan dan informasi */
        th.keterangan {
            color: blue;
        }
        th.informasi {
            color: green;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    // Menghitung grade berdasarkan nilai
    if ($nilai >= 80) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } elseif ($nilai >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Hasil lulus atau tidak
    $hasil = $nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
?>
    <table>
        <tr>
            <!-- Menggunakan class untuk masing-masing teks keterangan dan informasi -->
            <th class="keterangan">Keterangan</th>
            <th class="informasi">Akhir</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td><?php echo $nilai; ?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><?php echo $grade; ?></td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td><?php echo $hasil; ?></td>
        </tr>
    </table>
<?php
} else {
    // Jika tidak ada data yang dikirimkan melalui POST
    echo "Tidak ada data yang dikirimkan.";
}
?>

</body>
</html>

