<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CenturyLink Quiz</title>

<!-- Begin CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<style type="text/css">

</style>
</head>
<!-- End CSS -->

<body>
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2>Please enter your information below:</h2>
			<form action="submit.php" method="post">
				<div class="row">
					<label>First Name:</label>
					<input class="form-control" type="text" name="firstname" autocomplete="off">
				</div>
				<div class="row">
					<label>Last Name:</label>
					<input class="form-control" type="text" name="lastname" autocomplete="off">
				</div>
				<button class="btn btn-primary pull-right" type="submit">Submit</button>
			</form>
		</div>
	</div>

	<!-- Begin JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">

	</script>
    <!-- End JavaScript -->

</body>
</html>