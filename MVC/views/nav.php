<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="../images/log.png"  width="50px" >
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $title?><sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if (isset($_SESSION['login'])&& $_SESSION['role'] == "admin") {
                echo('<li class="nav-item">
                <a class="nav-link" href="http://localhost/TP_11/MVC/Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>');
            }?>
<!-- ------------------------------------------------------- -->
<?php
                    if (isset($_SESSION['login'])) {
                        echo('
                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>settings</span>
                            </a>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                 ');
            if ( $_SESSION['role'] == "admin") {
                # code...
                echo '
                    <a class="collapse-item  active" href="http://localhost/TP_11/MVC/Admin">ADD Room & Type</a>
                    <a class="collapse-item  " href="http://localhost/TP_11/MVC/ListeReservation">Show Reservation</a>
                    <a class="collapse-item " href="http://localhost/TP_11/MVC/ListeChambre">Show Rooms</a>
                    <a class="collapse-item " href="http://localhost/TP_11/MVC/ListeClient">Show User</a>
                    <a class="collapse-item " href="http://localhost/TP_11/MVC/Listetypes">Show Types</a>
                ';
            }else{
                echo'
                <a class="collapse-item" href="http://localhost/TP_11/MVC/ListeReservation">Show Reservation</a>';
            }
                
            echo '</div>
            </div></li>';}?>
            <!--------------------------------------------------------------------  -->
            <li  class='nav-item'>
            <a class="nav-link" href="http://localhost/TP_11/MVC/" 
                    >
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a></li>
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo("
                <li class='nav-item'>
                <a class='nav-link' href='http://localhost/TP_11/MVC/Logout'>
                <i class='fas fa-fw fa-sign-out-alt'></i>
                    <span>Logout</span></a>
               ") ;
                    }else{
                        echo" </li><li  class='nav-item'><a class='nav-link' href='http://localhost/TP_11/MVC/Login'><i class='fas fa-fw fa-sign-in-alt'></i><span>Login</span></a></li>
                        <li  class='nav-item'><a class='nav-link' href='http://localhost/TP_11/MVC/Sign_Up'><i class='fas fa-fw fa-user-alt'></i><span>Sign up</span></a></li>
                        <li  class='nav-item'><a class='nav-link' href='http://localhost/TP_11/MVC/Forgot_Password'><i class='fas fa-fw fa-key'></i><span>Forgot Password</span></a></li>
                                ";
                    }
                    ?>
                
                <li class='nav-item'>
                <a class='nav-link' href='http://localhost/TP_11/MVC/Room'>
                    <i class='fas fa-fw fa-table'></i>
                    <span>Rooms | Tariff</span></a>
            </li>
            
                <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="../img/undraw_rocket.svg" alt="...">
</div>

</ul>

<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item  -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                     <!-- Nav Item - User  -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                    if (isset($_SESSION['login'])) {
                        echo("
                        
                        <h4 class='sidebar-brand-text mx-3'>".$_SESSION['Nom']." ".$_SESSION['Prenom']."</h4>");}?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                           
                        </li>

                    </ul>

                </nav>


















<script src="../script/jquery/jquery.min.js"></script>
    <script src="../script/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../script/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../script/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="../script/chart.js/Chart.min.js"></script>

    <!-- Page level plugins -->
    <script src="../script/jquery.dataTables.min.js"></script>
    <script src="../script/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../script/datatables-demo.js"></script>
    <!-- Page level custom scripts -->