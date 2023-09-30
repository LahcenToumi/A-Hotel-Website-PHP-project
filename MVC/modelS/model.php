<?php 
namespace models\model;
use \PDO;
use PDOException;

class ModelClient{

	public function requete($req, $type)
	{
		try{
		// echo "<script>alert('".$req."')</script>";
		$con = new PDO("mysql:host=localhost;dbname=hotel1","root","");
		$data = null;
		if($type == 1){
			$result = $con->query($req);
			$data = $result->fetchAll(PDO::FETCH_OBJ);
			


		}else{
			$data = $con->exec($req);

		}
	}
	catch(PDOException $a){
		// echo $a->getMessage();
	}
		return $data;
	}
}


 ?>