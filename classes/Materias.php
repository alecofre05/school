<?php

namespace classes;


use PDO;
use classes\BaseModel;
use classes\MateriaTieneProfesor;

class Materias extends BaseModel
{
    protected $materiaTieneProfesor;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'materias';
        $this->materiaTieneProfesor = new MateriaTieneProfesor();
    }

    public function insertMateria($nombre)
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

    public function getAll($search='')
    {
        $query = "SELECT * FROM {$this->tableName} ORDER BY nombre ASC";
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

    public function getProfesoresByID($id)
    {
        return $this->materiaTieneProfesor->getProfesoresByMateria($id);
    }
}
