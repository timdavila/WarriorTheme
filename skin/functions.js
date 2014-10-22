
// handle show/hide menu for mobile view

function ToggleMenu(menu) {
	var e = document.getElementById(menu);
	if(e.style.display == 'block') {
		e.style.display = 'none';
	} else {
		e.style.display = 'block';
	}
}