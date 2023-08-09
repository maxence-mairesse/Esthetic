<?php

namespace app\controllers;

use app\models\Prestations;

class MainController extends CoreControllers
{
    public function home(): void
    {

        $this->show('home');
    }
    public  function prestations($param): void
    {

        $this->show('prestations');
    }
    public  function prestationDetail($param): void
    {

       $id=$param['id'];



        $this->show('prestationDetail',$id);
    }

}