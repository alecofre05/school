<?php


namespace classes;


class BaseModel
{
    protected $tableName;
    protected $connPDO;

    public function __construct()
    {
        global $connPDO;
        $this->connPDO = $connPDO;
    }
}