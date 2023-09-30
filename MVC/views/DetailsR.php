<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $title; ?> </title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Simple line icons-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <link href="../../css/all.min.css" rel="stylesheet" type="text/css">
       
  <link href="../../css/styles3.css" rel="stylesheet" />
  <link href="../../css/style2.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="../../images/log.png" />
  <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
  <style>
    
body::-webkit-scrollbar {
    width: 7px;
  }
  ::-webkit-scrollbar-track {
   background: #ccc; 
  }
  ::-webkit-scrollbar-thumb {
    background:#f4b619; 
  }
  ::-webkit-scrollbar-thumb:window-inactive {
    background: #f4b619; 
  }
  </style>
<script>
    function verify() {
     dat1 = document.getElementById('dat1').value
     dat2 = document.getElementById('dat2').value

      // To set two dates to two variables
    var date1 = new Date(dat1);
var date2 = new Date(dat2);
  if (dat1>dat2) {
    document.getElementById('Warning').innerHTML = ('<div class="alert alert-warning alert-dismissible fade show"><strong>Warning!</strong> The date is incorrect.<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>')
    return false
  }
// To calculate the time difference of two dates
var Time = date2.getTime() - date1.getTime();
  
var day =Time / (1000 * 3600 * 24);

  // Popup
        page = window.open("", "_blank", "width=500,height=500");
        page.document.write("<html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'></head><body> <h1 align='center'>details</h1><hr><table  class='table table-striped' width=100%><tr><th>Nom :</th><td><?php echo $_SESSION['Nom'] ?></td></tr><tr><th>Prenom :</th><td><?php echo $_SESSION['Prenom'] ?></td></tr><tr><th>Login :</th><td><?php echo $_SESSION['login'] ?></td></tr><tr><th>Login :</th><td><?php echo $_SESSION['email'] ?></td></tr><tr><th>Date Arrival :</th><td>"+dat1+"</td></tr><tr><th>Date Sortie :</th><td>"+dat2+"</td></tr><tr> <th>N° personnes :</th><td><?php echo $Np ?></td></tr><tr><th>type chambre :</th><td><?php echo $typCh ?></td></tr></tr><tr><th>Prix Total :</th><td>"+day*<?php echo $tf?>+" $</td></tr></table><div class='d-grid gap-2'><input type='button' onclick='javascript:window.print()' value='Imprimer' class='btn btn-primary btn-block'><div></body></html>");
    // Email.send({
    // Host : "smtp.gmail.com",
    // Username : "toumilahcen21@gmail.com",
    // Password : "Toumilahcen1234",
    // To : 'toumilahcen21@gmail.com',
    // From : "lahcentoumi18@gmail.com",
    // Subject : "This is the subject",
    // Body : "And this is the body"
    // }).then(
    //   message => alert(message)
    // );
    } 


  </script>
</head>

<body>
<div class="d-grid gap-2">
<a href="http://localhost/TP_11/MVC/" class="btn btn-primary btn-user btn-block shadow-sm mt-1  rounded">
<i class="fas fa-fw fa-home"></i> Home
                                        </a>
</div>

  <div class="container">

    <h1 class="title"><img src="../../images/log.png" width="50px"> Luxirious Suites</h1>



    <!-- RoomDetails -->
    <div id="RoomDetails" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active"><img src="../../images/<?php echo $img ?>" class="img-responsive" alt="slide"></div>
      </div>
      <!-- Controls -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" style="margin-top: 10px;" data-bs-target="#exampleModal">
        Reservation
      </button>
    </div>
    <!-- RoomCarousel-->

    <div class="room-features spacer">
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <p><?php echo $desc ?></p>
        </div>
        <div class="col-sm-6 col-md-3 amenitites">
          <ul>
            <li><?php echo $typCh ?></li>
          </ul>

        </div>
        <div class="col-sm-3 col-md-2">
          <div class="size-price">N° personnes<span><?php echo $Np ?></span></div>
        </div>
        <div class="col-sm-3 col-md-2">
          <div class="size-price">Prix<span><?php echo $tf ?> $</span></div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <span id="Warning" style="margin: auto;"></span>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" onsubmit="return verify()">
            <div class="modal-body">
              <span id="span"></span>
              <table class="table table-borderless">
                <tr>
                  <th class="align-middle fs-5" style="font-family: arial;">date Arrival</th>
                  <td><input type="date" class="form-control"  id="dat1" name="arrival" required></td>
                </tr>
                <tr>
                  <th class="align-middle fs-5" style="font-family: arial;">date Sortie</th>
                  <td><input type="date" class="form-control"  id="dat2" name="sortie" required></td>
                </tr>
              </table>
              <!--  ----------------------------->
              
              <!--  ----------------------------------->
            </div>
            <div class="modal-footer">
              <!-- <input type="hidden" value="" id="px"> -->
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="reservation" name="btn">
            </div>
          </form>
        </div>
      </div>



    </div>
    <?php include 'footer.php'; ?>

</body>

</html>