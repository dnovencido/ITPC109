<?php
    //String variables
    $x = "Hello World";
    // echo $x;

    //Numeric variables
    $a = 10;
    $a += 10;
    // echo $a;

    //Arrays 
    $my_array_1 = array("A", "B", "C");
    $my_array_2 = ["a", "b", "c"];
    // echo "<pre>";
    // print_r($my_array_1);
    // echo "<pre>";
    // print_r($my_array_2);

    // Print value of the array elements
    // echo $my_array_1[1] . "<br>";
    // echo $my_array_2[1];

    // 2D Arrays
    $oxo = array(
        array('x', 'o', 'o'),
        array('o', 'o', 'x'),
        array('x', 'o', '')
    );

    // echo "<pre>";
    // print_r($oxo);

    // Print value of the oxo array value
    // echo $oxo[1][1];

    // Numerically indexed arrays
    // $paper[] = "Copier";
    // $paper[] = "Inkjet";
    // $paper[] = "Laser";
    // $paper[] = "Photo";

    // echo "<pre>";
    // print_r($paper);

    //Print the value of the array elements using for loop
    // for ($i=0; $i < count($paper) ; $i++) { 
    //     echo $paper[$i] . "<br>";
    // }

    // Associative Arrays
    // $paper['copier'] = "Copier";
    // $paper['inkjet'] = "Inkjet";
    // $paper['laser'] = "Laser";
    // $paper['photo'] = "Photo";

    // echo "<pre>";
    // print_r($paper);

    // //Print the value of the array elements using foreach
    // foreach ($paper as $key => $value) {
    //     echo "The value of key is " . $key . " and the value of element is " . $value . "<br>"; 
    // }

?>