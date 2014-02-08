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
<link href="css/cover.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
                                         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                         <![endif]-->
</head>


<body>



	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">
							<A href="home.html">CUReview</a>
						</h3>
						<ul class="nav masthead-nav">
							<li class="active"><a href="#">Social</a></li>
							<li><a href="#">Log out</a></li>
						</ul>
					</div>
				</div>

				<h1 class="">
					Search Results for
					<?php echo "$query - [$type]"; ?>
				</h1>
				<br>
				<div class="lead row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div class="input-group">
							<input type="text" placeholder="Search by..."
								id="searchInputField" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle"
									id="dropDownButton" data-toggle="dropdown">
									Instructor<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right">
									<li><a class="ddOption" href="#">Department</a></li>
									<li><a class="ddOption" href="#">Course Name</a></li>
									<li><a class="ddOption" href="#">Course Number</a></li>
								</ul>
							</div>
							<!-- /btn-group -->
						</div>
						<!-- /input-group -->
					</div>
					<!-- /.col-lg-8 -->
					<div class="col-lg-2">
						<button type="button" class="btn btn-info" id="searchButton"
							style="margin-left: -100px;">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</div>
				</div>
				<!-- /.row -->
				<!-- Classes -->

				<?php if($type == 'CourseName' || $type == 'CourseNumber') {?>
				<table class="table text-left table-bordered" id="bestClassesTable">
					<tr>
						<th>Class Name</th>
						<th>Class #</th>
						<th>Call Number</th>
						<th>Day/Time</th>
						<th>Instructor</th>
						<th>Avg. Grade</th>
					</tr>
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
				</table>	
				<?php }?>	
						
				<!-- Professors -->
				<?php if($type == 'Instructor') {?>
				<table class="table text-left table-bordered"
					id="bestProfessorsTable" style="">
					<tr>
						<th>Instructor</th>
						<th>Department</th>
						<th># of Graders</th>
						<th>Overall Grade</th>
					</tr>
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
				<?php }?>	
			</div>
			<div class="mastfoot">
				<div class="inner">
					<!-- bottom area of screen -->
				</div>
			</div>

		</div>

	</div>

	</div>

	<!-- Bootstrap core JavaScript
         ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/docs.min.js"></script>
</body>
</html>
