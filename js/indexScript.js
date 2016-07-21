$(document).ready(function(){
	$(".loginSubWindow").hide();
	$(".loginSubWindow").draggable();

	$(".registrationSubWindow").hide();
	$(".registrationSubWindow").draggable();

	$("#loginButton").click(function(){
			$(".loginSubWindow").show();
			$(".registrationSubWindow").hide();
	});

	$("#closeLoginSubWindow").click(function(){
		$(".loginSubWindow").hide();
	});

	$("#registration").click(function(){
				$(".registrationSubWindow").show();
				$(".loginSubWindow").hide();
	});

	$("#closeRegistrationSubWindow").click(function(){
		$(".registrationSubWindow").hide();
	});

});
