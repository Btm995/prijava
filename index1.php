<!DOCTYPE html>
<html lang="en" ng-app="myModule">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body ng-controller="myController">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com" >Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Filter MySQLi Data Using AngularJS</h3>
		<hr style="border-top:1px dotted #ccc;">
		<div class="col-md-6">
			<form method="POST">
				<div class="form-group">
					<label>Image</label>
					<input type="file" ng-model="image" class="form-control"/>
				</div>
				<div class="form-group">
					<label>username</label>
					<input type="text" ng-model="username" class="form-control"/>
				</div>
                <div class="form-group">
					<label>text</label>
					<input type="text" ng-model="text" class="form-control"/>
				</div>
				<div class="form-group">
					<label>datetime</label>
					<input type="number" min="0" ng-model="datetime" class="form-control"/>
				</div>
				<center><button class="btn btn-primary" ng-click="saveStudent()"><span class="glyphicon glyphicon-save"></span> Save</button></center>
			</form>
		</div>
		<div class="col-md-6">
			<div class="form-inline">
				<input type="text" placeholder="Filter" class="form-control" ng-model="keyword"/>
			</div>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Image</th>
						<th>Username</th>
                        <th>Text</th>
						<th>datetime</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat = "text in useres | filter:keyword | orderBy:'datetime'">
						<td>{{student.image}}</td>
						<td>{{student.username}}</td>
						<td>{{student.text}}</td>
						<td>{{student.datetime}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<script src="js/angular.js"></script>
<script src="js/script.js"></script>
</body>	
</html>


<div class="container_display">
	<table cellpadding="10">
		<tr>
			<th> Image</th>
			<th>Text</th>
		</tr>
		<?php $res=mysqli_query($dbc,"SELECT* from users ORDER by id DESC");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                  <td><img src="uploads/'.$row['image'].'" height="200"></td> 
                  <td>'.$row['text'].'</td> 
                  <td>'.$row['username'].'</td> 
                                    <td>'.$row['datetime'].'</td> 

				</tr>';

} ?>
		

	</div>

