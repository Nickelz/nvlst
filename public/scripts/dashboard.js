$("#popup").css("display", "none")

$(document).ready(function () {
	$(".actions > a").last().click(function () {
		if ($("#popup").css("display") == "flex") {
			$("#popup").css("display", "none")
		} else {
			$("#popup").css("display", "flex")
		}
	})
})