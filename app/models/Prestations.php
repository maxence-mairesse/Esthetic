<?php

namespace app\models;
use app\utils\Database;
use PDO;
class Prestations extends CoreModels
{
    private string $name;

    private float $price;

    private int $type_id;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->type_id;
    }

    /**
     * @param int $type_id
     */
    public function setTypeId(int $type_id): void
    {
        $this->type_id = $type_id;
    }




    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price): void
    {
        $this->price = $price;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }

public function findAll(){
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `prestations`";
        $stmt=$pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_CLASS,'app\models\Prestations');
}
    public function find($id){
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `prestations` WHERE id=".$id;
        $stmt=$pdo->query($sql);
        return $stmt->fetchObject('app\models\Prestations');
    }

}