<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title?></title>
        <?php
            include_once ("meta&bootstrap.php");
      ?>
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    
        <link href="../css/styles3.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        


            <!-- Nav Item - Pages Collapse Menu -->
            <?php
            include_once ("nav.php");
      ?>

            
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <header class="masthead d-flex align-items-center">
            
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1" style="color: #C0C0C0;">Best hotel in Morocco</h1>
                     <a class="navbar-brand" href="#"><img src="../images/log.png"  width="50px" ></a>
                <h3 class="mb-5" style="color: #C0C0C0;"><em>Best hotel of afrique with the royal view and excellent service</em></h3>
                
               <?php
               
if (isset($_SESSION['login'])) 
    echo('');
else  ('<a class="btn btn-primary btn-xl" href="http://localhost/TP_11/MVC/Login">Login</a>')               ?> 
            </div>
        </header>
            <div id="content">

            </div>
        </div>
    </div> <!-- Footer-->
        <?php
        
        include_once("footer.php")
        ?>
 <!-- Bootstrap core JavaScript-->
 
       
       
    </body>
</html>
