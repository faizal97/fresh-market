let ELEM_ARROW;
let y;
function setup() {
	ELEM_ARROW = select('.arrow-down');
	arrowDown(ELEM_ARROW);
	y = 87;
}

function draw() {
	animateArrow(ELEM_ARROW,87);
}

function arrowDown(a) {
	a.mouseOver(()=>{
	a.style('color','#FFFFFF');
	});
	a.mouseOut(()=>{
		a.style('color','#AAAAAA');
	});
	a.mousePressed(()=>{
		location.assign('#head-wrapper');
	});

}

const animateArrow = (elem) => {
	elem.style('top',y+'%');
	y+=0.05;
	if(y>87){
		y = 85;
	}
};
