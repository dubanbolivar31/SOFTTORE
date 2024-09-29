document.addEventListener("DOMContentLoaded", function() {
	const loginForm = document.getElementById("login-form");

	// Define un arreglo de objetos con usuarios y contraseñas válidas
	const validCredentials = [
		{ username: "Duban15", password: "D.U.B.A.N.12345" },
		{ username: "Gilber15", password: "G.I.l.B.E.R.12345" },
		{ username: "Juan14", password: "J.U.A.N.12345" },

   ];
		loginForm.addEventListener("submit", function(e) {
			e.preventDefault();

			// Obtener los valores del usuario y la contraseña
			const username = document.getElementById("username").value;
			const password = document.getElementById("password").value;

			// Realizar la validación
			const isValidCredentials = validCredentials.some(cred => {
				return cred.username === username && cred.password === password; });
			if (isValidCredentials) {
				// Redirigir al usuario a la página de destino
				window.location.href = "Menu.html";
				 } else { 
				 	alert("Credenciales incorrectas. Intentales de nuevo.");
				 }
				});
		});





