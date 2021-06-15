<h3>Buscar curso</h3>
<form action="/<?=ROOTFOLDER?>/views/cursos/curso.php" method="get">
        <select name="curso" id="curso">
                <?php
                if(!empty($cursos)) {
                ?>
                <option value="">Seleccione el curso</option>
                <?php
                      foreach($cursos as $curso) {
                ?>
                        <option value="<?=$curso['id']?>"><?=$curso['nivel'].$curso['nombre']?></option>
                <?php
                }  
                } else {
                        ?><option value="">No tiene cursos aun</option>
                <?php
                }
                ?>
        </select><br>
        <input type="submit" value="Enviar">
</form>
