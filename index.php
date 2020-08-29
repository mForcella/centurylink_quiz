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
	    background-color: black;
	    background-image: url('assets/image/background.png');
	    background-size: cover;
	    background-repeat: no-repeat;
	    background-position: right;
	}
	@media screen and (max-width:767px) {
		body {
			background-size: auto 75%;
		}
		.row {
			margin: 0;
		}
	}
	@media screen and (max-width:360px) {
		body {
			/*background-size: auto 50%;*/
		}
	}
	button {
		border-radius: 0 !important;
		background-color: #0D49B5 !important;
		font-size: 16px !important;
		width: 200px !important;
		padding: 10px !important;
		margin: 5px !important;
		outline: none !important;
		transition: all 0.3s;
	}
	.zoomable:hover {
		width: 206px !important;
		padding: 13px !important;
		margin: 2px !important;
	}
	@media screen and (max-width:767px) {
		button {
			margin: 5px 0 !important;
		}
		.zoomable, .correct, .incorrect {
			width: 100% !important;
		}
		.zoomable:hover {
			width: calc(100% + 6px) !important;
			margin: 2px -3px !important;
		}
	}
	a, a:hover {
		color: #3AD69C;
		text-decoration: none;
	}
	.container {
	    height: 100vh;
	    width: 100%;
	}
	.screen {
		position: absolute;
	    width: 50%;
	    left: 50%;
	    margin-left: -25%;
	}
	@media screen and (max-width:767px) {
		.screen {
			width: 80%;
			margin-left: -40%;
		}
	}
	@media screen and (max-width:360px) {
		.screen {
			width: 90%;
			margin-left: -45%;
		}
	}
	.secondary-screen {
		left: 150%;
		display: none;
	}
	.buffer-top {
		margin-top: 75px !important;
	}
	.buffer-bottom {
		margin-bottom: 75px !important;
	}
	.headline {
		margin-bottom: 30px;
		margin-top: -5px;
		font-size: 27px;
	}
	@media screen and (max-width:767px) {
		.headline, h3 {
			font-size: 20px;
	}
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

	/* color bar, footer, logo */
	.logo {
		margin: 10px 20%;
	}
	@media screen and (max-width:767px) {
		.logo {
			text-align: center;
			margin-bottom: 50px;
		}
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
	.top-bar {
		margin-left: -15px !important;
		margin-right: -15px !important;
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
		padding: 10px 0;
		margin: 30px 0;
	}
	.tv > img {
		margin-top: -30px;
		width: 200px;
	}
	.tv {
		float: right;
	}
	@media screen and (max-width:767px) {
		.tv {
			float: none;
			text-align: center;
		}
	}
	.buffered {
		margin: 30px 0;
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
	.hidden {
		display: none;
	}
	.border-top {
		border-top: 1px solid #46484D;
		padding: 10px 0;
		margin: 30px 0;
	}
	.btn_1, .btn_2, .btn_3, .btn_4, .btn_5 {
		margin-left: 50px !important;
	}
	.btn_1.zoomable:hover, .btn_2.zoomable:hover, .btn_3.zoomable:hover, .btn_4.zoomable:hover, .btn_5.zoomable:hover {
		margin-left: 47px !important;
	}
	@media screen and (max-width:767px) {
		.btn_1, .btn_2, .btn_3, .btn_4, .btn_5 {
			margin-left: 0 !important;
		}
		.btn_1.zoomable:hover, .btn_2.zoomable:hover, .btn_3.zoomable:hover, .btn_4.zoomable:hover, .btn_5.zoomable:hover {
			margin-left: -3px !important;
		}
	}

	/* prize selection and submission form */
	.please-select {
		text-align: center;
		color: #3AD69C;
		margin: 30px 0 20px 0;
	}
	.prize-btn {
		width: 100px !important;
	}
	.prize-btn:hover {
		width: 106px !important;
	}
	#prize_level_1, #prize_level_2, #prize_level_3 {
		margin: 0 -100px !important;
	}
	.divider {
		border-top: 1px solid #46484D;
		margin: 30px auto;
	}
	.mobile-divider {
		border-top: 1px solid #46484D;
		margin: 30px auto;
		display: none;
		width: 50%;
	}
	@media screen and (max-width:767px) {
		.mobile-divider {
			display: block;
		}
		.divider {
			width: 50%;
		}
	}
	form {
		background-color: white;
		color: black;
		padding: 20px;
		max-width: 400px;
		margin: 0 auto;
		margin-top: 40px;
		font-size: 12px;
	}
	form > .row > .col {
		padding: 5px;
	}
	.form-control {
		border-radius: 0;
		height: 27px;
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
		margin: 30px -20px !important;
	}
	.submit-btn:hover {
		margin: 27px -23px !important;
	}
	@media screen and (max-width:767px) {
		.submit-btn {
			margin: 30px 0px !important;
		}
		.submit-btn:hover {
			margin: 27px -3px !important;
		}
	}
	.prize-container {
		text-align: center;
	}
	.prize-title {
		height: 50px;
		font-size: 12px;
	}
	.prize-image {
		width: 150px;
		margin-bottom: 20px;
	}
	.mobile-only {
		display: none;
	}
	@media screen and (max-width:767px) {
		.desktop-only {
			display: none;
		}
		.mobile-only {
			display: block;
		}
	}
	select:not([multiple]) {
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    background-position: right 50%;
	    background-repeat: no-repeat;
	    background-image: url('assets/image/dropdown.png');
	    padding-right: 1.5em
	}

	/* bonus question */
	.bonus-header {
		background-color: #3AD69C !important;
		color: black;
		padding: 10px 20px;
		margin-top: 40px;
		max-height: 80px;
	}
	.bonus-main {
		background-color: white !important;
		color: black;
		padding: 40px;
	}
	@media screen and (max-width:767px) {
		.bonus-main {
			padding: 20px;
		}
	}
	.bonus-main h3 {
		margin: 0;
	}
	.bonus-buttons {
		text-align: center;
		margin-top: 40px;
	}
	.bonus-image {
		margin-top: -35px;
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
			<h3 class="headline">Do you call yourself a techie? Let's see what you know!</h3>
			<div class="row">
				<div class="col-sm-4 tv">
					<img src="assets/image/tv.png">
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-7">
					<p>
						Test your tech knowledge by answering five "simple"
						questions. Earn a prize selection based on your total number
						of correct answers. In addition, answer all five correctly and
						you'll be entered into a drawing for a flat screen TV!
					</p>
					<p class="fine-print buffered">
						No purchase necessary to enter or win. Void where prohibited. Up to 2 entries per individual. Must
						be 18 years of age to enter. Entry period begins 09/08/20 at 11:00 a.m. EDT and ends on 09/10/20
						at 2:00 p.m. EDT. <a href="https://www.centurylink.com/xxx">For complete rules see www.centurylink.com/xxx</a>
					</p>
					<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(1,2)">Quiz Me!</button>
				</div>
			</div>
			<div class="row bordered">
				Our Channel Partners help drive our success. <a href="https://www.centurylink.com/business/partner.html">Join the CenturyLink Channel Parner Program ›</a>
			</div>
			<div class="row fine-print buffer-bottom">
				<div class="col-md-12">
					<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
				</div>
			</div>
		</div>
		<!-- Question 1 -->
		<div class="screen secondary-screen" id="screen_2">
			<p class="intro">Question 1 of 5</p>
			<h3 class="headline">How many global route miles of fiber does CenturyLink have across its network?</h3>
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
			<div class="hidden row" id="answer_1">
				<div class="answer">
					<p class="intro" id="answer_1_intro"><br></p>
					<p class="intro">The answer is: d. 450,000!</p>
					<p>CenturyLink's powerful and expansive global network spans approximately 450,000 global route miles of fiber with 170,000 on-net buildings.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(2,3)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 2 -->
		<div class="screen secondary-screen" id="screen_3">
			<p class="intro">Question 2 of 5</p>
			<h3 class="headline">How many cybersecurity threats are monitored daily on CenturyLink's network?</h3>
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
			<div class="hidden row" id="answer_2">
				<div class="answer">
					<p class="intro" id="answer_2_intro"><br></p>
					<p class="intro">The answer is: d. 3.6 million!</p>
					<p>CenturyLink's threat research arm, Black Lotus Labs, analyzes 190 billion NetFlow sessions and over 3.6 million security events every day.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(3,4)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 3 -->
		<div class="screen secondary-screen" id="screen_4">
			<p class="intro">Question 3 of 5</p>
			<h3 class="headline">True or False? CenturyLink is investing heavily in enhancements to the customer experience with simpler products, more automation, and faster delivery.</h3>
			<div>
				<input type="radio" name="3" value="a" hidden>
				<button id="3a" class="btn btn-primary btn_3 zoomable" onclick="select('3','a')">True</button>
			</div>
			<div>
				<input type="radio" name="3" value="b" hidden>
				<button id="3b" class="btn btn-primary btn_3 zoomable" onclick="select('3','b')">False</button>
			</div>
			<div class="hidden row" id="answer_3">
				<div class="answer">
					<p class="intro" id="answer_3_intro"><br></p>
					<p class="intro">The answer is: true!</p>
					<p>In 2020, CenturyLink is investing $200 million across the customer journey, empowering our customers to deploy transformative technologies for continued success and growth.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(4,5)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 4 -->
		<div class="screen secondary-screen" id="screen_5">
			<p class="intro">Question 4 of 5</p>
			<h3 class="headline">True or False? CenturyLink Channel Partners have access to a variety of sales and marketing tools to go to market and drive demand, including our co-marketing automation tool delivered via Aprimo.</h3>
			<div>
				<input type="radio" name="4" value="a" hidden>
				<button id="4a" class="btn btn-primary btn_4 zoomable" onclick="select('4','a')">True</button>
			</div>
			<div>
				<input type="radio" name="4" value="b" hidden>
				<button id="4b" class="btn btn-primary btn_4 zoomable" onclick="select('4','b')">False</button>
			</div>
			<div class="hidden row" id="answer_4">
				<div class="answer">
					<p class="intro" id="answer_4_intro"><br></p>
					<p class="intro">The answer is: true!</p>
					<p>CenturyLink Channel Partners have access to training, tools and programs necessary to grow their businesses - including world-class sales, marketing, development, operational and maintenance support throughout the entire customer lifecycle.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(5,6)">Next Question ›</button>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Question 5 -->
		<div class="screen secondary-screen" id="screen_6">
			<p class="intro">Question 5 of 5</p>
			<h3 class="headline">True or False? CenturyLink's Partner Incentives are stackable, and a Partner can earn multiple payouts on one opportunity.</h3>
			<div>
				<input type="radio" name="5" value="a" hidden>
				<button id="5a" class="btn btn-primary btn_5 zoomable" onclick="select('5','a')">True</button>
			</div>
			<div>
				<input type="radio" name="5" value="b" hidden>
				<button id="5b" class="btn btn-primary btn_5 zoomable" onclick="select('5','b')">False</button>
			</div>
			<div class="hidden row" id="answer_5">
				<div class="answer">
					<p class="intro" id="answer_5_intro"><br></p>
					<p class="intro">The answer is: true!</p>
					<p>All of CenturyLink's Partnet Incentives are stackable, meaning a Partner may be eligible for more than one payout if their opportunity qualifies for more than one Incentive. For full Incentive details, contact your Channel Manager or email Partners@centurylink.com.</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(6,7)">Next ›</button>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Prize selections -->
		<div class="screen secondary-screen" id="screen_7">
			<p class="intro">centurylink partner quiz</p>
			<h3>Congratulations!</h3>
			<h3 id="quiz_grade"></h3>
			<div class="please-select">Please select one of these prize options.</div>
			<div class="row" id="prize_level_1" hidden>
				<div class="col-sm-4 prize-container">
					<div class="row"><p class="prize-title">Auto Pop Car Charger with Charge all Cable</p></div>
					<div class="row"><img class="prize-image" src="assets/image/1-prize-1.png"></div>
					<div class="row"><button id="1-1" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
				</div>
				<div class="row mobile-divider"></div>
				<div class="col-sm-4 prize-container">
					<div class="row"><p class="prize-title">CenturyLink Prize Pack</p></div>
					<div class="row"><img class="prize-image" src="assets/image/1-prize-2.png"></div>
					<div class="row"><button id="1-2" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
				</div>
				<div class="row mobile-divider"></div>
				<div class="col-sm-4 prize-container">
					<div class="row"><p class="prize-title">Wireless Car Mouse & Pad combo + Cougar 8 GB USB</p></div>
					<div class="row"><img class="prize-image" src="assets/image/1-prize-3.png"></div>
					<div class="row"><button id="1-3" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
				</div>
			</div>
			<div class="row" id="prize_level_2" hidden>
				<div class="col-sm-4 prize-container">
					<div class="row"><p class="prize-title">Boxanne Wireless Speaker and 12 oz. Hammered Beverage Tumbler</p></div>
					<div class="row"><img class="prize-image" src="assets/image/2-prize-1.png"></div>
					<div class="row"><button id="2-1" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
				</div>
				<div class="row mobile-divider"></div>
				<div class="col-sm-4 prize-container">
					<div class="row"><p class="prize-title">Anker PowerWave Charger and 12 oz. Hammered Beverage Tumbler</p></div>
					<div class="row"><img class="prize-image" src="assets/image/2-prize-2.png"></div>
					<div class="row"><button id="2-2" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
				</div>
				<div class="row mobile-divider"></div>
				<div class="col-sm-4 prize-container">
					<div class="row"><p class="prize-title">Atom Wireless Earbud & UL Listed Charging Station</p></div>
					<div class="row"><img class="prize-image" src="assets/image/2-prize-3.png"></div>
					<div class="row"><button id="2-3" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
				</div>
			</div>
			<div class="row" id="prize_level_3" hidden>
				<div class="row">
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">Life in Motion Charging Padfolio</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-1.png"></div>
						<div class="row"><button id="3-1" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
					<div class="row mobile-divider"></div>
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">Gray or Mint Ivy Mini Printer</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-2.png"></div>
						<div class="row"><button id="3-2" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
					<div class="row mobile-divider"></div>
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">WiFi Remote Control Selfie Drone</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-3.png"></div>
						<div class="row"><button id="3-3" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
				</div>
				<div class="row divider"></div>
				<div class="row">
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">Yeti Day Tripper Lunch Cooler Bag</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-4.png"></div>
						<div class="row"><button id="3-4" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
					<div class="row mobile-divider"></div>
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">RocketBook Everlast Executive + Beagle Scout Travel Companion</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-5.png"></div>
						<div class="row"><button id="3-5" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
					<div class="row mobile-divider"></div>
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">Life in Motion Charging Backpack</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-6.png"></div>
						<div class="row"><button id="3-6" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
				</div>
				<div class="row divider"></div>
				<div class="row">
					<div class="col-sm-4 prize-container"></div>
					<div class="col-sm-4 prize-container">
						<div class="row"><p class="prize-title">Aftershokz Wireless Bone Conduction Headphones</p></div>
						<div class="row"><img class="prize-image" src="assets/image/3-prize-7.png"></div>
						<div class="row"><button id="3-7" class="btn btn-primary zoomable prize-btn" onclick="setPrize(this.id)">Select</button></div>
					</div>
				</div>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- User info screen -->
		<div class="screen secondary-screen" id="screen_8">
			<p class="intro">centurylink partner quiz</p>
			<h3>Thanks for your selection.</h3>
			<p>Please fill out the form so we know where to send your prize.</p>
			<form id="user_form">
				<div class="row form-top">
					Partner prize form
				</div>
				<div class="row">
					<div class="col col-sm-12">
						<label>Prize selection:</label>
						<input class="form-control" type="text" id="prize" name="prize" readonly style="background-color: white;" onclick="changeScreen(8,7,true)">
					</div>
				</div>
				<div class="row">
					<div class="col col-sm-5">
						<label>First Name:</label>
						<input class="form-control" type="text" id="firstname" name="firstname" placeholder="John" required>
					</div>
					<div class="col col-sm-7">
						<label>Last Name:</label>
						<input class="form-control" type="text" id="lastname" name="lastname" placeholder="Smith" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-sm-12">
						<label>Mailing Address 1:</label>
						<input class="form-control" type="text" id="address1" name="address1" placeholder="123 Street Name" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-sm-12">
						<label>Mailing Address 2:</label>
						<input class="form-control" type="text" id="address2" name="address2" placeholder="Suite No 2">
					</div>
				</div>
				<div class="row desktop-only">
					<div class="col col-sm-5">
						<label>City:</label>
						<input class="form-control" type="text" id="city" name="city" placeholder="Johnstown" required>
					</div>
					<div class="col col-sm-2">
						<label>State:</label>
						<select class="form-control" type="text" id="state_desktop" name="state" required>
							<option value=""></option>
						</select>
					</div>
					<div class="col col-sm-5">
						<label>Zip Code:</label>
						<input class="form-control" type="text" id="zipcode" name="zipcode" placeholder="12345" required>
					</div>
				</div>
				<div class="row mobile-only">
					<div class="col col-sm-12">
						<label>City:</label>
						<input class="form-control" type="text" id="city" name="city" placeholder="Johnstown" required>
					</div>
				</div>
				<div class="row mobile-only">
					<div class="col col-xs-4">
						<label>State:</label>
						<select class="form-control" type="text" id="state_mobile" name="state" required>
							<option value=""></option>
						</select>
					</div>
					<div class="col col-xs-8">
						<label>Zip Code:</label>
						<input class="form-control" type="text" id="zipcode" name="zipcode" placeholder="12345" required>
					</div>
				</div>
				<div class="row">
					<div class="col col-sm-4">
						<label>Phone:</label>
						<input class="form-control" type="text" id="phone" name="phone" placeholder="719-123-4567">
					</div>
					<div class="col col-sm-8">
						<label>Email:</label>
						<input class="form-control" type="email" id="email" name="email" placeholder="smith@company.com">
					</div>
				</div>
				<button class="btn btn-primary pull-right submit-btn zoomable" type="button" onclick="changeScreen(8,9)">Submit</button>
				<input type="hidden" id="drawing" name="drawing" value="0">
			</form>
			<div class="row fine-print border-top buffer-bottom buffer-top">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Bonus question -->
		<div class="screen secondary-screen" id="screen_9">
			<p class="intro">centurylink partner quiz</p>
			<h3>Thanks! Now try the BONUS question!</h3>
			<div class="bonus-header">
				<div class="row">
					<div class="col-xs-12 mobile-only">
						Get the correct answer and be entered into a random drawing to win a flat screen TV!
					</div>
					<div class="col-xs-8 desktop-only">
						Get the correct answer and be entered into a random drawing to win a flat screen TV!
					</div>
					<div class="col-xs-4 desktop-only bonus-image">
						<img src="assets/image/bonus.png">
					</div>
				</div>
			</div>
			<div class="bonus-main">
				<h3 class="headline">How many popular brand licorice candy ropes would it take end-to-end to match the CenturyLink fiber network?</h3>
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
			<div class="hidden row" id="answer_6">
				<div class="answer">
					<p class="intro" id="answer_6_intro"><br></p>
					<p class="intro">The answer is: c. 3,564,000,000!</p>
					<p>At 8 inches in length, it would take over 3.5 billion red licorice candy ropes to equal 450,000 route miles of CenturyLink fiber!</p>
				</div>
				<button class="btn btn-primary pull-right zoomable" onclick="changeScreen(9,10)">Finish</button>
			</div>
			<div class="row fine-print border-top buffer-bottom">
				<span class="gray">© 2020 CenturyLink. All Rights Reserved. Third party marks are the property of their respective owners. </span><a href="https://www.centurylink.com/xxx">For complete rules, see www.centurylink.com/xxx</a>
			</div>
		</div>
		<!-- Thank you page -->
		<div class="screen secondary-screen" id="screen_10">
			<h3>Thank you for visiting our booth and participating in our quiz!</h3>
			<p id="delivery">Your prize will be mailed to the address you provided in 2 - 3 weeks.</p>
			<p id="drawing_msg"></p>
			<p>Please reach out to <a href="mailto: partners@centurylink.com">partners@centurylink.com</a> for more information on the CenturyLink Channel Partner Program, or visit <a href="https://www.centurylink.com/business/partner">www.centurylink.com/business/partner</a></p>
			<!-- TODO close quiz action? -->
			<button class="btn btn-primary pull-right zoomable" onclick="">Close Quiz</button>
			<div class="row fine-print border-top buffer-bottom buffer-top">
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
		var prizes = [
			["Auto Pop Car Charger", "CenturyLink Prize Pack", "Wireless Car Mouse"],
			["Boxanne Wireless Speaker", "Anker PowerWave Charger", "Atom Wireless Earbud"],
			["Life in Motion Padfolio", "Ivy Mini Printer", "WiFi Selfie Drone", "Yeti Cooler Bag", "RocketBook Everlast Executive", "Life in Motion Charging Backpack", "Aftershokz Wireless Headphones"]
		];

		$( document ).ready(function() {
			// add states to select input
			var states = ["AL","AK","AZ","AR","CA","CO","CT","DE","FL","GA","HI","ID","IL","IN","IA","KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM","NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA","WV","WI","WY"];
			for (var i in states) {
				$("#state_mobile").append(new Option(states[i], states[i]));
				$("#state_desktop").append(new Option(states[i], states[i]));
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

		function setPrize(id) {
			// set value to prize input
			var level = parseInt(id.split("-")[0]);
			var number = parseInt(id.split("-")[1]);
			var prize = prizes[level-1][number-1];
			$("#prize").val(prize);
			// go to next screen
			changeScreen(7,8);
		}

		// shift the current view off screen, shift next view onto screen
		function changeScreen(current, next, back=false) {
			console.log("change screen");
			// scroll to top of screen
			window.scrollTo(0, 0);
			// check for form submit
			if (current == 8 && next != 7) {
				// check form values
				$("#user_form").validate();
				if (!$("#user_form").valid()) {
					return;
				}
			}
			// if quiz complete w/ 0 correct, skip to bonus question
			if (current == 6 && correct == 0) {
				next += 2;
			}
			if (back) {
				$("#screen_"+current).animate({ left: '150%' }, 750 );
	            $("#screen_"+next).animate({ left: '50%' }, 750 );
			} else {
				$("#screen_"+current).animate({ left: '-150%' }, 750 );
	            $("#screen_"+next).animate({ left: '50%' }, 750 ).show();
			}
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
			if (response == answer && id != 6) { correct += 1; }
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
			var msg = response == answer ? "Yes, that’s right!" : "Oh, no, that’s not correct.";
			$("#answer_"+id+"_intro").html(msg);
			$("#answer_"+id).removeClass("hidden");
			// check for end of quiz
			if (id == 5) {
				$("#quiz_grade").html("You answered "+correct+" correctly!");
				// enter into drawing if all questions are correct
				if (correct == 5) {
					$("#drawing").val(1);
				}
				// build prize page based on correct responses
				switch (correct) {
					case 1:
					case 2:
					case 3:
						$("#prize_level_1").show();
						break;
					case 4:
						$("#prize_level_2").show();
						break;
					case 5:
						$("#prize_level_3").show();
						break;
				}
			}
			// check for bonus
			if (id == 6) {
				// check answer and adjust drawing value
				if (response == answer) {
					$("#drawing").val(parseInt($("#drawing").val())+1);
				}
				// submit form
				$("#user_form").submit();
				// set drawing value on thank you page
				var drawings = $("#drawing").val();
				if (drawings > 0) {
					var drawing_msg = drawings == 1 ? "You also earned 1 entry into the drawing!" : "You also earned 2 entries into the drawing!";
					$("#drawing_msg").html(drawing_msg);
				}
				// hide delivery message if 0 correct
				if (correct == 0) {
					$("#delivery").hide();
				}
			}
		}
	</script>
    <!-- End JavaScript -->

</body>
</html>