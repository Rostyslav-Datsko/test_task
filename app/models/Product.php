<?php

namespace app\models;

use wfm\Model;

class Product extends Model
{
    public function get_product($id)
    {
        $product = mysqli_query($this->conect(),"SELECT * FROM `products` WHERE id = '{$id}'");
        $product = $this->assoc($product);
        return $product;
    }

    public function get_products ()
    {
        $products = mysqli_query($this->conect(),"SELECT * FROM `products`");
        $products = $this->assoc($products);
        return $products;
    }

    public function delete_product ($id)
    {
        mysqli_query($this->conect(), "DELETE FROM `products` WHERE `products`.`id` = {$id}");
    }


    public static function add_to_viewed($id)
    {
        $viewed = self::get_viewed_ids();
        if (!$viewed){
            setcookie('viewed', $id, time() +3600*24*30, '/');
        } else {
            if (!in_array($id, $viewed)){
                if (count($viewed) >= 3){
                    array_shift($viewed);
                }
                $viewed[] = $id;
                $viewed = implode(',', $viewed);
                setcookie('viewed', $viewed, time() +3600*24*30, '/');
            }
        }
    }

    public static function get_viewed_ids(): array
    {

        $viewed = $_COOKIE['viewed'] ?? '';
        if ($viewed){
            $viewed = explode(',',$viewed);
        }
        if (is_array($viewed)) {
            $viewed = array_slice($viewed,  0, 3);
            $viewed = array_map('intval', $viewed);
            return $viewed;
        }

        return [];
    }

    public function get_viewed_products(): array
    {
        $viewed = self::get_viewed_ids();
        if ($viewed) {
            $viewed = implode(',', $viewed);
            $viewed =  mysqli_query($this->conect(),"SELECT * FROM `products` WHERE id in ({$viewed})");
            $viewed = $this->assoc($viewed);
            return $viewed;

        }
        return [];
    }


    public function create_product ( $product_name, $group_id, $price)
    {

        mysqli_query($this->conect(),"INSERT INTO `products` (`id`, `product_name`, `group_id`, `price`) 
                                            VALUES (NULL, '{$product_name}', '{$group_id}', '{$price}');");

    }

    public function update_product($id,$product_name,$group_id,$price)
    {
        mysqli_query($this->conect(), "UPDATE `products` SET `product_name` = '{$product_name}', `group_id` = '{$group_id}', `price` = '{$price}' WHERE `products`.`id` = {$id};");

    }





}