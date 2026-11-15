<?php
// Lógica de la calculadora en PHP
$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case "sumar":
            $resultado = $num1 + $num2;
            break;
        case "restar":
            $resultado = $num1 - $num2;
            break;
        case "multiplicar":
            $resultado = $num1 * $num2;
            break;
        case "dividir":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: No se puede dividir para cero";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web Personal</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <!-- Sección de Información Personal (HTML + CSS) -->
        <header class="perfil">
            <h1>Angelo Giovanny Veliz Salazar</h1>
            <p class="subtitulo">Estudiante de Ingeniería / Aplicaciones Web - UNIANDES</p>
            <p class="descripcion">
                ¡Hola! Bienvenido a mi página web personal. Aquí comparto un poco sobre mí 
                y presento mi primer proyecto integrando HTML, CSS y PHP.
            </p>
            <div class="datos">
                <span><strong>Ciudad:</strong> Quito, Ecuador</span>
                <span><strong>Correo:</strong> angelovs45@uniandes.edu.ec</span>
            </div>
        </header>

        <hr>

        <!-- Sección de la Calculadora (PHP) -->
        <section class="calculadora">
            <h2>Calculadora Básica en PHP</h2>
            <form method="POST" action="">
                <div class="campo">
                    <label for="num1">Primer número:</label>
                    <input type="number" step="any" name="num1" id="num1" required>
                </div>

                <div class="campo">
                    <label for="operacion">Operación:</label>
                    <select name="operacion" id="operacion">
                        <option value="sumar">Sumar (+)</option>
                        <option value="restar">Restar (-)</option>
                        <option value="multiplicar">Multiplicar (×)</option>
                        <option value="dividir">Dividir (÷)</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="num2">Segundo número:</label>
                    <input type="number" step="any" name="num2" id="num2" required>
                </div>

                <button type="submit">Calcular</button>
            </form>

            <?php if ($resultado !== ""): ?>
                <div class="resultado">
                    <strong>Resultado:</strong> <?php echo $resultado; ?>
                </div>
            <?php endif; ?>
        </section>
    </div>

</body>
</html>