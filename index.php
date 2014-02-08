<?php
    include ('Controller/indexCode.php');
    include ('Controller/session.php');
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

		<?
		include ('header.php');
		?>

<!-- logo row -->
<div class="row text-center">
<div class="col-lg-12">
<img src="files/CUReviewLogo.png" id="cover-photo" class="lead" alt="...">
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
<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail cu_img_homepage">
<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail cu_img_homepage">
<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail cu_img_homepage">
<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail cu_img_homepage">
<img src="files/roy.jpg" alt="..." class="img-homepage img-thumbnail cu_img_homepage">
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
