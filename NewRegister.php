<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Register | Student Portal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<style type="text/css">
		
		#register{
			width: 80%;
			height: 1000px;
		}
		.lft{
			text-align: left;
		}
	</style>
</head>

<body ng-app="app" ng-controller="registerCtrl">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div id="register" class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="" alt="Student Portal"></div>
								<p class="lead">Register your account</p>
							</div>
							<form class="form-auth-small" action="index.php">
								<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Name</label>
									<input type="text" ng-model="sname" name="sname" class="form-control input-lg" id="signin-password" value="" placeholder="Name">
								</div>

								<div class="form-group">
									<label for="signin-mobile" class="control-label sr-only">Mobile</label>
									<input type="text" ng-model="smob" name="smob" class="form-control input-lg" id="signin-password" value="" placeholder="Mobile-No">
								</div>

								<div class="form-group">
									<label for="signin-mobile" class="control-label sr-only">Adhar No</label>
									<input type="text" ng-model="sadhar" name="sadhar" class="form-control input-lg" id="signin-password" value="" placeholder="Aadhar No">
								</div>

								<div class="form-group">
									<label for="signin-mobile" class="control-label sr-only">College Name</label>
									<input type="text" ng-model="sclgnm" name="sclgnm" class="form-control input-lg" id="signin-password" value="D.C.P.E ,H.V.P.M Amravati" placeholder="College Name">
								</div>

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" ng-model="semail" name="semail" class="form-control input-lg" id="signin-email" value="" placeholder="Email">
								</div>

								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Class admitted</label>
									<select name="cladm" ng-model="cladm" class="form-control input-lg" placeholder="">
									 	<option selected value="eq">Class admitted
									 	</option>
										<option value="BCA I">BCA I</option>
										<option value="BCA II">BCA II</option>
										<option value="BCA III">BCA III</option>
										<option value="BSC I">BSC I</option>
										<option value="BSC II">BSC II</option>
										<option value="BSC III">BSC III</option>
									</select>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Caste</label>
									<select name="scaste" ng-model="scaste" class="form-control input-lg">
									 	<option value="eq">Category
									 	</option>
										<option value="Open">Open</option>
										<option value="SC">SC</option>
										<option value="OBC">OBC</option>
										<option value="ST">ST</option>
										<option value="NT">NT</option>
										<option value="General">General</option>
									</select>
								</div>
								
								<div class="form-group">
									<p class="lft">GENDER</p>
									<label class="fancy-radio lft">
										<input name="sgender" ng-model="sgender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio lft">
									<input name="sgender" ng-model="sgender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>

								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="spswd1" ng-model="spswd1" type="password" class="form-control input-lg" id="signin-password" value="" placeholder="Password">
								</div>


								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Confirm Password</label>
									<input name="spswd2" ng-model="spswd2" type="password" class="form-control input-lg" id="signin-password" value="" placeholder="Confirm Password">
								</div>

								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Address</label>
									<textarea name="saddrs" ng-model="saddrs" class="form-control input-lg" placeholder="Address" rows="4"></textarea>
								</div>
								
								
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-login"></i> <button type="button" class="btn btn-success btn-lg btn-block" ng-click="addStudent()" >REGISTER</button></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Welcome to Student Portal</h1>
							<!-- <p>by The Developer</p> -->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
<script src="assets/vendor/angular/angular.min.js"></script>
			<!-- Angular Javascript -->
	<script src="assets/scripts/App.js"></script>
	<script src="assets/scripts/ConfigRouter.js"></script>
	<script src="assets/scripts/Controllers/loginCtrl.js"></script>
	<script src="assets/scripts/Controllers/registerCtrl.js"></script>
	<script src="assets/scripts/Controllers/adminCtrl.js"></script>
	<script src="assets/scripts/Controllers/userCtrl.js"></script>

</html>
