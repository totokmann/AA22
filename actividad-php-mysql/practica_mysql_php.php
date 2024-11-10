<?php
include ("./conexion.php");
conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_PHP_MYSQL</title>
</head>
<body>

<?php
            if(isset($_GET['modulo']))
            {
                include ('modulos/'.$_GET['modulo'].'.php');
            }
            else
            {
                ?>
                <h2>Bienvenido a nuestra página</h2>
                <p>Este es el contenido principal de la página. Aquí puedes colocar cualquier información relevante.</p>
                <?php
            }
            ?>

        <!--<a href="practica_mysql_php.php?modulo=ejercicio1">Ejercicio 1</a>-->
        <br>
        <a href="practica_mysql_php.php">Volver al Inicio</a></li>
                    <?php
                    $sql = "SELECT * FROM menu ORDER BY CAST(SUBSTRING(nombre_item, 10) AS UNSIGNED) ASC";
                    //Esto extrae el número después de la palabra "Ejercicio" y lo convierte en un valor numérico para ordenar correctamente los ejercicios. 
                    //Solo funcionará si el formato del nombre es consistente, como "Ejercicio X".
                    $sql = mysqli_query($con, $sql);//ejecuto la consulta
                    if(mysqli_num_rows($sql) != 0)//pregunto si tiene datos
                    {
                        while ($r = mysqli_fetch_array($sql))//recorro todos los registros
                        {
                            ?>
                            <li><a href="practica_mysql_php.php?modulo=<?php echo $r['nombre_modulo']?>"><?php echo $r['nombre_item']?></a></li>
                            <?php
                        }
                    }
                    ?>



</body>
</html>

