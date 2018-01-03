<link rel="stylesheet" href="css/dashboard.css">
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
	<a class="pull-left" href="#"><img src="images/issnewlogo.png" class="pull-left"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
	  aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link text-dark" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">Account Manager</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">CheckPoint</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">GuestList+</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">CMMS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">IMS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">L&F</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">Request Tracker</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">Tasks</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="#">Activity Log</a>
			</li>



		</ul>
	</div>
</nav>

<div class="container" id="home_data">
	<div class="row">

		<div class="col-md-9 col-md-pull-3">
			<fieldset>
				<legend>
					<a id="contact_us_me" data-toggle="collapse" data-target="#contact_us" href="#">Contact Us- Pune Local Server</a>
				</legend>
				<div id="contact_us">
					<p> Contact Us</p>
				</div>
			</fieldset>
		</div>
		<div class="col-md-3 col-md-push-9">
			<fieldset>
				<legend>
					<a data-toggle="collapse" data-target="#date_time" href="#">Date/Time</a>
				</legend>
				<div id="date_time">
					<p id="time" style="text-align: center"> </p>
					<p id="date" style="text-align: center"> </p>
				</div>
			</fieldset>
		</div>
	</div>

	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<fieldset>
						<legend>
							<a data-toggle="collapse" data-target="#system_updates" href="#">System Updates History</a>
						</legend>

						<div id="system_updates" onload="get_grid_data()">
							<p> System Updates</p>
							<div class="scrollable">
								<table class="table table-bordered table-fixed table-striped">
									<thead>
										<th class="col-md-2"> Date/Time</th>
										<th class="col-md-2"> Module </th>
										<th class="col-md-3"> Topic</th>
										<th class="col-md-3"> Description </th>
										<th class="col-md-1"> Read </th>
										<th class="col-md-1"> View </th>
									</thead>
									<tbody id="table_body">
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
										<tr>
											<td>02/01/2017</td>
											<td>IMS</td>
											<td>Merge</td>
											<td>Associated Person</td>
											<td><img src=images/eye></td>
											<td><img src=images/information-white></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</fieldset>
				</div>

				<br> <br>

				<div class="col-md-12">
					<fieldset>
						<legend>
							<a data-toggle="collapse" data-target="#announcements" href="#">Announcements</a>
						</legend>
						<div id="announcements">
							<p> Announcements </p>
						</div>
					</fieldset>
				</div>
			</div>
		</div>

		<div class="col-md-3  blog-sidebar pull-right">
			<div class="row">
				<div class="col-md-12">
					<fieldset>
						<legend>
							<a data-toggle="collapse" data-target="#weather" href="#">Weather</a>
						</legend>
						<div id="weather">
							<p> Weather </p>
						</div>
					</fieldset>
				</div>
				<hr>
				<div class="col-md-12">
					<fieldset>
						<legend>
							<a data-toggle="collapse" data-target="#text_communication" href="#">Text Communication</a>
						</legend>
						<div id="text_communication">
							<p>Messages Available</p>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" style="width: 25%" aria-valuenow="75"
								  aria-valuemin="0" aria-valuemax="100">25%</div>
							</div>
							<p> Messages Received</p>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-warning" role="progressbar" style="width: 75%" aria-valuenow="25"
								  aria-valuemin="0" aria-valuemax="100">75%</div>
							</div>
							<p> Automatic Reply Sent</p>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
								  aria-valuemin="0" aria-valuemax="100">100%</div>
							</div>
							<p> Manual Reply Sent</p>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
								  aria-valuemax="100">50%</div>
							</div>
						</div>
					</fieldset>
				</div>
				<hr>
				<div class="col-md-12">
					<fieldset>
						<legend> Storage </legend>
						<p>Storage Used (in GB) </p>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0"
							  aria-valuemax="100">
								<font style="text-align:center color:black"><strong>2.93%(0.15 GB)</strong></font>
							</div>
						</div>
					</fieldset>
				</div>
				<hr>
				<div class="col-md-12">
					<fieldset>
						<legend> <a data-toggle="collapse" data-target="#signin_form" href="#">Register Here:</a></legend>
						<form class="form-signin" id="signin_form" data-toggle="validator" role="form" action="" method="post">
							<div class="form-group">
								<label for="user_name">Name: <sup style="color: red">*</sup> </label> <input type="text" class="form-control" id="user_name"
								  placeholder="User Name" required>
							</div>
							<div class="form-group" id="mail">
								<label for="email_id">Email: <sup style="color: red">*</sup> </label> <input type="email" class="form-control" id="email_id"
								  placeholder="Email Id" onblur="checkemail(this.value)" required>
								<p id="data_error" style="color: red"></p>
							</div>
							<div class="form-group">
								<label for="pass_word">Password: <sup style="color: red">*</sup> </label> <input type="password" class="form-control"
								  id="pass_word" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label>Gender:</label>
								<label class="radio-inline">
											<input type="radio" id="inlineRadio1" value="Male" name="optradio"> Male
										</label>
								<label class="radio-inline">
											<input type="radio" id="inlineRadio2" value="Female" name="optradio"> Female
										</label>
							</div>
							<div class="form-group">
								<label for="dob">Date Of Birth:</label>
								<input type="date" class="form-control datepicker" onblur="checkdob(this.value)">
							</div>
							<div class="form-group">
								<label for="age">Age:</label> <input type="text" id="age" class="form-control" placeholder="Age" disabled="true"
								  value="">
							</div>
							<div class="form-group">
								<label for="country">Select Country:</label>
								<select class="form-control" id="country">
											<option selected disabled>Select Country</option>
											<option>India</option>
											<option>Australia</option>
											<option>USA</option>
											<option>England</option>
										</select>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>

<br>

<div class="panel panel-default">
	<div class="panel-footer">
		<p id="footer_time" style="text-align: left; height: 10px; "> </p>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#contact_us_me").click(function(){
			$.ajax({
				url: 'contact',
				method: "GET",
				contentType: "application/json; charset=utf-8",
				success: function(result) {
					$('#main_container').html(result);
				}
			});
		});
	});
</script>