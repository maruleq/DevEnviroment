<?php
include __DIR__ . '/header.php';
?>
<div>
    <?php
    echo '<h1>All available enviroment variables :</h1>';
    var_dump($_ENV);
    ?>
</div>

<?php
include __DIR__ . '/footer.php';