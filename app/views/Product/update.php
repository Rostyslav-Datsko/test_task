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
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Name" value="<?= $_GET['product_name'] ?>">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <label for="inputState">Group</label>
                    <select name="product_group" id="product_group" class="form-control" >
                        <?php $list = (new \app\models\Group())->get_groups() ?>
                        <?php foreach ($list as $k => $v):?>
                            <option
                                <?php if ($list[$k]['name'] == (new \app\models\Group())->get_group_name_by_id($_GET['group_id'])):?> selected <?php endif; ?>
                            ><?= $list[$k]['name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="col-md-6 offset-md-3">
                    <label for="inputState">price</label>
                    <div class="form-floating mb-3">
                        <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Name" value="product_price">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <a href="product/update?id=<?= $_GET['id']?>"><button type="submit" class="btn btn-primary btn-lg active btn-success">update</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
