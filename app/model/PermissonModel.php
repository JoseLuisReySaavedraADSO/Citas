<?php

namespace Adso\model;

use Adso\libs\Model;

class PermissonModel extends Model
{
    private $tabla = "permissions";

    function __construct()
    {
        parent::__construct();
    }

    function getPermisson(){
        $this -> connection = $this -> db -> getConnection();
        $data = $this -> select($this -> tabla);
        $this -> connection = $this -> db -> closConnection();

        return $data;
    }

    function getId($permisos){
        $this -> connection = $this -> db -> getConnection();
        $data = $this -> getDataById( $this -> tabla, $permisos);
        $this -> connection = $this -> db -> closConnection();
        return $data;
    }

    function storage($permisos){
        $this -> connection = $this -> db -> getConnection();
        $data = $this -> insert($this -> tabla, $permisos);
        $this -> connection = $this -> db -> closConnection();
    }
    function updatePermisson($permisos){
        $this -> connection = $this -> db -> getConnection();
        $data = $this -> update( $this -> tabla, $permisos);
        $this -> connection = $this -> db -> closConnection();
        return $data;
    }
    function deletePermisson($id)
    {
        $this->connection = $this->db->getConnection();
        $data = $this->delete($this->tabla, $id);
        $this->connection = $this->db->closConnection();
    }

}
