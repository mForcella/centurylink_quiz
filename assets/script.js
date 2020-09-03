var correct = 0;

$( document ).ready(function() {
	// add states to select input
	var states = ["AL","AK","AZ","AR","CA","CO","CT","DC","DE","FL","GA","HI","ID","IL","IN","IA","KS","KY","LA","ME","MD","MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM","NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA","WV","WI","WY"];
	for (var i in states) {
		$("#state_mobile").append(new Option(states[i], states[i]));
		$("#state_desktop").append(new Option(states[i], states[i]));
	}

	// link desktop/mobile city/state/zip inputs
	$("#city_desktop").change(function() {
		$("#city_mobile").val($(this).val());
	});
	$("#city_mobile").change(function() {
		$("#city_desktop").val($(this).val());
	});
	$("#state_desktop").change(function() {
		$("#state_mobile").val($(this).val());
	});
	$("#state_mobile").change(function() {
		$("#state_desktop").val($(this).val());
	});
	$("#zipcode_desktop").change(function() {
		$("#zipcode_mobile").val($(this).val());
	});
	$("#zipcode_mobile").change(function() {
		$("#zipcode_desktop").val($(this).val());
	});

	// submit form data to backend
	$('#user_form').submit(function(e){
	    e.preventDefault();
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: $('#user_form').serialize()
       });
	});
});

// set the prize input value on the form
function setPrize(prize) {
	$("#prize").val(prize.replace(/_/g, " "));
	// go to next screen
	changeScreen(7,8,"-150%");
}

// shift the current view off screen, shift next view onto screen
function changeScreen(current, next, shiftTo) {
	// check for form submit
	if (current == 8 && next != 7) {
		// check form values, return if errors
		$("#user_form").validate();
		if (!$("#user_form").valid()) {
			return;
		}
	}
	// scroll to top of screen
	$("html, body").animate({scrollTop:0}, 100, function() {
		// if quiz complete w/ 0 correct, skip ahead to bonus question
		if (current == 6 && correct == 0) {
			next += 2;
		}
		// shift screens
		$("#screen_"+current).animate({ left: shiftTo }, 750, function() {
			$(this).hide();
		});
	    $("#screen_"+next).animate({ left: '50%' }, 750 ).show();
	});
}

// response button click
function select(id, response) {
	// select radio input
	$('input[name="' + id+ '"]').val([response]);
	// check user response
	var answers = ['d', 'd', 'a', 'a', 'a', 'c'];
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
	$("#answer_"+id).show();
	// check for end of quiz
	if (id == 5) {
		$("#quiz_grade").html("You answered "+correct+" correctly!");
		// enter into drawing if all questions are correct
		if (correct == 5) {
			$("#drawing").val(1);
			alert("Congratulations! You’ve earned an entry into a drawing for a flat screen TV!");
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
	// check for bonus question
	if (id == 6) {
		// check answer and adjust drawing value
		if (response == answer) {
			$("#drawing").val(parseInt($("#drawing").val())+1);
			alert("Congratulations! You’ve earned an entry into a drawing for a flat screen TV!");
		}
		// submit form
		$("#user_form").submit();
		// set drawing value on thank you page
		var drawings = $("#drawing").val();
		if (drawings > 0) {
			var entries = drawings == 1 ? "1 entry" : "2 entries";
			$("#drawing_msg").html("You also earned "+entries+" into the drawing!");
		}
		// hide delivery message if 0 correct
		if (correct == 0) {
			$("#delivery").hide();
		}
	}
}