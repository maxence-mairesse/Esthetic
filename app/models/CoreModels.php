<?php

namespace app\models;

class CoreModels
{
protected int $id;
public function getId(): int
{
    return $this->id;
}/**
 * @param int $id
 */
public function setId(int $id): void
{
    $this->id = $id;
}


}