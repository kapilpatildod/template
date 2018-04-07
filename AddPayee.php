		<?php include 'navbar.php'; 
		?>
		<?php include 'AdminSidebar.php'; 
		?>
		
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Add Payee</h3>
							<p class="panel-subtitle"></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<form method="POST" >
								<div class="col-sm-6">
								<input type="text" class="form-control input-lg" placeholder="Name">
									<br>
									<input type="text" class="form-control input-lg" placeholder="Mobile-No">
									<br>
									<input type="email" class="form-control input-lg" value="email" placeholder="Email">
									<br>
									<select class="form-control input-lg">
									 	<option value="eq">Year
									 	</option>
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
										<input name="gender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control input-lg" value="" placeholder="Password">
									<br>
									<input type="password" class="form-control input-lg" value="" placeholder="Re-Enter Password">
									<br>
									<textarea class="form-control input-lg" placeholder="Address" rows="4"></textarea>
									<br>
									<button type="button" class="btn btn-success btn-lg pull-right">Submit</button>
									
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
												<th>Education</th>
												<th>Gender</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
												<td>Jobs</td>
												<td>@steve</td>
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
		