<?php

namespace clases;

use PDO;

class Profesor 
{
    private $tableName = 'profesores';
    private $connPDO;
    public function __construct ()
    {
        global $connPDO;
        $this->connPDO = $connPDO;
    }

    public function insertProfesor ($nombre, $apellido, $materia) 
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
