		<?php include 'navbar.php'; 
		?>
		<?php include 'AdminSidebar.php'; 
		?>
		
		<!-- MAIN -->
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveStudent()">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="row">
							<div class="col-sm-6">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Add Seminars</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								
								<div class="col-sm-6">
									<form method="POST" action="SeminarFiles.php" enctype="multipart/form-data" >
								<select  ng-model="subname" class="form-control input-lg">{{students}}
									 	<option  ng-repeat="s in students" value="{{s.id}}"> {{s.name}}
									 	</option>
										
									</select>
									<br>
									<input type="file" name="fileToUpload" id="fileToUpload" class="form-control input-lg" placeholder="File Name">
									<br>
										<button type="submit" class="btn btn-success btn-lg pull-right">Submit</button>
									</form>	

								</div>								
									
							</div>
							</div>								
									
							</div>							
							
						</div>
					</div>

					
						
							<!-- TABLE STRIPED -->
							<!-- <div class="row">
							<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Seminars List</h3>
								</div>
								<div class="panel-body">
									
									<table class="table table-striped table-hover table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Student Name</th>
												<th>Seminar Topic</th>
												<th colspan="3" class="text-center">Actions</th>		
											</tr>
										</thead>
										<tbody>
											<tr ng-repeat="s in students">
												<td>{{s.subid}}</td>
												<td>{{s.subname}}</td>
												<td>{{s.subyear}}</td>
												<td><button type="button" class="btn 	 btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Edit</button></td>
												<td>
													<button type="button" class="btn btn-warning">View</button></td>
													<td>
													<button type="button" class="btn btn-danger">Delete</button>
												</td>
												
											</tr>
											
										</tbody>

									</table>
									</div>
									</div>
								</div>
							 -->
							<!-- END TABLE STRIPED -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Subjects</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       							<div class="row">
								<form method="POST" >
								<div class="col-sm-6">
								<input type="text" ng-model="subname" class="form-control input-lg" placeholder="Subject Name">
									<br>
									
									<select ng-model="subyear" class="form-control input-lg">
									 	<option value="eq">Year
									 	</option>
										<option value="BCA I">BCA I</option>
										<option value="BCA II">BCA II</option>
										<option value="BCA III">BCA III</option>
										<option value="BSC I">BSC I</option>
										<option value="BSC II">BSC II</option>
										<option value="BSC III">BSC III</option>
									</select>
									
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
		