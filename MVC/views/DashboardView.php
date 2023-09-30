

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title?></title>

    <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
      
  <link rel="icon" type="image/x-icon" href="../images/log.png" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <!-- changer selection -->

    <!-- <script type="text/javascript">
		function charger(input) {
			var yr = input.value;
			window.location.href="http://localhost/TP_11/MVC/Dashboard/"+yr;
            
		}
	</script> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
  include_once("nav.php");
  ?> 


                <!-- Begin Page Content -->
                <div class="container-fluid">
          
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-evenly mb-4">
                        <h1 class="h3 mb-0 text-gray-800 mr-2">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <h6><b> Earnings (Monthly)</b></h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $moy?>$</div>
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
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6><b>Earnings (Annual)</b></h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total?>$</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Earnings Overview(<?php echo $yr?>)</h6>
                                    
                                    <div class="dropdown no-arrow">
                                    <form method="post" class="input-group">
                                        <!-- onchange="charger(this)" -->
                                        <select  name="sct" class="form-control  border-0 small">
                                            <?php
                                           if ($result) {
                                               # code...
                                            foreach ($result as $t) {
                                            
                                            if($yr==$t->years)
                                                echo "<option value='$t->years' selected>$t->years</option>";
                                            else
                                            echo "<option value='$t->years'>$t->years</option>";

                                                }
                                           }
                                           ?>
                                        </select>
                                        <!-- <input type="" value="refresh" class="btn btn-info"> -->
                                        <button class="btn btn-primary" type="submit"  name="btns">
                  <i class="fas fa-search fa-sm"></i>
                </button>
                                    </form>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Hotel
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- prix par moi -->
                    <input type="hidden" value="<?php echo $_SESSION['Jan']??0?>" id="h1">
                    <input type="hidden" value="<?php echo $_SESSION['Feb']??0?>" id="h2">
                    <input type="hidden" value="<?php echo $_SESSION['Mar']??0?>" id="h3">
                    <input type="hidden" value="<?php echo $_SESSION['Apr']??0?>" id="h4">
                    <input type="hidden" value="<?php echo $_SESSION['May']??0?>" id="h5">
                    <input type="hidden" value="<?php echo $_SESSION['Jun']??0?>" id="h6">
                    <input type="hidden" value="<?php echo $_SESSION['Jul']??0?>" id="h7">
                    <input type="hidden" value="<?php echo $_SESSION['Aug']??0?>" id="h8">
                    <input type="hidden" value="<?php echo $_SESSION['Sep']??0?>" id="h9">
                    <input type="hidden" value="<?php echo $_SESSION['Oct']??0?>" id="h10">
                    <input type="hidden" value="<?php echo $_SESSION['Nov']??0?>" id="h11">
                    <input type="hidden" value="<?php echo $_SESSION['Dec']??0?>" id="h12">
                    
            </div>
        </div>
    <?php include 'footer.php'; ?>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->

    <!-- Page level plugins -->

     <?php
  include_once("scriptChart.php");
  ?> 


</body>

</html>