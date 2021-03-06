<?php
include('Controller/classCode.php');
include('Controller/session.php');
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CUReview">
    <meta name="author" content="The Three Musketeers">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Columbia University Review</title>
    
	<!-- bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
	
	<!-- new css-->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/cover.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 	<script src="js/script.js"></script>	
 	<script type="text/javascript">

	var user = <?php echo $user;	?>

 	</script>
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
		 	<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="cu_second_header"><?php echo $result->CourseTitle; ?></h3>							
						</div>
					</div>					
				</div>
			</div>
			<div class="col-lg-1"></div>
		 </div>
		 <!-- end of header row -->		 	
		
		<!-- content rows -->
		<!-- description panel row -->
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="panel panel-default cu_panel_search">
					<div class="panel-heading"><h4>Summary</h4></div>
					<div class="panel-body">						
						<div class="container-fluid">
							<!-- grades row -->
							<div class="row text-center">
								<div class="col-lg-2" style="padding-top:20px;">
									<div class="btn-group-vertical">
										<button type="button" class="btn btn-primary" onclick="javascript: addToFaves()">
											Favorite <span class="glyphicon glyphicon-star"></span> <!-- use glyphicon-star-empty for non-favorited entry-->
										</button>
										<button type="button"  class="btn btn-primary" data-toggle="modal" data-target=".bs-modal-lg">
											Review&nbsp&nbsp<span class="glyphicon glyphicon-pencil"></span>
										</button>															  
									</div>		
									
									<!-- review submission form -->									
									<div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
										<div class="modal-content align-left">
										<form>
											<div class="modal-header text-left">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Submit Review</h4>
											</div>										
										  <div class="modal-body text-left">											
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-9">
															<div class="container-fluid">
																<div class="row">
																	<div class="col-lg-12">
																		<h4>Words:</h4>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12">
																		<textarea id="wordsReview" class="textarea cu_textarea" style="height:200px;"></textarea>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12">
																		<h4>Workload:</h4>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12">																																
																		<textarea id="workLoadReview" class="textarea cu_textarea" style="height:100px;"></textarea>																						
																	</div>
																</div>
															</div>															
														</div>
														<div class="col-lg-3">
															<div class="container-fluid">
																<div class="row">
																	<div class="col-lg-12">
																		<h4>Grades:</h4>
																	</div>
																</div>													
																<div class="row">																	
																	<div class="col-lg-12">																																			
																	<table>
																		<tr>
																			<td>Helpfulness:</td>
																			<td>
																				<div class="starRate" id="star-rate-helpfulness">
																				<div><b></b></div>
																				<ul>
																				<li><a  class="star" href="#5"><span></span></a></li>
																				<li><a  class="star" href="#4"><span></span></a></li>
																				<li><a  class="star" href="#3"><span></span></a></li>
																				<li><a  class="star" href="#2"><span></span></a></li>
																				<li><a  class="star" href="#1"><span></span></a></li>
																				</ul>
																				</div>	
																			</td>																			
																		</tr>
																		<tr>
																			<td>Clarity:</td>
																			<td>
																				<div class="starRate" id="star-rate-clarity">
																				<div><b></b></div>
																				<ul>
																				<li><a  class="star" href="#5"><span></span></a></li>
																				<li><a  class="star" href="#4"><span></span></a></li>
																				<li><a  class="star" href="#3"><span></span></a></li>
																				<li><a  class="star" href="#2"><span></span></a></li>
																				<li><a  class="star" href="#1"><span></span></a></li>
																				</ul>
																				</div>	
																			</td>																			
																		</tr>
																		<tr>
																			<td>Easiness:</td>
																			<td>
																				<div class="starRate" id="star-rate-easiness">
																				<div><b></b></div>
																				<ul>
																				<li><a  class="star" href="#5"><span></span></a></li>
																				<li><a  class="star" href="#4"><span></span></a></li>
																				<li><a  class="star" href="#3"><span></span></a></li>
																				<li><a  class="star" href="#2"><span></span></a></li>
																				<li><a  class="star" href="#1"><span></span></a></li>
																				</ul>
																				</div>	
																			</td>																			
																		</tr>
																		<tr>
																			<td>Knowledge:</td>
																			<td>
																				<div class="starRate" id="star-rate-knowledge">
																				<div><b></b></div>
																				<ul>
																				<li><a  class="star" href="#5"><span></span></a></li>
																				<li><a  class="star" href="#4"><span></span></a></li>
																				<li><a  class="star" href="#3"><span></span></a></li>
																				<li><a  class="star" href="#2"><span></span></a></li>
																				<li><a  class="star" href="#1"><span></span></a></li>
																				</ul>
																				</div>	
																			</td>																			
																		</tr>																		
																	</table>
																	</div>																	
																</div>
															</div>
														</div>
													</div>																													
												</div>												
										  </div>
										  <div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary" id="sendReview" data-dismiss="modal">Submit Review!</button>
										  </div>											
										  </form>
										</div>
									  </div>
									</div>									
									<!-- end of review submission form -->
									
								</div>
								<div class="col-lg-10">
									<table class="table table-bordered cu_table_grades">
										<tr>
											<!-- add classes to table cells: A+ success, A info, B and C active, F danger, D warning -->
											<td class="success">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12">
															<h1>A+</h1>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<h4><small>Helpfulness</small></h4>
														</div>
													</div>													
												</div>														
											</td>
											<td class="info">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12">
															<h1>A-</h1>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<h4><small>Helpfulness</small></h4>
														</div>
													</div>													
												</div>														
											</td>
										<td class="danger">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12">
															<h1>F</h1>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<h4><small>Helpfulness</small></h4>
														</div>
													</div>													
												</div>														
											</td>
										<td class="warning">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12">
															<h1>D</h1>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<h4><small>Helpfulness</small></h4>
														</div>
													</div>													
												</div>														
											</td>
										<td class="active">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12">
															<h1>B-</h1>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<h4><small>Helpfulness</small></h4>
														</div>
													</div>													
												</div>														
											</td>														
										</tr>
									</table>
								</div>
							</div>
							<!-- end of grades row -->
							<!-- info row -->
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td width="25%">Course Number</td>
												<td id="course"><?php echo $result->Course; ?></td>
											</tr>
											<tr>
												<td>Call Number</td>
												<td id="callNumber"><?php echo $result->CallNumber; ?></td>
											</tr>
											<tr>
												<td>Instructor</td>
												<td id="instructor"><?php echo $result->Instructor1Name ?></td>
											</tr>
											<tr>
												<td>Description</td>
												<td><?php echo $result->Description ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end of info row -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
		<!-- end of description panel row -->
		<!-- reviews panel row-->
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="panel panel-default cu_panel_search">
					<div class="panel-heading"><h4>Reviews</h4></div>						
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12" style="padding-top:10px;">
									<table class="table table-bordered">
										<tr>
											<td width="20%" class="text-center">
												<div class="container-fluid text-left">
													<div class="row">
														<div class="col-lg-12">														
															<table width="100%">															
																<tr>
																	<th>Date:</th>
																</tr>
																<tr>
																	<td>02/07/14</td>
																</tr>
																<tr>
																	<th>Name:</th>																										
																</tr>
																<tr>
																	<td>Mark Whalberg</td>
																</tr>
															</table>
														</div>
													</div>
												</div>												
											</td>
											<td>
											Basically I was really excited to take this class because the other reviews were raving about Jae. When I saw he was teaching again after he got his PhD, I was like YES, and now at the end, I'm just like meh.

