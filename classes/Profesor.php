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

    public function insertProfesor($nombre, $apellido)
    {
        $query = "INSERT INTO {$this->tableName} (nombre, apellido) VALUES (:name, :apellido)";
        $params = [
            ':name' => $nombre,
            ':apellido' => $apellido
        ];
        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        $ret = $stmt->execute();
        if(!$ret) {
            var_dump($stmt->errorInfo());
            die();
        }
        return $ret;
    }

    public function getAll($search = '')
    {
        $searchCondition = empty($search) ? '' : ' WHERE p.nombre LIKE :name OR p.apellido LIKE :apellido';
        $params = [];
        if (!empty($search)) {
            $params = [
                ':name' => '%' . $search . '%',
                ':apellido' => '%' . $search . '%',
            ];
        }

        $query = "SELECT p.* FROM {$this->tableName} p {$searchCondition}";

        $stmt = $this->connPDO->prepare($query);
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getByID($id)
    {
        $query = "SELECT p.* FROM {$this->tableName} p WHERE p.id = :id";

        $stmt = $this->connPDO->prepare($query);
        if ($stmt->execute([':id' => $id])) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return [];
    }


}
