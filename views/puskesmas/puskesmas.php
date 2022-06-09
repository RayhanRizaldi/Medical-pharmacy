<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard - Puskesmas</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/style2.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/settings.css">
    

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../../assets/images/logo.png" alt="" width="200px">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#"><i class='bx-fw bx bxs-dashboard bx-sm'></i>Dashboard</a>
                </li>
                <li>
                    <a href="obatPuskesmas.php"><i class='bx-fw bx bxs-notepad bx-sm'></i>Stok Obat</a>
                </li>
                <li>
                    <a href="puskesmas_formreq.php"><i class='bx-fw bx bxs-user-detail bx-sm'></i>Form Request</a>
                </li>
        
            </ul>

            <ul class="list-unstyled CTAs">
                
                <li>
                    <a href="puskesmas_pengaturan.php" class="download">Settings</a>
                </li>
                <li>
                    <a href="../auth/login.php" class="article">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class='bx-fw bx bxs-bell bx-sm'></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class='bx-fw bx bxs-envelope bx-sm' ></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li> -->
                            </ul>
                        </div>
                    
                </div>
            </nav>

    
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Stok Obat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody> 
                                        <tr>
                                            <td>AA001</td>
                                            <td>Acetosal Tab 80 mg</td>
                                            <td>68</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA002</td>
                                            <td>Acetyl sistein</td>
                                            <td>530</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA003</td>
                                            <td>Acyclovir Tab 200 mg</td>
                                            <td>2560</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA004</td>
                                            <td>Acyclovir Tab 200 mg</td>
                                            <td>27</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA005</td>
                                            <td>Acyclovir Tab 400 mg</td>
                                            <td>342</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA006</td>
                                            <td>Acyclovir Krim</td>
                                            <td>113</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA007</td>
                                            <td>Alprazolam Tab</td>
                                            <td>483</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA008</td>
                                            <td>Allopurinol tab 100 mg</td>
                                            <td>530</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>AA009</td>
                                            <td>Allopurinol tab 300 mg</td>
                                            <td>530</td>
                                            <td><a href="puskesmas_formreq.html"><button type="submit" class="btn btn-warning">Tambah</button></a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../../assets/js/datatables-simple-demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>