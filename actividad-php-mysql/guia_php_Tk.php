<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Actividad 4: Un programita más útil que "Hola Mundo"
    /* 
    $num = rand(1, 100);

    // Mostrar el número generado
    echo "El número generado es: " . $num, "<br>"; // Salto de línea HTML

    // Comparar el número
    if ($num < 50) {
        echo "El número es menor a 50";
    } elseif ($num == 50) {
        echo "El número es igual a 50";
    } else {
        echo "El número es mayor a 50";
    }
    */

    //Actividad 5: Tipos de Variables
    /*$number=25; // tipo integer
    $number_real=24.8; //tipo double
    $name="fabri"; //tipo string
    $boolOpt=true; //tipo boolean

    echo "El tipo integer es: ". $number. "<br>";
    echo "El tipo double es: ". $number_real. "<br>" ;
    echo "El tipo string es: " . $name. "<br>";
    echo "El tipo boolean es: ". $boolOpt. "<br>"; 
    */

    //Actividad 6: Variables de Tipo String
    //Los enteros 
    /*$fecha1 = 26;
    $fecha2 = 28;
    $fecha3 = 30;

    //El string
    $texto= "El $fecha1, $fecha2 y el $fecha3 de octubre tenemos parciales";

    echo $texto;
    */

    //Actividad 7: Estructura condicional (if)
    /*$num = rand(1, 3);

    // Comparar el número
    if ($num == 1) {
        echo "El número generado es: 1";
    } elseif ($num == 2) {
        echo "El número generado es: 2";
    } elseif ($num == 3) {
        echo "El número generado es: 3";
    }
    */

    //Actividad 8: Estructuras Repetitivas (for - while - do/while)
    /*echo "Tabla del 2: <br> Con Estructura for";
    for ($f = 2; $f <= 20; $f = $f + 2){
       echo $f , "<br>"; 
    }

    echo "<br>";
    echo "Tabla del 2: <br> Con Estructura do/while <br>";
    $f=2;
    $tabla2=1;
    do{
        echo "$f x $tabla2= ". ($f*$tabla2). "<br>"; //Hacemos la multiplicacion
        $tabla2++; //Incrementamos contador hasta 10
    }while($tabla2 <= 10);

    $f2=2;
    $tablax2=1;
    echo "<br>";
    echo "Tabla del 2: <br> Con Estructura while <br>";
    while($tablax2<=10){
        echo "$f2 x $tablax2 = " . ($f2 * $tablax2). "<br>"; //Hacemos la multiplicacion
        $tablax2++; //Incrementamos contador hasta 10
    }
    */
    ?>
    <!-- Actividad 9 : Envío de datos de un FORMULARIO (controles text y submit) -->
    <!--<form method = "post" action="./captura_datos_FC.php">
        Ingrese su nombre:
    <input type = "text" name="nombre">
    <br>
    Ingrese su edad:
    <input type = "number" name="edad">
    <br>
    <input type = "submit" value ="confirmar">
</form>-->

    <!-- Actividad 10: FORMULARIO (control radio) -->
    <!--<form method = "post" action="./captura_datos_FC.php">
        Ingrese su nombre:
    <input type = "text" name="nombre">
    <br>
    <input type = "radio" name="radio1" value ="sin_estudios">No tiene estudios
    <br>
    <input type = "radio" name="radio1" value ="primarios">Tiene Estudios Primarios
    <br>
    <input type = "radio" name="radio1" value ="secundarios">Tiene Estudios Secundarios
    <br>
    <input type="submit" value="confirmar">
</form>-->

<!-- Actividad 11: FORMULARIO (control checkbox) -->
<!--<form method = "post" action="./captura_datos_FC.php">
        Ingrese su nombre:
    <input type = "text" name="nombre">
    <br>
    <input type = "checkbox" name="check1" value ="futbol">Practica Futbol
    <br>
    <input type = "checkbox" name="check2" value ="basket">Practica Basket
    <br>
    <input type = "checkbox" name="check3" value ="tennis">Practica Tennis
    <br>
    <input type = "checkbox" name="check4" value ="voley">Practica Voley
    <br>
    <input type="submit" value="confirmar">
</form>
-->

<!-- Actividad 12: -->
<!--<form method="post" action="./captura_datos_FC.php">
    Ingrese su nombre:
    <br>
    Seleccione su ingreso Mensual
    <br>
    <select name="ingreso">
        <option value="primera_opc">1-1000</option>
        <option value="segunda_opc">1001-3000</option>
        <option value="tercera_opc">mayor a 3000</option>
    </select>
    <br>
    <input type="submit" value="confirmar">
