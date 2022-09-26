<?php

use wfm\View;

/** @var $this View */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CRUD FROM API</title>

    <link href="<?= PATH ?>/assets/css/index.css" rel="stylesheet">
    <base href="/">
</head>
<body>

<?php $this->getPart('/parts/Menu'); ?>

<div class="container">
    <?= $this->content  ?>
</div>


<div>
</body>
<?php //$this->getPart('/parts/Viewed'); ?>
</html>




