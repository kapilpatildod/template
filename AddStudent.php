		<?php include 'navbar.php'; 
		?>
		<?php include 'AdminSidebar.php'; 
		?>
		
		<!-- MAIN -->
		<div class="main"  >
			<!-- MAIN CONTENT -->
			<div class="main-content" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveStudent()">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Add Student</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body" >
							<div class="row">
								<form method="POST" >
								<div class="col-sm-6">
								<input type="text" ng-model="sname" class="form-control input-lg" placeholder="Name">
									<br>
									<input type="text" ng-model="smob" class="form-control input-lg" placeholder="Mobile-No">
									<br>
									<input type="email" ng-model="semail" class="form-control input-lg" value="email" placeholder="Email">
									<br>

									<select ng-model="syear" class="form-control input-lg">
									 	<option value="eq">Year</option>
										<option value="BCA I">BCA I</option>
										<option value="BCA II">BCA II</option>
										<option value="BCA III">BCA III</option>
										<option value="BSC I">BSC I</option>
										<option value="BSC II">BSC II</option>
										<option value="BSC III">BSC III</option>
									</select>
									<br>
									<p>GENDER</p>
									<label class="fancy-radio">
										<input name="gender" ng-model="sgender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" ng-model="sgender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
								<div class="col-sm-6">
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
								
									<input type="password" ng-model="spswd1" class="form-control input-lg" value="asecret">
									<br>
									<input type="password" ng-model="spswd1" class="form-control input-lg" value="asecret">
									<br>
									<textarea class="form-control input-lg" ng-model="saddrs" placeholder="Address" rows="4"></textarea>
									<br>
									<button type="button" class="btn btn-success btn-lg pull-right" ng-click="addStudent()">Submit</button>
									
								</div>
								</form>	
							</div>							
							
						</div>
					</div>

					
						
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Student List</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-hover table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email</th>
												<th>Mobile-No</th>
												<th>Aadhar-No</th>
												<th>Class Admitted</th>
												<th>Category</th>
												<th colspan="3" class="text-center">Actions</th>

											</tr>
										</thead>
										<tbody>
											<tr ng-repeat="s in students">
												<td>{{s.sid}}</td>
												<td>{{s.name}}</td>
												<td>{{s.email}}</td>
												<td>{{s.mobile}}</td>
												<td>{{s.adhar}}</td>
												<td>{{s.year}}</td>
												<td>{{s.category}}</td>
												<td><button type="button" class="btn 	 btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Edit</button></td>
												<td>
													<button type="button" class="btn btn-warning">View</button></td>
													<td>
													<button type="button" class="btn btn-danger" ng-click="delStudent(s.sid)">Delete</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							
							<!-- END TABLE STRIPED -->
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

<?php include 'footer.php'; 
		?>
		