</form>
-->

<!-- Actividad 13: 
<h2>Formulario de Contrato</h2>
    <form action="captura_datos_FC.php" method="post">
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" required>
        <br><br>

        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" id="empresa" required>
        <br><br>

        <label for="apoderado">Nombre del Apoderado:</label>
        <input type="text" name="apoderado" id="apoderado" required>
        <br><br>

        <label for="calle">Domicilio de la Empresa:</label>
        <input type="text" name="calle" id="calle" required>
        <br><br>

        <label for="empleado">Nombre del Empleado:</label>
        <input type="text" name="empleado" id="empleado" required>
        <br><br>

        <label for="domicilio_empleado">Domicilio del Empleado:</label>
        <input type="text" name="domicilio_empleado" id="domicilio_empleado" required>
        <br><br>

        <input type="submit" value="Enviar Contrato">
    </form>
-->

<!-- Actividad 14: 
<form method="post" action="captura_datos_FC.php">
        <?php
        /*
        // Definir el vector (array) con los nombres de los días de la semana
        $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $primerDia = $diasSemana[0];
        $ultimoDia = $diasSemana[count($diasSemana) - 1];
        */
        ?>
        <label for="primerDia">El primer día de la semana es:</label>
        <input type="text" id="primerDia" name="primerDia" value="<?php echo $primerDia; ?>" readonly>
        <br>

        <label for="ultimoDia">El último día de la semana es:</label>
        <input type="text" id="ultimoDia" name="ultimoDia" value="<?php echo $ultimoDia; ?>" readonly>
        <br><br>

        <input type="submit" value="Enviar datos">
    </form>
-->

<!-- Actividad 15 
<form method="post" action="captura_datos_FC.php">
      
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <br><br>

       
        <label>Jamon y queso:</label>
        <input type="checkbox" name="jamon_queso" value="sí">
        <label for="cantidad_jq">Cantidad:</label>
        <input type="number" id="cantidad_jq" name="cantidad_jq" min="0" value="0">
        <br>

        <label>Napolitana:</label>
        <input type="checkbox" name="napolitana" value="sí">
        <label for="cantidad_nap">Cantidad:</label>
        <input type="number" id="cantidad_nap" name="cantidad_nap" min="0" value="0">
        <br>

        <label>Muzzarella:</label>
        <input type="checkbox" name="muzzarella" value="sí">
        <label for="cantidad_muz">Cantidad:</label>
        <input type="number" id="cantidad_muz" name="cantidad_muz" min="0" value="0">
        <br><br>

        <input type="submit" value="Confirmar pedido">
    </form>
-->

<!-- Actividad 16 -->
<?php
    // Nombre del archivo a leer
    /*$archivo = "pedidos_pizza.txt";

    // Verificamos si el archivo existe
    if (file_exists($archivo)) {
        // Leemos el contenido del archivo
        $contenido = file_get_contents($archivo);

        // Mostramos el contenido del archivo en el navegador
        if ($contenido) {
            echo nl2br(htmlspecialchars($contenido)); // nl2br convierte saltos de línea en <br> para HTML
        } else {
            echo "El archivo está vacío.";
        }
    } else {
        echo "El archivo no existe.";
    }*/
    ?>

<!-- Actividad 17 -->
<?php
    // Crear un vector (array) asociativo con claves de usuarios
    /*$claves_usuarios = array(
        "usuario1" => "clave123",
        "usuario2" => "abc456",
        "Fabri" => "pass789",
        "usuario3" => "contraseña321",
        "usuario4" => "secreto987"
    );

    // Acceder a una componente específica del vector asociativo
    echo "<p>La clave del usuario 'Fabri' es: " . $claves_usuarios["Fabri"] . "</p>";

    // Mostrar todas las claves de acceso con sus respectivos usuarios
    echo "<h3>Lista completa de usuarios y sus claves:</h3>";
    echo "<ul>";
    foreach ($claves_usuarios as $usuario => $clave) {
        echo "<li>Usuario: $usuario, Clave: $clave</li>";
    }
    echo "</ul>";
    */
    ?>

<!-- Actividad 18 
<h2>Registro de Usuario</h2>
    <form action="captura_datos_FC.php" method="post">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>
        <label for="clave1">Ingrese su clave:</label>
        <input type="password" name="clave1" id="clave1" required>
        <br><br>
        <label for="clave2">Repita su clave:</label>
        <input type="password" name="clave2" id="clave2" required>
        <br><br>
        <input type="submit" value="Registrar">
    </form>
-->
</body>
</html>
