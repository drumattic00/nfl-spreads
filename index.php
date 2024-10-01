<?php
require "inc/header.inc.php";
?>

<body>
    <?php require "inc/init_pop.inc.php"; ?>

    <div class="container">
        <h1>Use Ajax in PHP</h1>

        <div class="table-responsive">
            <h2>NFL Week <?= $week ?></h2>

            <?php include "inc/table_data.inc.php"; ?>
        </div>
    </div>

    <?php require "inc/footer.inc.php" ?>


</body>

</html>