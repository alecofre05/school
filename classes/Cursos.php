<?php

namespace classes;

use classes\BaseModel;
use PDO;

class Cursos extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'cursos';
    }

    public function insertCurso($nivel, $nombre)
    {
        $query = "INSERT INTO {$this->tableName} (nivel, nombre) VALUES (:nivel, :nombre)";
        $params = [
            ':nivel' => $nivel,
            ':nombre' => $nombre
        ];
        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        return $stmt->execute();
    }

    public function getAll($search='')
    {
        $query = "SELECT * FROM cursos ORDER BY nivel ASC";
        $stmt = $this->connPDO->prepare($query);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getByID($id)
    {
        $query = "SELECT * FROM {$this->tableName} WHERE id=:id";
        $stmt = $this->connPDO->prepare($query);
        if ($stmt->execute([':id' => $id])) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getAlumnosByID($id)
    {
        $query = "SELECT * FROM alumnos WHERE id_curso=:id";
        $stmt = $this->connPDO->prepare($query);
        if ($stmt->execute([':id' => $id])) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }
}
