<!DOCTYPE html>
<html>
<head>
	<title>Power Tricks by fk</title>

<script src='js/jquery.js'></script>
<script src='js/bootstrap.js'></script>
<script src='js/bootstrap.min.js'></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">


<script type="text/javascript">
	$(document).ready(function()
		{
			
		});
</script>
<style type="text/css">
.treb{font-family: Trebuchet MS}
.flex{display: flex}
.hub-top {position: fixed;top: 0;z-index: 20;width: 100%;background: #222;height: 111px;}
.logo{padding:11px 5px 11px 22px;color: white}
.logo i{color: white;font-size: 77pt}
.logoname{color: white;font-size: 22pt;padding: 22px 11px;}
.login{margin: 11px; color:white;}
.m1{margin: 1px}
.dashboard{background: #333333;position: fixed;height: 100%;width: 17%;box-shadow: 2px 2px 22px black;padding-top: 111px;}
.dashboard span{color: black;font-size: 16px;padding: 11px 22px;background: lightblue;display: block;box-shadow: 1px 1px 2px black}
.dashboard ul{list-style: none;padding: 0}
.dashboard ul li{color: white;padding: 6px 22px;display: block;font-size: 14pt;box-shadow: 1px 1px 2px black;;margin-top: 3px}
.dashboard ul li:hover{box-shadow: 1px 1px 2px green;cursor: pointer;background: #ADD8E6;color: black}
.dashboard ul li i{float: right;padding-top: 5px}
.dashboard:hover{box-shadow: 2px 2px 22px green}
.admin-pic{position: relative;top: -88px;left: 33px}
.admin-name{position: relative;top: -166px;left: 166px;font-size: 13pt;}
.admin-pic img{width: 111px ;height: 111px}
.name{}
.center{text-align: center;}
#mydiv:hover{box-shadow: 2px 2px 22px blue}
</style>
</head>
<body style="background: url(photo/bg.jpg) fixed;">


<div class="background-image"></div>
<div class="hub-top">
	<div class="logo flex pull-left">
		<div><i class="glyphicon glyphicon-cloud"></i></div>
		<div class="logoname treb"><span>Online  Notification </span></div>
	</div>


	<div class="login pull-right " style="margin-right: 44px">
		<div><img src="photo/user.png" class="img-responsive" style="width: 55px;margin:auto;"></div>
		<div class="treb" class="name "><span style="text-align: center;">i am fkgeo</span><br>
		<button class="btn btn-success btn-sm" style="padding: 1px 11px;font-size: 8pt">Setting <i class="fa fa-gear fa-fw"></i></button>
		</div>

	</div>
	<div class="login pull-right " style="margin-right: 44px;padding-top: 25px">
			After login show this -->
	</div>
	<div class="login pull-right ">
		<input type="text" class="form-control input-sm m1"  name="" placeholder="User name">
		<input type="password" class="form-control input-sm m1" name="" placeholder="Password">
		<button class="btn btn-primary btn-sm btn-block m1">Login</button>
	</div>
</div>
<div class="dashboard treb " style="background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;">
	<span class="dbname">Dashboad</span>
	<ul>
		<li><i class="fa fa-home fa-fw"></i> Home</li>
		<li><i class="fa fa-gear fa-fw"></i> Setting</li>
		<li><i class="fa fa-globe fa-fw"></i> Notification</li>
		<li><i class="fa fa-user-circle fa-fw"></i> Users</li>
		<li><i class="fa fa-plus fa-fw"></i> Add Notice</li>
		<li><i class="fa fa-sign-out fa-fw"></i> Logout</li>
	</ul>
</div>
<div style=";margin-left: 18%;padding-top: 122px" class="flex">
	<div class=" well" style="width: 52%; background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;" id="mydiv">
		<img src="photo/spimg.jpg" class="img-responsive img-thumbnail" style="width:550px ;height: 224px;" >
		<div class="admin-pic"><img src="photo/user.png" class="img-circle img-thumbnail"></div>
		<div class="admin-name img-thumbnail treb ">Admin Name</div>
		<div class="well well-sm treb" style="position: relative;top: -122px;">
			<h4>Latest Notice</h4><img src="photo/iamfk.jpg" class="pull-right img-thumbnail " style="width: 133px;margin: 4px">
			this is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even imagethis is latest notice . any type of notice it can include even image

		</div>
	</div>
	<div class="well well-sm" id="mydiv" style="width: 44%;margin-left: 33px;background-color: rgba(0, 0, 0, 0.4);  opacity: inherit">
		<div class="well well-sm " style="background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;color: white"><h4 class="center">Recent Notification</h4></div>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Today's Notifications</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" >
      	<div class="panel panel-primary">
      		<div class="panel-heading " style="padding: 0" >

      				<div class="pull-right"><img src="photo/zil.jpg" class=" img-responsive img-circle" style="width: 40px; height: 40px "></div>
      				<div style="padding: 11px">For Zahid Iqbal</div>
      		</div>
      		<div class="panel-body">This is notificaton text for zahid iqbal</div>
      	</div>
      	<div class="panel panel-primary">
      		<div class="panel-heading " style="padding: 0" >

      				<div class="pull-right"><img src="photo/fk.jpg" class=" img-responsive img-circle" style="width: 40px; height: 40px "></div>
      				<div style="padding: 11px">For Fk</div>
      		</div>
      		<div class="panel-body">This is notificaton text for someone else</div>
      	</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
       Yesterday Notifications</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      		<div class="panel panel-primary">
      		<div class="panel-heading " style="padding: 0" >

      				<div class="pull-right"><img src="photo/zil.jpg" class=" img-responsive img-circle" style="width: 40px; height: 40px "></div>
      				<div style="padding: 11px">For Some User Name</div>
      		</div>
      		<div class="panel-body">This is notificaton text For Some User Name</div>
      	</div>
      	<div class="panel panel-primary">
      		<div class="panel-heading " style="padding: 0" >

      				<div class="pull-right"><img src="photo/user.png" class=" img-responsive img-circle" style="width: 40px; height: 40px "></div>
      				<div style="padding: 11px">For Fk</div>
      		</div>
      		<div class="panel-body">This is notificaton text for someone else</div>
      	</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        All Notifications</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      		<div class="panel panel-primary">
      		<div class="panel-heading " style="padding: 0" >

      				<div class="pull-right"><img src="photo/user.png" class=" img-responsive img-circle" style="width: 40px; height: 40px "></div>
      				<div style="padding: 11px">For Some User Name</div>
      		</div>
      		<div class="panel-body">This is notificaton text for zahid iqbal</div>
      	</div>
      	<div class="panel panel-primary">
      		<div class="panel-heading " style="padding: 0" >

      				<div class="pull-right"><img src="photo/fk.jpg" class=" img-responsive img-circle" style="width: 40px; height: 40px "></div>
      				<div style="padding: 11px">For Fk</div>
      		</div>
      		<div class="panel-body">This is notificaton text for someone else</div>
      	</div>
      </div>
    </div>
  </div>
</div>
	</div>
</div>
</body>
</html>

