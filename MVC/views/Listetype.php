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
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Liste <b>Types</b></h2>
					</div>
					 <div class="col-sm-6">
			<a href="http://localhost/TP_11/MVC/Dashboard" 
			class="btn btn-outline-primary" >
			<i class="fas fa-fw fa-home"></i></a>						
					</div> 
				</div>
			</div>
	<?php echo $success?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>typechambre</th>
						<th>Nbpersonnes</th>
						<th>tarif</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
			
						<?php
                           $s=0;
						foreach($lstTp as $i){
                            $s+=1;
							echo "<tr>
							<td>$i->typechambre</td>
							<td>$i->Nbpersonnes</td>
							<td>$i->tarif DH</td>
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
												<h4 class="modal-title">Delete Types</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">					
												<p>Are you sure you want to delete these Records?</p>
												<p class="text-warning"><small>type chambre : '.$i->typechambre.'</small></p>
											</div>
											<div class="modal-footer">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
												<a href="http://localhost/TP_11/MVC/Listetypes?type='.$i->typechambre.'&op=1"
												 class="btn btn-danger">Delete</a>
											</div>
									</div>
								</div>
			</div><div id="Edit'.$s.'" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Modified Types</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
									
					<div class="form-group">
						<label>typechambre</label>
						<input type="text" class="form-control" name="typ" readonly value="'.$i->typechambre.'">
					</div>	     
                                           

					<div class="form-group">
						<label>Nbpersonnes</label>
						<input type="text" class="form-control" value="'.$i->Nbpersonnes.'" required name="Nbp">
					</div>
                    
					<div class="form-group">
                    <label>Prix</label>
                    <input type="number" class="form-control" value="'.$i->tarif.'" required name="prx">
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
						echo '<li class="page-item active"><a href="http://localhost/TP_11/MVC/Listetypes?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
						}else 
						echo '<li class="page-item"><a href="http://localhost/TP_11/MVC/Listetypes?page='.$n.'" 
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