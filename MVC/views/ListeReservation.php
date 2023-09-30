<?php
            include_once ("head2A.php");
      ?>  
	  <?php
	  include_once ("meta&bootstrap.php");
?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<?php
include_once("nav.php");
?> 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table">
				<div class="row">
					<div class="col-sm-6">
						<h2>Liste <b>Reservation</b></h2>
					</div>
					<div class="container-fluid col-sm-5">
    <form class="d-flex" method="post">
      <input class="form-control me-2" type="search" placeholder="Search Login..." name="search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit" name="btnSearch">Search</button>
    </form>
  </div>
					 <div class="col-sm-1">
			<a href="http://localhost/TP_11/MVC/Dashboard" 
			class="btn btn-outline-primary" >
			<i class="fas fa-fw fa-home"></i></i></a>						
					</div> 
				</div>
			</div>
	<?php echo $success?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>NumChambre</th>
						<th>login</th>
						<th>dateArrive</th>
						<th>dateSortie</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
			
						<?php
                           $s=0;
						foreach($lstR as $i){
                            $s+=1;
							$num = $i->NumChambre;
							echo "<tr>
							<td>$num</td>
							<td>$i->login</td>
							<td>$i->dateArrive</td>
							<td>$i->dateSortie</td>
							<td>
								<a href='#Edit$s' class='edit' data-toggle='modal'>
								<i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
								<a href='#delete$s' class='delete' data-toggle='modal'>
								<i class='material-icons' data-toggle='tooltip' title='Delete'>
								&#xE872;</i></a>
							</td>
						</tr>";
                     


						echo '<div id="delete'.$s.'" class="modal fade"><div class="modal-dialog">
									<div class="modal-content">
											<div class="modal-header">						
												<h4 class="modal-title">Delete Employee</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">					
												<p>Are you sure you want to delete these Records?</p>
												<p class="text-warning"><small>Num chambre :'.$i->NumChambre.'</small></p>
											</div>
											<div class="modal-footer">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
												<a href="http://localhost/TP_11/MVC/ListeReservation?Num='.$i->NumChambre.'&log='.$i->login.'&DA='.$i->dateArrive.'&DS='.$i->dateSortie.'&op=1"
												 class="btn btn-danger">Delete</a>
											</div>
									</div>
								</div>
			</div><div id="Edit'.$s.'" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Modified Reservation</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
				<div class="form-group">
				<label>Num chambre</label>
				<input type="number" class="form-control"  readonly value="'.$i->NumChambre.'" required name="Numch">
			</div>		
					<div class="form-group">
					<label>typechambre</label>
					<input type="text" class="form-control" name="login" readonly value="'.$i->login.'">
				</div>	
				
				<div class="form-group">
				<label>dateArrive</label>
				<input type="date" class="form-control" value="'.$i->dateArrive.'" required name="arrival">
			</div>			
					<div class="form-group">
						<label>dateSortie</label>
						<input type="date" class="form-control" name="sortie" value="'.$i->dateSortie.'">
					</div>	     

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save" name="btnUp">
				</div>
			</form>
		</div>
	</div>
</div>';
						}
						
						?>
					
				</tbody>
			</table>
			<div class="clearfix">
				<ul class="pagination">
					<?php
					for ($n=1; $n <= $nbpage; $n++) { 
						# code...
						if ($Pospage == $n) {
							# code...
						echo '<li class="page-item active"><a href="http://localhost/TP_11/MVC/ListeReservation?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
						}else 
						echo '<li class="page-item"><a href="http://localhost/TP_11/MVC/ListeReservation?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
					}
					?>
				</ul>
			</div>
		</div>
	</div>        
</div>

 <?php
        ?>
</body>
</html>