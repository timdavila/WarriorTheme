/**
 * Theme functions
 *
 */
 
var menus = ["nav-primary", "nav-2", "nav-3"];
 
 // handle show/hide menus for mobile view
 
 function ToggleMenu(id) {
 	var e = document.getElementById(menus[id-1]);
 	if(e.style.display == 'block') {
 		e.style.display = 'none';
 		if(id = 1) {
 		document.getElementById('btn-1').className = 'btn-reg';
 		}
 		if(id = 2) {
 		document.getElementById('btn-2').className = 'btn-reg';
 		document.getElementById('icn-2').className = 'rf fa fa-chevron-right';
 		}
 		if(id = 3) {
 		document.getElementById('btn-3').className = 'btn-reg';
 		document.getElementById('icn-3').className = 'rf fa fa-chevron-right';
 		}
 	} else {
 		if(id != 1) {
 		document.getElementById(menus[0]).style.display = 'none';
 		document.getElementById('btn-1').className = 'btn-reg';
 		}
 		if(id != 2) {
 		document.getElementById(menus[1]).style.display = 'none';
 		document.getElementById('btn-2').className = 'btn-reg';
 		document.getElementById('icn-2').className = 'rf fa fa-chevron-right';
 		}
 		if(id != 3) {
 		document.getElementById(menus[2]).style.display = 'none';
 		document.getElementById('btn-3').className = 'btn-reg';
 		document.getElementById('icn-3').className = 'rf fa fa-chevron-right';
 		}
 		e.style.display = 'block';
 		document.getElementById('btn-'+id).className = 'btn-selected';
 		document.getElementById('icn-'+id).className = 'rf fa fa-chevron-down';		
 	}
 }
 
 // popup social share options in a new, small window
 
var newwindow;
function popup(url) {
	newwindow=window.open(url,'Share','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');
	if (window.focus) {newwindow.focus()}
}