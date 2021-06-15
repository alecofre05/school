<?php

namespace clases;

use PDO;


class MateriaTieneProfesor 
{
    private $tableName = 'materia_tiene_profesor';
    private $connPDO;
    public function __construct ()
    {
        global $connPDO;
        $this->connPDO = $connPDO;
    }

public function getProfesoresByMateria($id) {
    $query = "SELECT p.* FROM {$this->tableName} mtp INNER JOIN profesores p ON p.id=mtp.id_profesor WHERE id_materia=:id";

    $stmt = $this->connPDO->prepare($query);
        if($stmt->execute([':id'=>$id])) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
}


}