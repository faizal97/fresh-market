let icon = document.getElementById('search-icon');
let box = document.getElementById('input');

window.onload= ()=>{
	console.log('siap');
};

icon.onclick = () => {
	icon.style.display = "none";
	box.style.display = "inline";
};
