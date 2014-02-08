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
		<link href="css/style.css" rel="stylesheet">

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
	<div class="container">
		
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
<nav class="navbar navbar-inverse cu_navbar" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
		<div class="input-group" style="max-width:300px;">
			<input type="text" placeholder="Search by..." id="searchInputField" class="form-control">
			<div class="input-group-btn">
				<button type="button" class="btn btn-primary dropdown-toggle" style="border-radius:0px;" id="dropDownButton" data-toggle="dropdown">
					Instructor&nbsp<span class="caret"></span>
				</button>
				<ul class="dropdown-menu pull-right">
					<li><a class="ddOption" href="#">Department&nbsp</a></li>
					<li><a class="ddOption" href="#">Course Name&nbsp</a></li>
					<li><a class="ddOption" href="#">Course Number&nbsp</a></li>
				</ul>
				<button type="button" class="btn btn-info" id="searchButton">
					<span class="glyphicon glyphicon-search"></span>
				</button>						
			</div>
			<!-- /btn-group -->
		</div>	
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>				
			</div>
			<div class="col-lg-1"></div>
		</div
		<!-- top nav row-->
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h3 class="masthead-brand"><A href="home.html">CUReview</a></h3>
				<ul class="nav masthead-nav">
					<li class="active"><a href="#">Social</a></li>
					<li><a href="#">Log out</a></li>
				</ul>
			</div>
			<div class="col-lg-1"></div>
		</div>		
		<!-- end of top nav row -->
		
		<!-- logo row -->
		<div class="row text-center">			
			<div class="col-lg-12">
				<img src="files/CUReviewLogo.png" id="cover-photo" alt="...">
			</div>			
		</div>
		<!-- end of logo row -->
		
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
							<li><a class="ddOption" href="#">Department&nbsp</a></li>
							<li><a class="ddOption" href="#">Course Name&nbsp</a></li>
							<li><a class="ddOption" href="#">Course Number&nbsp</a></li>
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
					<div class="panel-body">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#classes" data-toggle="tab">Top Classes</a></li>
							<li><a href="#instructors" data-toggle="tab">Top Instructors</a></li>
							<li><a href="#easy" data-toggle="tab">Easy-A</a></li>
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
							<div class="tab-pane fade" id="easy">
									<!-- Easiest Classes -->
									<table class="table table-striped" id="easiestClassesTable" style="border-top:none;">
										<thead>
											<tr>
												<th>Class Name</th>
												<th>Department</th>
												<th>Instructor</th>
												<th>Easiness Grade</th>
											</tr>
										</thead>
										<tbody>									
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
									</tbody>
								</table>							
							</div>							
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-1"></div>
		</div>		
		<!-- end of content row -->		
		<!-- social row -->
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="lead">Take a look at your friends' favorites...</p>
						<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail">
						<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail">
						<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail">
						<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail">
						<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail">
					</div>			
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>		
		<!-- end of social row -->			
			<!-- social area of screen. displays facebook friends of user -->

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
