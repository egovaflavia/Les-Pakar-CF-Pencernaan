<?php 
require 'header.php';


if (isset($_POST["btn_tSolusi"])) {
  if (tSolusi($_POST) > 0 ) {
    echo "
          <script>
          document.location.href = 'tSolusi.php';
          </script>";
  }else{
    echo"<script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'tSolusi.php';
      </script>";
  }
}

if (isset($_POST["btn_editS"])) {
  if (edit_solusi($_POST) > 0 ) {
    echo "
          <script>
            alert('Data Berhasil Diedit');
            document.location.href = 'tSolusi.php';
          </script>";
  }else{
    echo"<script>
        alert('Data Gagal Diedit');
        document.location.href = 'tSolusi.php';
      </script>";
  }
}


$tsolusi= query("SELECT * FROM solusi ORDER BY id ASC");

 ?>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
    Tambah Data Solusi
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Solusi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
        		<div class="form-group">	
              <table class="table">
                <tr>
                  <td><label>Kode Solusi</label></td>
                  <td>
                    <input class="form-control" type="text" name="kode_solusi">
                  </td>
                </tr>
                <tr>
                	<td><label>Keterangan Solusi</label></td>
                  <td>
                    <textarea class="form-control" name="ket_solusi"></textarea>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="btn_tSolusi">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <br><br>

  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">Kode Solusi</th>
        <th style="text-align: center;">Keterangan Solusi</th>
        <th style="text-align: center;">Aksi</th>
      </tr>
    </thead>
    <?php $no=1; foreach ($tsolusi as $row) : ?>
    <tbody>
      <tr>
        <td style="text-align: center;"><?= $no; ?></td>
        <td style="text-align: center;"><?= $row["kode_solusi"]; ?></td>
        <td style="text-align: justify;"><?= $row["ket_solusi"]; ?></td>
        <td style="text-align: center;"> 
          <button id="<?= $row['id']; ?>" style="cursor: pointer;" class="edit_solusi btn btn-success btn-block" data-toggle="modal" data-target="#editSolusi">Edit</button>
          <a class="btn btn-danger btn-block" href="hSolusi.php?id=<?= $row['id']; ?>" role="button">Hapus</a>
        </td>
      </tr>
    </tbody>
    <?php $no++; ?>
    <?php endforeach ?>
  </table>

  <!-- Modal Edit -->
  <div class="modal fade" id="editSolusi" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data Solusi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <div class="form-group">  
              <table class="table">
                <tr>
                  <td><label>Kode Solusi</label></td>
                  <td>
                    <input class="form-control" type="hidden" id="ids" name="ids">
                    <input class="form-control" type="text" id="kds" name="kds">
                  </td>
                </tr>
                <tr>
                  <td><label>Keterangan Solusi</label></td>
                  <td>
                    <textarea class="form-control" id="kets" name="kets"></textarea>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="btn_editS">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>

  <?php require "footer.php"; ?>