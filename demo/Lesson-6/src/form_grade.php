<?php
    include "functions.php";
    $grade_quiv = null;
    $errors = [];

    if($_POST['submit']) {
        if(!is_numeric($_POST['grade'])) {
            $errors[] = "You have entered incorrect value for a grade";
        } else {
            $grade_quiv = getGradeRemark($_POST['grade']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms in PHP</title>
    </head>
    <body>teSM
        <form method="POST">
            <label for="grade">Grade</label>
            <input type="text" name="grade" placeholder="Enter a grade" value="<?= $_POST['grade'] ?>"/>
            <label for="subject">Subject</label>
            <select name="subject" id="subject">
                <option value="Math">Math</option>
                <option value="Science">Science</option>
            </select>
            <input type="submit" name="submit">
        </form>
        <section>
            <?php if($_POST['submit']) {  ?>
                <?php if(empty($errors)) { ?>
                    <p>Your grade in <?= $_POST['subject'] ?> is <b><?= $grade_quiv ?></b></p> 
                <?php } else { ?>
                    <?php foreach ($errors as $value) { ?>
                        <p><?= $value ?></p>
                    <?php } ?>
                <?php } ?>
            <?php } else { ?>
                <p>Enter a grade for a subject.</p>
            <?php } ?>
        </section>
    </body>
</html>