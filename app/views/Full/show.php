<? ?>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">group</th>
                <th scope="col">price</th>
            </tr>
            </thead>
            <tbody id="mytable">
            <?php foreach ($model_full as $k => $v):?>

                <tr>

                    <th scope="col"><?= $v['id'];  ?></th>

                    <th scope="col"><a href="product/show?id=<?= $v['id'] ?> " class="text show" data-id="<?= $v['product_name'] ?>"><?= $v['product_name'] ?></a></th>
                    <th scope="col"><a href="group/showProducts?id=<?=(new \app\models\Group())->get_group_id_by_name($v['name'])?>" class="text show" data-id="<?= $v['name'] ?>" ><?= $v['name']; ?></a></th>
                    <th scope="col"><?= $v['price'];  ?></th>
                    <th scope="col"><a href="group/delete?id=<?=$v['id']?>" class="text how text-danger" data-id="<?= $v['product_name'] ?>" >Delete</a></th>
                    <th scope="col"><a href="product/update?id=<?=$v['id']?>&product_name=<?= $v['product_name']?>&product_price=<?= $v['price']?>&group_id=<?= $v['group_id']?>" class="text how text-primary">Update</a></th>

                </tr>


            <?php endforeach ?>

            </tbody>
        </table>

        <div class="p-2 bd-highlight">
            <a href="product/add" class="btn btn-primary btn-lg active btn-success" >Add product</a>
        </div>

    </div>
<?php require APP . '/views/parts/Viewed.php';