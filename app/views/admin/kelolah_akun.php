<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelolah Akun</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/themes/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/themes/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">AppleWifi</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= BASEURL; ?>/admin/kelolah_akun" class="nav-link" style="background-color: #494e53 !important; /* biru muda */
                color: white !important;
                font-weight: bold;
                border-left: 5px solid #494e53;">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Kelolah Akun
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASEURL; ?>/admin/rekap_penjualan" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Rekap Penjualan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASEURL; ?>/admin/cash_flow" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Cash Flow
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASEURL; ?>/admin/stok_voucher_pic" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Stok Voucher
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= BASEURL ?>/logout" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Kelolah Akun</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <!-- Small Box (Stat card) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>2</h3>

                <p>Super Admin</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2</h3>

                <p>Viewer</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>15</h3>

                <p>PIC</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#modal-default">
                Tambah Akun
              </button></h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama Kelas</th>
                  <th>Password</th>
                  <th>Status</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>21</td>
                  <td>XI RPL 1</td>
                  <td>xirpl123</td>
                  <td>PIC</td>
                  <td><button type="button" class="btn btn-block btn-warning" data-toggle="modal"
                      data-target="#modal-edit">Edit</button></td>
                  <td><button type="button" class="btn btn-block btn-danger">Hapus</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.modal tambah Akun -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Akun Baru</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- general form elements -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="namaKelasNew">Nama Kelas</label>
                <input type="text" class="form-control" id="namaKelasNew" placeholder="XI RPL 1" required>
              </div>
              <div class="form-group">
                <label for="passwordEdit">Password</label>
                <input type="password" class="form-control" id="passwordEdit" placeholder="xirpl1123" required>
              </div>
              <!-- select -->
              <div class="form-group">
                <label>Pilih Status</label>
                <select class="form-control" required id="statusNew">
                  <option value="superAdmin">Super Admin</option>
                  <option value="pic">PIC</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- /.modal edit -->
  <div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Akun</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- general form elements -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="namaKelasEdit">Nama Kelas</label>
                <input type="text" class="form-control" id="namaKelasEdit" placeholder="XI RPL 1" required>
              </div>
              <div class="form-group">
                <label for="passwordEdit">Password</label>
                <input type="password" class="form-control" id="passwordEdit" placeholder="xirpl1123" required>
              </div>
              <!-- select -->
              <div class="form-group">
                <label>Pilih Status</label>
                <select class="form-control" required id="statusEdit">
                  <option value="superAdmin">Super Admin</option>
                  <option value="penjual">Penjual</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal Edit</button>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= BASEURL; ?>/themes/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= BASEURL; ?>/themes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= BASEURL; ?>/themes/dist/js/adminlte.min.js"></script>
</body>

</html>