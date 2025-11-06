<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        /* Estilo de la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Bordes para las celdas */
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc; /* Bordes simples */
        }

        /* Fondo gris para el encabezado */
        th {
            background-color: #f2f2f2; /* Gris claro */
        }
        /* Estilo para las celdas con pago pendiente */
        .pendiente {
            background-color: #ffcccc; /* Rojo claro */
        }
    </style>
</head>
<body>
    <?php
    // Array multidimensional en el que están los usuarios y dentro de cada uno otro arrays con los pagos mensuales
    $usuarios = [
        1 => [
           "id" => 1,
           "nombre" => "Raúl",
           "apellidos" => "Ibuarben Alba",
           "dni" => "12345678A",
           "email" => "raulibu@gmail.com",
           "telefono" => "666666666",
            //Array asociativo que contiene los pagos mensuales y el estado de cada uno.
           "pagos" => [
                "2024-01" => ["mes" => "Enero", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-01-05"],
                "2024-02" => ["mes" => "Febrero", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-02-05"],
                "2024-03" => ["mes" => "Marzo", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-03-07"],
                "2024-04" => ["mes" => "Abril", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-04-10"],
                "2024-05" => ["mes" => "Mayo", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-05-07"],
                "2024-06" => ["mes" => "Junio", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-06-05"],
                "2024-07" => ["mes" => "Julio", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-07-09"],
                "2024-08" => ["mes" => "Agosto", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-08-07"],
                "2024-09" => ["mes" => "Septiembre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-09-02"],
                "2024-10" => ["mes" => "Octubre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-10-07"],
                "2024-11" => ["mes" => "Noviembre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-11-07"],
                "2024-12" => ["mes" => "Diciembre", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null]
            ]
         ],

        2 => [
            "id" => 2,
            "nombre" => "Carlos",
            "apellidos" => "López Pérez",
            "dni" => "87654321B",
            "email" => "carloslopez@gmail.com",
            "telefono" => "600000000",
            //Array asociativo que contiene los pagos mensuales y el estado de cada uno.
            "pagos" => [
                "2024-01" => ["mes" => "Enero", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-01-10"],
                "2024-02" => ["mes" => "Febrero", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-02-08"],
                "2024-03" => ["mes" => "Marzo", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null],
                "2024-04" => ["mes" => "Abril", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-04-12"],
                "2024-05" => ["mes" => "Mayo", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-05-09"],
                "2024-06" => ["mes" => "Junio", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null],
                "2024-07" => ["mes" => "Julio", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-07-04"],
                "2024-08" => ["mes" => "Agosto", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-08-03"],
                "2024-09" => ["mes" => "Septiembre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-09-10"],
                "2024-10" => ["mes" => "Octubre", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null],
                "2024-11" => ["mes" => "Noviembre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-11-06"],
                "2024-12" => ["mes" => "Diciembre", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null]
            ]
         ],

        3 => [
            "id" => 3,
            "nombre" => "María",
            "apellidos" => "Fernández Ruiz",
            "dni" => "56789012C",
            "email" => "mariafernandez@gmail.com",
            "telefono" => "600000001",
            //Array asociativo que contiene los pagos mensuales y el estado de cada uno.
            "pagos" => [
                "2024-01" => ["mes" => "Enero", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-01-06"],
                "2024-02" => ["mes" => "Febrero", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-02-04"],
                "2024-03" => ["mes" => "Marzo", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-03-08"],
                "2024-04" => ["mes" => "Abril", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null],
                "2024-05" => ["mes" => "Mayo", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-05-11"],
                "2024-06" => ["mes" => "Junio", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-06-09"],
                "2024-07" => ["mes" => "Julio", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-07-02"],
                "2024-08" => ["mes" => "Agosto", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null],
                "2024-09" => ["mes" => "Septiembre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-09-03"],
                "2024-10" => ["mes" => "Octubre", "importe" => 52, "estado" => "Pagado", "fecha_pago" => "2024-10-06"],
                "2024-11" => ["mes" => "Noviembre", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null],
                "2024-12" => ["mes" => "Diciembre", "importe" => 52, "estado" => "Pendiente", "fecha_pago" => null]
            ]
        ]
    ];

    // Recorremos el array de usuarios
    foreach ($usuarios as $usuario) {
        
        // Información básica del usuario
        
        echo "<strong>Socio:</strong> " . $usuario['nombre'] . " " . $usuario['apellidos'] . "<br>";
        echo "<strong>DNI:</strong> " . $usuario['dni'] . "<br>";
        echo "<strong>Email:</strong> " . $usuario['email'] . "<br>";
        echo "<strong>Teléfono:</strong> " . $usuario['telefono'] . "<br>";
        echo "</div>";

        // Inicializamos una variable para acumular el total abonado
        $total_abonado = 0;

        // Tabla de pagos de los 12 meses
        echo "<table>";
        echo "<thead>";
        echo "<tr><th>Mes</th><th>Importe</th><th>Estado</th><th>Fecha de Pago</th></tr>";
        echo "</thead><tbody>";

        // Recorremos los pagos de cada usuario
        foreach ($usuario['pagos'] as $pago) {
            // Obtenemos la información de cada pago
            $mes = $pago['mes'];
            $importe = $pago['importe'];
            $estado = $pago['estado'];
            $fecha_pago = $pago['fecha_pago'] ? $pago['fecha_pago'] : "-";

            // Si el estado del pago es "Pendiente", añadimos la clase "pendiente"
            $clase_pendiente = ($estado == "Pendiente") ? "pendiente" : "";

            // Si el estado es "Pagado", acumulamos el importe
            if ($estado == "Pagado") {
                $total_abonado += $importe;
            }

            // Imprimimos una fila por cada pago
            echo "<tr class='{$clase_pendiente}'>";
            echo "<td>{$mes}</td>";
            echo "<td>{$importe}€</td>";
            echo "<td>{$estado}</td>";
            echo "<td>{$fecha_pago}</td>";

                
        }
        // Añadimos la fila del total a continuación del bucle y al final de la tabla
        echo "<tr class='total'>";
        echo "<td colspan='3'>Total Abonado</td>";
        echo "<td>{$total_abonado}€</td>";
        echo "</tr>";

        
        echo "</tbody></table>";
        echo "<hr>";
    }

?>


</body>
</html>