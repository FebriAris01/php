<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$ling = new Lingkaran(12);
$pp = new PersegiPanjang(6, 2);
$segi = new Segitiga(8, 6);

$nama_bidang = [$ling, $pp, $segi];

$arrJudul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container p-4">
        <h3 class="text-center">Luas & Keliling Bangun Datar</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 my-2">
                <table class="table table-bordered border-primary">
                    <thead class="table-success">
                        <tr>
                            <?php
                            foreach ($arrJudul as $judul) {
                            ?>
                                <th><?= $judul ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $ket = [$no =>'Jari-Jari = 12', 
                                      'Panjang = 6 <br> Lebar = 2', 
                                      'Alas = 8 <br> Tinggi = 6 <br> Sisi Miring = 10'];
                        foreach ($nama_bidang as $bidang) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $bidang->namaBidang() ?></td>
                                <td><?= $ket[$no] ?></td>
                                <td><?= $bidang->luasBidang() ?></td>
                                <td><?= $bidang->kelilingBidang() ?></td>
                            </tr>
                        <?php $no++;} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>