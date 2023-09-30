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
						<h2>Liste <b>Users</b></h2>
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
						<th>Nom</th>
						<th>Prenom</th>
						<th>Login</th>
						<th>Email</th>
						<th>Password</th>
						<th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
			
						<?php
						foreach($lstCL as $i){
							echo "<tr>
							
							<td>$i->nom</td>
							<td>$i->prenom</td>
							<td>$i->login</td>
							<td>$i->email</td>
							<td>$i->password</td>
							<td>$i->role</td>
							<td>
								<a href='#Edit$i->login' class='edit' data-toggle='modal'>
								<i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
								<a href='#delete$i->login' class='delete' data-toggle='modal'>
								<i class='material-icons' data-toggle='tooltip' title='Delete'>
								&#xE872;</i></a>
							</td>
						</tr>";
						echo '<div id="delete'.$i->login.'" class="modal fade"><div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">						
									<h4 class="modal-title">Delete Employee</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">					
									<p>Are you sure you want to delete these Records?</p>
									<p class="text-warning"><small>login :'.$i->login.'</small></p>
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
									<a href="http://localhost/TP_11/MVC/ListeClient?lg='.$i->login.'&op=1"
									 class="btn btn-danger">Delete</a>
								</div>
						</div>
					</div>
								</div><div id="Edit'.$i->login.'" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Modified User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
									
					<div class="form-group">
						<label>Login</label>
						<input type="text" class="form-control" name="login" readonly value="'.$i->login.'">
					</div>	
					<div class="form-group">
				
						<label>Nom</label>
						<input type="text" class="form-control" required value="'.$i->nom.'" name="nom" >
					</div><div class="form-group">
						<label>Prenom</label>
						<input type="text" class="form-control" value="'.$i->prenom.'" required name="prn">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" value="'.$i->email.'" required name="eml">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control"  value="'.$i->password.'" required  name="pw">
					</div>
					<div class="form-group">
						<label>Rol</label>
						<input type="text" class="form-control" value="'.$i->role.'" required name="rl">
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
						echo '<li class="page-item active"><a href="http://localhost/TP_11/MVC/ListeClient?page='.$n.'" 
						class="page-link">'.$n.'</a></li>';
						}else 
						echo '<li class="page-item"><a href="http://localhost/TP_11/MVC/ListeClient?page='.$n.'" 
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