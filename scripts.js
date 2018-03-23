/*
 * Underpants Scripts File
 *
 * This file should contain any js scripts you want to add to the site.
 * This file will be called automatically in the footer so as not to
 * slow the page load.
*/

 // sticky menu applies to both sites 
window.onscroll = function() {stickyFunction()};

var header = document.querySelector(".main-menu");
var sticky = header.offsetTop;

var content = document.querySelector("#content");

var main = document.querySelector("#menu-main-nav");

function stickyFunction() {
  if (window.pageYOffset >= sticky) {
	  
    header.classList.add("sticky"); 
    content.classList.add("sticky-content");
    main.classList.add("sticky-main");
    
  } else {
	  
    header.classList.remove("sticky");
    content.classList.remove("sticky-content");
    main.classList.remove("sticky-main");
    
  }
}


/*
 * Add your scripts here.
*/



/*
 * Put all your jQuery in here.
*/
/* jQuery(document).ready(function($) {

 

}); */
