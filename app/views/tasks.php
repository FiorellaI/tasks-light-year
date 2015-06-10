<!DOCTYPE html>
<html lang="es">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Task Manager">
		<meta name="author" content="Daniel Salas <danielsd10@gmail.com>">

		<title>Tasks</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- DatePicker CSS -->
		<link href="css/plugins/datePicker/datepicker.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
			.container-fluid {
				margin-top: 20px;
			}

			.navbar-top-links li a {
				padding: 10px;
			}

			.navbar-top-links li a img {
				height: 30px;
			}

			.done {
				text-decoration: line-through;
				color: #ccc;
			}
		</style>
	</head>

	<body>

		<div id="wrapper">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">Tasks</a>
				</div>

				<!-- /.navbar-header -->
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle text-center" data-toggle="dropdown" href="#">
							<span class="text-muted">admin@domain.com</span>
							<img src="img/profile_small.jpg" class="img-circle">
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
							<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
							<li class="divider"></li>
							<li><a href="/login"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<!-- Page Content -->
			<div>
				<div class="container-fluid">

					<div class="row">
						<div class="col-lg-12">
							<!-- New Task Form -->
							<div class="panel">
								<div class="panel-body">
									<form role="form">
										<div class="row">
											<div class="col-lg-9 col-sm-12 col-xs-12">
												<div class="form-group">
													<input id="taskName" type="text" class="form-control" placeholder="Nueva tarea...">
												</div>
											</div>
											<div class="col-lg-2 col-sm-8 col-xs-8">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													<input id="taskDate" type="text" class="form-control datepicker">
												</div>
											</div>
											<div class="col-lg-1 col-sm-4 col-xs-4">
												<button type="submit" class="btn btn-block btn-primary"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->

					<div class="row">
						<div class="col-lg-12">
							<div class="panel">
								<div class="panel-body">
									<div class="list-group">
										<div class="list-group-item" style="display: none;">
											<button class="btn btn-xs btn-default"><i class="fa fa-check fa-fw"></i></button>
											<span data-field="task-name"></span>
											<span class="pull-right text-muted">
												<em data-field="task-date"></em>
											</span>
										</div>
									</div>
									<!-- /.list-group -->
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->

				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- datePicker -->
		<script src="js/plugins/datePicker/bootstrap-datepicker.js"></script>
		<script src="js/plugins/datePicker/bootstrap-datepicker.es.min.js"></script>

		<!-- moment -->
		<script src="js/plugins/moment/moment.min.js"></script>
		<script src="js/plugins/moment/moment.es.js"></script>

		<!-- Application JavaScript -->
		<script src="js/app.js"></script>

	</body>

</html>
