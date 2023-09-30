

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
    <style>
      .chart-area {position: relative;min-height: 10rem;width: 100%;}
@media (min-width: 412px) {.chart-area {  min-height: 18rem;}} 
@media (min-width: 572px) and (max-width: 768px) {.chart-area {  min-height: 15rem;}}
@media  (min-width: 768px) and (max-width: 1743px){.chart-area {  min-height: 5rem;}}
@media (min-width: 375px) and (max-width: 572px) {.chart-area {  min-height: 20rem;}} 
@media (min-width: 200px) and (max-width: 375px) {.chart-area {  min-height: 20rem;}} 
 </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <?php
  include_once("nav.php");
  ?> 


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="col-sm-6">
			<a href="http://localhost/TP_11/MVC/Dashboard" 
			class="btn btn-outline-primary" >
			<i class="fas fa-fw fa-home"></i></a>						
					</div>
                        <h1 class="h3 mb-0 text-gray-800">ADMIN</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                       
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-5">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Ajouter chambre</h6>
                                    
                                </div>
                                <div class="card-body" >
                                    <div class="chart-area " >
                     <!-- Form.. CHAMBRE-->
	<?php echo $success?>
                                    <form  method="post" enctype="multipart/form-data">
                                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select name="tch" id="exampleInputPassword" class="form-control form-control-user">
                                    <?php
                                        foreach ($tpchmb as $i) {
                                            # code...
                                            echo "<option value='$i->typechambre'>$i->typechambre.</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="orientation..." name="orient" required>
                            </div>
                        </div>
                                                <div class="form-group">
                            
                                <textarea placeholder="description..."required class="form-control form-control-user" id="exampleInputEmail"
                                 name="desc" cols="30"></textarea>
                        </div>
                                                
                                            
                                                <div class="form-group">images chambre...
                            <input type="file"    name="foto" required>
                             </div>
                                        <div class="col-xl-12 col-lg-12 col-md-9">
                                            <input type="submit" class="btn btn-primary btn-user  shadow-sm mt-1 rounded btn-block  "
                                             value="Ajouter" name="btnADD"></div>

                                             
                                            </form>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Ajouter Type</h6>
                                
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <!-- Form.. Type-->
                                    
	<?php echo $success05?>
                                <form  method="post">
                                <div class="form-group">
                        <input type="text" name="typeChm" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Type chambre..."  required>
                                </div>

                        <div class="form-group">
                                    <input type="number" name="np" min="1" max="13" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="N° personnes..."  required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                        id="exampleInputPassword" name="prix" placeholder="Tarif..." required>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-9">
                                            <input type="submit" class="btn btn-primary btn-user  shadow-sm mt-1 rounded btn-block "
                                             value="Ajouter" name="btnADDType"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    
            </div>
        </div>
    </div>


</body>

</html>