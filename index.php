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
	    overflow-x: hidden;
	    color: white;
	}
	button {
		border-radius: 0 !important;
		background-color: #0D49B5 !important;
		font-size: 16px !important;
		width: 150px !important;
		padding: 10px !important;
		margin: 5px !important;
		outline: none !important;
		transition: all 0.3s;
	}
	.zoomable:hover {
		width: 156px !important;
		padding: 13px !important;
		margin: 2px !important;
	}
	a, a:hover {
		color: #3AD69C;
		text-decoration: none;
	}
	input:read-only, input:-moz-read-only {
		background-color: white;
	}
	.container {
	    background-color: black;
	    height: 100vh;
	    width: 100%;
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
		margin: 10px 20%;
	}
	.logo > img {
		width: 150px;
	}
	.footer {
		position: fixed;
		bottom: 0;
		height: 50px;
		background-color: #0D49B5; 
		width: 100%;
		padding: 15px;
		margin-left: -15px;
		text-align: center;
		cursor: pointer;
		transition: transform 0.5s;
	}
	.footer:hover {
		transform: scale(1.1);
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
	.correct, .correct:hover, .correct:focus {
		background-color: #3AD69C !important;
		border-color: #3AD69C !important;
	}
	.incorrect, .incorrect:hover, .incorrect:focus {
		background-color: black !important;
		border-color: #777 !important;
		color: #777 !important;
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
		margin-top: 30px !important;
	}
	.submit-btn:hover {
		margin-top: 27px !important;
	}

	/* bonus question */
	.bonus-header {
		background-color: #3AD69C !important;
		color: black;
		padding: 10px;
	}
	.bonus-main {
		background-color: white !important;
		color: black;
		padding: 50px;
	}
	.bonus-main h3 {
		margin: 0;
	}
	.bonus-buttons {
		text-align: center;
	}

</style>
</head>
<!-- End CSS -->

<body>
	<div class="container">
		<!-- Top color bar and logo -->
		<div class="top-bar row">
			<div class="col-xs-2 bar-1"></div>
			<div class="col-xs-4 bar-2"></div>
			<div class="col-xs-6 bar-3"></div>
		</div>
		<div class="logo">
			<img src="assets/image/logo_century_link.png">
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
						at 2:00 p.m. EDT. <a href="https://www.centurylink.com/xxx">For complete rules see www.centurylink.com/xxx</a>
					</p>
					<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(1,2)">Quiz Me!</button>
				</div>
			</div>
			<div class="row bordered">
				Our Channel Partners help drive our success. <a href="https://">Join the CenturyLink Channel Parner Program ›</a>
			</div>
			<div class="row fine-print">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 1 -->
		<div class="screen secondary-screen" id="screen_2">
			<p class="intro">Question 1 of 5</p>
			<h3>How many global route miles of fiber does CenturyLink have across its network?</h3>
			<div>
				<input type="radio" name="1" value="a" hidden>
				<button id="1a" class="btn btn-primary btn_1 zoomable" onclick="select('1','a')">A. 50,000</button>
			</div>
			<div>
				<input type="radio" name="1" value="b" hidden>
				<button id="1b" class="btn btn-primary btn_1 zoomable" onclick="select('1','b')">B. 100,000</button>
			</div>
			<div>
				<input type="radio" name="1" value="c" hidden>
				<button id="1c" class="btn btn-primary btn_1 zoomable" onclick="select('1','c')">C. 250,000</button>
			</div>
			<div>
				<input type="radio" name="1" value="d" hidden>
				<button id="1d" class="btn btn-primary btn_1 zoomable" onclick="select('1','d')">D. 450,000</button>
			</div>
			<div class="opaque row" id="answer_1">
				<div class="answer">
					<p class="intro" id="answer_1_intro">The answer is: d. 450,000!</p>
					<p>CenturyLink's powerful and expansive global network spans approximately 450,000 global route miles of fiber with 170,000 on-net buildings.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(2,3)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 2 -->
		<div class="screen secondary-screen" id="screen_3">
			<p class="intro">Question 2 of 5</p>
			<h3>How many cybersecurity threats are monitored daily on CenturyLink's network?</h3>
			<div>
				<input type="radio" name="2" value="a" hidden>
				<button id="2a" class="btn btn-primary btn_2 zoomable" onclick="select('2','a')">A. 570,000</button>
			</div>
			<div>
				<input type="radio" name="2" value="b" hidden>
				<button id="2b" class="btn btn-primary btn_2 zoomable" onclick="select('2','b')">B. 1.4 million</button>
			</div>
			<div>
				<input type="radio" name="2" value="c" hidden>
				<button id="2c" class="btn btn-primary btn_2 zoomable" onclick="select('2','c')">C. 2.1 million</button>
			</div>
			<div>
				<input type="radio" name="2" value="d" hidden>
				<button id="2d" class="btn btn-primary btn_2 zoomable" onclick="select('2','d')">D. 3.6 million</button>
			</div>
			<div class="opaque row" id="answer_2">
				<div class="answer">
					<p class="intro" id="answer_2_intro">The answer is: d. 3.6 million!</p>
					<p>CenturyLink's threat research arm, Black Lotus Labs, analyzes 190 billion NetFlow sessions and over 3.6 million security events every day.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(3,4)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 3 -->
		<div class="screen secondary-screen" id="screen_4">
			<p class="intro">Question 3 of 5</p>
			<h3>True or False? CenturyLink is investing heavily in enhancements to the customer experience with simpler products, more automation, and faster delivery.</h3>
			<div>
				<input type="radio" name="3" value="a" hidden>
				<button id="3a" class="btn btn-primary btn_3 zoomable" onclick="select('3','a')">True</button>
			</div>
			<div>
				<input type="radio" name="3" value="b" hidden>
				<button id="3b" class="btn btn-primary btn_3 zoomable" onclick="select('3','b')">False</button>
			</div>
			<div class="opaque row" id="answer_3">
				<div class="answer">
					<p class="intro" id="answer_3_intro">The answer is: true!</p>
					<p>In 2020, CenturyLink is investing $200 million across the customer journey, empowering our customers to deploy transformative technologies for continued success and growth.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(4,5)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 4 -->
		<div class="screen secondary-screen" id="screen_5">
			<p class="intro">Question 4 of 5</p>
			<h3>True or False? CenturyLink Channel Partners have access to a variety of sales and marketing tools to go to market and drive demand, including our co-marketing automation tool delivered via Aprimo.</h3>
			<div>
				<input type="radio" name="4" value="a" hidden>
				<button id="4a" class="btn btn-primary btn_4 zoomable" onclick="select('4','a')">True</button>
			</div>
			<div>
				<input type="radio" name="4" value="b" hidden>
				<button id="4b" class="btn btn-primary btn_4 zoomable" onclick="select('4','b')">False</button>
			</div>
			<div class="opaque row" id="answer_4">
				<div class="answer">
					<p class="intro" id="answer_4_intro">The answer is: true!</p>
					<p>CenturyLink Channel Partners have access to training, tools and programs necessary to grow their businesses - including world-class sales, marketing, development, operational and maintenance support throughout the entire customer lifecycle.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(5,6)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 5 -->
		<div class="screen secondary-screen" id="screen_6">
			<p class="intro">Question 5 of 5</p>
			<h3>True or False? CenturyLink's Partner Incentives are stackable, and a Partner can earn multiple payouts on one opportunity.</h3>
			<div>
				<input type="radio" name="5" value="a" hidden>
				<button id="5a" class="btn btn-primary btn_5 zoomable" onclick="select('5','a')">True</button>
			</div>
			<div>
				<input type="radio" name="5" value="b" hidden>
				<button id="5b" class="btn btn-primary btn_5 zoomable" onclick="select('5','b')">False</button>
			</div>
			<div class="opaque row" id="answer_5">
				<div class="answer">
					<p class="intro" id="answer_5_intro">The answer is: true!</p>
					<p>All of CenturyLink's Partnet Incentives are stackable, meaning a Partner may be eligible for more than one payout if their opportunity qualifies for more than one Incentive. For full Incentive details, contact your Channel Manager or email Partners@centurylink.com.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(6,7)">Next ›</button>
			</div>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
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
			<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(7,8)">Continue</button>
			<div class="row fine-print border-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- User info screen -->
		<div class="screen secondary-screen" id="screen_8">
			<p class="intro">centurylink partner quiz</p>
			<h2>Thanks for your selection.</h2>
			<p>Please fill out the form so we know where to send your prize.</p>
			<form id="user_form">
				<div class="row form-top">
					Partner prize form
				</div>
				<div class="row">
					<div class="col col-md-12">
						<label>Prize selection:</label>
						<input class="form-control" type="text" id="prize" name="prize" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-5">
						<label>First Name:</label>
						<input class="form-control" type="text" id="firstname" name="firstname" placeholder="John" required>
					</div>
					<div class="col col-md-7">
						<label>Last Name:</label>
						<input class="form-control" type="text" id="lastname" name="lastname" placeholder="Smith" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<label>Mailing Address 1:</label>
						<input class="form-control" type="text" id="address1" name="address1" placeholder="123 Street Name" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<label>Mailing Address 2:</label>
						<input class="form-control" type="text" id="address2" name="address2" placeholder="Suite No 2">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-5">
						<label>City:</label>
						<input class="form-control" type="text" id="city" name="city" placeholder="Johnstown" required>
					</div>
					<div class="col col-md-2">
						<label>State:</label>
						<select class="form-control" type="text" id="state" name="state" required>
							<option value=""></option>
						</select>
					</div>
					<div class="col col-md-5">
						<label>Zip Code:</label>
						<input class="form-control" type="text" id="zipcode" name="zipcode" placeholder="12345" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-4">
						<label>Phone:</label>
						<input class="form-control" type="text" id="phone" name="phone" placeholder="719-123-4567">
					</div>
					<div class="col col-md-8">
						<label>Email:</label>
						<input class="form-control" type="email" id="email" name="email" placeholder="smith@company.com">
					</div>
				</div>
				<button class="btn btn-primary pull-right submit-btn zoomable" type="button" onclick="changeScreen(8,9)">Submit</button>
				<input type="hidden" id="drawing" name="drawing" value="0">
			</form>
			<div class="row fine-print" style="margin-top: 75px;">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Bonus question -->
		<div class="screen secondary-screen" id="screen_9">
			<p class="intro">centurylink partner quiz</p>
			<h2 class="">Thanks! Now try the BONUS question!</h2>
			<div class="bonus-header">
				<div class="row">
					<div class="col-xs-8">
						Get the correct answer and be entered into a random drawing to win a flat screen TV!
					</div>
					<div class="col-xs-4">
						<!-- gift image -->
					</div>
				</div>
			</div>
			<div class="bonus-main">
				<h3>How many popular brand licorice candy ropes would it take end-to-end to match the CenturyLink fiber network?</h3>
				<div class="bonus-buttons">
					<div>
						<input type="radio" name="6" value="a" hidden>
						<button id="6a" class="btn btn-primary btn_6 zoomable" onclick="select('6','a')">A. 35,640,000</button>
					</div>
					<div>
						<input type="radio" name="6" value="b" hidden>
						<button id="6b" class="btn btn-primary btn_6 zoomable" onclick="select('6','b')">B. 356,400,000</button>
					</div>
					<div>
						<input type="radio" name="6" value="c" hidden>
						<button id="6c" class="btn btn-primary btn_6 zoomable" onclick="select('6','c')">C. 3,564,000,000</button>
					</div>
					<div>
						<input type="radio" name="6" value="d" hidden>
						<button id="6d" class="btn btn-primary btn_6 zoomable" onclick="select('6','d')">D. 35,640,000,000</button>
					</div>
				</div>
			</div>
			<div class="opaque row" id="answer_6">
				<div class="answer">
					<p class="intro" id="answer_6_intro">The answer is: c. 3,564,000,000!</p>
					<p>At 8 inches in length, it would take over 3.5 billion red licorice candy ropes to equal 450,000 route miles of CenturyLink fiber!</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(9,10)">Finish</button>
			</div>
			<div class="row fine-print" style="margin-top: 75px;">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Thank you page -->
		<div class="screen secondary-screen" id="screen_10">
			<h2>Thank you for visiting our booth and participating in our quiz!</h2>
			<p>Your prize will be mailed to the address you provided in 2 - 3 weeks.</p>
			<p id="drawing_msg"></p>
			<p>Please reach out to <a href="mailto: partners@centurylink.com">partners@centurylink.com</a> for more information on the CenturyLink Channel Partner Program, or visit <a href="https://www.centurylink.com/business/partner">www.centurylink.com/business/partner</a></p>
			<!-- TODO close quiz action? -->
			<button class="btn btn-primary pull-right zoomable" onclick="">Close Quiz</button>
			<div class="row fine-print border-top" style="margin-top: 75px;">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- footer -->
		<a class="footer" href="mailto: partners@centurylink.com">
			Want to learn more? Email us now
		</a>
	</div>

	<!-- Begin JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">

		var correct = 0;

		$( document ).ready(function() {
			// add states to select input
			var states = ["AL","AK","AZ","AR","CA","CO","CT","DE","FL","GA","HI","ID","IL","IN","IA","KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM","NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA","WV","WI","WY"];
			for (var i in states) {
				$("#state").append(new Option(states[i], states[i]));
			}

			// submit form data to backend
			$('#user_form').submit(function(e){
			    e.preventDefault();
	            $.ajax({
	                type: "POST",
	                url: "submit.php",
	                data: $('#user_form').serialize(),
	                success: function(result){
	                	// form successfully submitted
	                	console.log(result);
	                }
	           });
			});
		});

		// shift the current view off screen, shift next view onto screen
		function changeScreen(current, next) {
			// check for form submit
			if (current == 8) {
				// check form values
				$("#user_form").validate();
				if (!$("#user_form").valid()) {
					return;
				}
			}
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
			var answers = ['d', 'd', 'a', 'a', 'a', 'c'];
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
			var msg = response == answer ? "Yes, that’s right!<br>" : "Oh, no, that’s not correct.<br>";
			$("#answer_"+id+"_intro").html(msg+$("#answer_"+id+"_intro").html());
			$("#answer_"+id).fadeTo( "slow" , 1.0);
			// check for end of quiz
			if (id == 5) {
				$("#quiz_grade").html("You answered "+correct+" correctly!");
				// enter into drawing if all questions are correct
				if (correct == 5) {
					$("#drawing").val(1);
				}
				// TODO build prize page based on correct responses

			}
			// check for bonus
			if (id == 6) {
				// check answer and adjust drawing value
				if (response == answer) {
					$("#drawing").val($("#drawing").val()+1);
				}
				// submit form
				$("#user_form").submit();
				// set drawing value on thank you page
				var drawings = $("#drawing").val();
				if (drawings > 0) {
					var drawing_msg = drawings == 1 ? "You also earned 1 entry into the drawing!" : "You also earned 2 entries into the drawing!";
					$("#drawing_msg").html(drawing_msg);
				}
			}
		}
	</script>
    <!-- End JavaScript -->

</body>
</html>