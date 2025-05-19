<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <?php
    
    // String operator

    // $a = "Hello";
    // $b = "World";
    // $c = $a . " " . $b;
    // echo $c;

    // Arithmetic operator

    // echo 1 + 2; // Addition
    // echo 2 - 1; // Subtraction
    // echo 2 * 3; // Multiplication
    // echo 6 / 2; // Division
    // echo 10 % 3; // Modulus
    // echo 10 ** 3; // Exponentiation

    //echo 1 + 2 * 4; // MDAS output 9
    //echo (1 + 2) * (4 - 2); // parenthesis is for priority output is 6 

    // Assignment operator

    // $a = 2;
    // $a += 4; // += will add 4 to the value of a

    // echo $a;

    // $a = 2;
    // $a *= 4; // *= will multiply 4 to the value of a

    // echo $a;

    // Comparison operator

    // $a = 2;
    // $b = 2;
    // if ($a == $b) {  // == equal to
    //     echo "This statement is true";
    // }

    // $a = 2;
    // $b = "2"; // 2 is a string
    // if ($a == $b) {  // == equal to
    //     echo "This statement is true";
    // }

    // $a = 2;
    // $b = 2; // 2 is a string
    // if ($a === $b) {  // === equal to and same type
    //     echo "This statement is true";
    // }

    // $a = 2;
    // $b = 4; 
    // if ($a != $b) {  // != not equal to
    //     echo "This statement is true";
    // }

    // $a = 5;
    // $b = 4; 
    // if ($a < $b) {  // < less than
    //     echo "This statement is true";
    // }

    // $a = 5;
    // $b = 6; 
    // if ($a > $b) {  // > greater than 
    //     echo "This statement is true";
    // }


    // Logical operator

    // $a = 4;
    // $b = 4; 
    // $c = 2;
    // $d = 6; 

    // if ($a == $b and $c == $d) {  // and both conditions are true
    //     echo "This statement is true";
    // }

    // $a = 4;
    // $b = 4; 
    // $c = 2;
    // $d = 6; 

    // if ($a == $b or $c == $d) {  // or one of the conditions is true
    //     echo "This statement is true";
    // }

    // $a = 4;
    // $b = 4; 
    // $c = 2;
    // $d = 6; 

    // if ($a == $b || $c == $d && $a == $c) { // or is || and is &&
    //     echo "This statement is true";      
    // }

    // $a = 4;
    // $b = 4; 
    // $c = 2;
    // $d = 6; 

    // if ($a == $b || $c == $d && $a == $c) { // check && first then || then output is true
    //     echo "This statement is true";      // pipe is the last determiner
    // }

    // Increment and Decrement operator

    // $a = 1;
    // echo ++$a; // pre-increment it will increase the value of a by 1

    // $a = 1;
    // echo --$a; // pre-decrement it will decrease the value of a by 1


    // $a = 1;
    // echo $a++; // post-increment it will echo a and then increase the value of a by 1
    // echo $a;

    // $a = 1;
    // echo $a--; // post-decrement it will echo a and then decrease the value of a by 1
    // echo $a;


    // Control structures in PHP 
    $bool = true;
    $a = "1";
    $b = 4;

    // This is a match statement
    // $result = match ($a) { // This is a match expression
    //     1, 3, 5 => "Variable is equal to 1!",
    //     2 => "Variable is equal to 2!",
    //     default => "None were a match!",
    // };

    // echo $result;

    // if ($a === 1) { // This === is a strict comparison operator whether its a string or integer
    //     echo "the variale is equal to 1";
    // }

    // This is a switch statement
    // switch ($a) {
    //     case 1:
    //     echo "the first case is correct";
    //     break;
    //     case 2:
    //     echo "the second case is correct";
    //     break;
    //     case 3:
    //     echo "the third case is correct";
    //     break;
    //     default:
    //     echo "None of the conditions were true";
    // }

    // if ($a == 1) { 
    //     echo "first condition is true"; 
    // } else if ($a == 2) {
    //     echo "second condition is true";
    // } else if ($a == 3) {
    //     echo "third condition is true";
    // }
    // This is a if else statement
    // if ($a < $b && !$bool) { // if $a is less than $b and $bool is false
    //     echo "first condition is true"; 
    // } else if ($a < $b && $bool) { // if $a is less than $b and $bool is true
    //     echo "second condition is true"; // this will be executed
    // }

    // ?>

    <!-- <main> // this is a form handler
        &amp 
        <form action="formhandler.php" method="post">
            <label for="firstname">First Name?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favoritepet">Favorite Pet?</label>
            <select id="favoritepet" name="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main> -->
   
    
        <!-- <p> Hi! My name is  
    <?php
    
        // single line comment
        // echo "This is a test page.";
        

        // multiple line comment
        /*
            echo "This is a multiple line comment.";
            echo "awesome";
            echo"This is also a paragraph";
        */

        // This is how you declare a variable in PHP
        //$fullName = "John Doe";
        //echo $fullName;
        
        // This is how you declare a data type in PHP
        //$string = ""; // String
        //$int = 0; // Integer
        //$float = 0; // Float
        //$bool = false; // Boolean 1 true or 0 false

        // This is how you declare an array in PHP
        //$names = ["Jae", "Chesca", "Tala"]; // Array type
        //$object = null;

        //Object type
        //$object = new Car();
        //echo $names[1]; // Display the second element of the array


    ?>, and Im' learning PHP!
    </p> 

    multiple line comment in html--> 

    <?php
    // This is how you declare Pre-defined or superglobal variables in PHP
    //$_SERVER[""]; // Returns the filename of the currently executing script
    //$_GET[""]; // An associative array of variables passed to the current script via URL parameters
    //$_POST[""]; // An associative array of variables passed to the current script via HTTP POST method
    //$_REQUEST[""]; // An associative array of variables passed to the current script via both GET and POST methods
    //$_FILES[""]; // An associative array of items uploaded to the current script via HTTP POST method
    //$_COOKIE[""]; // An associative array of variables passed to the current script via HTTP cookies
    //$_SESSION[""]; // An associative array of session variables available to the current script
    //$_ENV[""]; // An associative array of environment variables

    /*echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    */

    // if you want to get data from database use get method
    //echo $_GET["name"]; // go to browser http://localhost/MyWebsite/index.php?name=tala

    // if you submit a data to database use post method
    //echo $_POST["name"]; // go to browser http://localhost/MyWebsite/index.php?name=tala
    
    // if you submit a data to database use request method
    //echo $_REQUEST["name"]; // go to browser http://localhost/MyWebsite/index.php?name=tala

    //if you want to upload a file use file method
    //echo $_FILES["name"];

    //shows the actual value stored in the cookie by the browser in 7bit
    //echo $_COOKIE["name"]; // go to browser http://localhost/MyWebsite/index.php?name=tala

    /* The session support allows you to store data between requests in the $_SESSION
    superglobal array */

    //$_SESSION["username"] = "Krossing";
    //echo $_SESSION["username"];

    /* $_ENV arrays store environment-related data, including server configuration details
    and custom environment variables */
    //$_ENV[];
    
    

    ?>

</body>
</html>