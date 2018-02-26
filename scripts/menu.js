let icon = document.getElementById('search-icon');
let box = document.getElementById('input');

window.onload= ()=>{
	console.log('siap');
};

$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
