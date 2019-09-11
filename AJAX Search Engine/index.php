<!DOCTYPE HTML>

<html>

	<head>
		<title>Search using Jquery Ajax with JSON data</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<!-- Search Module -->
		<script type="text/javascript" src="search.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-sm-8">
					<h4 class="display-4 text-center mt-4 mb-4">AJAX Search Engine using JQuery with JSON data</h4>
					<input id="search_input" type="text" class="form-control mt-4 mb-4" placeholder="Search books by title...">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-8">
					<table id="results_table" class="table table-striped">

					</table>
				</div>
			</div>
		</div>
	</body>
</html>