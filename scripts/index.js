$('.parallax').mousemove(e=>{
	let x = (e.pageX  * -1 / 100), y = (e.pageY * -1 / 100);
	$('.parallax').css('background-position',x + 'px ' + y + 'px');
});
