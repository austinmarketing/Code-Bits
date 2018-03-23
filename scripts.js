// This sheet can be used to store re-usable javascript code


// this code creates a sticky menu
// will need to change the query selectors when used to be specific to the website being built

// calls our function when page is scrolled
window.onscroll = function() {stickyFunction()};

// main variable which actions the scrolling function
var header = document.querySelector(".main-menu");
var sticky = header.offsetTop;

// additional variable which may not be needed
var content = document.querySelector("#content");

// additional variable which may not be needed
var main = document.querySelector("#menu-main-nav");

// main function
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

