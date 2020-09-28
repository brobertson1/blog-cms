<?php
    ini_set('display_errors', 1); //show errors for debugging


    $firstName = "Jane";                        //String type variable
    $lastName = "Doe";                          //String type variable
    $age = 35;                                  //Integer type variable
    $married = true;                            //Boolean type variable
    $childrenNames = array('Alice', 'Bob');     //Array type variable
    $fullName = $fullName . " ". $lastName;     //concatenation operator
    $dogYear = $age/7;                          //Arithmetic Operator
    $isAdult = $dogYears > 4;                   //Comparison operator
    $isSettled = $isAdult and $married;         //Integer type variable

    function getFullName($firstName, $lastName){    //function name
        return $firstName . " " . $lastName;        //Returned value
    }

    $fullName = getFullName($firstName, $lastName); //Using variables
    $fullName = getFullName("Alice", "Doe");        //Using values

    function getIsSettled($age, $married) {     //Function name
        $dogYears = $age/7;
        $isAdult = $dogYears > 4;
        $isSettled = $isAdult and $married;
        return $isSettled;                      //Returned value
    }

    echo $fullName;

    if ($isSettled) {
        echo $fullName . "is settled."; 
    } else {
        echo $fullName . "is not settled.";
    }
    
    foreach($childrenNames as $childName) {
        echo "<li>" . $childName . "</li>";
    }
    


?>

