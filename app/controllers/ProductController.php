<?php

namespace app\controllers;

use app\models\Group;
use app\models\Product;
use wfm\Controller;


class ProductController extends Controller
{
    public function showAction()
    {

        $model_product  = new Product();
        $product = $model_product->get_product($_GET['id']);
        $model_group = new Group();
        Product::add_to_viewed($product[0]['id']);
        $group = $model_group->get_group($product[0]['group_id']);
        $this->set(['product' => $product, 'group_name' => $group[0]['name']] );

    }

    public function deleteAction()
    {
        $model_group  = new Product();
        $model_group->delete_product($_GET['id']);
        $this->redirect('/');

    }

    public function showCategoryByForProductId($id)
    {
        $model_group = new Group();
        $group = $model_group->get_group($id);
        return $group[0]['name'];
    }
    public static function showViewedProducts()
    {
        $model_product  = new Product();
        $viewed_product = $model_product->get_viewed_products();

        return $viewed_product;
    }

    public function addAction()
    {
        if ($_POST){
            $model_product  = new Product();
            $group_id = (new \app\models\Group())->get_group_id_by_name($_POST['product_group']);
            $model_product->create_product($_POST['product_name'],$group_id,$_POST['product_price']);
            $this->redirect('/product/add');

        }

    }

    public function updateAction()
    {
        if ($_POST)
        {
            $model_product  = new Product();
            debug($_POST);
            $group_id = (new \app\models\Group())->get_group_id_by_name($_POST['product_group']);
            debug($group_id);
            $model_product->update_product($_GET['id'],$_POST['product_name'],$group_id,$_POST['product_price']);
            $this->redirect('/group/showProducts?id=$group_id');
        }
    }
}