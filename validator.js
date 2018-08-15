$().ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();

	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			nombre: "required",
			apellidoP: "required",
			apellidoM:"required"
			usuario: {
				required: true,
				minlength: 6
			},
			contraseña: {
				required: true,
				minlength: 6
			},
			confirmar_contraseña: {
				required: true,
				minlength: 6,
				equalTo: "#contraseña"
			},
			email: {
				required: true,
				email: true
			},
		},
		
		
		messages: {
			nombre: "Ingresa tu Nombre.",
			apellidoP: " Ingresa tu Apellido Paterno.",
			apellidoM: "Ingresa tu Apellido Materno."
			
			usuario: {
				required: " Ingresa tu Nombre de Usuario.",
				minlength: " El usuario debe de tener minimo 6 caracteres."
			},
			contraseña: {
				required: " Escribe la contraseña.",
				minlength: " La contraseña debe de tener minimo 6 caracteres."
			},
			confirmar_contraseña: {
				required: "Reescribe la contraseña.",
				minlength: "Las contraseñas no concuerdan.",
				equalTo: "Las contraseñas no concuerdan."
			},
			email: "Ingresa un correo electronico valido.",
		}
	});

	
	$("#usuario").focus(function() {
		var nombre = $("#nombre").val();
		var apellidoP = $("#apellidoP").val();
		var apellidoM = $("#apellidoM").val();
		if(nombre && apellidoP &&  &&!this.value) {
			this.value = nombre + "." + apellidoP+"."+apellidoM;
		}
	});
});