//let's do something related to exposure values.  
//What might this look like?

var aperture01 = prompt("what's the aperture?");
var shutter01 = prompt("what's the shutter?");
var iso01 = prompt("what's the ISO");

alert("Aperture = " + aperture01 + "Shutter = " + shutter01 + "ISO = " + iso01); 

var x;

function myFunction() {
	//code goes here
	x = 500
	//more code
	alert(x);
}

myFunction();
alert(x+200);

function addThreeNumbers (a, b, c) {
	var x = a + b + c
	alert (x);
}

var a = prompt("number 1?");
var b = prompt("number 2?");
var c = prompt("number 3?");

addThreeNumbers (a, b, c);

if (12 / 4 === "Ari".length) 
{
	confirm("Will this run the first block?");
}
else
{
	confirm("Or the second block?");
}
