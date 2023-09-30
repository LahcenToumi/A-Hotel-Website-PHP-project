<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title><?php echo $title; ?> </title>
    
  <link rel="icon" type="image/x-icon" href="../images/log.png" />
 <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary"> 
     
    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
<!-- <a href="http://localhost/TP_11/MVC/" class="btn btn-primary btn-user  shadow-sm mt-1 bg-body rounded btn-block">
  Home
                                        </a> -->
            
        <div class="card o-hidden border-0 shadow-lg my-3">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                         
                            </div>
                            <form class="user" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address..." name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" name="psw" placeholder="Password" required>
                                </div>
                                
                            <input type="submit" value="Login" id="login01" 
                            class="btn btn-primary btn-user btn-block"name="btn">

                                <hr>
                                <a href="http://localhost/TP_11/MVC" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="http://localhost/TP_11/MVC" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="http://localhost/TP_11/MVC/Forgot_Password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="http://localhost/TP_11/MVC/Sign_Up">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../script/bootstrap/js/bootstrap.bundle.min.js"></script>


      
</body>
</html>