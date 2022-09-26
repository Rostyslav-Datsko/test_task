<?php ?>

<div class="container py-3">
    <div class="row">
        <div class="col-lg-12 category-content">
            <?php if (isset($_SESSION['group_id'])){ unset($_SESSION['group_id']); }
                  if (isset($_SESSION['group_name'])){ unset($_SESSION['group_name']); }?>


            <form class="row g-3" method="post">
                <div class="col-md-6 offset-md-3">
                    <div class="form-floating mb-3">

                        <input type="text" name="group_name" class="form-control" id="group_name" placeholder="Name" value="<?= $_GET['group_name'] ?>">
                    </div>
                </div>

                <div class="col-md-6 offset-md-3">
                    <a href="group/update?id=<?= $_GET['id']?>"><button type="submit" class="btn btn-primary btn-lg active btn-success">update</button></a>

                </div>
            </form>

        </div>
    </div>
</div>
