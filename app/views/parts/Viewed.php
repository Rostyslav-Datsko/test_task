<div data-update="newContent.php" data-refresh-interval="0">
    <div class="row justify-content-around">
        <?php

        $viewed = (new \app\controllers\ProductController())->showViewedProducts();

        foreach ($viewed as $k => $v):?>
            <div class="col-4">
                <div class="container py-3">
                    <div class="card" style="width: 20rem;">


                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">id: <?= $viewed[$k]['id'] ?></li>
                            <li class="list-group-item">name: <?= $viewed[$k]['product_name'] ?></li>
                            <li class="list-group-item"><?= (new \app\controllers\ProductController())->showCategoryByForProductId($viewed[$k]['group_id']) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

