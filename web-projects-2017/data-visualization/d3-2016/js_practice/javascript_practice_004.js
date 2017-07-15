//let's do something related to exposure values.  
//What might this look like?

	
function exposureValue() {
	var aperture = prompt("What's the denominator of the aperture? [i.e. 2.8 rather than 1/2.8]");
	var shutter = prompt("What's the denominator of the shutter speed? [i.e. 100 rather than 1/100]");
	var iso = prompt("What's the ISO?");
	var a = Math.log(aperture)/Math.log(2);
	var s = Math.log(shutter)/Math.log(2);
	var i = Math.log(iso/100)/Math.log(2);	
	var ev = 2*a + (s - i);
	return ev;
}



var x = exposureValue();
	alert (x);
	