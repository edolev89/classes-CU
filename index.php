<?php
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
<link href="css/cover.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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

				<h1 class="">CUReview</h1>
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


				<!-- Standard button -->
				<button type="button" class="btn btn-default-selected"
					id="bestClassesButton">Best Classes</button>
				<button type="button" class="btn btn-primary"
					id="bestTeachersButton">Best Instructors</button>
				<button type="button" class="btn btn-primary"
					id="easiestClassesButton">Easy-A</button>
				<!--<button type="button" class="btn btn-primary">Our Picks</button>-->
				<!-- Best Classes Table -->
				<table class="table text-left table-bordered" id="bestClassesTable">
					<tr>
						<th>Class Name</th>
						<th>Department</th>
						<th>Instructor</th>
						<th>Overall Grade</th>
					</tr>
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





</table>
				<!-- Best Professors Table -->
				<table class="table text-left table-bordered"
					id="bestProfessorsTable" style="display: none;">
					<tr>
						<th>Instructor</th>
						<th>Culpa Nugget</th>
						<th>Rating</th>
						<th># of Graders</th>
					</tr>

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



</table>
				<!-- Easiest Classes -->
				<table class="table text-left table-bordered"
					id="easiestClassesTable" style="display: none;">
					<tr>
						<th>Class Name</th>
						<th>Department</th>
						<th>Instructor</th>
						<th>Easiness Grade</th>
					</tr>

<?php
foreach ( $easyAClasses as $key => $value ) {
	
	echo '<tr>';
	echo "<td>$value[className]</td>";
	echo "<td>$value[department]</td>";
	echo "<td>$value[name]</td>";
	echo "<td>$value[easyA]</td>";
	echo '</tr>';
}
?>



</table>
			</div>
			<!-- social area of screen. displays facebook friends of user -->
			<div class="container">
				<p class="lead">Take a look at your friend's favorite professors and
					classes...</p>
				<img src="files/roy.jpg" alt="..."
					class="img-homepage img-thumbnail"> <img src="files/roy.jpg"
					alt="..." class="img-homepage img-thumbnail"> <img
					src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail"> <img
					src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail"> <img
					src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail">
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


	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>
</body>
</html>
