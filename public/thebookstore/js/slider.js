// Image slider for Prominent Book items
$(document).ready(function() {
	$('.flicker').flickerplate({
		arrows: true,
		arrow_constraint: false,
		auto_flick: true,
		auto_flick_delay: 10,
		dot_alignment: 'center',
		dot_navigation: true,
		flick_animation: 'transition-slide',
		flick_position: 1,
		theme: 'light'
	});
});