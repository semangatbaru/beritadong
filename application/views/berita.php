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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
	
      </li>
      <li class="nav-item d-none d-sm-inline-block">
       
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  


<div id="container">
<?php $this->load->view('partial/aside')?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Berita</h1>
          </div>

          <div class="col-sm-6">
            <ol class=" breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid">
         <form action="<?php echo base_url(). 'Berita/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
      
        <div class="row" >
          <div class="col-1"></div>
          <div class="col-10">         
  <div class="card card-outline card-info">
            <div class="card-header">
            <h5>Tambah Berita</h5>   
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>      
                  
              <!-- /.card-header -->
            </div>
              <div class="card-body">
                  <div class="col-sm-12">
              <input type="hidden" class="form-control" id="id_berita" name="id_berita" placeholder="Id Berita" value="<?php echo $id_berita ?>" >
            </div>  

                <div class="card-body">
                  <div class="col-sm-12">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
            </div>  
                <br>
                 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Deskripsi
             
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" id="deskripsi" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>


      <div class="form-group">
                      <label  class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-8">
                        <input class="form-control-file" type="file" name="gambar" id="gambar" />
                <div class="invalid-feedback">
                </div>
      
                        </div>
                    </div>
       <br>
      <!-- ./row -->
   
                    <div class="col-sm-12">
              <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
            </div>  
                <br>
           
            <div class="col-sm-12">
             <select class="form-control" id="id_kategori" name="id_kategori" placeholder="Kategori">
             <option value="" disable>Pilih kategori</option>
                <?php foreach ($kategori as $b){ ?>
                <option  value="<?php echo $b->id_kategori?>"><?php echo $b->nama_kategori?></option>
                <?php }?>
               </select>
            </div>  
                <br>
         
              
              <center>
                <div class="col-sm-12">
       <button type="submit" class="btn btn-primary" >Tambah</button>
       <br>
       </div>
       </center>
     </form>
       </div>
              <!-- /.card-body -->
          <div class="col-1"></div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-1"></div>
          <div class="col-10">         

            <div class="card">

              
              <!-- /.card-header -->
                <div class="card-body">
              <div class="box box-info formtambah"> 
                </div>
                <br>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                   
                   <?php 
                    $no = 1;
                    foreach($berita as $wa){ 
                    ?>

                    <tr>
                      <td class="text-center"><?php echo $no++ ?></td>
                      <td class="text-center"><?php echo $wa['judul'] ?></td>
                      <td class="text-center"><?php echo $wa['deskripsi'] ?></td>
                      <td class="text-center">
                        <img src="<?php echo base_url('gambar/'.$wa['gambar']) ?>" width="64" />
                      </td>
                      <td class="text-center"><?php echo $wa['penulis'] ?></td>
                      <td class="text-center"><?php echo $wa['nama_kategori'] ?></td>
                      <td class="text-center">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-edit<?php echo $wa['id_berita']?>">Edit</button>
                      <button class="btn btn-warning"> <?php echo anchor('Berita/hapus/'.$wa['id_berita'],'Hapus'); ?></button></td>
                         
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
              </div>
              <!-- /.card-body -->
          <div class="col-1"></div>
    </section>
   
  <?php 
    foreach($berita as $as){ 
  ?>
  <?php //echo $as['id_kategori'] ?>
     <div class="modal fade" id="modal-edit<?php echo $as['id_berita'] ?>">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                <form action="<?php echo base_url(). 'Berita/edit'; ?>" method="post">
                  <div class="col-sm-12">
              <input type="text" class="form-control" id="tanggal" name="tanggal"  value="<?php echo $as['tanggal'] ?>" hidden>
            </div>
              <h5 class="modal-title">Edit Berita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
            </div>
             <div class="col-sm-12">
              <input type="text" class="form-control" id="id_berita" name="id_berita"  value="<?php echo $as['id_berita'] ?>" hidden>
            </div>
            <br>
             <div class="col-sm-12">
              <input type="text" class="form-control" id="judul" name="judul"  value="<?php echo $as['judul'] ?>">
            </div>
            <br>
            <br>
                  <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Deskripsi
             
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" id="deskripsi" name="deskripsi" value="<?php echo $as['deskripsi']?>">
                 </textarea>
             </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>


      <div class="form-group">
                      <label  class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-8">
                         <img src="<?php echo base_url('gambar/'.$as['gambar']) ?>" width="64" />
                        <input type="file" name="gambar" id="gambar" value="<?php echo base_url('gambar/'.$as['gambar']) ?>">
                      
                <div class="invalid-feedback">
                </div>
      
                        </div>
                    </div>
       <br>
      <!-- ./row -->
   
                    <div class="col-sm-12">
              <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $as['penulis'] ?>">
            </div>  
                <br>
           
            <div class="col-sm-12">
             <select class="form-control" id="id_kategori" name="id_kategori"  >
             <option id="id_kategori" name="id_kategori"   value="<?php echo $as['nama_kategori'] ?>" ><?php echo $as['nama_kategori'] ?></option>
                <option  value="<?php echo $as['nama_kategori'] ?>"></option>
                               </select>
            </div>  
                <br>
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
