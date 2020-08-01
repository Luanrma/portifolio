window.addEventListener('scroll', function() {

  let scroll = window.pageYOffset;

	if (scroll > 20) {
		document.querySelector('#navTop').id = 'navDown'
	} else {
		document.querySelector('#navDown').id = 'navTop'  
	}
});