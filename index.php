<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CenturyLink Quiz</title>

<!-- Begin CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
	body {
	    overflow: hidden;
	}
	label {
		margin-left: 10px;
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
	.hide-low {
		margin-top: 1000px;
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
			<h3>How many global miles of fiber does CenturyLink have across its network?</h3>
			<div>
				<input type="radio" name="question_1" id="answer_1a" value="a"><label for="answer_1a">50,000</label>
			</div>
			<div>
				<input type="radio" name="question_1" id="answer_1b" value="b"><label for="answer_1b">100,000</label>
			</div>
			<div>
				<input type="radio" name="question_1" id="answer_1c" value="c"><label for="answer_1c">250,000</label>
			</div>
			<div>
				<input type="radio" name="question_1" id="answer_1d" value="d"><label for="answer_1d">450,000</label>
			</div>
			<button class="btn btn-primary pull-right" id="question_1" onclick="submitAnswer('1')" disabled>Submit Answer</button>
			<div class="hide-low" id="answer_1">
				<p class="answer">Answer: As the second largest U.S. communications provider to global enterprise companies, CenturyLink's powerful and expansive global network spans approximately 450,000 global route miles of fiber with more than 150,000 on-net buildings.</p>
				<button class="btn btn-primary pull-right" onclick="changeScreen(2,3)">Next</button>
			</div>
		</div>
		<!-- Question 2 -->
		<div class="screen secondary-screen" id="screen_3">
			<h3>How many cybersecurity threats are monitored daily on CenturyLink's network?</h3>
			<div>
				<input type="radio" name="question_2" id="answer_2a" value="a"><label for="answer_2a">570,000</label>
			</div>
			<div>
				<input type="radio" name="question_2" id="answer_2b" value="b"><label for="answer_2b">1.4 million</label>
			</div>
			<div>
				<input type="radio" name="question_2" id="answer_2c" value="c"><label for="answer_2c">2.1 million</label>
			</div>
			<div>
				<input type="radio" name="question_2" id="answer_2d" value="d"><label for="answer_2d">3.6 million</label>
			</div>
			<button class="btn btn-primary pull-right" id="question_2" onclick="submitAnswer('2')" disabled>Submit Answer</button>
			<div class="hide-low" id="answer_2">
				<p class="answer">Answer: CenturyLink's threat research arm, Black Lotus Labs, analyzes 190 billion NetFlow sessions and over 3.6 million security events every day.</p>
				<button class="btn btn-primary pull-right" onclick="changeScreen(3,4)">Next</button>
			</div>
		</div>
		<!-- Question 3 -->
		<div class="screen secondary-screen" id="screen_4">
			<h3>True or False? CenturyLink is investing heavily in enhancements to the customer experience with simpler products, more automation and faster delivery.</h3>
			<div>
				<input type="radio" name="question_3" id="answer_3a" value="true"><label for="answer_3a">True</label>
			</div>
			<div>
				<input type="radio" name="question_3" id="answer_3b" value="false"><label for="answer_3b">False</label>
			</div>
			<button class="btn btn-primary pull-right" id="question_3" onclick="submitAnswer('3')" disabled>Submit Answer</button>
			<div class="hide-low" id="answer_3">
				<p class="answer">Answer: True! In 2020, CenturyLink is investing $200 million across the customer journey, empowering our customers to deploy transformative technologies for continued success and growth.</p>
				<button class="btn btn-primary pull-right" onclick="changeScreen(4,5)">Next</button>
			</div>
		</div>
		<!-- Question 4 -->
		<div class="screen secondary-screen" id="screen_5">
			<h3>True or False? CenturyLink Channel Partners have access to a variety of sales and marketing tools to go to market and drive demand, including our co-marketing automation tool delivered via Aprimo.</h3>
			<div>
				<input type="radio" name="question_4" id="answer_4a" value="true"><label for="answer_4a">True</label>
			</div>
			<div>
				<input type="radio" name="question_4" id="answer_4b" value="false"><label for="answer_4b">False</label>
			</div>
			<button class="btn btn-primary pull-right" id="question_4" onclick="submitAnswer('4')" disabled>Submit Answer</button>
			<div class="hide-low" id="answer_4">
				<p class="answer">Answer: True! CenturyLink Channel Partners have access to training, tools and programs necessary to grow their businesses - including world-class sales, marketing, development, operational and maintenance support throughout the entire customer lifecycle.</p>
				<button class="btn btn-primary pull-right" onclick="changeScreen(5,6)">Next</button>
			</div>
		</div>
		<!-- Question 5 -->
		<div class="screen secondary-screen" id="screen_6">
			<h3>True or False? CenturyLink's Partner Incentives are stackable, and a Partner can earn multiple payouts on one opportunity.</h3>
			<div>
				<input type="radio" name="question_5" id="answer_5a" value="true"><label for="answer_5a">True</label>
			</div>
			<div>
				<input type="radio" name="question_5" id="answer_5b" value="false"><label for="answer_5b">False</label>
			</div>
			<button class="btn btn-primary pull-right" id="question_5" onclick="submitAnswer('5')" disabled>Submit Answer</button>
			<div class="hide-low" id="answer_5">
				<p class="answer">Answer: True! All of CenturyLink's Partnet Incentives are stackable, meaning a Partner may be eligible for more than one payout if their opportunity qualifies for more than one Incentive. For full Incentive details, contact your Channel Manager or email Partners@centurylink.com.</p>
				<button class="btn btn-primary pull-right" onclick="changeScreen(6,7)">Finish</button>
			</div>
		</div>
		<!-- Prize selections -->
		<div class="screen secondary-screen" id="screen_7">
			<h3 id="quiz_grade"></h3>
			<p>Please select a prize from below.</p>
			<button class="btn btn-primary pull-right" onclick="changeScreen(7,8)">Continue</button>
		</div>
		<!-- User info screen -->
		<div class="screen secondary-screen" id="screen_8">
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

		var correct = 0;
		var bonus = 0;

		$('input').change(function() {
			$("#"+$(this).attr('name')).removeAttr('disabled');
		});

		function changeScreen(current, next) {
			$("#screen_"+current).animate({ left: '-150%' }, 750 );
            $("#screen_"+next).animate({ left: '50%' }, 750 ).show();
		}

		function submitAnswer(id) {
			var answers = ['d', 'd', 'true', 'true', 'true'];
			// check response
			var response = $('input[name="question_'+id+'"]:checked').val();
			var answer = answers[id-1];
			if (response == answer) {
				console.log("correct!");
				correct += 1;
			} else {
				console.log("incorrect!");
			}
			// slide up answer
			$("#question_"+id).fadeOut();
			$("#answer_"+id).animate({ marginTop: '0' }, 500 );
			// check for end of quiz
			if (id == 5) {
				// build prize page based on correct responses
				if (correct == 5) {
					$("#quiz_grade").html("Congratulations! You got a perfect score!");
				} else {
					$("#quiz_grade").html("You answered "+correct+" out of 5 questions correctly.");
				}
			}
		}

	</script>
    <!-- End JavaScript -->

</body>
</html>