<?php
    // Ejercicio #1
    $salario = 1000;
    $descuento = null;

    if ($salario > 0 && $salario <= 450) {
        $descuento = $salario * 0.08;
        echo "Su salario es $salario y se le descontara 8% de su salario mensual equivalente a $descuento";
    } else if ($salario > 450 && $salario <= 600) {
        $descuento = $salario * 0.16;
        echo "Su salario es $salario y se le descontara 16% de su salario mensual equivalente a $descuento";
    } else if ($salario > 600 && $salario <= 800) {
        $descuento = $salario * 0.18;
        echo "Su salario es $salario y se le descontara 18% de su salario mensual equivalente a $descuento";
    } else if ($salario > 800) {
        $descuento = $salario * 0.20;
        echo "Su salario es $salario y se le descontara 20% de su salario mensual equivalente a $descuento";
    } else {
        echo "Salario invalido";
    }

    echo "<p></p>";

    // Ejercicio 2
    $denominacion_de_billete = 5;
    $precio_de_producto = 1.25;

    switch($denominacion_de_billete) {
        case 1: 
            echo $precio_de_producto > 1 ?  "El producto vale mas de lo que ingreso!" :  "Su cambio seria $". ($denominacion_de_billete - $precio_de_producto);
            break;
        case 5: 
            echo $precio_de_producto > 5 ?  "El producto vale mas de lo que ingreso!" :  "Su cambio seria $". ($denominacion_de_billete - $precio_de_producto);
            break;
        case 10: 
            echo $precio_de_producto > 10 ?  "El producto vale mas de lo que ingreso!" :  "Su cambio seria $". ($denominacion_de_billete - $precio_de_producto);
            break;
        case 20: 
            echo $precio_de_producto > 20 ?  "El producto vale mas de lo que ingreso!" :  "Su cambio seria $". ($denominacion_de_billete - $precio_de_producto);
            break;
        case 50: 
            echo $precio_de_producto > 50 ?  "El producto vale mas de lo que ingreso!" :  "Su cambio seria $". ($denominacion_de_billete - $precio_de_producto);
            break;
        case 100: 
            echo "Billete muy grande!";
            break;
        default:
            echo "Denominacion de billete invalida!";
            break;
    }

    echo "<p></p>";

    // Ejercicio 3
    $imagen_externa = "<img src='https://i.pinimg.com/originals/8a/81/ec/8a81ecd8fdd266b3221da325875c0ea8.gif'>";
    $veces_a_mostrar = 3;

    for($i = 0; $i < $veces_a_mostrar; $i++) {
        echo $imagen_externa;
    }

    echo "<p></p>";

    // Ejercicio 4
    $dinero_ingresado = 5;
    $costo_partida = 1;
    $dinero_restante = $dinero_ingresado;
    
    while ($dinero_restante >= $costo_partida) {
        echo "Sigue jugando <br>";

        $dinero_restante = $dinero_restante - $costo_partida;
    }

    echo "<p></p>";

    // Ejercicio 5
    $numero_de_rondas = 5;
    $puntaje = 0;

    for ($i = 0; $i < $numero_de_rondas; $i++) {
        $puntaje = $puntaje + rand(1,100);
    }

    switch($puntaje) {
        case 100: 
            echo "Has ganado $40";
            break;
        case 200: 
            echo "Has ganado $60";
            break;
        case 400: 
            echo "Has ganado $80";
            break;
        case 500: 
            echo "Has ganado $100";
            break;
        default:
            echo "Lo siento pero no has ganado nada!";
            break;
    }
?>
