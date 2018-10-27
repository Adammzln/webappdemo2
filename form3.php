<!DOCTYPE html>
   <html>
      <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SmartFarm</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
      </head>
    <body>
       	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>SUFECS</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">SUF</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Plants <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="form.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Lettuce
					</a></li>
					<li><a class="" href="form2.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Redroot Pigweed
					</a></li>
					<li><a class="" href="form3.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Rosemary
					</a></li>
				</ul>
			</li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Plants</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Rosemary</h1>
			</div>
		</div><!--/.row-->
<div class="background">
	<div class="container">
   	<div class="screen">
      	<div class="screen-header">
        <div class="screen-header-left">
        	<div class="screen-header-button close"></div>
        	<div class="screen-header-button maximize"></div>
       	 	<div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          	<div class="screen-header-ellipsis"></div>
          	<div class="screen-header-ellipsis"></div>
          	<div class="screen-header-ellipsis"></div>
        </div>
       </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>AUTO</span>
            <span>CONFIGURE</span>
          </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="TEMPERATURE(°C): 25">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="WATER LEVEL(cm): 8.00">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="HUMIDITY(%): 75">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="PH VALUE: 6.70">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button">CONFIRM</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
   </body>
 </html>
