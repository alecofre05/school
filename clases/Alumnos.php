<?php

namespace clases;

use PDO;

class Alumnos 
{
    private $tableName = 'alumnos';
    private $connPDO;
    public function __construct ()
    {
        global $connPDO;
        $this->connPDO = $connPDO;
    }
    public function insertAlumno (
        $nombre, 
        $apellidoPaterno, 
        $apellidoMaterno, 
        $curso
        ) {
    
        $query = "INSERT INTO {$this->tableName} (nombre, apellidoPaterno, apellidoMaterno, id_curso) 
        VALUES (:name, :apellido1, :apellido2, :curso)";

        $params = [
            ':name' => $nombre,
            ':apellido1' => $apellidoPaterno,
            ':apellido2' => $apellidoMaterno,
            ':curso' => $curso
        ];

        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        return $stmt->execute();
    }

    public function getAll ($search='') 
    {
        $searchCondition = empty($search) ? '' : ' WHERE a.nombre LIKE :name OR a.apellidoPaterno LIKE :apellido1 OR a.apellidoMaterno LIKE :apellido2';
        $params = [];
        if(!empty($search)) {
            $params = [ 
            ':name' => '%'.$search.'%',
            ':apellido1' => '%'.$search.'%',
            ':apellido2' => '%'.$search.'%'
            ];
        }

        $query = "SELECT a.*, CONCAT(c.nivel, c.nombre) AS curso FROM {$this->tableName} a 
        LEFT JOIN cursos c ON c.id=a.id_curso {$searchCondition}";

        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        if($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getByID ($id) 
    {
        $query = "SELECT a.*, CONCAT(c.nivel, c.nombre) AS curso FROM {$this->tableName} a 
        LEFT JOIN cursos c ON c.id=a.id_curso WHERE a.id = :id";

        $stmt = $this->connPDO->prepare($query);
        if($stmt->execute([':id'=>$id])) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function updateCurso ($id, $curso) 
    {
        $query = "UPDATE {$this->tableName} SET id_curso = :curso WHERE id = :id";
        $params = [
            ':id' => $id,
            ':curso' => $curso
        ];
        $stmt = $this->connPDO->prepare($query);
        return $stmt->execute($params);
    }

}
