		<?php include 'navbar.php'; 
		?>
		<?php include 'AdminSidebar.php'; 
		?>
		
		<!-- MAIN -->
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveTeacher()" >
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Add Teacher</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="col-lg-12 col-sm-12 col-xs-12 alert alert-success ng-hide" ng-show="isDisplay"><strong>{{successMessage}}</strong></div>
						<div class="panel-body">
							<div class="row">
								<form method="POST" >
								<div class="col-sm-6">
								<input type="text" ng-model="tname" class="form-control input-lg" placeholder=" Faculty Name">
									<br>
									<input type="text" ng-model="tmob" class="form-control input-lg" placeholder="Mobile-No">
									<br>
									<input type="email" ng-model="temail" class="form-control input-lg"  placeholder="Email">
									<br>
									<input type="text" ng-model="tdesig" class="form-control input-lg"  placeholder="Designation">
									<br>
									
									<p>GENDER</p>
									<label class="fancy-radio">
										<input name="gender" ng-model="tgender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" ng-model="tgender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
								<div class="col-sm-6">
									<select class="form-control input-lg" ng-model="teduc">
									 	<option value="eq">Education Qualification Type
									 	</option>
										<option value="MCA">MCA</option>
										<option value="MSC">MSC</option>
										<option value="PHD">PHD</option>
										<option value="MBA">MBA</option>
										<option value="M.Phill">M.Phill</option>
										<option value="MCOM">MCOM</option>
									</select>
									<br>
									<select class="form-control input-lg" ng-model="tapt">
									 	<option value="eq">Appointment Type
									 	</option>
										<option value="Regular">Regular</option>
										<option value="ADHOC">ADHOC</option>
									</select>
									<br>
									<input type="text" ng-model="ttexprnc" class="form-control input-lg"  placeholder="Teaching Experience">
									<br>
									<!-- <input type="password" ng-model="tpswd1" class="form-control input-lg"  placeholder="Password">
									<br> -->
									<textarea class="form-control input-lg"
									ng-model="tadrs" placeholder="Address" rows="4"></textarea>
									<br>
									<button type="button" class="btn btn-success btn-lg pull-right" ng-click="addTeacher()">Submit</button>
									
								</div>
								</form>	
							</div>							
							
						</div>
					</div>

					
						
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Teacher List</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-hover table-bordered">
										<!-- <thead> -->
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email</th>
												<th>Mobile-No</th>
												<th>Education</th>
												<th>Appointment Type</th>
												<th>Designation</th>
												<th>Experience</th>
												<th>Address</th>
												<th>Actions</th>
											</tr>
										<!-- </thead> -->
										<!-- <tbody> -->
											<tr ng-repeat="x in teachers">
												<td>{{x.teacherid}}</td>
												<td>{{x.name}}</td>
												<td>{{x.email}}</td>
												<td>{{x.contact}}</td>
												<td>{{x.educ}}</td>
												<td>{{x.aptnature}}</td>
												<td>{{x.designation}}</td>
												<td>{{x.experience}}</td>
												<td>{{x.address}}</td>

												
												<td><button type="button" class="btn 	 btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Edit</button>
													<button type="button" class="btn btn-danger" ng-click="delTeacher(x.teacherid)">Delete</button>
												</td>
											</tr>
										<!-- </tbody> -->
									</table>
								</div>
							
							<!-- END TABLE STRIPED -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body" ng-init=retriveTeacher(teacherid)>
       							<div class="row">
								<form method="POST" >
								<div class="col-sm-6" >
								<input type="text" ng-model="tname" class="form-control input-lg" placeholder=" Faculty Name"
								value={{x.name}}>
									<br>
									<input type="text" ng-model="tmob" class="form-control input-lg" placeholder="Mobile-No">
									<br>
									<input type="email" ng-model="temail" class="form-control input-lg"  placeholder="Email">
									<br>
									<input type="text" ng-model="tdesig" class="form-control input-lg"  placeholder="Designation">
									<br>
									
									<p>GENDER</p>
									<label class="fancy-radio">
										<input name="gender" ng-model="tgender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" ng-model="tgender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
								<div class="col-sm-6">
									<select class="form-control input-lg" ng-model="teduc">
									 	<option value="eq">Education Qualification Type
									 	</option>
										<option value="MCA">MCA</option>
										<option value="MSC">MSC</option>
										<option value="PHD">PHD</option>
										<option value="MBA">MBA</option>
										<option value="M.Phill">M.Phill</option>
										<option value="MCOM">MCOM</option>
									</select>
									<br>
									<select class="form-control input-lg" ng-model="tapt">
									 	<option value="eq">Appointment Type
									 	</option>
										<option value="Regular">Regular</option>
										<option value="ADHOC">ADHOC</option>
									</select>
									<br>
									<input type="text" ng-model="ttexprnc" class="form-control input-lg"  placeholder="Teaching Experience">
									<br>
									<input type="password" ng-model="tpswd1" class="form-control input-lg"  placeholder="Password">
									<br>
									<textarea class="form-control input-lg"
									ng-model="tadrs" placeholder="Address" rows="4"></textarea>
									
								</div>
								</form>	
							</div>							
							
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="UpdateTeacher()">Save changes</button>
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
		