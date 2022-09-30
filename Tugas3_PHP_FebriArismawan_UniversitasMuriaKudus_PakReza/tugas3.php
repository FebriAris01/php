<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>'202201001','nama'=>'Rizal Fauzi','nilai'=>87];
$m2 = ['nim'=>'202201002','nama'=>'Indah Pertiwi','nilai'=>71];
$m3 = ['nim'=>'202201003','nama'=>'Ferdi Rahayu','nilai'=>96];
$m4 = ['nim'=>'202201004','nama'=>'Anang Trias','nilai'=>75];
$m5 = ['nim'=>'202201005','nama'=>'Hendra Musthofa','nilai'=>40];
$m6 = ['nim'=>'202201006','nama'=>'Sandi Ana','nilai'=>60];
$m7 = ['nim'=>'202201007','nama'=>'Joko Suroso','nilai'=>65];
$m8 = ['nim'=>'202201008','nama'=>'Karin Yunita','nilai'=>86];
$m9 = ['nim'=>'202201009','nama'=>'Jaya Hartono','nilai'=>56];
$m10 = ['nim'=>'202201010','nama'=>'Vivi Putri','nilai'=>77];

$ar_judul = ['No','NIM','Nama','Nilai','Keterangan',
'Grade','Predikat'];

$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah_mhs = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_mhs;

$informasi = [
    'Jumlah Mahasiswa'=>$jumlah_mhs,
    'Total Nilai'=>$total_nilai,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata-rata'=>$rata2
];
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 3 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <div class="row justify-content-center">
        <div class = "col-md-6 px-2 my-2">
        <table class="table table-bordered table-striped border-dark">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th class ="table-dark"><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
    
                if ($mhs['nilai'] >=85) $grade = "A";
                    else if ($mhs['nilai'] >=75 && $mhs['nilai'] <85) $grade = "B";
                        else if ($mhs['nilai'] >=60 && $mhs['nilai'] <75) $grade = "C";
                            else if ($mhs['nilai'] >=50 && $mhs['nilai'] <60) $grade = "D";
                                else $grade = "E";

                $ket = ($mhs['nilai'] >=60 )?"Lulus":"Gagal";
                
                switch ($grade) {
                    case 'A': $predikat = "Memuaskan"; break;
                    case 'B': $predikat = "Baik"; break;
                    case 'C': $predikat = "Cukup"; break;
                    case 'D': $predikat = "Kurang"; break;
                    case 'E': $predikat = "Buruk"; break;
                    default: $predikat = '';
                    }

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($informasi as $info => $hasil) {
                ?>
                <tr>
                    <th colspan="6" class ="text-center"><?= $info ?></th>
                    <th class ="text-center"><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>
