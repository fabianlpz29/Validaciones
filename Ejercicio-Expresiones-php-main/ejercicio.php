<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <script>
        function validarFormulario() {
            // Obtener los valores de los campos de entrada
            var nombre = document.getElementById('nombre').value;
            var direccion = document.getElementById('direccion').value;
            var correo = document.getElementById('correo').value;
            var texto = document.getElementById('texto').value;
            var telefono = document.getElementById('telefono').value;
            var compania = document.getElementById('compania').value;
            var genero = document.getElementById('genero').value;

            // Realizar validaciones
            // Validar nombre
            if (!/^[MOPSmops]/.test(nombre)) {
                alert('El nombre debe iniciar con M, O, P o S.');
                return false;
            }
            
            // Validar dirección
            if (!/^(casa|apartamento)/i.test(direccion)) {
                alert('La dirección debe comenzar con "casa" o "apartamento".');
                return false;
            }
            
            // Validar correo
            if (!/gmail\.com$/.test(correo)) {
                alert('El correo debe terminar con "gmail.com".');
                return false;
            }

            // Validar texto
            var palabrasAs = texto.match(/\bas\b/gi);
            if (!palabrasAs || palabrasAs.length === 0) {
                alert('El texto debe contener al menos una palabra que termine con "as".');
                return false;
            }

            // Validar teléfono
            if (!/^[27]/.test(telefono)) {
                alert('El número de teléfono debe comenzar con 2 (casa) o 7 (celular).');
                return false;
            }

            // Validar compañía
            var companiaValida = /^(79|72|77|75|71|73)/.test(compania);
            if (!companiaValida) {
                alert('El código de compañía no es válido.');
                return false;
            }

            // Validar género
            if (genero !== '1' && genero !== '2') {
                alert('El género debe ser 1 (masculino) o 2 (femenino).');
                return false;
            }

            // Todas las validaciones son exitosas
            alert('¡Formulario validado con éxito!');
            return false; // Evitar que el formulario se envíe si hay errores
        }
    </script>
</head>
<body>
    <form onsubmit="return validarFormulario();">
        <label for="nombre">Digite un nombre y evalúe si inicia con M, O, P ó S</label> <br>
        <input type="text" id="nombre" required> <br>
        <hr>
        <label for="direccion">Digite una dirección e identifique si existe la palabra casa o apartamento al inicio de la cadena</label> <br>
        <input type="text" id="direccion" required> <br>
        <hr>
        <label for="correo">Identifique al final de la cadena si el correo escrito es gmail.com</label> <br>
        <input type="email" id="correo" required> <br>
        <hr>
        <label for="texto">Escriba un texto cualquiera e identifique cuantas palabras finalizan con "as"</label> <br>
        <input type="text" id="texto" required> <br>
        <hr>
        <label for="telefono">Identificar si el número de teléfono es de casa iniciando con 2 o celular iniciando con 7</label> <br>
        <input type="text" id="telefono" required> <br>
        <hr>
        <label for="compania">Identificar la compañía de celular</label> <br>
        <input type="text" id="compania" required> <br>
        <hr>
        <label for="genero">Identificar el patrón de género digitado en mayúsculas o minúsculas, masculino =1 , femenino=2</label> <br>
        <input type="text" id="genero" required> <br>
        <hr>
        <input type="button" value="Evaluar" onclick="validarFormulario();">
    </form>
</body>
</html>
