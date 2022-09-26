<?php

namespace app\controllers;

use app\models\Full;
use wfm\Controller;

class FullController extends Controller
{
    public function showAction()
    {
        $model_full  = new Full();
        $model_full = $model_full->get_products_with_groups();
        $this->set(['model_full' => $model_full] );

    }
}