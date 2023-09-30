<?php
namespace controlers\reservationControler;
// include dirname(__FILE__)."/../modelS/model.php";
// use models\model\Client;
use models\model\ModelClient;
// session_destroy();
class RControler{

	
# -------------------------------------------------------------------------
# RESERVATION ;
	public function Index($url){
		$title ="Reservation";
		$mdl = new ModelClient();

if (isset($_SESSION['login'])) {
	
		$lch = $mdl->requete("select * from chambres where Numchambre=".$url,1);
foreach ($lch as $t) {
			$typCh=$t->typechambre;
			$desc=$t->descriptions;
			$img=$t->images;
		}
		$ltp = $mdl->requete("select * from types where typechambre='".$typCh."'",1);

		foreach ($ltp as $t) {
			$Np=$t->Nbpersonnes;
			$tf=$t->tarif;
		}
		if (isset($_POST['btn'])) {
			// Process form data // Assign POST variables
			$arv = $_POST['arrival'];
			$srt = $_POST['sortie'];
			$log = $_SESSION["login"];
			$b = $mdl->requete("INSERT INTO `reservations` VALUES ('$log', '$url','$arv', '$srt')",2);
			
			// $date1=date_create("$arv");
			// $date2=date_create("$srt");
			// $diff=date_diff($date1,$date2);
			// $s = $diff->format("%R%a");
			// // echo $s * 2;
			// $_SESSION['total']= $s * $tf;
			

			}
		require "views/DetailsR.php";
} else{
			header("location:http://localhost/TP_11/MVC/Login");
	}	
	}
# ------------------------------------------------------------------------------------------------
#Liste and Update and Delete RESERATION ;
public function UPDLRes(){
# UPDATE type...	
if (isset($_SESSION['login'])) {
		$title = "Liste Reservation";
		$success='';
		$mdl = new ModelClient();
		if (isset($_POST['btnUp'])) {
			$arv = $_POST['arrival'];
			$srt = $_POST['sortie'];
			$log = $_POST["login"];
			$Num =$_POST["Numch"];
			$lstR0 = $mdl->requete('UPDATE reservations
				SET   dateArrive="'.$arv.'",
			 	dateSortie="'.$srt.'" where login="'.$log.'" and NumChambre='.$Num,2);
				 if ($lstR0) {
					# code...
					$success = ' <div class=" btn-success btn-icon-split text-center  mb-2">
		  <span class="icon text-white-70">
			<i class="fas fa-check"></i>
		  </span>
		  <span class="text">Modified successfully  </span>
		</div>';
				}
		}
# Pagination...

	if ( $_SESSION['role'] == "admin") 
		$count = $mdl->requete('select count(*) as nb from reservations',1);
	else
		$count = $mdl->requete('select count(*) as nb from reservations where login="'.$log.'"',1);
	foreach ($count as $k) {
		$cnt = $k->nb;
	}
		$nbclientpage=05;
		$nbpage = ceil($cnt/05);
		$Pospage = $_GET['page']??1;
		$pagstr = ($Pospage -1)*$nbclientpage;
		if ( $_SESSION['role'] == "admin") {
			if (isset($_POST['search'])) {
				$search=$_POST['search'];
		$lstR = $mdl->requete('select * from reservations 
								WHERE  login LIKE"%'.$search.'%" 
								limit '.$pagstr.','.$nbclientpage,1);
			}else
		$lstR = $mdl->requete('select * from reservations limit '.$pagstr.','.$nbclientpage,1);
		}else
		$lstR = $mdl->requete('select * from reservations where login="'.$log.'"
		 limit '.$pagstr.','.$nbclientpage,1);

# DELETE types...
	if (isset($_GET['op'])==1) {

	$lstR2 = $mdl->requete("delete from reservations 
	where login='".$_GET['log']."' and
	login='".$_GET['DA']."' and
	 login='".$_GET['DS']."' 
	 and NumChambre=".$_GET['Num'],1);
	header("location:http://localhost/TP_11/MVC/ListeReservation");
	}

	
	require "views/ListeReservation.php";
}
}
}
?>