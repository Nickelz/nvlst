$(".popup").hide();
$(document).ready(function () {
	// $(".users-row").each(function (index, element) {
	// 	users[index] = $(element).map(() => {
	// 		// console.log($(this).text())
	// 		return $(this).text().replace(/^\s+|\s+$/g,'');
	// 	})
	// })

	$(".actions > a").last().click(function () {
		$(".popup").fadeToggle("fast")
		console.log("HOLA");
	})
})