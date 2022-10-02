<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 4 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>

        <div class="px-1 my-3">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Gaji Kotor</th>
                    <th>Zakat Profesi</th>
                    <th>Gaji Bersih</th>
                </tr>
            </thead>
    <?php
    class Pegawai{
    
    public $nip, $nama, $jabatan, $agama, $status;
    static $jml = 0;
    const PT = 'PT. Harapan Jaya Sentosa';
    
    public function __construct($nip_pegawai, $nama_pegawai, $jabatan_pegawai, $agama_pegawai, $status_pegawai){
        $this->nip = $nip_pegawai;
        $this->nama = $nama_pegawai;
        $this->jabatan = $jabatan_pegawai;
        $this->agama = $agama_pegawai;
        $this->status = $status_pegawai;
        self::$jml++;
    }
  
    public function setGajiPokok(){
        switch($this->jabatan){
            case 'Manajer': $gajipokok = 15000000; break;
            case 'Asisten Manajer': $gajipokok = 10000000; break;
            case 'Kepala Bagian': $gajipokok = 7000000; break;
            case 'Staff': $gajipokok = 4000000; break;
            default: $gajipokok = 0;
        } 
        return $gajipokok;
    }

    public function setTunjab(){
        $tunjangan_jabatan = $this->setGajiPokok() * 0.2;
        return $tunjangan_jabatan;
    }

    public function setTunkel(){
        $tunjangan_keluarga = ($this->status == 'Menikah') ? 0.1 * $this->setGajiPokok() : 0;
        return $tunjangan_keluarga;
    }

    public function setGajiKotor(){
        $gajikotor = $this->setGajiPokok() + $this->setTunkel() + $this->setTunjab();
        return $gajikotor;
    }

    public function setZakatProfesi(){
        $zakat = ($this->agama == "Islam" && $this->setGajiKotor() >= 6000000)? 0.025 * $this->setGajiKotor() : 0;
        return $zakat;
    }

    public function setGajiBersih(){
        $gajibersih = $this->setGajiKotor() - $this->setZakatProfesi();
        return $gajibersih;
    }

    public function mencetak(){?>
        <tr>
        <td><?= $this->nip ?></td>
        <td><?= $this->nama ?></td>
        <td><?= $this->jabatan ?></td>
        <td><?= $this->agama ?></td>
        <td><?= $this->status ?></td>
        <td>Rp <?= number_format($this->setGajiPokok(), 2, ',', '.'); ?></td>
        <td>Rp <?= number_format($this->setTunjab(), 2, ',', '.'); ?></td>
        <td>Rp <?= number_format($this->setTunkel(), 2, ',', '.'); ?></td>
        <td>Rp <?= number_format($this->setGajiKotor(), 2, ',', '.'); ?></td>
        <td>Rp <?= number_format($this->setZakatProfesi(), 2, ',', '.'); ?></td>
        <td>Rp <?= number_format($this->setGajiBersih(), 2, ',', '.'); ?></td>
        </tr>
        <?php }}?>

    </body>
</html>
        

        
