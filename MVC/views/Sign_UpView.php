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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
</head>
    
</head>
<body class="bg-gradient-primary">

<div class="container">
<a href="http://localhost/TP_11/MVC/" class="btn btn-primary btn-user  shadow-sm mt-1 bg-body rounded btn-block">
<i class="fas fa-fw fa-home"></i> Home
                                        </a>
<div class="card o-hidden border-0 shadow-lg my-3">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        <?php echo $danger?>
                    </div>
                    <form class="user" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name..." name="nom" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name..." name="pr" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address..." name="email" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="UserName..." name="login"required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Password..." name="pasw" required>
                            </div>
                            <input type="hidden" value="user" name="role">
                        </div>
                        <input type="submit" value="Register Account" name="btn2" class="btn btn-primary btn-user btn-block">
                        <hr>
                        <a href="http://localhost/TP_11/MVC" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="http://localhost/TP_11/MVC" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="http://localhost/TP_11/MVC/Forgot_Password">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="http://localhost/TP_11/MVC/Login">Already have an account? Login!</a>
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