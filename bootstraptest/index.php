<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Really COOL Games!</title>
    <link href="css/bootstrap2.css" rel="stylesheet">

	<!-- link your own stylesheet here -->
	<link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container">  <!-- your own code comes below; in this container -->
	
	<?php
	if (!isset($_GET['page']))
	{
	$page = "main";
	}
	else
	{
	$page = $_GET['page'];
	}
	//include
	if ($page == "main")
	{
	$include = "main.php";
	}
	elseif ($page == "screenshots")
	{
	$include = "screenshots.php";
	}
	elseif ($page == "news")
	{
	$include = "news.php";
	}
	elseif ($page == "CIM")
	{
	$include = "CIM.php";
	}
	elseif ($page == "DSRemake")
	{
	$include = "DSRemake.php";
	}
	elseif ($page == "Unity")
	{
	$include = "Unity.php";
	}
	elseif ($page == "upcomingstreams")
	{
	$include = "upcomingstreams.php";
	}
	?>
	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $page; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?page=main">Main <span class="sr-only">(current)</span></a></li>
        <li><a href="index.php?page=screenshots">screenshots</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?page=news">Latest News</a></li>
            <li><a href="index.php?page=upcomingstreams">Upcoming streams</a></li>
            <li><a href="index.php?page=CIM">Prices</a></li>
            <li class="divider"></li>
            <li><a href="index.php?page=Unity">Unity projects</a></li>
            <li class="divider"></li>
            <li><a href="index.php?page=DSRemake">DS-remake</a></li>
          </ul>
        </li>
      </ul>
      
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="content">
<div class="include">
<?php
include_once($include);
?>
</div>
</div>

    </div> <!-- end container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Link individual files below -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
