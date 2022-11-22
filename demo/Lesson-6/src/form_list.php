<?php
    $list = [];

    if($_GET['submit']) {
        $list = $_GET['fruits'];
    }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays in PHP</title>
    </head>
    <body>
        <form method="get">
            <input type="checkbox" name="fruits[]" value="Mango" <?= (in_array("Mango", $list)) ? "checked" : "" ?>/> Mango
            <input type="checkbox" name="fruits[]" value="Apple" <?= (in_array("Apple", $list)) ? "checked" : "" ?> /> Apple
            <input type="checkbox" name="fruits[]" value="Grapes" <?= (in_array("Grapes", $list)) ? "checked" : "" ?> /> Grapes
            <input type="checkbox" name="fruits[]" value="Banana" <?= (in_array("Banana", $list)) ? "checked" : "" ?> /> Banana
            <input type="submit" name="submit" value="Select">
        </form>
        <section>
            <p>Selected Fruits: </p>
            <?php if(count($list) > 0) { ?>
                <ul>
                    <?php 
                        foreach ($list as $value) {
                            echo "<li>" . $value . "</li>";
                        }
                    ?>
                </ul>
            <?php } ?>
        </section>
    </body>
</html>