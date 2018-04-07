		<?php include 'navbar.php'; 
		?>
		<?php include 'UserSidebar.php'; 
		?>
		<!-- END NAVBAR -->
		<!-- MAIN -->
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveSubjects()">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">View Syallabus</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<!-- AWARDS -->
								<div class="awards">
									<div class="row" >
										
										<div class="col-md-3 col-sm-2 col-lg-3" ng-repeat="s in subjects">
											<a ng-href="{{'/template/template/assets/vendor/pdfjs/web/viewer.html?file=' + s.subid}}.pdf">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-book award-icon"></span>
												</div>
												<span>{{s.subname}}</span>
											</div>
											</a>
										</div>
									
										
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
		