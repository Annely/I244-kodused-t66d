window.onload = function() {
// lehe laadimine lõpetatud. Siia funktsiooni sisse kirjutan elementide mõjutamise käsud

 var parl = document.getElementsByClassName("bead");

for (var i = 0; i<parl length; i++) {
	stiil= window.getComputedStyle(parl);
	asetus = stiil.getPropertyValue('float');
	if (asetus = left) {
			asetus = right;}
			else {
				asetus= left}
}}