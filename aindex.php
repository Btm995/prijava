<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Display User Details</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="save.php">
				<div class="form-group">
					<label>image</label>
					<input type="form" class="form-control" name="image" required="required"/>
				</div>
				<div class="form-group">
					<label>text</label>
					<input type="text" class="form-control" name="text" required="required"/>
				</div>
				<div class="form-group">
					<label>username</label>
					<select name="username" class="form-control" required="required">
						
					</select>
				</div>
				<div class="form-group">
					<label>datetime</label>
					<input type="number" class="form-control" name="datetime" required="required"/>
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" max="12" required="required"/>
				</div>
				<center><button class="btn btn-primary" name="save">Save</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>image</th>
						<th>text</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'config.php';
						$query=mysqli_query($conn, "SELECT * FROM `users`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $fetch['image']?></td>
							<td><?php echo $fetch['text']?></td>
							<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal<?php echo $fetch['id']?>">View Details</button></td>
						</tr>
						
						<div class="modal fade" id="form_modal<?php echo $fetch['id']?>" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title">User Details</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="col-md-6">
												<h4>image</h4>
												<p><?php  echo "<img src='uploads/".$row['image']."' >"?></p>
											</div>
											<div class="col-md-6">
												<h4>text</h4>
												<p><?php echo $fetch['text']?></p>
											</div>
											<br style="clear:both;"/>
											<div class="col-md-6">
												<h4>username</h4>
												<p><?php echo $fetch['username']?></p>
											</div>
											<div class="col-md-6">
												<h4>datetime</h4>
												<p><?php echo $fetch['datetime']?></p>
											</div>
												
											
											<br style="clear:both;"/>
											<div class="col-md-6">
												<h4>Username</h4>
												<p><?php echo $fetch['username']?></p>
											</div>
											<div class="col-md-6">
												<h4>Password</h4>
												<p>************</p>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>