<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('partial/head')?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('partial/navbar')?>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  

<!-- 
<div id="container"> -->
<?php $this->load->view('partial/aside')?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Registrasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class=" breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Registrasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-1"></div>
          <div class="col-10">         

            <div class="card">

              
              <!-- /.card-header -->
              <div class="card-body">
              <div class="box box-info formtambah">  
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah</button>
                </div>
                <br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                    <?php 
                    $no = 1;
                    foreach($user as $ww){ 
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++ ?></td>
                      <td class="text-center"><?php echo $ww['username'] ?></td>
                      
                      <td class="text-center" style="min-width:230px;">
                     
                      <button class="btn btn-warning"> <?php echo anchor('Registrasi/hapus/'.$ww['id_user'],'Hapus'); ?></button>
                         
                          
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
              </div>
              <!-- /.card-body -->
          <div class="col-1"></div>
    </section>
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <form action="<?php echo base_url(). 'Registrasi/tambah_aksi'; ?>" method="post">
              <h5 class="modal-title">Tambah Registrasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
            </div>
             <div class="col-sm-12">
              <input type="text" class="form-control" id="id_user" name="id_user" placeholder="id_user" value="<?php echo $id_user ?>" hidden>
            </div>
            <br>
             <div class="col-sm-12">
              <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <br>
            <div class="col-sm-12">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!-- /.content -->
  </div>
  <?php 
    foreach($user as $as){ 
  ?>
  <?php //echo $as['id_kategori'] ?>
     <div class="modal fade" id="modal-edit<?php echo $as['id_user'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <form action="<?php echo base_url(). 'Registrasi/edit'; ?>" method="post">
              <h5 class="modal-title">Edit Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
            </div>
             <div class="col-sm-12">
              <input type="text" class="form-control" id="id_user" name="id_user" placeholder="id_user" value="<?php echo $as['id_user'] ?>" hidden>
            </div>
            <br>
             <div class="col-sm-12">
              <input type="text" class="form-control" id="username" name="username" placeholder="Kategori" value="<?php echo $as['username'] ?>">
            </div>
            <br>
             <div class="col-sm-12">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $as['password'] ?>">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <?php } ?>
    <!-- /.content -->
  </div>

   


</div>
<?php $this->load->view('partial/footer')?>
<?php $this->load->view('partial/script')?>


</body>
</html>
