

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>

        </tr>
        </thead>
        <tbody id="mytable">
        <?php foreach ($groups as $k => $v):?>

            <tr>

                <th scope="col"><?= $v['id'];  ?></th>

                <th scope="col"><a href="group/showProducts?id=<?=$v['id']?>" class="text show" data-id="<?= $v['name'] ?>" ><?= $v['name']; ?></a></th>
                <th scope="col"><a href="group/delete?id=<?=$v['id']?>" class="text how text-danger" data-id="<?= $v['name'] ?>" >Delete</a></th>
                <th scope="col"><a href="group/update?id=<?=$v['id']?>&group_name=<?= $v['name'] ?>" class="text how text-primary">Update</a></th>

            </tr>


        <?php endforeach ?>

        </tbody>
    </table>

    <div class="p-2 bd-highlight">
        <a href="group/add" class="btn btn-primary btn-lg active btn-success" >Add group</a>
    </div>
</div>
<?php require APP . '/views/parts/Viewed.php';