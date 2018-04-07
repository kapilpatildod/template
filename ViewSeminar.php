		<?php include 'navbar.php'; 
		?>
		<?php include 'UserSidebar.php'; 
		?>
		<!-- END NAVBAR -->
		<!-- MAIN -->
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveStudent()">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">View Seminar</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div ng-repeat="s in students" class="col-md-3 col-sm-2 col-lg-3">
											<a ng-href="{{'/template/template/assets/vendor/pdfjs/web/viewer.html?file=' + s.subid}}.pdf">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-book award-icon"></span>
												</div>
												<span>{{s.name}}</span>
											</div>
										</a>
										</div>
									</div><!-- 
									<div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div> -->
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
		