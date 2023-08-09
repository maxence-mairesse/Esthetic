<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Type extends CoreModels
{
private $name;
private $picture;

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function find($param){
        $id = $param['id'];

        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `type` WHERE id=".$id;
        $stmt = $pdo->query($sql);
        return $stmt->fetchObject('app\models\Type');
    }
    public function findAll(){

        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `type`";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS,'app\models\Type');
    }
}