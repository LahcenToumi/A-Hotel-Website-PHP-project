<?php 
namespace controlers\loginControler;
include dirname(__FILE__)."/../modelS/model.php";
// use models\model\Client;
use models\model\ModelClient;
// session_destroy();
class loginControler{

# -------------------------------------------------------------------------
# Login ;
	public function Index(){
		$title ="Login";
		$mdl = new ModelClient();
    $danger='';
  if (isset($_POST['btn'])) {

        $email= $_POST['email'];
        $pswd= $_POST['psw'];
        $bat = $mdl->requete("select * from utilisateur where email='".$email."' and password='".$pswd."' ",1);
        
        if($bat){
         
          foreach($bat as $i){
            $nm =$i->nom;
            $pr= $i->prenom;
            $rol =$i->role;
            $log =$i->login;
          }
          
          session_start();
          $_SESSION['email']=$email;
          $_SESSION['Nom'] =$nm;
          $_SESSION['Prenom'] = $pr;
          $_SESSION['role'] = $rol;
          $_SESSION['login'] = $log;
          
    
        }else{
          $danger = ' <div class=" btn-danger btn-icon-split text-center  mb-2">
          <span class="icon text-white-70">
            <i class="fas fa-info-circle"></i>
          </span>
          <span class="text">email or password incorrect 
          <a href="http://localhost/TP_11/MVC/Forgot_Password">Forgot Password</a> or
          <a href="http://localhost/TP_11/MVC/Sign_Up">Create Account</a></span>
        </div>';
        }
      
  }
  if (isset($_SESSION["login"])) {
    if ($rol == "admin") {
      header("location:http://localhost/TP_11/MVC/Dashboard");
  }else{
    header("location:http://localhost/TP_11/MVC/Room");
  }
  }else{
		require "views/loginView.php"; }
	}
  
# -------------------------------------------------------------------------
# Logouit ;

  public function indexOut(){
    session_destroy();
    header("location:http://localhost/TP_11/MVC/Login");
  }

# -------------------------------------------------------------------------
# SingUp ;

  public function IndexUP(){
		$title ="Sign_Up";
		$mdl = new ModelClient();
    $danger='';
  if (isset($_POST['btn2'])) {
    // session_destroy();

        $email= $_POST['email'];
        $log= $_POST['login'];
        $pswd= $_POST['pasw'];
        $nm= $_POST['nom'];
        $pr= $_POST['pr'];
        $role= $_POST['role'];
        $b = $mdl->requete("INSERT INTO `utilisateur` (`login`, `nom`, `prenom`, `email`, `password`, `role`) 
        VALUES ('$log', '$nm', '$pr', '$email','$pswd', '$role')",2);
      if ($b) {
        # code...
        $danger = ' <div class=" btn-success btn-icon-split text-center  mb-2">
      <span class="icon text-white-70">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Add successfully <a href="http://localhost/TP_11/MVC/Login">Login<a></span>
    </div>';
      }else{
        $danger = ' <div class=" btn-danger btn-icon-split text-center  mb-2">
        <span class="icon text-white-70">
          <i class="fas fa-info-circle"></i>
        </span>
        <span class="text">email or userName incorrect</span>
      </div>';
      }
    
        
      
  }
  if (isset($_SESSION["login"])) {
    header("location:http://localhost/TP_11/MVC");
  }else{
		require "views/Sign_UpView.php"; }
	}

# -------------------------------------------------------------------------
# Forgt Password ;

  public function IndexPw(){
		$title ="Forgot_Password";
    $danger='';
		$mdl = new ModelClient();
    if (isset($_POST['btn3'])) {
      $pw = $_POST['pw'];
      $lg = $_POST['lg'];
      
$b = $mdl->requete("UPDATE utilisateur
set password=$pw WHERE login = '$lg' or email = '$lg'",2);
    // header("location:http://localhost/TP_11/MVC/Login");
    if ($b) {
      # code...
      $danger = ' <div class=" btn-success btn-icon-split text-center  mb-2">
      <span class="icon text-white-70">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Modified successfully <a href="http://localhost/TP_11/MVC/Login">Login<a></span>
    </div>';
    }else{
      $danger = ' <div class=" btn-danger btn-icon-split text-center  mb-2">
      <span class="icon text-white-70">
        <i class="fas fa-info-circle"></i>
      </span>
      <span class="text">email or userName incorrect</span>
    </div>';
    }
    }
    if (isset($_SESSION["login"])) {
      header("location:http://localhost/TP_11/MVC");
    }else{
		require "views/FpasswView.php"; }
  }


}


 ?>