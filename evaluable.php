<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php

        $peso = 3;
        $paquetes = 1;    
        $precio = 0;
        $ancho = 1;
        $largo = 2;
        $alto = 1;
        $zona = "Peninsula";
        $tamanyo = 0;
        $transporte = "aereo";

        $tamanyo = $ancho * $largo * $alto;

        
        
        if ($tamanyo >= 0.5) {
            $precio * 50;
        } elseif ($tamanyo >= 1) {
            $precio * 75;
        } else {
            $precio * 100;
        }

        if ($peso <= 5) {
            $precio = $precio;
        } elseif ($peso > 5) {
            $precio = ($precio * 0.25);
        } elseif ($peso > 10) {
            $precio = ($precio * 0.50);
        } elseif ($peso > 15) {
            echo "El envio no se puede enviar si es mayor a 15kg";
        }

        if ($zona == "Peninsula") {
            $precio = $precio;
        } elseif ($zona == "Baleares") {
            $precio = $precio * 0.10;
        } elseif ($zona == "Canarias") {
            $precio = $precio * 0.10;
        }
        
        $preciototal = $precio * $paquetes;

        echo "el precio total es: $preciototal";
    ?>
    
    
    </form>
</body>
</html>