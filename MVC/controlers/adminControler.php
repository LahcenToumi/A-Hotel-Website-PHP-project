<?php 
namespace controlers\adminControler;
use models\model\ModelClient;
use \PDO;

class adminC{

# -------------------------------------------------------------------------
# Dashbord
	public function Index()
	{
		if (isset($_SESSION['login'])&& $_SESSION['role'] == "admin") {
			# code...
		
		$moy = 0;
		$total=0;
		$title = "Dashboard";
		$mdl = new ModelClient();
		$yr = isset($_POST['sct'])?$_POST['sct']:2022;
		
		$result = $mdl->requete("SELECT year(dateArrive)as years
		from reservations
		GROUP by(year(dateArrive))",1);
		// $lstCh = $mdl->requete("select * from chambres",1);
		$result0 = $mdl->requete("SELECT month(R.dateArrive) as dateA,sum(T.tarif) as sumT,
		R.dateArrive as dateArrive,
		R.dateSortie as dateSort,year(R.dateArrive)as years
		from reservations R
		INNER JOIN chambres C on C.Numchambre = R.NumChambre
		INNER join types T on T.typechambre=C.typechambre
		GROUP by(month(R.dateArrive))",1);

		$tabM=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		// $tabV=array();
		$cont = count($tabM);
		// if (isset($_POST['BTNS'] ) || $yr == 2022) {
			# code...
			foreach($result0 as $i){
				$years =$i->years;
				$dateArrive =$i->dateArrive;
				$dateSort =$i->dateSort;
				$sumT =$i->sumT;
				$dateA =$i->dateA;
			for ($a=0; $a < $cont; $a++){
				
				if ( $dateA ==$a+1 && $years == $yr) {
				// $_SESSION[]= $sumT;
			$date1=date_create("$dateArrive");
			$date2=date_create("$dateSort");
			$diff=date_diff($date1,$date2);
			$s = $diff->format("%R%a");
			// echo $s * 2;
			$_SESSION[$tabM[$a]]= $s * $sumT;
			$total +=$s * $sumT;
			$moy =$total/12;
				// intval(array_push($tabV,$sumT[$a]));

			  }

			  if($years != $yr && $dateA ==$a+1){
				$_SESSION[$tabM[$a]]= 0;
				// $sumT[$a]=0;
				// array_push($tabM,$sumT[$a]);
			}
			}
		
			 
		}
		
	// $data = json_encode($tabM);
	// echo $data;
		
		require "views/DashboardView.php";
		

	}
}
# -------------------------------------------------------------------------
# ADD Room && type

	public function IndexAD(){
	if (isset($_SESSION['login'])&& $_SESSION['role'] == "admin") {
		$title = "Admin";
		$success ='';
		$success05 ='';
		$mdl = new ModelClient();
		$tpchmb =$mdl->requete("SELECT typechambre
		from types group by(typechambre)",1);
		if (isset($_POST['btnADD'])) {
			# Room...

			$tch = $_POST['tch'];
			$ort = $_POST['orient'];
			$desc = $_POST['desc'];
			// $imgs = $_FILES['foto'];
			$name = $_FILES['foto']['name'];
			$nametmp = $_FILES['foto']['tmp_name'];
			move_uploaded_file($nametmp,'../images/'.$name);
			$chambre =  $mdl->requete('INSERT INTO `chambres` (typechambre, orientation, descriptions, images) 
			VALUES("'.$tch.'","'.$ort.'","'.$desc.'","'.$name.'")',2);
			if ($chambre) {
				# code...
				$success = ' <div class=" btn-success btn-icon-split text-center  mb-2">
      <span class="icon text-white-70">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">ADD successfully  <a href="http://localhost/TP_11/MVC/ListeChambre">Show Rooms<a></span>
    </div>';
			}
			
		}
		if (isset($_POST['btnADDType'])) {
			# types...

			$np = $_POST['np'];
			$prix = $_POST['prix'];
			$tchm = $_POST['typeChm'];
			$types4 =  $mdl->requete('INSERT INTO `types` (tarif, typechambre, Nbpersonnes) 
			VALUES('.$prix.',"'.$tchm.'",'.$np.')',2);
				if ($types4) {
					# code...
					$success05 = ' <div class=" btn-success btn-icon-split text-center  mb-2">
		  <span class="icon text-white-70">
			<i class="fas fa-check"></i>
		  </span>
		  <span class="text">ADD successfully   <a href="http://localhost/TP_11/MVC/Listetypes">Show Types<a></span>
		</div>';
				}
		}
		require "views/AdminView.php";
	}}

# -------------------------------------------------------------------------
# Update and Delete User ;
	public function IndexALst(){
		
		if (isset($_SESSION['login'])&& $_SESSION['role'] == "admin") {
		$mdl = new ModelClient();
		$success ='';
		$title = "List User";
# UPDATE User...
	if (isset($_POST['btnUp'])) {
			$nom=$_POST['nom'];
			$prn=$_POST['prn'];
			$pw=$_POST['pw'];
			$eml=$_POST['eml'];
			$lg=$_POST['login'];
			$rl=$_POST['rl'];
		$lstCL = $mdl->requete("UPDATE utilisateur
				SET nom='$nom', prenom='$prn', password='$pw', email='$eml', role='$rl' 
				WHERE login='$lg'",2);
		if ($lstCL) {
			# code...
			$success = ' <div class=" btn-success btn-icon-split text-center  mb-2">
  <span class="icon text-white-70">
	<i class="fas fa-check"></i>
  </span>
  <span class="text">Modified successfully</span>
</div>';
		}
		}
# Pagination...

		$count = $mdl->requete('select count(*) as nb from utilisateur',1);
		foreach ($count as $k) {
			$cnt = $k->nb;
		}
			$nbclientpage=05;
			$nbpage = ceil($cnt/05);
			$Pospage = $_GET['page']??1;
			$pagstr = ($Pospage -1)*$nbclientpage;
			$lstCL = $mdl->requete('select * from utilisateur limit '.$pagstr.','.$nbclientpage,1);

# DELETE User...
		if (isset($_GET['op'])==1) {


		$lstCL = $mdl->requete("delete from utilisateur where login='".$_GET['lg']."'",1);
		header("location:http://localhost/TP_11/MVC/ListeClient");
		}

		
		require "views/ListeClientView.php";
	}
	}
# -------------------------------------------------------------------------
# Update and Delete Room ;
	public function UpDLRoom(){
		if (isset($_SESSION['login'])&& $_SESSION['role'] == "admin") {
		$mdl = new ModelClient();
		$success ='';
		$title = "Liste Room";
		# UPDATE Room...
			$tpchmb =$mdl->requete("SELECT typechambre
		from types",1);
			
	if (isset($_POST['btnUp'])) {
			$Numc=$_POST['Nch'];
			$typ=$_POST['typCh'];
			$orient=$_POST['ortion'];
			$descr=$_POST['desc'];
			$imags = $_FILES['foto']['name'];
			$nametmp = $_FILES['foto']['tmp_name'];
			move_uploaded_file($nametmp,'../images/'.$imags);
		$lstRm0 = $mdl->requete('UPDATE chambres
				SET  typechambre="'.$typ.'", orientation="'.$orient.'",
				 descriptions="'.$descr.'", images="'.$imags.'" where Numchambre ='.$Numc,2);
	
				 if ($lstRm0) {
					# code...
					$success = ' <div class=" btn-success btn-icon-split text-center  mb-2">
		  <span class="icon text-white-70">
			<i class="fas fa-check"></i>
		  </span>
		  <span class="text">Modified successfully </span>
		</div>';
				}
		}
# Pagination...

		$count = $mdl->requete('select count(*) as nb from chambres',1);
		foreach ($count as $k) {
			$cnt = $k->nb;
		}
			$nbclientpage=05;
			$nbpage = ceil($cnt/05);
			$Pospage = $_GET['page']??1;
			$pagstr = ($Pospage -1)*$nbclientpage;
			$lstRm = $mdl->requete('select * from chambres limit '.$pagstr.','.$nbclientpage,1);

# DELETE Room...
		if (isset($_GET['op'])==1) {


		$lstRm2 = $mdl->requete("delete from chambres where Numchambre='".$_GET['numCh']."'",1);
		header("location:http://localhost/TP_11/MVC/ListeChambre");
		}

		
		require "views/Listechambre.php";
	}}

	# -------------------------------------------------------------------------
# Update and Delete Type ;
public function UpDLType(){
	if (isset($_SESSION['login'])&& $_SESSION['role'] == "admin") {
	$mdl = new ModelClient();
		$title = "Liste Tupes";
		$success ='';
		# UPDATE type..

if (isset($_POST['btnUp'])) {
		$prx=$_POST['prx'];
		$typ=$_POST['typ'];
		$Nbp=$_POST['Nbp'];
	$lstTp0 = $mdl->requete('UPDATE types
			SET   Nbpersonnes='.$Nbp.',
			 tarif='.$prx.' where typechambre="'.$typ.'"',2);
if ($lstTp0) {
				# code...
				$success = ' <div class=" btn-success btn-icon-split text-center  mb-1">
	  <span class="icon text-white-70">
		<i class="fas fa-check"></i>
	  </span>
	  <span class="text">Modified successfully</span>
	</div>';
			}
	}
# Pagination...

	$count = $mdl->requete('select count(*) as nb from types',1);
	foreach ($count as $k) {
		$cnt = $k->nb;
	}
		$nbclientpage=05;
		$nbpage = ceil($cnt/05);
		$Pospage = $_GET['page']??1;
		$pagstr = ($Pospage -1)*$nbclientpage;
		$lstTp = $mdl->requete('select * from types limit '.$pagstr.','.$nbclientpage,1);

# DELETE types...
	if (isset($_GET['op'])==1) {

	$lstTp2 = $mdl->requete("delete from types where typechambre='".$_GET['type']."'",1);
	header("location:http://localhost/TP_11/MVC/Listetypes");
	}

	
	require "views/Listetype.php";
}
}}