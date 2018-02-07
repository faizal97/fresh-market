$('.parallax').mousemove(e=>{
	let x = (e.pageX  * -1 / 60), y = (e.pageY * -1 / 60);
	$('.parallax').css('background-position',x + 'px ' + y + 'px');
});
