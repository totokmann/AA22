<html>
<head>
    <title>Captura de datos del form</title>        
</head>       
</html> 

<body>
    
    <?php

    /*Actividad 9: Envío de datos de un FORMULARIO (controles text y submit) */
    /*echo "El nombre ingresado es: ";
    echo $_POST ["nombre"] . "<br>";
    echo "La edad ingresada es: ";
    echo $_POST ["edad"]. "<br>";

    $edad = $_POST ["edad"];

    if($edad >= 18){
        echo "Es mayor de edad";
    }
    else{
        echo "Es menor de edad";
    }*/

    /*Actividad 10: FORMULARIO (control radio)*/
    /*if ($_POST["radio1"] == "sin_estudios"){
        echo "El usuario ". $_POST["nombre"] . " no tiene estudios";
    }
    elseif ($_POST["radio1"] == "primarios"){
        echo "El usuario ". $_POST["nombre"] . " tiene estudios primarios";
    }
    elseif ($_POST["radio1"] == "secundarios"){
        echo "El usuario ". $_POST["nombre"] . " tiene estudios secundarios";
    }*/
    
    /*Actividad 11*/
    /*$cant_deportes=0;
    if (isset($_POST["check1"])){
        $cant_deportes++;
    }
    if (isset($_POST["check2"])){
        $cant_deportes++;
    }
    if(isset($_POST["check3"])){
        $cant_deportes++;
    }
    if(isset($_POST["check4"])){
        $cant_deportes++;
    }
    
    
    echo "La cantidad de deportes que practica es de: " . $cant_deportes;
    */

    /*Actividad 12*/
    /*if ($_POST["ingreso"] == "primera_opc"){
        echo "No debe pagar impuesto a las ganacias";
    }
    elseif ($_POST["ingreso"] == "segunda_opc"){
        echo "No debe pagar impuesto a las ganacias";
    }
    else{
        echo "Debe pagar impuesto a las ganacias";
    }*/
    
    /*Actividad 13*/
     // Obtener los datos enviados desde el formulario
     /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ciudad = htmlspecialchars($_POST['ciudad']);
        $empresa = htmlspecialchars($_POST['empresa']);
        $apoderado = htmlspecialchars($_POST['apoderado']);
        $calle = htmlspecialchars($_POST['calle']);
        $empleado = htmlspecialchars($_POST['empleado']);
        $domicilio_empleado = htmlspecialchars($_POST['domicilio_empleado']);

        // Contrato con los datos proporcionados
        echo "<p>En la ciudad de <strong>$ciudad</strong>, 
        se acuerda entre la Empresa <strong>$empresa</strong>, 
        representada por el Sr. <strong>$apoderado</strong> en su carácter de Apoderado, 
        con domicilio en la calle <strong>$calle</strong>, y el Sr. <strong>$empleado</strong>, 
        futuro empleado con domicilio en <strong>$domicilio_empleado</strong>, 
        celebrar el presente contrato a Plazo Fijo, 
        de acuerdo a la normativa vigente de los artículos bla,bla,bla y 
        concordantes de la Ley de Contrato de Trabajo N° tal,tal tal.</p>";
    }*/

    /*Actividad 14*/
    /*
    // Comprobamos si se han enviado los datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibimos los datos del formulario
        $primerDia = $_POST['primerDia'];
        $ultimoDia = $_POST['ultimoDia'];

        // Mostramos los valores recibidos
        echo "El primer día de la semana es: " . htmlspecialchars($primerDia) . "<br>";
        echo "El último día de la semana es: " . htmlspecialchars($ultimoDia) . "<br>";
    } else {
        echo "No se han enviado datos.";
    }
    */

    /*Actividad 15*/
    /*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibimos los datos del formulario
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        
        // Inicializamos el pedido
        $pedido = "Nombre: " . $nombre . "\n";
        $pedido .= "Dirección: " . $direccion . "\n";
        $pedido .= "Pedido de pizzas:\n";

        // Verificamos si se seleccionaron las pizzas y agregamos al pedido
        if (isset($_POST['jamon_queso']) && $_POST['cantidad_jq'] > 0) {
            $pedido .= "- Jamon y queso: " . $_POST['cantidad_jq'] . " unidad(es)\n";
        }

        if (isset($_POST['napolitana']) && $_POST['cantidad_nap'] > 0) {
            $pedido .= "- Napolitana: " . $_POST['cantidad_nap'] . " unidad(es)\n";
        }

        if (isset($_POST['muzzarella']) && $_POST['cantidad_muz'] > 0) {
            $pedido .= "- Muzzarella: " . $_POST['cantidad_muz'] . " unidad(es)\n";
        }

        // Guardamos el pedido en un archivo de texto
        $archivo = "pedidos_pizza.txt";
        file_put_contents($archivo, $pedido . "\n", FILE_APPEND);

        // Confirmamos que el pedido se ha guardado
        echo "¡Pedido guardado con éxito!<br>";
        echo nl2br(htmlspecialchars($pedido)); // Mostramos el pedido
    } else {
        echo "No se ha enviado ningún pedido.";
    }
    */

    /*Actividad 18*/
    // Función para verificar si las claves coinciden
    /*
    function verificar_claves($clave1, $clave2) {
        if ($clave1 !== $clave2) {
            echo "<p style='color:red;'>Error: Las claves no coinciden. Por favor, inténtelo de nuevo.</p>";
        } else {
            echo "<p style='color:green;'>Registro exitoso. Las claves coinciden.</p>";
        }
    }

    // Verificar si los datos fueron enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];

        // Imprimir el nombre de usuario
        echo "<p>Usuario: " . htmlspecialchars($usuario) . "</p>";

        // Llamar a la función para verificar si las claves coinciden
        verificar_claves($clave1, $clave2);
    }
    */

    ?>
