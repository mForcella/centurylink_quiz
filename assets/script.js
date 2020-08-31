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
            }
       });
	});

	// link desktop/mobile city/state/zip inputs
	$("#city_desktop").change(function() {
		$("#city_mobile").val($("#city_desktop").val());
	});
	$("#city_mobile").change(function() {
		$("#city_desktop").val($("#city_mobile").val());
	});
	$("#state_desktop").change(function() {
		$("#state_mobile").val($("#state_desktop").val());
	});
	$("#state_mobile").change(function() {
		$("#state_desktop").val($("#state_mobile").val());
	});
	$("#zipcode_desktop").change(function() {
		$("#zipcode_mobile").val($("#zipcode_desktop").val());
	});
	$("#zipcode_mobile").change(function() {
		$("#zipcode_desktop").val($("#zipcode_mobile").val());
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
function changeScreen(current, next, back) {
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
	var unhide = response == answer ? "wrong" : "right";
	$("#answer_"+id+"_response_"+unhide).show();
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

function close_window() {
    close();
}