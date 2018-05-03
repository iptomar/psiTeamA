$(document).ready(function() {
	$(".header").click(function(){

		$(this).toggleClass("active");
		$(this).parent().find(".content").slideToggle();

	});

});