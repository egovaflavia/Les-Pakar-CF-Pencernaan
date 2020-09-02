<?php

require 'header.php';

$data_pasien = query("SELECT * FROM hasil_konsul ORDER BY id ASC");
?>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th style="text-align: center;">No</th>
      <th style="text-align: center;">Kode Diagnosa</th>
      <th style="text-align: center;">Nama Pasien</th>
      <th style="text-align: center;">Lihat Data</th>
    </tr>
  </thead>
  <?php $no = 1;
  foreach ($data_pasien as $row) :
  ?>
    <input type="text" name="id" value="$row[id];" hidden>
    <tr>
      <td style="text-align: center;"><?= $no; ?></td>
      <td style="text-align: center;"><?= $row["kode_diagnosa"]; ?></td>
      <td style="text-align: center;"><?= $row["nama"]; ?></td>
      <td style="text-align: center;">
        <!-- Button trigger modal -->
        <button id="<?= $row['id']; ?>" type="button" class="btn_hasil btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
          Lihat Data Pasien
        </button>
        <?php $no++; ?>
      <?php endforeach ?>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Data Pasien</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="width:100% ">
              <div class=" form-group row">
                <label class="col-sm-4 col-form-label">Kode Diagnosa</label>
                <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext" id="kode">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext" id="nama">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                  <input type="text" readonly id="jk" class="form-control-plaintext">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Umur</label>
                <div class="col-sm-8">
                  <input type="text" readonly id="umur" class="form-control-plaintext">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Konsultasi</label>
                <div class="col-sm-8">
                  <input type="text" readonly id="tgl" class="form-control-plaintext">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Penyakit</label>
                <div class="col-sm-8">
                  <input type="text" readonly id="goal" class="form-control-plaintext">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Tingkat Kepastian</label>
                <div class="col-sm-8">
                  <input type="text" readonly id="tingkat" class="form-control-plaintext">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </td>

</table>
</div>
</div>
<?php require "footer.php"; ?>