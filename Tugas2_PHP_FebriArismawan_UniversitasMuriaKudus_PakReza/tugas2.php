<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 2 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <p class="h4 text-center my-3">Form Input Gaji Pegawai</p>
        <div class="row justify-content-center">
            <div class="col-md-4 px-2">
            
            <form class="border border-dark px-2" id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">

            <div class="mb-3 my-3">
                <label class="form-label" for="namaPegawai">Nama Pegawai</label>
                <input class="form-control" name="nama" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="agama">Agama</label>
                <select class="form-select" name="agama" id="agama" aria-label="Agama">
                    <option value="">---Pilih Agama---</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manajer" type="radio" value="Manajer" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="manajer">Manajer</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asistenManajer" type="radio" value="Asisten Manajer" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="asistenManajer">Asisten Manajer</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" value="Kabag" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" value="Staff" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" value="Menikah" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belummenikah" type="radio" value="Belum Menikah" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="belummenikah">Belum Menikah</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                <input class="form-control" id="jumlahAnak" name="anak" type="text" placeholder="Jumlah Anak" />
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-primary" id="submitButton" name="proses" type="submit">SIMPAN</button>
            </div>

            </form>
        </div>
    </div>

    <div class="px-1 my-3">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Agama</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Jumlah Anak</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Gaji Kotor</th>
                    <th>Zakat Profesi</th>
                    <th>Take Home Pay</th>
                </tr>
            </thead>
            <tbody>              
        
            <?php 
            $nama = $_POST["nama"];
            $agama = $_POST["agama"];
            $jabatan = $_POST["jabatan"];
            $status = $_POST["status"];
            $anak = $_POST["anak"];
            $tombol = $_POST["proses"];

            switch ($jabatan) {
                case 'Manajer': $gajipokok = 20000000; break;
                case 'Asisten Manajer': $gajipokok = 15000000; break;
                case 'Kabag': $gajipokok = 10000000; break;
                case 'Staff': $gajipokok = 4000000; break;
                default: $gajipokok = '';
            }

            $tunjanganjabatan = (float)$gajipokok * 0.2;

            if ($status == "Menikah" && ($anak >0 && $anak <=2)) $tunjangankeluarga = $gajipokok * 0.05;
                else if ($status == "Menikah" && ($anak >2 && $anak <=5 )) $tunjangankeluarga = $gajipokok * 0.1;
                    else if ($status == "Menikah" && $anak >5 ) $tunjangankeluarga = $gajipokok * 0.15;
                        else $tunjangankeluarga='';

            if ($status == "Belum Menikah"){
                $anak = "-";
                }

            $gajikotor = (float)$gajipokok + (float)$tunjanganjabatan + (float)$tunjangankeluarga;

            $zakat = ($agama == "Islam" && $gajikotor >= 6000000)? $gajikotor*0.025:"";

            $takehomepay = (float)$gajikotor - (float)$zakat;
        
            if(isset($tombol)){ ?>
                <tr>
                    <td><?= $nama ?></td>
                    <td><?= $agama ?></td>
                    <td><?= $jabatan ?></td>
                    <td><?= $status ?></td>
                    <td><?= $anak ?></td>
                    <td>Rp <?= number_format((float)$gajipokok, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$tunjanganjabatan, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$tunjangankeluarga, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$gajikotor, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$zakat, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$takehomepay, 2, ',', '.'); ?></td>
                </tr>

            <?php } ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            
            </tbody>
        </table>
    </div>
    </body>
</html>
