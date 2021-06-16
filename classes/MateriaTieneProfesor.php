<?php

namespace classes;

use PDO;


class MateriaTieneProfesor extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'materia_tiene_profesor';
    }

    public function getProfesoresByMateria($id)
    {
        $query = "SELECT p.* FROM {$this->tableName} mtp INNER JOIN profesores p ON p.id=mtp.id_profesor WHERE id_materia=:id";

        $stmt = $this->connPDO->prepare($query);
        if ($stmt->execute([':id' => $id])) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }


}