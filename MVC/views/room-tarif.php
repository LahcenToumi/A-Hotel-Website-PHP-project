
  <?php
  include_once("meta&bootstrap.php");
  ?>
  
  


<body id="page-top">

<div id="wrapper">
  <?php
  include_once("nav.php");
  ?>  
  <div>
  <div class="container">
<!-- #--------------------------------------------------- -->


    <div style="width:60%;margin:auto">
      <form action="Room" method="post" id="search">
    <i class="category">type :</i><select name="vls" class="form-select" aria-label="Default select example">
          <?php

          foreach ($s1 as $s)
            echo "<option value='$s->typechambre'>$s->typechambre</option>"

          ?>

        </select>
        <i class="category"> Entre date:</i>
        <input type="date" name="d1" class="form-control" required>
        <input type="date" name="d2" class="form-control" required>
        <input type="submit" value="Search" name="btn" class="btn btn-primary btn-user btn-block">
        <!-- btn btn-primary   shadow-sm mt-1 bg-body rounded btn-block -->
      </form>

    </div>
    <br><br>




    <!-- form -->

    <section class="cards">
      <?php
      if ($data == 0) {
        foreach ($lstCh as $t)

          echo '<article class="card card-1">
          <div class="info-hover">
            <div class="clock-info">
            </div>
            <ion-icon name="heart-outline"></ion-icon>
            <ion-icon name="alarm-outline"></ion-icon>
          </div>
          <div class="img"></div>
          <a href="http://localhost/TP_11/MVC/Reservation/'.$t->Numchambre.'">
            <div class="img-hover" style="background-image: url(../images/'.$t->images.');"></div>
          </a>
          <div class="info">
            <span class="category">'.$t->orientation.'</span>
            <h3 class="title"> '.$t->typechambre.'</h3>
            <span class="by">by
              <a href="#" class="link-warning">Reservation</a>
            </span>
          </div>
        </article>';

      } else {

        foreach ($lst as $t)

          echo '<article class="card card-1">
          <div class="info-hover">
            <div class="clock-info">
            </div>
            <ion-icon name="heart-outline"></ion-icon>
            <ion-icon name="alarm-outline"></ion-icon>
          </div>
          <div class="img"></div>
          <a href="http://localhost/TP_11/MVC/Reservation/'.$t->Numchambre.'">
            <div class="img-hover" style="background-image: url(../images/'.$t->images.');"></div>
          </a>
          <div class="info">
            <span class="category">'.$t->orientation.'</span>
            <h3 class="title"> '.$t->typechambre.'</h3>
            <span class="by">by
              <a href="#" class="link-warning">Reservation</a>
            </span>
          </div>
        </article>';
      }




      ?>
      </section>    
      <nav aria-label="...">
				<ul class="pagination pagination-lg">
					<?php
					for ($n=1; $n <= $nbpage; $n++) { 
						# code...
						if ($Pospage == $n) {
							# code...
						echo '<li class="page-item active"><a href="http://localhost/TP_11/MVC/Room?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
						}else 
						echo '<li class="page-item"><a href="http://localhost/TP_11/MVC/Room?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
					}
					?>
				</ul>
			
</nav>


  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <?php include 'footer.php'; ?>
</body>

</html>