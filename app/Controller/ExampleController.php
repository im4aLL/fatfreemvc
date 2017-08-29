<?php

namespace App\Controller;

use App\Model\ExampleModel;

class ExampleController extends Controller
{
    public function index()
    {
        $model = new ExampleModel($this->f3);
        $this->f3->set('data', $model->all());
        
        echo \Template::instance()->render('views/Example.html');
        
        return true;
    }
}

