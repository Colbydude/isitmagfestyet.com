var secret = "3838404037393739666513";
var input = "";
var timer;

$(document).keyup(function(e)
{
	input += e.which;

	clearTimeout(timer);
	timer = setTimeout(function() { input = ""; }, 2000);

	check_input();
});

function check_input()
{
	if (input == secret)
	{
		var sound = $("#audio")[0];

		sound.load();
		sound.play();
	}
}