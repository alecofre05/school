<h3>Buscar Materias</h3>
<form action="/<?=ROOTFOLDER?>/views/materias/materia.php" method="get">
        <select name="materia" id="materia">
                <?php
                if(!empty($materias)) {
                ?>
                <option value="">Seleccione la materia</option>
                <?php
                      foreach($materias as $materia) {
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
