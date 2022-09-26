<?php

namespace app\models;

use wfm\Model;

class Full extends Model
{
    public function get_products_with_groups(): array
    {
        $all = mysqli_query($this->conect(),"SELECT products.*, groups.name FROM `groups` RIGHT JOIN `products` ON groups.id=products.group_id;");
        $all = $this->assoc($all);
        return $all;
    }
}