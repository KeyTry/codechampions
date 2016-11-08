/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
var ok = true;
var x = new Array();
var objeto = 0;

function comprobar( element ) {
	var si = false;
	for ( var i = 0; i < x.length; i++ ) {
		if ( x[ i ] == element ) {
			si = true;
			x[ i ] = -1;
			i = x.length;
		}
	}
	return si;
}


function openNav( element ) {
	if ( comprobar( element ) ) {
		document.getElementById( element )
			.style.width = '0';

	} else {
		document.getElementById( element )
			.style.width = '69%';
		x[ x.length + 1 ] = element;
	}


}


/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function openProvince() {
	document.getElementById( "bottom-div" )
		.style.height = "70%";
}

function closeProvince() {
	document.getElementById( "bottom-div" )
		.style.height = "0";
}
