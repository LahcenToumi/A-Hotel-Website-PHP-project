<?php
            include_once ("head2A.php");
      ?>  <?php
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
						<h2>Liste <b>Chambre</b></h2>
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
						<th>Numchambre</th>
						<th>typechambre</th>
						<th>orientation</th>
						<th>descriptions</th>
						<th>images</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
			
						<?php
                           
						foreach($lstRm as $i){
							echo "<tr>
							<td>$i->Numchambre</td>
							<td>$i->typechambre</td>
							<td>$i->orientation</td>
							<td>$i->descriptions</td>
							<td><img src='../images/$i->images'  width='60px' height='40px'/></td>
							
							<td>
								<a href='#Edit$i->Numchambre' class='edit' data-toggle='modal'>
								<i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
								<a href='#delete$i->Numchambre' class='delete' data-toggle='modal'>
								<i class='material-icons' data-toggle='tooltip' title='Delete'>
								&#xE872;</i></a>
							</td>
						</tr>";
                     

							
                        $selct=''; 
                        foreach ($tpchmb as $s){
							if ($s->typechambre==$i->typechambre) {
								
								$selct .= "<option
								value='$s->typechambre' selected>$s->typechambre.</option>";
							}
						else {
                            $selct .= "<option
                              value='$s->typechambre' >$s->typechambre.</option>";
						}}

						echo '<div id="delete'.$i->Numchambre.'" class="modal fade"><div class="modal-dialog">
									<div class="modal-content">
											<div class="modal-header">						
												<h4 class="modal-title">Delete Employee</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">					
												<p>Are you sure you want to delete these Records?</p>
												<p class="text-warning"><small>Num chambre :'.$i->Numchambre.'</small></p>
											</div>
											<div class="modal-footer">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
												<a href="http://localhost/TP_11/MVC/ListeChambre?numCh='.$i->Numchambre.'&op=1"
												 class="btn btn-danger">Delete</a>
											</div>
									</div>
								</div>
			</div><div id="Edit'.$i->Numchambre.'" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Modified Rooms</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
									
					<div class="form-group">
						<label>Numchambre</label>
						<input type="text" class="form-control" name="Nch" readonly value="'.$i->Numchambre.'">
					</div>	
					<div class="form-group">
						<label>type chambre</label>
                <select name="typCh" id="exampleInputPassword"
                    class="form-control form-control-user">;

                    
                   
                    '.$selct.'
                    </select>
                                    
                            </div>               

					<div class="form-group">
						<label>orientation</label>
						<input type="text" class="form-control" value="'.$i->orientation.'" required name="ortion">
					</div>
					<div class="form-group">
						<label>descriptions</label>
						
                        
                    <textarea required 
                     class="form-control" 
                    name="desc" cols="30">'.$i->descriptions.'</textarea>
					</div>
                    <div class="form-group">images chambre...
                    <input type="file"    name="foto"  required>
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
						echo '<li class="page-item active"><a href="http://localhost/TP_11/MVC/ListeChambre?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
						}else 
						echo '<li class="page-item"><a href="http://localhost/TP_11/MVC/ListeChambre?page='.$n.'" 
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