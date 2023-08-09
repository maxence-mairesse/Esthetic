<?php

    namespace app\controllers;

    use app\models\Prestations;
    use app\models\Type;

    class CoreControllers
    {
    protected function show($viewName,$id=0, $viewData = []): void
    {
        global $router;
        $absoluteURL = $_SERVER['BASE_URI'];

        $prestationModel= new Prestations();
        $typeModel = new  Type();

        $types = $typeModel->findAll();
        $prestations = $prestationModel->findAll();

        $viewData['types']=$types;
        $viewData['prestations']=$prestations;

  
        require_once __DIR__ . '/../view/header.tpl.php';
        require_once __DIR__ . '/../view/'.$viewName.'.tpl.php';
        require_once __DIR__ . '/../view/footer.tpl.php';
    }
    }