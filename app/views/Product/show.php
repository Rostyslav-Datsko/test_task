<?  ?>


<div class="container py-3">
    <div class="card" style="width: 18rem;">


        <ul class="list-group list-group-flush">
            <li class="list-group-item">id: <?= $product[0]['id'] ?></li>
            <li class="list-group-item">name: <?= $product[0]['product_name'] ?></li>
            <li class="list-group-item"><?= $group_name ?></li>
        </ul>
    </div>
</div>
<?php require APP . '/views/parts/Viewed.php';

