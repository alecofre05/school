<?php

namespace clases;

use PDO;
use MateriaTieneProfesor;

class Materias 
{
    private $tableName = 'materias';
    private $connPDO;
    protected $materiaTieneProfesor;
    public function __construct ()
    {
        global $connPDO;
        $this->connPDO = $connPDO;
        $this->materiaTieneProfesor = new MateriaTieneProfesor();
    }

    public function insertMateria ($nombre) 
    {
        $query = "INSERT INTO {$this->tableName} (nombre) VALUES (:name)";
        $params = [
            ':name' => $nombre
        ];
        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }

        return $stmt->execute();
    }

    public function getAll () 
    {
        $query = "SELECT * FROM {$this->tableName} ORDER BY nombre ASC";
        $stmt = $this->connPDO->prepare($query);
        if($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getByID ($id)
    {
        $query = "SELECT * FROM {$this->tableName} WHERE id=:id";
        $stmt = $this->connPDO->prepare($query);
        if($stmt->execute([':id'=>$id])) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getProfesoresByID ($id)
    {
        return $this->materiaTieneProfesor->getProfesoresByMateria($id);
    }
}
