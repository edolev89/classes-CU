<?php
error_reporting ( E_ALL );
include ('Controller/searchResultsCode.php');
?>

<!DOCTYPE html>

	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../assets/ico/favicon.ico">

	<title>CUReview - Home</title>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/script.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<!-- new css-->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/cover.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div class="container" style="padding-top:5px;">
		 
		 <!-- header row -->
		 <div class="row cu_row_header">
			<div class="col-lg-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h1 class="cu_header">Search results for "<?php echo "$query"; ?>"</h1>							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<h3 class="cu_second_header"><small>Or you can search for something else...</small></h3>
						</div>
					</div>
				</div>
			</div>
		 </div>
		 <!-- end of header row -->
		 		
		<!-- search bar row -->
		<div class="lead row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="input-group">
					<input type="text" placeholder="Search by..." id="searchInputField" class="form-control">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary dropdown-toggle" style="border-radius:0px;" id="dropDownButton" data-toggle="dropdown">
							Instructor&nbsp<span class="caret"></span>
						</button>
						<ul class="dropdown-menu pull-right">							
							<li><a class="ddOption" href="#">Class Name&nbsp</a></li>
							<li><a class="ddOption" href="#">Class Number&nbsp</a></li>
						</ul>
						<button type="button" class="btn btn-info" id="searchButton">
							<span class="glyphicon glyphicon-search"></span>
						</button>						
					</div>
					<!-- /btn-group -->
				</div>
				<!-- /input-group -->
			</div>
			<!-- /.col-lg-8 -->
			<div class="col-lg-3"></div>
		</div>
		<!-- end of search bar row -->
		
		 <!-- content row -->
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="panel panel-default cu_panel_search">
					<div class="panel-body" style="margin-top:4px;">						
						<?php if($type == 'ClassName' || $type == 'ClassName') {?>
							<table class="table table-striped" id="bestClassesTable">
								<thead>
									<tr>									
										<th>Class Name</th>
										<th>Class #</th>
										<th>Call Number</th>
										<th>Day/Time</th>
										<th>Instructor</th>
										<th>Avg. Grade</th>								
									</tr>
								</thead>
								<tbody>
								<?php
								
								foreach ( $results as $key => $value ) {	
									foreach ( $value->Sections as $pey => $section ) { //print all sections
										
										echo '<tr>';
										echo "<td>$value->CourseTitle</td>";
										echo "<td>$value->Course</td>";
										echo "<td>$section->CallNumber</td>";
										echo "<td>$section->StartTime1</td>";
										echo "<td>";
										echo $section->professor ['name'];
										echo '</td>';
										echo "<td>A+</td>";
										echo '</tr>';
									}
								}
								?>
								</tr>
								</tbody>
							</table>	
							<?php }?>	
									
							<!-- Professors -->
							<?php if($type == 'Instructor') {?>
							<table class="table table-striped" id="bestProfessorsTable">
								<thead>
									<tr>
										<th>Instructor</th>
										<th>Department</th>
										<th># of Graders</th>
										<th>Overall Grade</th>
									</tr>
								</thead>
								<tbody>
								<?php
								
			foreach ( $results as $key => $value ) {
									// print_r($value);
									echo '<tr>';
									echo "<td>";
									echo $value['firstName']." ".$value['lastName'];
									echo '</td>';
									echo "<td>";
									echo $value['department'];
									echo "</td>";
									echo "<td>";
									echo $value['numOfGraders'];
									echo "</td>";
									echo "<td>";
									echo $value['nugget'];
									echo "</td>";
									echo '</tr>';
								}
								?>
							</table>
							</tbody>
						<?php }?>	
					</div>
				</div>				
			</div>
			<div class="col-lg-1"></div>
		</div>
		<!-- end of content row -->
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
