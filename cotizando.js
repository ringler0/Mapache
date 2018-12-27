function Cotiza(){
	var total=0;
	var Fotografia = document.getElementById("Fotografia").checked;
	var Video = document.getElementById("Video").checked;
	var Dj = document.getElementById("Dj").checked;
	var Luz = document.getElementById("Luz").checked;
	var Recepcion = document.getElementById("Recepcion").checked;
	var Musica_Vivo = document.getElementById("Musica_Vivo").checked;
	var Karaoke = document.getElementById("Karaoke").checked;

	if (Fotografia === true){

		total = 1+total;
	}

	if (Video === true){

		total = 2+total;
	}

	if (Dj === true){

		total = 3+total;
	}

	if (Luz === true){

		total = 4+total;
	}

	if (Recepcion === true){

		total = 5+total;
	}

	if (Musica_Vivo === true){

		total = 6+total;
	}

	if (Karaoke === true){

		total = 7+total;
	}

	document.getElementById("Valor").innerHTML = "$" + total;

}