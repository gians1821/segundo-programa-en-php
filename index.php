<?php

function mostrar_menu()
{
    echo "=======================================================\n";
    echo "========= GESTOR DE FINANZAS (SECCIÓN GASTOS) =========\n";
    echo "=======================================================\n";
    echo "1. Ingresar productos\n";
    echo "2. Ingresar gastos\n";
    echo "3. Mostrar productos\n";
    echo "4. Mostrar gastos\n";
    echo "5. Salir\n";
}

function ingresar_producto(&$productos)
{
    $name = readline("Ingresar nombre del producto: ");
    $price = readline("Ingresar precio unitario del producto: ");
    $productos[] = ["nombre" => $name, "precio" => $price];

    // RESUMEN FINAL    
    echo "=============================\n";
    echo "========= RESUMEN ===========\n";
    echo "=============================\n";
    echo "Nombre del producto: $name\n";
    echo "Precio unitario del producto: $price soles\n";
}

function ingresar_gasto(&$gastos)
{
    $name = readline("Ingresar nombre del gasto: ");
    $price = readline("Ingresar precio unitario del gasto: ");
    $units = readline("Ingresar unidades del gasto: ");
    $gastos[] = ["nombre" => $name, "precio" => $price, "unidades" => $units];

    // RESUMEN FINAL    
    echo "=============================\n";
    echo "========= RESUMEN ===========\n";
    echo "=============================\n";
    echo "Nombre del gasto: $name\n";
    echo "Precio unitario del gasto: $price soles\n";
    echo "Unidades del gasto: $units\n";
}

function mostrar_productos($productos)
{
    echo "=============================\n";
    echo "========= PRODUCTOS =========\n";
    echo "=============================\n";
    foreach ($productos as $producto) {
        echo "Nombre: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . " soles\n";
    }
}

function mostrar_gastos($gastos)
{
    echo "=============================\n";
    echo "========== GASTOS ===========\n";
    echo "=============================\n";
    foreach ($gastos as $gasto) {
        echo "Nombre: " . $gasto["nombre"] . ", Precio: " . $gasto["precio"] . " soles, Unidades: " . $gasto["unidades"] . "\n";
    }
}

$productos = [];
$gastos = [];

do {
    mostrar_menu();
    $option = readline("Escoge opción: ");

    switch ($option) {
        case 1:
            ingresar_producto($productos);
            break;
        case 2:
            ingresar_gasto($gastos);
            break;
        case 3:
            mostrar_productos($productos);
            break;
        case 4:
            mostrar_gastos($gastos);
            break;
        case 5:
            echo "Gracias por visitar\n";
            break;
        default:
            echo "Opción no válida, intenta de nuevo\n";
    }
} while ($option != 5);
