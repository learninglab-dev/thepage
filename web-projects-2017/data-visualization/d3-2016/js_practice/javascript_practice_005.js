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
	alert ("Exposure Value is " + x);
	
var exref = 5

switch ( exref ) {
	case < .5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "dim city lights");
		break;
	case >= 1.5 && <2.5: 
		alert(x + "city lights");
		break;
	case >= 2.5 && <3.5: 
		alert(x + "moonlight");
		break;
	case >= 3.5 && <4.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	case >= .5 && <1.5: 
		alert(x + "moonlight");
		break;
	default:
		alert("Something's wrong");

}


alert (exref);




		
