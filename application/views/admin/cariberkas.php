<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed"">
<div class="wrapper">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<?php $this->load->view("admin/_partials/sidebar.php") ?>
	<div class="content-wrapper">
		<div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Berkas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <br>
            <form class="form-inline" action="<?php echo site_url('admin/Berkas');?>" method="post">
              <select class="form-control" name="field">
                  <option selected="selected" disabled="disabled" value="">Pilih Bulan</option>
                  <?php foreach ($bulan as $row) {?>
                    <option value="<?php echo $row->int_bulan ;?>"><?php echo $row->nama_bulan ;?></option>
                  <?php }?>
              </select>
              <input class="btn btn-default" type="submit" name="filter" value="Go">
            </form>
            <br>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Urut</th>
                  <th>Tanggal Surat</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Pihak Satu</th>
                  <th>Pihak Dua</th>
                  <th>Gambar</th>
                  <th colspan="2">Option</th>
                </tr>
                </thead>
                <?php $i = 1 ; 
                foreach ($data as $row) 
                { ?>
                <tbody>
                  <th><?php echo $i ; ?></th>
                  <th><?php echo $row->no_urut; ?></th>
                  <th data-type="date('m')"><?php echo $row->tgl_surat; ?></th>
                  <th><?php echo $row->nama_kategori; ?></th>
                  <th><?php echo $row->nama_judul; ?></th>
                  <th><?php echo $row->nama_pihaksatu; ?></th>
                  <th><?php echo $row->nama_pihakdua; ?></th>
                  <th><img src="<?= base_url ()?>assets/img/<?php  echo $row->gambar_berkas;?>" width="100px" height="100px" class="img-thumbnail"></th>
                  <th style="text-align: center;">
                    <a data-toggle="modal" data-target="#view<?php echo $row->id_berkas; ?>" class="btn btn-primary btn-sm">
                      <span class="glyphicon glyphicon-list"></span> View 
                    </a>
                  </th>
                </tbody>
                <?php $i++; } ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
		</div>
	</div>
</div>
<?php foreach($data as $row) { ?>
  <div class="modal fade" id="view<?php echo $row->id_berkas;?>">
    <div class="modal-dialog">
    <form class="form-horizontal" action="#">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Berkas</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body">
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Nomer Urut</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="no_urut" id="no_urut" value="<?php echo $row->no_urut ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Tanggal Surat</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" value="<?php echo $row->tgl_surat ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Tangal Pendaftaran</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="tgl_pendaftaran" id="tgl_pendaftaran" value="<?php echo $row->tgl_pendaftaran ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Kategori</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="id_kategori" id="kategori" value="<?php echo $row->nama_kategori ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Judul</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="id_judul" id="judul" value="<?php echo $row->nama_judul ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Pihak 1</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="id_kategori" id="kategori" value="<?php echo $row->nama_pihaksatu ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Pihak 2</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="id_kategori" id="kategori" value="<?php echo $row->nama_pihakdua ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-5 control-label">Gambar</label>
              <div class="col-sm-7">
              <img src="<?= base_url ()?>assets/img/<?php  echo $row->gambar_berkas;?>" width="200px" height="100px" class="img-thumbnail">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- /#wrapper -->
<?php $this->load->view("admin/_partials/js.php") ?>    
</body>
</html>
