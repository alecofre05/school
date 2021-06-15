<h3>Agregar profesor</h3>
<form action="/<?=ROOTFOLDER?>/views/profesores/insertar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <select name="materia" id="materia">
                <?php
                if (!empty($materias)) {
                ?>
                <option value="">Seleccione la materia</option>
                <?php
                      foreach ($materias as $materia) {
                ?>
                        <option value="<?=$materia['id']?>"><?=$materia['nombre']?></option>
                <?php
                }  
                } else {
                        ?><option value="">No tiene materias aun</option>
                <?php
                }
                ?>
        </select><br>
        <input type="submit" value="Enviar">
</form>
