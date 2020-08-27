<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CenturyLink Quiz</title>

<!-- Begin CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	body {
	    overflow: hidden;
	    color: white;
	}
	.container {
	    background-color: black;
	    height: 100vh;
	    width: 95%;
	}
	button {
		margin-left: 10px;
		border-radius: 0 !important;
		background-color: #0D49B5 !important;
		transition: all 0.3s ease;
		font-size: 16px !important;
		padding: 10px !important;
		margin: 3px !important;
	}
	a, a:hover {
		color: #3AD69C;
		text-decoration: none;
	}
	.btn-response:focus, .selected, .selected:hover {
		outline: none;
		background-color: green;
	}
	.incorrect, .incorrect:hover {
		background-color: red;
	}
	.btn-response {
		width: 150px;
		margin: 10px;
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
	.intro {
		text-transform: uppercase;
		color: #3AD69C;
	}
	.fine-print {
		font-size: 10px;
	}
	.bordered {
		border-top: 1px solid #46484D;
		border-bottom: 1px solid #46484D;
		text-align: center;
		font-size: 12px;
		padding: 10px 0;
		margin: 30px 0;
	}
	.top-bar > div {
		height: 5px;
		margin-bottom: 20px;
	}
	.bar-1 {
		background-color: #02205f;
	}
	.bar-2 {
		background-color: #0D49B5;
	}
	.bar-3 {
		background-color: #3AD69C;
	}
	.gray {
		color: #777;
	}
	.quiz-btn {
		width: 150px;
	}
	.quiz-btn:hover {
		width: 156px;
		padding: 13px !important;
		margin: 0 !important;
	}
	.logo {
		margin: 10px 140px;
	}
	.footer {
		position: fixed;
		bottom: 0;
		height: 50px;
		background-color: #0D49B5; 
		width: 95vw;
		padding: 15px;
		margin-left: -15px;
		text-align: center;
	}
</style>
</head>
<!-- End CSS -->

<body>
	<div class="container">
		<!-- Top color bar, logo, and footer -->
		<div class="top-bar row">
			<div class="col-xs-2 bar-1"></div>
			<div class="col-xs-4 bar-2"></div>
			<div class="col-xs-6 bar-3"></div>
		</div>
		<div class="logo">
			<img src="assets/image/logo_century_link.png">
		</div>
		<div class="footer">
			Want to learn more? Email us now
		</div>
		<!-- Welcome screen -->
		<div class="screen" id="screen_1">
			<p class="intro">It's all about your network</p>
			<h2 class="">Do you call yourself a techie?<br>Let's see what you know!</h2>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-7">
					<p>
						Test your tech knowledge by answering five "simple"
						questions. Earn a prize selection based on your total number
						of correct answers. In addition, answer all five correctly and
						you'll be entered into a drawing for a flat screen TV!
					</p>
					<p class="fine-print">
						No purchase necessary to enter or win. Void where prohibited. Up to 2 entries per individual. Must
						be 18 years of age to enter. Entry period begins 09/08/20 at 11:00 a.m. EDT and ends on 09/10/20
						at 2:00 p.m. EDT. <a href="www.centurylink.com/xxx">For complete rules see www.centurylink.com/xxx</a>
					</p>
					<button class="btn btn-primary pull-right quiz-btn" onclick="changeScreen(1,2)">Quiz Me!</button>
				</div>
			</div>
			<div class="row bordered">
				Our Channel Partners help drive our success. <a href="">Join the CenturyLink Channel Parner Program ›</a>
			</div>
			<div class="row fine-print">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 1 -->
		<div class="screen secondary-screen" id="screen_2">
			<h3>How many global miles of fiber does CenturyLink have across its network?</h3>
			<div>
				<input type="radio" name="1" value="a" hidden>
				<button id="1a" class="btn btn-primary btn-response btn_1" onclick="select('1','a')">50,000 <span id="span_1a" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="1" value="b" hidden>
				<button id="1b" class="btn btn-primary btn-response btn_1" onclick="select('1','b')">100,000 <span id="span_1b" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="1" value="c" hidden>
				<button id="1c" class="btn btn-primary btn-response btn_1" onclick="select('1','c')">250,000 <span id="span_1c" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="1" value="d" hidden>
				<button id="1d" class="btn btn-primary btn-response btn_1" onclick="select('1','d')">450,000 <span id="span_1d" class="glyphicon"></span></button>
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
				<input type="radio" name="2" value="a" hidden>
				<button id="2a" class="btn btn-primary btn-response btn_2" onclick="select('2','a')">570,000 <span id="span_2a" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="2" value="b" hidden>
				<button id="2b" class="btn btn-primary btn-response btn_2" onclick="select('2','b')">1.4 million <span id="span_2b" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="2" value="c" hidden>
				<button id="2c" class="btn btn-primary btn-response btn_2" onclick="select('2','c')">2.1 million <span id="span_2c" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="2" value="d" hidden>
				<button id="2d" class="btn btn-primary btn-response btn_2" onclick="select('2','d')">3.6 million <span id="span_2d" class="glyphicon"></span></button>
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
				<input type="radio" name="3" value="a" hidden>
				<button id="3a" class="btn btn-primary btn-response btn_3" onclick="select('3','a')">True <span id="span_3a" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="3" value="b" hidden>
				<button id="3b" class="btn btn-primary btn-response btn_3" onclick="select('3','b')">False <span id="span_3b" class="glyphicon"></span></button>
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
				<input type="radio" name="4" value="a" hidden>
				<button id="4a" class="btn btn-primary btn-response btn_4" onclick="select('4','a')">True <span id="span_4a" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="4" value="b" hidden>
				<button id="4b" class="btn btn-primary btn-response btn_4" onclick="select('4','b')">False <span id="span_4b" class="glyphicon"></span></button>
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
				<input type="radio" name="5" value="a" hidden>
				<button id="5a" class="btn btn-primary btn-response btn_5" onclick="select('5','a')">True <span id="span_5a" class="glyphicon"></span></button>
			</div>
			<div>
				<input type="radio" name="5" value="b" hidden>
				<button id="5b" class="btn btn-primary btn-response btn_5" onclick="select('5','b')">False <span id="span_5b" class="glyphicon"></span></button>
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

		// response button click
		function select(group, value) {
			// select radio input
			$('input[name="' + group+ '"]').val([value]);
			// highlight button
			$(".btn_"+group).removeClass('selected');
			$("#"+group+value).addClass('selected');
			// enable submit button
			$("#question_"+group).removeAttr('disabled');
		}

		// shift the current view off screen, shift next view onto screen
		function changeScreen(current, next) {
			$("#screen_"+current).animate({ left: '-150%' }, 750 );
            $("#screen_"+next).animate({ left: '50%' }, 750 ).show();
		}

		// submit user response
		function submitAnswer(id) {
			var answers = ['d', 'd', 'a', 'a', 'a'];
			// check user response
			var response = $('input[name="'+id+'"]:checked').val();
			var answer = answers[id-1];
			if (response == answer) {
				correct += 1;
				$("#span_"+id+response).addClass("glyphicon-ok");
			} else {
				$("#span_"+id+response).addClass("glyphicon-remove");
				$("#"+id+response).addClass("incorrect");
				// reveal correct answer
				$("#"+id+answer).addClass("selected");
				$("#span_"+id+answer).addClass("glyphicon-ok");
			}
			// disable button group clicking
			$(".btn_"+id).prop("onclick", null).off("click");
			$(".btn_"+id).on("mousedown", function(e) {
				e.preventDefault();
				return false;
			});
			// fade out submit button, slide up answer
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