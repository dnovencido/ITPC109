<?php
    function display_message($message) {
        echo $message;
    }

    function getGradeRemark($grade) {
        if($grade >= 75) {
            $remark = "passed";
        } else {
            $remark = "failed";
        }
        return $remark;
    }
?>