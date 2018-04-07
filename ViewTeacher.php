		<?php include 'navbar.php'; 
		?>
		<?php include 'UserSidebar.php'; 
		?>
		<!-- END NAVBAR -->
		<!-- MAIN -->
		<style>


	</style>
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveTeacher()">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">View Teacher</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row" >
								<div class="col-md-4" ng-repeat="t in teachers">
								<div class="panel panel-profile">
								<div class="clearfix">
								<!-- LEFT COLUMN -->
								<div class="profile">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
										<h3 class="name">{{t.name}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item" id="1">
											{{t.designation}}<span>Designation</span>
											</div>
											<div class="col-md-4 stat-item" id="1">
											{{t.aptnature}} <span>Appointment Type</span>
											</div>
											<div class="col-md-4 stat-item" id="1">
												{{t.experience}}<span>Experience</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Name <span>{{t.name}}</span></li>
											<li>Mobile <span>{{t.contact}}</span></li>
											<li>Email <span>{{t.email}}</span></li>
											<li>Address <span>{{t.address}}</span></li>
										</ul>
									</div>
									<div class="text-center"><a href="#" class="btn btn-primary">View Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->

								</div>
								
							</div>

							
								
						</div>
						<!-- END MAIN CONTENT -->
					</div>
					<!-- END MAIN CONTENT -->
				</div>
				<!-- END MAIN CONTENT -->
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

<?php include 'footer.php'; 
		?>
		