<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CenturyLink Quiz</title>

<!-- Begin CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
	.cotainer {
	    overflow: hidden;
	}
	.screen {
		position: absolute;
	    width: 50%;
	    left: 50%;
	    margin-left: -25%;
	}
	.secondary-screen {
		left: 150%;
		display: none;
	}
	.next-btn {
		display: none;
	}
</style>
</head>
<!-- End CSS -->

<body>
	<div class="container">
		<div class="screen" id="screen_1">
			<h2>Click the button below to start the quiz</h2>
			<button class="btn btn-primary pull-right" onclick="changeScreen(1,2)">Start Quiz</button>
		</div>
		<!-- Question 1 -->
		<div class="screen secondary-screen" id="screen_2">
			<h2>1. How many global miles of fiber does CenturyLink have across its network?</h2>
			<div>
				<input class="radio" type="radio" name="question_1" id="answer_1a" value="50,000"><label for="answer_1a">A. 50,000</label>
			</div>
			<div>
				<input type="radio" name="question_1" id="answer_1b" value="100,000"><label for="answer_1b">B. 100,000</label>
			</div>
			<div>
				<input type="radio" name="question_1" id="answer_1c" value="250,000"><label for="answer_1c">C. 250,000</label>
			</div>
			<div>
				<input type="radio" name="question_1" id="answer_1d" value="450,000"><label for="answer_1d">D. 450,000</label>
			</div>
			<!-- correct answer -->
			<!-- TODO disable submit button until answer is selected -->
			<button class="btn btn-primary pull-right" onclick="submitAnswer('question_1')" disabled>Submit Answer</button>
			<button class="btn btn-primary pull-right next-btn" onclick="changeScreen(2,3)">Next</button>
		</div>
		<!-- Question 2 -->
		<div class="screen secondary-screen" id="screen_3">
			<h2>This is the second question</h2>
			<button class="btn btn-primary pull-right" onclick="changeScreen(3,4)">Next</button>
		</div>
		<!-- User info screen -->
		<div class="screen secondary-screen" id="screen_4">
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

		function changeScreen(current, next) {
			$("#screen_"+current).animate({ left: '-150%' }, 750 );
            $("#screen_"+next).animate({ left: '50%' }, 750 ).css("display", "block");
		}

		function submitAnswer(question) {
			// check response
			// show correct answer
			// hide submit button
			// show next button
		}

	</script>
    <!-- End JavaScript -->

</body>
</html>