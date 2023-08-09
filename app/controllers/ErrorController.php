<?php

namespace app\controllers;

class ErrorController extends CoreControllers
{
public function error404(){
    http_response_code(404);
    $this->show('error404');
}
}