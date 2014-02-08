<?php
error_reporting ( E_ALL );
include ('Controller/indexCode.php');
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
	<div class="container">
		<?
		include ('header.php');
		?>
		 <!-- header row -->
		 <div class="row cu_row_header">
			<div class="col-lg-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h1 class="cu_header">Favorites</h1>							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<h3 class="cu_second_header"><small>So you don't forget...</small></h3>
						</div>
					</div>
				</div>
			</div>
		 </div>
		 <!-- end of header row -->		 		
		<div class="row">
			<div class="col-lg-12" style="padding-top:20px;">
				
			</div>
		</div>
		 <!-- content row -->
			<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
			<div class="panel panel-default cu_panel_search">
			<div class="panel-body">
			<ul class="nav nav-tabs">
			<li class="active"><a href="#classes" data-toggle="tab">Favorite Classes</a></li>
			<li><a href="#instructors" data-toggle="tab">Favorite Instructors</a></li>			
			</ul>
			<div class="tab-content">
			<div class="tab-pane fade in active" id="classes">
			<!-- Best Classes Table -->
			<table class="table table-striped" id="bestClassesTable">
			<thead>
			<tr>
			<th>Class Name</th>
			<th>Department</th>
			<th>Instructor</th>
			<th>Overall Grade</th>
			</tr>
			</thead>
			<tbody>
			<?php
				
				foreach ( $topClasses as $key => $value ) {
					
					echo '<tr>';
					echo "<td>$value[className]</td>";
					echo "<td>$value[department]</td>";
					echo "<td>$value[name]</td>";
					echo '<td>A+</td>';
					echo '</tr>';
				}
				?>
			</tbody>
			</table>
			</div>
			<div class="tab-pane fade" id="instructors">
			<!-- Best Professors Table -->
			<table class="table table-striped" id="bestProfessorsTable">
			<thead>
			<tr>
			<th>Instructor</th>
			<th>Culpa Nugget</th>
			<th>Rating</th>
			<th># of Graders</th>
			</tr>
			</thead>
			<tbody>
			<?php
				
				foreach ( $topProfessors as $key => $value ) {
					
					echo '<tr>';
					echo "<td>$value[firstName] $value[lastName]</td>";
					echo "<td>$value[nugget]</td>";
					echo "<td>$value[param1Average]</td>";
					echo "<td>$value[numOfGraders]</td>";
					echo '</tr>';
				}
				
				?>
			</tbody>
			</table>
			</div>						
			</div>
			</div>
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
