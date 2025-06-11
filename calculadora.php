<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Suma y Resta</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="calculadora">
        <h2>Calculadora de Suma y Resta</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Número 1" required>
            <select name="operacion">
                <option value="sumar">+</option>
                <option value="restar">-</option>
            </select>
            <input type="number" name="num2" placeholder="Número 2" required>
            <button type="submit" name="calcular">Calcular</button>
        </form>

        <?php
        if (isset($_POST['calcular'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            $resultado = 0;

            if ($operacion == "sumar") {
                $resultado = $num1 + $num2;
            } elseif ($operacion == "restar") {
                $resultado = $num1 - $num2;
            }

            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        ?>
    </div>
</body>
</html>
