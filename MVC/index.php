<?php 
include "controlers/HomeControler.php";
include "controlers/RoomsControler.php";
include "controlers/loginControler.php";
include "controlers/reservationControler.php";
include "controlers/adminControler.php";
use controlers\HomeControler\HomeControler;
use controlers\RoomsControler\RoomsControler;
use controlers\loginControler\loginControler;
use controlers\reservationControler\RControler;
use controlers\adminControler\adminC;
use controlers\clientControler\Rooms;

$url = explode("/",$_GET['link']);



if($url[0]=="chambre" && !empty($url[1])){
            // $ctr = new chambreControler();
    

}elseif($url[0]==""){
$ctr = new HomeControler();
$ctr->Index();

}
// elseif($url[0]=="client"){
//  $ctr = new ClientControler();
// $ctr->Index();

// }
elseif($url[0]=="Login"){
$ctr = new loginControler();
$ctr->Index();
}elseif($url[0]=="Sign_Up"){
    $ctr = new loginControler();
    $ctr->IndexUP();
    }elseif($url[0]=="Forgot_Password"){
        $ctr = new loginControler();
        $ctr->IndexPw();
        }
        elseif($url[0]=="Room"){
        $ctr = new Rooms();
        $ctr->Index();
    }
    elseif($url[0]=="Logout"){
            $ctr = new loginControler();
            $ctr->indexOut();
    }
    elseif($url[0]=="Reservation" && !empty($url[1])){
            $ctr = new RControler();
                // $ctr->Details();
            $ctr->index($url[1]);
    }
    elseif($url[0]=="Dashboard"){
        $ctr = new adminC();
        $ctr->index();
        
    }
    elseif($url[0]=="Admin"){
        $ctr = new adminC();
        $ctr->indexAD();
        
    }
    elseif($url[0]=="ListeClient"){
        $ctr = new adminC();
        $ctr->IndexALst();
        
    }
    elseif($url[0]=="ListeChambre"){
        $ctr = new adminC();
        $ctr->UpDLRoom();
        
    }
    
    elseif($url[0]=="Listetypes"){
        $ctr = new adminC();
        $ctr->UpDLType();
        
    }

    elseif($url[0]=="ListeReservation"){
        $ctr = new RControler();
        $ctr->UPDLRes();
        
    }else{
$ctr = new HomeControler();
$ctr->E404();
    }

 ?>