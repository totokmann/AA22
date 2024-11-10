
<form method="post" action="./captura_datos_FC.php">
        <?php
        // Definir el vector (array) con los nombres de los días de la semana
        $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $primerDia = $diasSemana[0];
        $ultimoDia = $diasSemana[count($diasSemana) - 1];
        
        ?>
        <label for="primerDia">El primer día de la semana es:</label>
        <input type="text" id="primerDia" name="primerDia" value="<?php echo $primerDia; ?>" readonly>
        <br>

        <label for="ultimoDia">El último día de la semana es:</label>
        <input type="text" id="ultimoDia" name="ultimoDia" value="<?php echo $ultimoDia; ?>" readonly>
        <br><br>

        <input type="submit" value="Enviar datos">
</form>

