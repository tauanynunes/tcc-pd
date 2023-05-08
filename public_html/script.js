/* SCRIPT MENU */

var a_parent =  document.querySelectorAll(".a_parent");
var dd_menu_a = document.querySelectorAll(".dd_menu_a");

a_parent.forEach(function(aitem){

		aitem.addEventListener("click", function(){
			a_parent.forEach(function(aitem){
				aitem.classList.remove("active");
			})
			dd_menu_a.forEach(function(dd_menu_item){
				dd_menu_item.classList.remove("active");
			})
			aitem.classList.add("active");
		})
})

dd_menu_a.forEach(function(dd_menu_item){

		dd_menu_item.addEventListener("click", function(){
			dd_menu_a.forEach(function(dd_menu_item){
				dd_menu_item.classList.remove("active");
			})
			dd_menu_item.classList.add("active");
		})
})

/* SCRIPT CARROUSEL DE IMAGENS */

let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

setInterval(next, 7000);
 
  /* SCRIPT READ MORE — LISTA */ 

  let more = document.querySelectorAll ('.more');
  for (let i = 0; i<more.length; i++){
    more [i].addEventListener('click', function(){
      more[i].parentNode.classList.toggle ('active')
    })
  }

  /* SCRIPT SEARCH - LISTA */

  let search = document.querySelector('.search');
  let close = document.querySelector('.close');
  let searchBox = document.querySelector('.searchBox');

  search.onclick = function (){
	searchBox.classList.add ('active');
  }

  close.onclick = function (){
	searchBox.classList.remove ('active');
  }
  
