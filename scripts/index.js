let ELEM_ARROW;

function setup() {
	ELEM_ARROW = select('.arrow-down');
	arrowDown();
}

function draw() {

}

function arrowDown() {
	let a = ELEM_ARROW;
	a.mouseOver(()=>{
	a.style('color','skyblue');
	});
	a.mouseOut(()=>{
		a.style('color','#AAAAAA');
	});
	a.mousePressed(()=>{
		location.assign('#head-wrapper');
	});

}