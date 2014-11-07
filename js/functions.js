/**
 * Theme functions
 *
 */
 
var menus = ["primary", "second", "third"];
 
 // handle show/hide menus for mobile view
 
 function ToggleMenu(id) {
 	
 	var e = document.getElementById(menus[id-1]);
 	if(e.style.display == 'block') {
 		e.style.display = 'none';
 		document.getElementById('btn-1').className = 'btn-reg';
 		document.getElementById('btn-2').className = 'btn-reg';
 		document.getElementById('btn-3').className = 'btn-reg';
 		document.getElementById('icn-1').className = 'rf fa fa-chevron-right';
 		document.getElementById('icn-2').className = 'rf fa fa-chevron-right';
 	} else {
 		document.getElementById(menus[0]).style.display = 'none';
 		document.getElementById(menus[1]).style.display = 'none';
 		document.getElementById(menus[2]).style.display = 'none';
 		document.getElementById('btn-1').className = 'btn-reg';
 		document.getElementById('btn-2').className = 'btn-reg';
 		document.getElementById('btn-3').className = 'btn-reg';
 		document.getElementById('icn-1').className = 'rf fa fa-chevron-right';
 		document.getElementById('icn-2').className = 'rf fa fa-chevron-right';
 		e.style.display = 'block';
 		document.getElementById('btn-'+id).className = 'btn-selected';
 		document.getElementById('icn-'+id).className = 'rf fa fa-chevron-down';
 		
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