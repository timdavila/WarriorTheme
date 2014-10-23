
// handle show/hide menus for mobile view

function ToggleMenu(id) {
	var e = document.getElementById(id);
	if(e.style.display == 'block') {
		e.style.display = 'none';
	} else {
		document.getElementById('primary').style.display = 'none';
		document.getElementById('second').style.display = 'none';
		document.getElementById('third').style.display = 'none';
		e.style.display = 'block';
		
	}
}


function SwapIcon(id){ 
	var e = document.getElementById(id);
	if(e.className == 'rf fa fa-chevron-right') {
		document.getElementById('icn-1').className = 'rf fa fa-chevron-right';
		document.getElementById('icn-2').className = 'rf fa fa-chevron-right';
		e.className = 'rf fa fa-chevron-down';
	} else {
		e.className = 'rf fa fa-chevron-right';
	}
} 

function ToggleHighlight(id){ 
	var e = document.getElementById(id);
	if(e.className == 'btn-reg') {
		document.getElementById('btn-1').className = 'btn-reg';
		document.getElementById('btn-2').className = 'btn-reg';
		document.getElementById('btn-3').className = 'btn-reg';
		e.className = 'btn-selected';
	} else {
		e.className = 'btn-reg';
	}
} 