Well, the start was good. He set up a listserv to encourage class participation where students could ask questions and interact with TAs and other students. Everything was explained slowly for people who have never been exposed to C, but then he started to get behind on his lectures. That was sort of when things started going down hill. The labs were fun, but he would not have covered the material for them, and so he had to rush in class to cover what we needed to know on the labs, rather than take a good amount of time explaining things. Inevitably, he would have to YAX (yet another extension) them so he allowed people a reasonable amount of time to finish them. He also changed the labs from counting 40% of the course grade to 15%, which in my opinion has hurt a lot of people. We spend A LOT of time on doing the labs, which is why I think they should count more. That's where we do most of our learning, and where we can demonstrate we have an understanding of the material.

The midterm was really hard.
											</td>
											<td width="25%" class="text-center">
												<div class="container-fluid text-left">
													<div class="row">
														<div class="col-lg-12">														
															<table width="100%">															
																<tr>
																	<td>Helpfulness:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td>Clarity:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td>Easiness:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td>Knowledge:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td colspan="2" class="cu_reviews_empty_cell_grades"></td>
																</tr>
																<tr>
																	<td>Overall:</td>
																	<td><h3>A+</h3></td>
																</tr>
															</table>
														</div>
													</div>
												</div>			
											</div>											
											</td>
										</tr>

										<tr>
											<td colspan="3"></td>
										</tr>

										<tr>
											<td width="20%" class="text-center">
												<div class="container-fluid text-left">
													<div class="row">
														<div class="col-lg-12">														
															<table width="100%">															
																<tr>
																	<th>Date:</th>
																</tr>
																<tr>
																	<td>02/07/14</td>
																</tr>
																<tr>
																	<th>Name:</th>																										
																</tr>
																<tr>
																	<td>Mark Whalberg</td>
																</tr>
															</table>
														</div>
													</div>
												</div>												
											</td>
											<td>
											Basically I was really excited to take this class because the other reviews were raving about Jae. When I saw he was teaching again after he got his PhD, I was like YES, and now at the end, I'm just like meh.

Well, the start was good. He set up a listserv to encourage class participation where students could ask questions and interact with TAs and other students. Everything was explained slowly for people who have never been exposed to C, but then he started to get behind on his lectures. That was sort of when things started going down hill. The labs were fun, but he would not have covered the material for them, and so he had to rush in class to cover what we needed to know on the labs, rather than take a good amount of time explaining things. Inevitably, he would have to YAX (yet another extension) them so he allowed people a reasonable amount of time to finish them. He also changed the labs from counting 40% of the course grade to 15%, which in my opinion has hurt a lot of people. We spend A LOT of time on doing the labs, which is why I think they should count more. That's where we do most of our learning, and where we can demonstrate we have an understanding of the material.

The midterm was really hard.
											</td>
											<td width="25%" class="text-center">
												<div class="container-fluid text-left">
													<div class="row">
														<div class="col-lg-12">														
															<table width="100%">															
																<tr>
																	<td>Helpfulness:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td>Clarity:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td>Easiness:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td>Knowledge:</td>
																	<td><h3>A+</h3></td>
																</tr>
																<tr>
																	<td colspan="2" class="cu_reviews_empty_cell_grades"></td>
																</tr>
																<tr>
																	<td>Overall:</td>
																	<td><h3>A+</h3></td>
																</tr>
															</table>
														</div>
													</div>
												</div>			
											</div>											
											</td>
										</tr>										
									</table>									
								</div>
							</div>
						</div>
					<div class="panel-body">						
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
		<!-- end of reviews panel row-->
						
		<!-- end of content rows -->
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
