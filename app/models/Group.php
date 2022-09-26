<?php

namespace app\models;

use wfm\Model;

class Group extends Model
{



    public function get_groups (): array
    {
        $groups = mysqli_query($this->conect(),"SELECT * FROM `groups`");
        $groups = $this->assoc($groups);
        return $groups;
    }

    public function get_group($id)
    {
        $group = mysqli_query($this->conect(),"SELECT * FROM `groups` WHERE id = '{$id}'");
        $group = $this->assoc($group);
        return $group;
    }

    public function get_products_from_category($category_id): array
    {
        $products = mysqli_query($this->conect(),"SELECT * FROM `products` WHERE group_id = '{$category_id}'");
        $products = $this->assoc($products);
        return $products;
    }


    public function create_group ( $value )
    {
        mysqli_query($this->conect(),"INSERT INTO `groups` (`id`, `name`) VALUES (NULL, '{$value}')");

    }

    public function delete_group ($id)
    {
        mysqli_query($this->conect(), "DELETE FROM `groups` WHERE `groups`.`id` = {$id}");
    }

    public function update_group($name,$id)
    {
        mysqli_query($this->conect(), "UPDATE `groups` SET `name` = '{$name}' WHERE `groups`.`id` = {$id};");

    }

    public function get_group_id_by_name($id)
    {
        $id = mysqli_query($this->conect(),"SELECT groups.id  FROM `groups` WHERE groups.name LIKE '{$id}'");
        $id = $this->assoc($id);

        return $id[0]['id'];

    }

    public function get_group_name_by_id($name)
    {
        $name = mysqli_query($this->conect(),"SELECT groups.name  FROM `groups` WHERE groups.id LIKE '{$name}'");
        $name = $this->assoc($name);

        return $name[0]['name'];

    }



}