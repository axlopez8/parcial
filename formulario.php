<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="mostrar.php">
        <fieldset>
            <legend> Ingreso de Datos</legend>
            <p>
                <label> Ingrese nombre del Alumno:
                    <input type="text" name="nombre" />
                </label>

                <label> Escriba Fecha:
                    <input type="date" name="fecha" />
                </label>
                <label> Escriba Asistio:
                    <input type="text" name="asistio" />
                </label>
            </p>
            <p>
               <button type="submit"> Guardar</button>
            </p>

        </fieldset>
    </form>
</body>
</html>