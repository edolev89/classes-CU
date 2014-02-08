<!-- nav bar row -->
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">
<nav class="navbar navbar-inverse cu_navbar" role="navigation">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header cu_navbar_header_bg">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<h3><A href="index.php"></a>&nbsp&nbsp</h3>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="index.php">Top Picks</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">My CURe <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="favorites.php">My Favorites</a></li>
<li><a href="#">Friends' Picks</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="<?php echo $logoutUrl ?>">Log Out</a></li>
</ul>
<form class="navbar-form navbar-left" role="search">
<div class="input-group" style="max-width:100px;">
<input type="text" placeholder="Search by..." id="searchInputFieldHeader" class="form-control">
<div class="input-group-btn">
<button type="button" class="btn btn-primary dropdown-toggle" style="border-radius:0px;" id="dropDownButtonHeader" data-toggle="dropdown">
Instructor&nbsp<span class="caret"></span>
</button>
<ul class="dropdown-menu pull-right">
<li><a class="ddOption" href="#">Class Name&nbsp</a></li>
<li><a class="ddOption" href="#">Class Number&nbsp</a></li>
</ul>
<button type="button" class="btn btn-info" id="searchButtonHeader">
<span class="glyphicon glyphicon-search"></span>
</button>
</div>
<!-- /btn-group -->
</div>
</form>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</div>
<div class="col-lg-1"></div>
</div>
<!-- end of nav bar row-->