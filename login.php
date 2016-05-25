<?php
require_once 'config.php';

if (isset($_SESSION['user_id'])) header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<meta name="description" content="AngularJS Insert Update Delete Using PHP MySQL, angularjs php mysql crud, add update delete in angularjs, php angularjs mysql insert delete update">
	<meta name="keywords" content="AngularJS Insert Update Delete Using PHP MySQL, angularjs php mysql crud, add update delete in angularjs, php angularjs mysql insert delete update">
	<meta name="author" content="https://plus.google.com/+MuniAyothi/">
	<title>AngularJS by DWH CMS Team</title>
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>
<body data-ng-app="loginModule" data-ng-controller="loginController" data-ng-init="init()">
	<input type="hidden" id="base_path" value="<?php echo BASE_PATH; ?>"/>
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">AngularJS by DWH CMS Team</a>
			</div>
			<!--/.nav-collapse -->
			<!--/.nav-collapse -->
		</div>
	</div>

	<div class="container">
		<div class="row" style="margin-top: 10px;">
			<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<script async
					src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
					style="display: inline-block; width: 728px; height: 90px"
					data-ad-client="ca-pub-4997600402648823" data-ad-slot="1675608998"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>  -->
		</div>

		<div class="clearfix"></div>
		<div class="row mt80">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 animated fadeInDown">
				<div class="alert alert-danger text-center alert-failure-div" role="alert" style="display: none">
					<p></p>
				</div>
				<div class="alert alert-success text-center alert-success-div" role="alert" style="display: none">
					<p></p>
				</div>
				<form novalidate name="userForm" >
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label> 
						<input data-ng-minlength="3" required type="text" class="form-control" id="username" name="username" placeholder="Username" data-ng-model='tempUser.username'>
						<span class="help-block error" data-ng-show="userForm.username.$invalid && userForm.username.$dirty">
							{{getError(userForm.username.$error, 'username')}}
						</span>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>  
						<input data-ng-minlength="3" required type="password" class="form-control" id="password" name="password" placeholder="Password" data-ng-model='tempUser.password'>
						<span class="help-block error" data-ng-show="userForm.password.$invalid && userForm.password.$dirty">
							{{getError(userForm.password.$error, 'password')}}
						</span>
					</div>
					<div class="text-center">
						<button ng-disabled="userForm.$invalid" data-loading-text="Checking User..." type="submit" class="btn btn-login" data-ng-click="loginUser()">Login</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/angular-custom.js"></script>
</body>
</html>