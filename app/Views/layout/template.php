<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="<?= base_url(); ?>\assets\img\logo.png">
    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.css">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/searchBuilder.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/searchPanes.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/select.dataTables.min.css" rel="stylesheet">



</head>



<body id="page-top">
    <div hidden>
        <?php if (!empty(session()->get('role_id'))) {
            echo session()->get('role_id');
            $level = session()->get('role_id');
        } ?>
    </div>

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-4" href="<?= base_url('/gudang'); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-warehouse"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BMP WAREHOUSE</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <div class="sidebar-heading text-center">
                Dashboard BMP
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item my-0">
                <a class="nav-link" href="<?= base_url('/gudang'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            <li class="nav-item my-0 ">
                <a class="nav-link " href="<?= base_url('/gudang/profile'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Tables -->

            <!-- Divider -->


            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->
            <!-- Heading -->
            <div class="sidebar-heading text-center">
                Material
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/gudang/list'); ?>">
                    <i class="fas fa-fw fa-list"></i>
                    <span>List Item</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Material Warehouse</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/gudang/listmaterial'); ?>">List Material</a>
                        <a class="collapse-item" href="<?= base_url('/gudang/stokmaterial'); ?>">Stok Material</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php if ($level === "1") : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities Material</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <!-- <h6 class="collapse-header">Utilities:</h6> -->
                            <a class="collapse-item" href="<?= base_url('/gudang/materialrowin'); ?>">Material In</a>
                            <a class="collapse-item" href="<?= base_url('/gudang/materialrowout'); ?>">Material Out</a>
                            <a class="collapse-item" href="<?= base_url('/gudang/other'); ?>">Material Action</a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            <?php if ($level === "2") : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities Material</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <!-- <h6 class="collapse-header">Utilities:</h6> -->
                            <a class="collapse-item" href="<?= base_url('/gudang/materialrowin'); ?>">Material In</a>
                            <a class="collapse-item" href="<?= base_url('/gudang/materialrowout'); ?>">Material Out</a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            <?php if ($level === "3") : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities Material</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <!-- <h6 class="collapse-header">Utilities:</h6> -->
                            <a class="collapse-item" href="<?= base_url('/gudang/materialrowin'); ?>">Material In</a>
                            <a class="collapse-item" href="<?= base_url('/gudang/materialrowout'); ?>">Material Out</a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>



            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading text-center">
                Addons
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/gudang/tables'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables Log</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/gudang/laporan'); ?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Report</span></a>
            </li>

            <!-- Divider -->

            <hr class="sidebar-divider d-none d-md-block my-0">
            <?php if ($level === "1") : ?>
                <div class="sidebar-heading text-center">
                    Set
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/gudang/access'); ?>">
                        <i class="fas fa-fw fa-american-sign-language-interpreting"></i>
                        <span>Access Management</span></a>
                </li>

                <hr class="sidebar-divider d-none d-md-block">
            <?php endif; ?>

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

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

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
                        <?php if ($level === "1") : ?>
                            <div class="d-sm-flex align-items-center d-flex bd-highlight  mb-1 ">
                                <a href="<?= base_url('/gudang/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material new </a>&nbsp
                                <a href="<?= base_url('/gudang/material_in'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material in </a>&nbsp
                                <a href="<?= base_url('/gudang/material_out'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material out </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($level === "2") : ?>
                            <div class="d-sm-flex align-items-center d-flex bd-highlight  mb-1 ">
                                <a href="<?= base_url('/gudang/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material new </a>&nbsp
                                <a href="<?= base_url('/gudang/material_in'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material in </a>&nbsp
                                <a href="<?= base_url('/gudang/material_out'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material out </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($level === "3") : ?>
                            <div class="d-sm-flex align-items-center d-flex bd-highlight  mb-1 ">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material new </a>&nbsp
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material in </a>&nbsp
                                <a href="<?= base_url('/gudang/material_out'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-10"></i> material out </a>
                            </div>
                        <?php endif; ?>




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <div>
                                        <?php if (!empty(session()->get('nama'))) {
                                            echo session()->get('nama');
                                        } ?>
                                    </div>
                                </span>
                                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/assets/img/<?php echo session()->get('image'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-envelope-square fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php if (!empty(session()->get('email'))) {
                                        echo session()->get('email');
                                    } ?>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-toggle-on fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php if (!empty(session()->get('is_active') == 1)) {
                                        echo 'Aktif';
                                    } else {
                                        if (!empty(session()->get('is_active') == 0)) {
                                            echo 'Banned';
                                        }
                                    } ?>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-tasks fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?php if (!empty(session()->get('role_id') == 1)) {
                                        echo 'Administrator';
                                    } else {
                                        if (!empty(session()->get('role_id') == 2)) {
                                            echo 'User';
                                        } else {
                                            if (!empty(session()->get('role_id') == 3)) {
                                                echo 'User Preview';
                                            }
                                        }
                                    } ?>
                                </a>
                                <a class="dropdown-item" href="<?= base_url('/auth/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    logout
                                </a>



                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Page Heading -->
                <div class="container">
                    <div class="d-sm-flex align-items-center d-flex bd-highlight  my-1 ">
                        <h1 class="h4 mb-0 text-gray-800 p-2 flex-grow-1 bd-highlight">Dashboard <?= $title; ?></h1>

                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid ">
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Material In</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $in; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Price In </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= ($row_in); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Material Out</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $out; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Price Out </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= ($row_out); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <?= $this->renderSection('content'); ?>

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-2">
                                <span>Copyright &copy;<a> Jow</a></span>
                            </div>
                            <div class="copyright text-center">
                                <span>Version 1.0</span>
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



            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url(); ?>/assets/vendor/jquery/script.js"></script>
            <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>


            <!-- Custom scripts for all pages-->
            <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>


            <!-- dataTable -->
            <script src="<?= base_url(); ?>/assets/js/jquery-3.5.1.js"></script>
            <script src="<?= base_url(); ?>/assets/js/jquery.dataTables.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/dataTables.bootstrap4.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/dataTables.buttons.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/buttons.flash.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/jszip.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/pdfmake.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/buttons.print.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/vfs_fonts.js"></script>
            <script src="<?= base_url(); ?>/assets/js/buttons.html5.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/dataTables.searchBuilder.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/dataTables.searchPanes.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/dataTables.select.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?= base_url(); ?>/assets/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>
            <script src="<?= base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        "lengthMenu": [
                            [10, 25, 50, 100, 150, -1],
                            [10, 25, 50, 100, 150, "All"]
                        ]
                    });
                });

                $(document).ready(function() {
                    $('#exampleTable').DataTable({
                        // searching: date,
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'print'
                        ]
                    });
                });
                $(document).ready(function() {
                    $('#exampleTablein').DataTable({
                        // searching: date,

                        dom: 'Bfrtip',
                        buttons: ['searchBuilder'],
                        searchBuilder: {
                            columns: [3]
                        }
                    });
                });

                $(document).ready(function() {
                    var table = $('#example').DataTable();

                    $('#example tbody')
                        .on('mouseenter', 'td', function() {
                            var colIdx = table.cell(this).index().column;

                            $(table.cells().nodes()).removeClass('highlight');
                            $(table.column(colIdx).nodes()).addClass('highlight');
                        });

                });
            </script>


</body>

</html>