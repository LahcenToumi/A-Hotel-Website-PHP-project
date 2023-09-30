<?php 
namespace controlers\clientControler;
// include __DIR__."/../models/model.php";
// use models\model\ModelClient;
// include dirname(__FILE__)."/../modelS/model.php";
use models\model\ModelClient;
session_start();

class Rooms{

# -------------------------------------------------------------------------
# Rooms ;
	public function Index()
	{
		
		$mdl = new ModelClient();
		$title = "Room && tarif";
		# Pagination...

		$count = $mdl->requete('select count(*) as nb from chambres',1);
		foreach ($count as $k) {
			$cnt = $k->nb;
		}
			$nbclientpage=06;
			$nbpage = ceil($cnt/06);
			$Pospage = $_GET['page']??1;
			$pagstr = ($Pospage -1)*$nbclientpage;

# Seject Rooms...
		$lstCh = $mdl->requete("select * from chambres limit ".$pagstr.",".$nbclientpage,1);
		$s1 = $mdl->requete("select typechambre from chambres group by typechambre ",1);
		
		$data = 0;
		if(isset($_POST['btn'])){
		  $typech=$_POST['vls'];
		  $datea=$_POST['d1'];
		  $dates=$_POST['d2'];
		  
		$lst = $mdl->requete("SELECT *
		FROM
		chambres 
		WHERE typechambre = '$typech' and Numchambre
		NOT IN(SELECT Numchambre FROM reservations r WHERE
		(
		dateArrive >= '$datea' AND dateSortie <= '$dates'
		) OR(
		dateArrive <= '$datea' AND dateSortie >= '$dates'
		) OR(
		dateArrive >= '$datea' AND dateSortie >= '$dates' AND dateArrive <= '$dates'
		) OR(
		dateArrive <= '$datea' AND dateSortie <= '$dates' AND dateSortie >= '$datea'
		)
		)
		GROUP BY (Numchambre)
	limit ".$pagstr.",".$nbclientpage,1);
		$data=1;
		}
		require "views/room-tarif.php";
	}
}




 ?>