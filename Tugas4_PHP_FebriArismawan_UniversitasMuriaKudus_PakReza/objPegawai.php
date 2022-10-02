<?php
require 'tugas4.php';

$p1 = new Pegawai('109','Alam Saputra','Asisten Manajer','Islam','Menikah');
$p2 = new Pegawai('576','Sano Indah','Manajer','Hindu','Belum Menikah');
$p3 = new Pegawai('230','Nano Cristian','Kepala Bagian','Katolik','Menikah');
$p4 = new Pegawai('458','Melly Ilyani','Staff','Islam','Belum Menikah');
$p5 = new Pegawai('876','Fikri Indar','Manajer','Islam','Menikah');

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();
?>
<tr>
    <th colspan="11">Jumlah Pegawai : <?= Pegawai::$jml ?></th>
</tr>
