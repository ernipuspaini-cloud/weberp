<?php
// Data biodata
$nama = "Erni Puspaini";
$tempat_tanggal_lahir = "Lombok Timur, 29 Januari 2006";
$jenis_kelamin = "Perempuan";
$alamat = "Bengkel, Desa Senyiur, Lombok Timur";
$prodi = "Pendidikan Informatika";
$kampus = "Universitas Hamzanwadi";
$hobi = "Bernyanyi, Tilawah, Desain, Coding";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        td {
            padding: 8px;
        }
        .narasi {
            margin-top: 20px;
            line-height: 1.6;
            text-align: justify;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Biodata Diri</h1>

    <table>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>: <?php echo $tempat_tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>: <?php echo $prodi; ?></td>
        </tr>
        <tr>
            <td>Kampus</td>
            <td>: <?php echo $kampus; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>: <?php echo $hobi; ?></td>
        </tr>
    </table>

    <div class="narasi">
        <p>
            Saya adalah seorang mahasiswi yang sedang menempuh pendidikan di bidang informatika.
            Saya memiliki minat yang besar dalam dunia teknologi, serta aktif mengembangkan kemampuan
            di bidang desain dan pemrograman. Selain itu, saya juga memiliki ketertarikan dalam seni suara
            dan tilawah Al-Qur’an yang membantu saya dalam menjaga keseimbangan antara akademik dan non-akademik.
            Dengan semangat belajar yang tinggi, saya berusaha untuk terus berkembang dan memberikan
            kontribusi yang positif di masa depan.
        </p>
    </div>
</div>

</body>
</html>