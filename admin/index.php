<?php 
  require "header.php"; 

  if (isset($_POST["btn_tGejala"])) {
    if (tGejala($_POST) > 0 ) {
      echo "
            <script>
            document.location.href = 'index.php';
            </script>";
    }else{
      echo"<script>
          alert('Data Gagal Ditambahkan');
          document.location.href = 'index.php';
        </script>";
    }
  }

  


  $tgjl= query("SELECT * FROM gejala ORDER BY kode_gejala ASC");
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Tambah Data Gejala
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Gejala</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="">
      <div class="modal-body">
        <div class="form-group">
          <label for="kode">Kode Gejala</label>
          <input type="text" class="form-control" id="kode" aria-describedby="emailHelp" name="kode_gejala" required>
        </div>
        <div class="form-group">
          <label for="gejala">Gejala</label>
          <input type="text" class="form-control" id="gejala" name="ket_gejala" required>
        </div>
        <div class="form-group">
          <label for="angka">Angka CF</label>
          <input type="text" class="form-control" id="angka" name="angka_cf" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="btn_tGejala" class="btn btn-primary">Tambah</button>
      </div>
      </form>
</form>
    </div>
  </div>
</div>
<br><br> 

  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <!-- <th>id</th> -->
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">Kode Gejala</th>
        <th style="text-align: center;">Gejala</th>
        <th style="text-align: center;">Angka CF</th>
        <th style="text-align: center;">Aksi</th>
      </tr>
    </thead>
    <?php $no=1; foreach ($tgjl as $row) :?>
    <tbody>
      <tr>
        <td style="text-align: center;"><?= $no; ?></td>
        <td style="text-align: center;"><?= $row["kode_gejala"]; ?></td>
        <td style="text-align: justify;"><?= $row["ket_gejala"]; ?></td>
        <td style="text-align: center;"><?= $row["angka_cf"]; ?></td>
        <td style="text-align: center;"> 
          
          <a class="btn btn-danger" href="hGejala.php?id=<?= $row['id']; ?>" role="button">Hapus</a>
        </td>
      </tr>
    </tbody>
    <?php $no++; ?>
    <?php endforeach ?>
  </table>


    <!-- Modal Edit -->
      <div class="modal fade" id="editGejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data Gejala</h5>
              <button id="tutup_modal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="">
            <div class="modal-body">
                <div class="form-group">
                  <label>Kode Gejala</label>
                  <input id="idgj" type="hidden" class="form-control" name="idgj" required>
                  <input id="kdGjl" type="text" class="form-control" name="kdgj" required>
                </div>
                <div class="form-group">
                  <label>Gejala</label>
                  <input id="gjl" type="text" class="form-control" name="ketgj" required>
                </div>
                <div class="form-group">
                  <label>Angka CF</label>
                  <input id="aCf" type="text" class="form-control" name="angj" required>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" name="btn_edit">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>

  </div>
  </div>

  <?php require "footer.php"; ?>
