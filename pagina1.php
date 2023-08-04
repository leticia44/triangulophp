<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de Triângulo</title>
    <link rel="stylesheet" href="style.css">


<body>
    <h1>Verificador de Triângulo</h1>
    <form method="post" action="">
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" step="0.01" required><br>

        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" step="0.01" required><br>

        <label for="lado3">Lado 3:</label>
        <input type="number" name="lado3" step="0.01" required><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    function verificarTriangulo($lado1, $lado2, $lado3)
    {
        // Verifica se os lados podem formar um triângulo
        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            // Determina o tipo de triângulo
            if ($lado1 == $lado2 && $lado1 == $lado3) {
                return "Triângulo Equilátero";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                return "Triângulo Isóceles";
            } else {
                return "Triângulo Escaleno";
            }
        } else {
            return "Não é possível formar um triângulo.";
        }
    }

    // Exemplo de uso do sistema:
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $lado1 = floatval($_POST["lado1"]);
        $lado2 = floatval($_POST["lado2"]);
        $lado3 = floatval($_POST["lado3"]);

        $resultado = verificarTriangulo($lado1, $lado2, $lado3);
        echo $resultado;
    }
    ?>

</body>

</html>