<?php 
namespace controlers\HomeControler;


class HomeControler{

	// la liste des clients
	public function Index()
	{		
		$title ="Home";
		$msg = "Bienvenue dans notre site !!!";
		require "views/homeView.php";
	}
	public function E404()
	{		
		$title ="404";
		require "views/404.php";
	}
}


 ?>