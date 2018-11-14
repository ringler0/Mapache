function Valida(Formulario){
	if (Formulario.nom.value==""){
		alert("El nombre no puede estar vacío.");
		Formulario.nom.focus();
		return false;
	}

	if (Formulario.ape.value==""){
		alert("El apellido no puede estar vacío.");
		Formulario.ape.focus();
		return false;
	}

	if (Formulario.fecha.value==""){
		alert("Agregue una fecha.");
		Formulario.fecha.focus();
		return false;
	}

	if (Formulario.email.value==""){
		alert("Agregue un correo electronico. ");
		Formulario.email.focus();
		return false;
	}

	if (Formulario.fono.value < 9999999 and Formulario.fono.value >100000000){
		alert("Agregue un numero de telefono valido.");
		Formulario.fono.focus();
		return false;
	}

	if (Formulario.pass.value ==""){
		alert("La contraseña no puede estar vacío.");
		Formulario.pass.focus();
		return false;
	}

	if (Formulario.reppass.value == ""){
		alert("La contraseña no puede estar vacío.");
		Formulario.repass.focus();
		return false;
	}

	if (Formulario.pass.value != Formulario.reppass.value){
		alert("Su contraseña no coincide. Vuelva a ingresarla.");
		Formulario.reppass.focus();
		return false;
	}

	return true;
}