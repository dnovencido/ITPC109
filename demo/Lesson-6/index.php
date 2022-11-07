<?php
    $bank_balance = 250;
    $savings = 100;
    if($bank_balance < 100) {
        $money = 1000;
        $bank_balance += $money; 
    } elseif ($bank_balance > 200) {

    } else {
        $savings += 50;
        $bank_balance -= 50;
        echo $savings; // This will output 150
        echo $bank_balance; // This will output 100
    }
?> 

