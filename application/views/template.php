<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM inbox WHERE inbox_status='1'");

$jum_pesan = $query->num_rows();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TK ISLAM AL-WAKAF <sup>1.0</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= $this->uri->segment(2) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item <?= $this->uri->segment(2) == 'user' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/user') ?>">
          <i class="fas fa-user"></i>
          <span>User</span></a>
      </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= $this->uri->segment(2) == 'profile' || $this->uri->segment(2) == 'psb' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-bars"></i>
          <span>Sekolah</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="collapseUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?= $this->uri->segment(2) == 'profile' ? 'active' : '' ?>" href="<?= base_url('admin/profile') ?>"><i class="fas fa-school"></i><span> Profile Sekolah</span></a>
            <a class="collapse-item <?= $this->uri->segment(2) == 'psb' ? 'active' : '' ?>" href="<?= base_url('admin/psb') ?>"><i class="fas fa-info"></i><span> Info PSB</span></a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?= $this->uri->segment(2) == 'guru' || $this->uri->segment(2) == 'siswa' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-bars"></i>
          <span>Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="collapsePages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?= $this->uri->segment(2) == 'guru' ? 'active' : '' ?>" href="<?= base_url('admin/guru') ?>"><i class="fas fa-users"></i><span> Guru</span></a>
            <a class="collapse-item <?= $this->uri->segment(2) == 'siswa' ? 'active' : '' ?>" href="<?= base_url('admin/siswa') ?>"><i class="fas fa-users"></i><span> Siswa</span></a>
          </div>
        </div>
      </li>

     <li class="nav-item <?= $this->uri->segment(2) == 'gallery' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/gallery') ?>">
          <i class="fas fa-camera"></i>
          <span>Gallery</span></a>
      </li>

      <li class="nav-item <?= $this->uri->segment(2) == 'agenda' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/agenda') ?>">
          <i class="fas fa-calendar-alt"></i>
          <span>Agenda</span></a>
      </li>

      <li class="nav-item <?= $this->uri->segment(2) == 'kelas' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/kelas') ?>">
          <i class="fas fa-pencil-alt"></i>
          <span>Kelas</span></a>
      </li>

      <li class="nav-item <?= $this->uri->segment(2) == 'inbox' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/inbox') ?>">
          <i class="fas fa-envelope"></i>
          <span>Inbox </span><span class="badge badge-danger badge-center"><?= $jum_pesan ?></span></a>
          
      </li>

      <li class="nav-item <?= $this->uri->segment(2) == 'jumlah_siswa' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/jumlah_siswa') ?>">
          <i class="fas fa-user-graduate"></i>
          <span>Jumlah Siswa </span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>



            <!-- Nav Item - User Information -->
            <span class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->fungsi->user_login()->name ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/images/default.png') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url() ?>" target="_blank">
                  <i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>
                  Kunjungi Website
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('admin/auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
         
          </ul>

         <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
         
        </nav>
        <!-- End of Topbar -->
        
        <?= $contents ?>


      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KECOATERBANG 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('admin/auth/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
 
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- ckeditor -->
  <script src="<?= base_url('assets/') ?>ckeditor/ckeditor.js"></script>

  <!-- datepicker -->
  <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>

 <!-- page script -->
 <script>
    $(document).ready(function() {
      $('#dataTable').DataTable()
    })

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
  </script>


</body>

</html>
