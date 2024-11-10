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