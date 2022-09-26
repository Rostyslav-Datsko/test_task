<?php

namespace app\controllers;

use app\models\Group;
use app\models\Product;
use wfm\Controller;

class GroupController extends Controller
{
    public function showGroupsAction()
    {
        $model_group  = new Group();
        $groups = $model_group->get_groups();
        $this->set(['groups' => $groups] );

    }

    public function showProductsAction()
    {
        $products  = new Group();
        $products = $products->get_products_from_category($_GET['id']);
        $this->set(['products' => $products] );
    }

    public function indexAction()
    {

        $model_group  = new Group();
        $model_products  = new Product();

        $groups = $model_group->get_groups();
        var_dump($groups);
        $products = $model_products->get_products();

        $this->set(['products' => $products, 'groups' => $groups] );
    }

    public function addAction()
    {
        if ($_POST && $_POST['group_name'] != ''){
            $model_group  = new Group();
            $model_group->create_group($_POST['group_name']);
            $this->redirect('/group/add');
        }

    }

    public function deleteAction()
    {
        $model_group  = new Group();
        $model_group->delete_group($_GET['id']);
        $this->redirect('/');

    }

    public function updateAction()
    {
        if ($_POST && $_POST['group_name'] != ''){
            $model_group  = new Group();
            $model_group->update_group($_POST['group_name'],$_GET['id']);
            $this->redirect('/group/showGroups');
        }

    }


}