 function mostrarContenido(numero) {
            // Ocultar todos los contenidos
            var contenidos = document.querySelectorAll('.contenido');
            contenidos.forEach(function(contenido) {
                contenido.classList.remove('activo');
            });

            // Mostrar el contenido seleccionado
            document.getElementById('contenido' + numero).classList.add('activo');
        }

        // Mostrar la primera pestaña por defecto
        mostrarContenido(1);