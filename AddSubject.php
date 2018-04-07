		<?php include 'navbar.php'; 
		?>
		<?php include 'AdminSidebar.php'; 
		?>

 

		<!-- MAIN -->
		<div class="main" ng-app="app" ng-controller="registerCtrl" ng-init="retrieveSubjects()">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="row">
							<div class="col-sm-6">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Add Subject</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								
								<div class="col-sm-6">
									<form method="POST">
								<input type="text" ng-model="subname" class="form-control input-lg" placeholder="Subject Name" required>
									<br>
									
									<select ng-model="subyear" class="form-control input-lg">
									 	<option value="eq">Year
									 	</option>
										<option value="BCA I">BCA I</option>
										<option value="BCA II">BCA II</option>
										<option value="BCA III">BCA III</option>
										
									</select>
									<br>
									<button type="button" class="btn btn-success btn-lg pull-right" ng-click="addSubjects()">Submit</button>
									</form>	

								</div>								
									
							</div>
							</div>								
									
							</div>							
							
						</div>
					</div>

					
						
							<!-- TABLE STRIPED -->
							<div class="row">
							<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Subject List</h3>
								</div>
								<div class="panel-body">
									<!-- <div class="row">
										<div class="col-sm-6"> -->
									<table id="table_id" class="table table-striped table-hover table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Subject Name</th>
												<th>Subject Year</th>
												<th>Actions</th>		
											</tr>
										</thead>
										<tbody>
											<tr ng-repeat="s in subjects">
												<td>{{s.subid}}</td>
												<td>{{s.subname}}</td>
												<td>{{s.subyear}}</td>
												<td><button type="button" class="btn 	 btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Edit</button>&nbsp;&nbsp;
													<button type="button" class="btn btn-danger" ng-click="delSubject(s.subid)">Delete</button>
												</td>
												
											</tr>
											
										</tbody>

									</table>
									</div>
									</div>
								</div>
							
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
								<input type="text" value="s.subname" ng-model="subname" class="form-control input-lg" placeholder="Subject Name">
									<br>
									
									<select ng-model="subyear" value="s.subyear" class="form-control input-lg">
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
		<script type="text/javascript" charset="utf8" src="assets/vendor/jquery/jquery.js"></script>
		<script type="text/javascript" charset="utf8" src="assets/vendor/DataTables/datatables.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/vendor/DataTables/datatables.css">
		<script type="text/javascript">
			$(document).ready( function () {
    		$('#table_id').DataTable();
			} );
		</script>
<?php include 'footer.php'; 
		?>
		