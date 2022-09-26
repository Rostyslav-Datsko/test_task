<?php ?>

<div class="container py-3">
    <div class="row">
        <div class="col-lg-12 category-content">
            <?php if (isset($_SESSION['product_name'])){ unset($_SESSION['product_name']); }
                if (isset($_SESSION['product_category'])){ unset($_SESSION['product_category']); }
                if (isset($_SESSION['product_price'])){ unset($_SESSION['product_price']); } ?>

            <form class="row g-3" method="post">
                <div class="col-md-6 offset-md-3">
                    <label for="inputState">Product name</label>
                    <div class="form-floating mb-3">
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Name" value="">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <label for="inputState">Group</label>
                    <select name="product_group" id="product_group" class="form-control" >
                        <?php $list = (new \app\models\Group())->get_groups() ?>
                        <?php foreach ($list as $k => $v):?>
                            <option ><?= $list[$k]['name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="col-md-6 offset-md-3">
                    <label for="inputState">price</label>
                    <div class="form-floating mb-3">
                        <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Name" value="">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <a href="product/add11"><button type="submit" class="btn btn-primary btn-lg active btn-success">add</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
