<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard - Puskesmas</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/settings.css">
    <link rel="stylesheet" href="../../assets/css/style2.css">
    

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
                    <a href="home.php"><i class='bx-fw bx bxs-dashboard bx-sm'></i>Dashboard</a>
                </li>
                <li>
                    <a href="puskesmas.php"><i class='bx-fw bx bxs-notepad bx-sm'></i>Stok Obat</a>
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
                                Puskesmas Account
                            </div>
                            <div class="card-body">
                                <div class="container light-style flex-grow-1 container-p-y">

                                    <h4 class="font-weight-bold py-3 mb-4">
                                      Account settings
                                    </h4>
                                
                                    <div class="card overflow-hidden">
                                      <div class="row no-gutters row-bordered row-border-light">
                                        <div class="col-md-3 pt-0">
                                          <div class="list-group list-group-flush account-settings-links">
                                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                                          </div>
                                        </div>
                                        <div class="col-md-9">
                                          <div class="tab-content">
                                            <div class="tab-pane fade active show" id="account-general">
                                
                                              <div class="card-body media align-items-center">
                                                <img src="../assets/images/profile.png" alt="profile" class="d-block ui-w-80" width="100px">
                                                <div class="media-body ml-4">
                                                  <label class="btn btn-outline-primary">
                                                    Upload new photo
                                                    <input type="file" class="account-settings-fileinput">
                                                  </label> &nbsp;
                                                  <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                
                                                  <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                                </div>
                                              </div>
                                              <hr class="border-light m-0">
                                
                                              <div class="card-body">
                                                <div class="form-group">
                                                  <label class="form-label">Username</label>
                                                  <input type="text" class="form-control mb-1" >
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Name</label>
                                                  <input type="text" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">E-mail</label>
                                                  <input type="text" class="form-control mb-1" >
                                    
                                                </div>
                                              </div>
                                
                                            </div>
                                            <div class="tab-pane fade" id="account-change-password">
                                              <div class="card-body pb-2">
                                
                                                <div class="form-group">
                                                  <label class="form-label">Current password</label>
                                                  <input type="password" class="form-control">
                                                </div>
                                
                                                <div class="form-group">
                                                  <label class="form-label">New password</label>
                                                  <input type="password" class="form-control">
                                                </div>
                                
                                                <div class="form-group">
                                                  <label class="form-label">Repeat new password</label>
                                                  <input type="password" class="form-control">
                                                </div>
                                
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-info">
                                              <div class="card-body pb-2">
                                
                                                <div class="form-group">
                                                  <label class="form-label">Bio</label>
                                                  <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Birthday</label>
                                                  <input type="text" class="form-control" value="May 3, 1995">
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Country</label>
                                                  <select class="custom-select">
                                                    <option>USA</option>
                                                    <option selected="">Canada</option>
                                                    <option>UK</option>
                                                    <option>Germany</option>
                                                    <option>France</option>
                                                  </select>
                                                </div>
                                
                                
                                              </div>
                                              <hr class="border-light m-0">
                                              <div class="card-body pb-2">
                                
                                                <h6 class="mb-4">Contacts</h6>
                                                <div class="form-group">
                                                  <label class="form-label">Phone</label>
                                                  <input type="text" class="form-control" value="+0 (123) 456 7891">
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Website</label>
                                                  <input type="text" class="form-control" value="">
                                                </div>
                                
                                              </div>
                                      
                                            </div>
                                            <div class="tab-pane fade" id="account-social-links">
                                              <div class="card-body pb-2">
                                
                                                <div class="form-group">
                                                  <label class="form-label">Twitter</label>
                                                  <input type="text" class="form-control" value="https://twitter.com/user">
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Facebook</label>
                                                  <input type="text" class="form-control" value="https://www.facebook.com/user">
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Google+</label>
                                                  <input type="text" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">LinkedIn</label>
                                                  <input type="text" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-label">Instagram</label>
                                                  <input type="text" class="form-control" value="https://www.instagram.com/user">
                                                </div>
                                
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-connections">
                                              <div class="card-body">
                                                <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                                              </div>
                                              <hr class="border-light m-0">
                                              <div class="card-body">
                                                <h5 class="mb-2">
                                                  <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                                                  <i class="ion ion-logo-google text-google"></i>
                                                  You are connected to Google:
                                                </h5>
                                                nmaxwell@mail.com
                                              </div>
                                              <hr class="border-light m-0">
                                              <div class="card-body">
                                                <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                                              </div>
                                              <hr class="border-light m-0">
                                              <div class="card-body">
                                                <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-notifications">
                                              <div class="card-body pb-2">
                                
                                                <h6 class="mb-4">Activity</h6>
                                
                                                <div class="form-group">
                                                  <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked="">
                                                    <span class="switcher-indicator">
                                                      <span class="switcher-yes"></span>
                                                      <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Email me when someone comments on my article</span>
                                                  </label>
                                                </div>
                                                <div class="form-group">
                                                  <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked="">
                                                    <span class="switcher-indicator">
                                                      <span class="switcher-yes"></span>
                                                      <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Email me when someone answers on my forum thread</span>
                                                  </label>
                                                </div>
                                                <div class="form-group">
                                                  <label class="switcher">
                                                    <input type="checkbox" class="switcher-input">
                                                    <span class="switcher-indicator">
                                                      <span class="switcher-yes"></span>
                                                      <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Email me when someone follows me</span>
                                                  </label>
                                                </div>
                                              </div>
                                              <hr class="border-light m-0">
                                              <div class="card-body pb-2">
                                
                                                <h6 class="mb-4">Application</h6>
                                
                                                <div class="form-group">
                                                  <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked="">
                                                    <span class="switcher-indicator">
                                                      <span class="switcher-yes"></span>
                                                      <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">News and announcements</span>
                                                  </label>
                                                </div>
                                                <div class="form-group">
                                                  <label class="switcher">
                                                    <input type="checkbox" class="switcher-input">
                                                    <span class="switcher-indicator">
                                                      <span class="switcher-yes"></span>
                                                      <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Weekly product updates</span>
                                                  </label>
                                                </div>
                                                <div class="form-group">
                                                  <label class="switcher">
                                                    <input type="checkbox" class="switcher-input" checked="">
                                                    <span class="switcher-indicator">
                                                      <span class="switcher-yes"></span>
                                                      <span class="switcher-no"></span>
                                                    </span>
                                                    <span class="switcher-label">Weekly blog digest</span>
                                                  </label>
                                                </div>
                                
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                
                                    <div class="text-right mt-3">
                                      <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                                      <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                
                                  </div>
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