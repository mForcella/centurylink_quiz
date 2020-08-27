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
	button {
		margin-left: 10px;
		border-radius: 0 !important;
		background-color: #0D49B5 !important;
		font-size: 16px !important;
	}
	a, a:hover {
		color: #3AD69C;
		text-decoration: none;
	}
	.container {
	    background-color: black;
	    height: 100vh;
	    width: 95%;
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

	/* color bar, footer, logo */
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

	/* welcome screen */
	.quiz-btn {
		width: 150px;
		transition: all 0.3s ease;
		padding: 10px;
		margin: 3px;
	}
	.quiz-btn:hover {
		width: 156px;
		padding: 13px;
		margin: 0;
	}
	.bordered {
		border-top: 1px solid #46484D;
		border-bottom: 1px solid #46484D;
		text-align: center;
		font-size: 12px;
		padding: 10px 0;
		margin: 30px 0;
	}
	.fine-print {
		font-size: 10px;
	}
	.gray {
		color: #777;
	}
	.intro {
		text-transform: uppercase;
		color: #3AD69C;
	}

	/* question screens */
	.btn-response:focus {
		outline: none;
	}
	.correct, .correct:hover, .correct:focus {
		background-color: #3AD69C !important;
		border-color: #3AD69C !important;
	}
	.incorrect, .incorrect:hover, .incorrect:focus {
		background-color: black !important;
		border-color: #777 !important;
		color: #777 !important;
	}
	.btn-response {
		width: 150px;
		padding: 10px;
		margin: 5px;
		transition: all 0.3s ease;
	}
	.zoomable:hover {
		width: 156px;
		padding: 13px;
		margin: 2px;
	}
	.answer {
		background-color: #1a1a1a;
		padding: 20px;
		margin: 20px 0;
	}
	.opaque {
		opacity: 0;
	}
	.border-top {
		border-top: 1px solid #46484D;
		padding: 10px 0;
		margin: 30px 0;
	}

	/* prize selection and submission form */
	.please-select {
		text-align: center;
		color: #3AD69C;
	}
	form {
		background-color: white;
		color: black;
		padding: 20px;
		max-width: 400px;
		margin: 0 auto;
		font-size: 12px;
	}
	form > .row > .col {
		padding: 5px;
	}
	.form-control {
		border-radius: 0;
		height: 75%;
		font-size: 12px;
	}
	.form-top {
		background-color: #0D49B5;
		color: white;
		width: calc(100% + 40px);
		margin-left: -20px;
		margin-top: -20px;
		padding: 5px 10px;
		text-transform: uppercase;
	}
	.submit-btn {
		width: 150px;
		transition: all 0.3s ease;
		padding: 10px;
		margin: 3px;
		margin-top: 30px;
	}
	.submit-btn:hover {
		width: 156px;
		padding: 13px;
		margin: 0;
		margin-top: 27px;
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
					<button class="btn btn-primary pull-right quiz-btn" onclick="changeScreen(1,8)">Quiz Me!</button>
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
			<p class="intro">Question 1 of 5</p>
			<h3>How many global route miles of fiber does CenturyLink have across its network?</h3>
			<div>
				<input type="radio" name="1" value="a" hidden>
				<button id="1a" class="btn btn-primary btn-response btn_1 zoomable" onclick="select('1','a')">A. 50,000</button>
			</div>
			<div>
				<input type="radio" name="1" value="b" hidden>
				<button id="1b" class="btn btn-primary btn-response btn_1 zoomable" onclick="select('1','b')">B. 100,000</button>
			</div>
			<div>
				<input type="radio" name="1" value="c" hidden>
				<button id="1c" class="btn btn-primary btn-response btn_1 zoomable" onclick="select('1','c')">C. 250,000</button>
			</div>
			<div>
				<input type="radio" name="1" value="d" hidden>
				<button id="1d" class="btn btn-primary btn-response btn_1 zoomable" onclick="select('1','d')">D. 450,000</button>
			</div>
			<div class="opaque row" id="answer_1">
				<div class="answer">
					<p class="intro">The answer is: d. 450,000!</p>
					<p>CenturyLink's powerful and expansive global network spans approximately 450,000 global route miles of fiber with 170,000 on-net buildings.</p>
				</div>
				<button class="btn btn-primary pull-right" onclick="changeScreen(2,3)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 2 -->
		<div class="screen secondary-screen" id="screen_3">
			<p class="intro">Question 2 of 5</p>
			<h3>How many cybersecurity threats are monitored daily on CenturyLink's network?</h3>
			<div>
				<input type="radio" name="2" value="a" hidden>
				<button id="2a" class="btn btn-primary btn-response btn_2 zoomable" onclick="select('2','a')">A. 570,000</button>
			</div>
			<div>
				<input type="radio" name="2" value="b" hidden>
				<button id="2b" class="btn btn-primary btn-response btn_2 zoomable" onclick="select('2','b')">B. 1.4 million</button>
			</div>
			<div>
				<input type="radio" name="2" value="c" hidden>
				<button id="2c" class="btn btn-primary btn-response btn_2 zoomable" onclick="select('2','c')">C. 2.1 million</button>
			</div>
			<div>
				<input type="radio" name="2" value="d" hidden>
				<button id="2d" class="btn btn-primary btn-response btn_2 zoomable" onclick="select('2','d')">D. 3.6 million</button>
			</div>
			<div class="opaque row" id="answer_2">
				<div class="answer">
					<p class="intro">The answer is: d. 3.6 million!</p>
					<p>CenturyLink's threat research arm, Black Lotus Labs, analyzes 190 billion NetFlow sessions and over 3.6 million security events every day.</p>
				</div>
				<button class="btn btn-primary pull-right" onclick="changeScreen(3,4)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 3 -->
		<div class="screen secondary-screen" id="screen_4">
			<p class="intro">Question 3 of 5</p>
			<h3>True or False? CenturyLink is investing heavily in enhancements to the customer experience with simpler products, more automation and faster delivery.</h3>
			<div>
				<input type="radio" name="3" value="a" hidden>
				<button id="3a" class="btn btn-primary btn-response btn_3 zoomable" onclick="select('3','a')">True</button>
			</div>
			<div>
				<input type="radio" name="3" value="b" hidden>
				<button id="3b" class="btn btn-primary btn-response btn_3 zoomable" onclick="select('3','b')">False</button>
			</div>
			<div class="opaque row" id="answer_3">
				<div class="answer">
					<p class="intro">The answer is: true!</p>
					<p>In 2020, CenturyLink is investing $200 million across the customer journey, empowering our customers to deploy transformative technologies for continued success and growth.</p>
				</div>
				<button class="btn btn-primary pull-right" onclick="changeScreen(4,5)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 4 -->
		<div class="screen secondary-screen" id="screen_5">
			<p class="intro">Question 4 of 5</p>
			<h3>True or False? CenturyLink Channel Partners have access to a variety of sales and marketing tools to go to market and drive demand, including our co-marketing automation tool delivered via Aprimo.</h3>
			<div>
				<input type="radio" name="4" value="a" hidden>
				<button id="4a" class="btn btn-primary btn-response btn_4 zoomable" onclick="select('4','a')">True</button>
			</div>
			<div>
				<input type="radio" name="4" value="b" hidden>
				<button id="4b" class="btn btn-primary btn-response btn_4 zoomable" onclick="select('4','b')">False</button>
			</div>
			<div class="opaque row" id="answer_4">
				<div class="answer">
					<p class="intro">The answer is: true!</p>
					<p>CenturyLink Channel Partners have access to training, tools and programs necessary to grow their businesses - including world-class sales, marketing, development, operational and maintenance support throughout the entire customer lifecycle.</p>
				</div>
				<button class="btn btn-primary pull-right" onclick="changeScreen(5,6)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 5 -->
		<div class="screen secondary-screen" id="screen_6">
			<p class="intro">Question 5 of 5</p>
			<h3>True or False? CenturyLink's Partner Incentives are stackable, and a Partner can earn multiple payouts on one opportunity.</h3>
			<div>
				<input type="radio" name="5" value="a" hidden>
				<button id="5a" class="btn btn-primary btn-response btn_5 zoomable" onclick="select('5','a')">True</button>
			</div>
			<div>
				<input type="radio" name="5" value="b" hidden>
				<button id="5b" class="btn btn-primary btn-response btn_5 zoomable" onclick="select('5','b')">False</button>
			</div>
			<div class="opaque row" id="answer_5">
				<div class="answer">
					<p class="intro">The answer is: true!</p>
					<p>All of CenturyLink's Partnet Incentives are stackable, meaning a Partner may be eligible for more than one payout if their opportunity qualifies for more than one Incentive. For full Incentive details, contact your Channel Manager or email Partners@centurylink.com.</p>
				</div>
				<button class="btn btn-primary pull-right" onclick="changeScreen(6,7)">Finish</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Prize selections -->
		<div class="screen secondary-screen" id="screen_7">
			<p class="intro">centurylink partner quiz</p>
			<h3>Congratulations!</h3>
			<h3 id="quiz_grade"></h3>
			<div class="please-select">Please select one of these prize options.</div>
			<div class="row">
				<div class="col-md-4" class="prize_5">
					<!-- title -->
					<!-- image -->
					<!-- select button -->
				</div>
				<div class="col-md-4" class="prize_4">
				</div>
				<div class="col-md-4" class="prize_3">
				</div>
			</div>
			<button class="btn btn-primary pull-right" onclick="changeScreen(7,8)">Continue</button>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- User info screen -->
		<div class="screen secondary-screen" id="screen_8">
			<p class="intro">centurylink partner quiz</p>
			<h2>Thanks for your selection.</h2>
			<p>Please fill out the form so we know where to send your prize.</p>
			<form action="submit.php" method="post">
				<div class="row form-top">
					Partner prize form
				</div>
				<div class="row">
					<div class="col col-md-12">
						<label>Prize selection:</label>
						<input class="form-control" type="text" name="prize" readonly style="background-color: white;">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-5">
						<label>First Name:</label>
						<input class="form-control" type="text" name="firstname" placeholder="John" required>
					</div>
					<div class="col col-md-7">
						<label>Last Name:</label>
						<input class="form-control" type="text" name="lastname" placeholder="Smith" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<label>Mailing Address 1:</label>
						<input class="form-control" type="text" name="address1" placeholder="123 Street Name" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<label>Mailing Address 2:</label>
						<input class="form-control" type="text" name="address2" placeholder="Suite No 2">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-5">
						<label>City:</label>
						<input class="form-control" type="text" name="city" placeholder="Johnstown" required>
					</div>
					<div class="col col-md-2">
						<label>State:</label>
						<select class="form-control" type="text" name="state" required>
							<option value=""></option>
							<option value="AK">AK</option>
							<option value="AL">AL</option>
							<option value="AR">AR</option>
							<option value="AZ">AZ</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="IA">IA</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="MA">MA</option>
							<option value="MD">MD</option>
							<option value="ME">ME</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MO">MO</option>
							<option value="MS">MS</option>
							<option value="MT">MT</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="NE">NE</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NV">NV</option>
							<option value="NY">NY</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">PA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">UT</option>
							<option value="VA">VA</option>
							<option value="VT">VT</option>
							<option value="WA">WA</option>
							<option value="WI">WI</option>
							<option value="WV">WV</option>
							<option value="WY">WY</option>
						</select>
					</div>
					<div class="col col-md-5">
						<label>Zip Code:</label>
						<input class="form-control" type="text" name="zipcode" placeholder="12345" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-4">
						<label>Phone:</label>
						<input class="form-control" type="text" name="phone" placeholder="719-123-4567">
					</div>
					<div class="col col-md-8">
						<label>Email:</label>
						<input class="form-control" type="email" name="email" placeholder="smith@company.com">
					</div>
				</div>
				<button class="btn btn-primary pull-right submit-btn" type="button" onclick="changeScreen(8,9)">Submit</button>
				<input id="drawing" type="hidden" name="drawing" value="0">
			</form>
			<div class="row fine-print" style="margin-top: 75px;">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Bonus question -->
		<div class="screen secondary-screen" id="screen_9">

		</div>
	</div>

	<!-- Begin JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">

		var correct = 0;

		// shift the current view off screen, shift next view onto screen
		function changeScreen(current, next) {
			$("#screen_"+current).animate({ left: '-150%' }, 750 );
            $("#screen_"+next).animate({ left: '50%' }, 750 ).show();
		}

		// response button click
		function select(group, value) {
			// select radio input
			$('input[name="' + group+ '"]').val([value]);
			submitAnswer(group);
		}

		// submit user response
		function submitAnswer(id) {
			var answers = ['d', 'd', 'a', 'a', 'a'];
			// check user response
			var response = $('input[name="'+id+'"]:checked').val();
			var answer = answers[id-1];
			if (response == answer) { correct += 1; }
			// reveal correct answer
			$(".btn_"+id).addClass("incorrect").removeClass("zoomable");
			$("#"+id+answer).removeClass("incorrect").addClass("correct");
			// disable button group clicking
			$(".btn_"+id).prop("onclick", null).off("click");
			$(".btn_"+id).on("mousedown", function(e) {
				e.preventDefault();
				return false;
			});
			// reveal answer
			$("#answer_"+id).fadeTo( "slow" , 1.0);
			// check for end of quiz
			if (id == 5) {
				$("#quiz_grade").html("You answered "+correct+" correctly!");
				// enter into drawing if all questions are correct
				if (correctly == 5) {
					$("#drawing").val(1);
				}
				// TODO build prize page based on correct responses

			}
		}
	</script>
    <!-- End JavaScript -->

</body>
</html>