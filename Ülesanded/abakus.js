window.onload = function() {
// lehe laadimine l�petatud. Siia funktsiooni sisse kirjutan elementide m�jutamise k�sud

 var parl = document.getElementsByClassName("bead");

for (var i = 0; i<parl length; i++) {
	stiil= window.getComputedStyle(parl);
	asetus = stiil.getPropertyValue('float');
	if (asetus = left) {
			asetus = right;}
			else {
				asetus= left}
}}