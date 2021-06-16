<?php

namespace classes;

use classes\BaseModel;
use PDO;

class Profesor extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'profesores';
    }

    public function insertProfesor($nombre, $apellido, $materia)
    {
        $query = "INSERT INTO {$this->tableName} (nombre, apellido, id_materias) VALUES (:name, :apellido, :materia)";
        $params = [
            ':name' => $nombre,
            ':apellido' => $apellido,
            ':materia' => $materia
        ];
        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        return $stmt->execute();
    }

}
