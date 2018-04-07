		<?php include 'navbar.php'; 
		?>
		<?php include 'AdminSidebar.php'; 
		?>
		<!-- END NAVBAR -->
		<!-- MAIN -->
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="countStudent()">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">{{studcount}}</span>
											<span class="title">Total Students</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">{{totalstd}}</span>
											<span class="title">BCA I Students</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">{{totalstd}}</span>
											<span class="title">BCA II Students</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">{{totalstd}}</span>
											<span class="title">BCA III Students</span>
										</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">{{totalteacher}}</span>
											<span class="title">Total Teachers</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">{{totalsub}}</span>
											<span class="title">Total Subjects</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">{{totalnotes}}</span>
											<span class="title">Total Notes</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">{{totalSeminars}}</span>
											<span class="title">BCA III Students</span>
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

<?php include 'footer.php'; 
		?>
		