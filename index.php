<?php
declare(strict_types=1); // This is a strict type declaration 1 = true
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Website</title>
</head>
<body>
    <?php
    
    // String operator

    // $a = "Hello";
    // $b = "World";
    // $c = $a . " " . $b; // Concatenation operator
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
    //$bool = true;
    //$a = "1";
    //$b = 4;

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
   

    
    <!-- <form action="<?php echo htmlspecialchars($_SERVER
    ["PHP_SELF"]); ?>" method="POST">
        <input type="number" name="num01" placeholder="Number one" required>
        <select name="operator"> 
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="Number two" required>
        <button>Calculate</button>
    </form> -->
    
    
    <?php
    // This is a Calculator in PHP

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Grab data from the form
    //     $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT); // Sanitize the input
    //     $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT); 
    //     $operator = htmlspecialchars($_POST["operator"]); // Sanitize the input

    //     // Error Handlers
    //     $errors = false;

    //     if (empty($num01) || empty($num02) || empty($operator)) { // Check if any field is empty
    //         echo "<p class='calc-error'>Fill in all fields!</p>"; // Display error message
    //         $errors = true;
    //     }
    //     if (!is_numeric($num01) || !is_numeric($num02)) { // Check if the inputs are numbers
    //         echo "<p class='calc-error'>Only write numbers!</p>";
    //         $errors = true;
    //     }

    //     //Calculate the numbers if no errors
    //     if (!$errors) {
    //         $value = 0; // Initialize the value variable or default value

    //         switch ($operator) {
    //             case "add":
    //                 $value = $num01 + $num02;
    //                  break;
    //             case "subtract":
    //                 $value = $num01 - $num02;
    //                 break;
    //             case "multiply":
    //                 $value = $num01 * $num02;
    //                 break;
    //             case "divide":
    //                 $value = $num01 / $num02;
    //                 break;
    //             default:
    //                 echo "<p class='calc-error'>Something went wrong!</p>";
    //         }

    //         echo "<p class='calc-result'>Result = " .
    //         $value . "</p>";
    //     }
    // }
    
    // Arrays in PHP

    //$fruits = [
    //    "Apple", // 0
    //    "Banana", // 1
    //    "Mango", // 2
    //    "Grapes" // 3
    //];
    
    //unset($fruits[1]); // built-in function in php to remove the second element of the array
    //array_splice($fruits, 0, 2); // built-in function in php to remove the first two elements of the array

    //echo $fruits[1]; // Display the second element of the array

    // $tasks = [ // Associative array
    //     "Dishwashing"   => "Jae",
    //     "Sleeping"      => "Chesca",
    //     "Playing"       => "Tala"
    // ];

    //echo $tasks["Dishwashing"]; // Display the value of the key "Dishwashing"
    //print_r($tasks); // Display the array in a readable format
    //echo count($tasks); // Count the number of elements in the array

    //sort($tasks); // Sort the array in ascending order
    //print_r($tasks); // Display the sorted array

    // $fruits = [
    //    "Apple", // 0
    //    "Banana", // 1
    //    "Mango", // 2
    //    "Grapes" // 3
    // ];

    // array_push($fruits, "Mango"); // Add a new element to the end of the array
    // print_r($fruits); // Display the array in a readable format

    // $tasks["Eating"] = "Muriel"; // Add a new key-value pair to the array
    // print_r($tasks); // Display the array in a readable format

    // $fruits = [
    //     "Apple",
    //     "Banana",
    //     "Mango"];
    //$test = ["Strawberry" , "Orange"];  // Array to be added
    
    //array_splice($fruits, 2, 0, "Grapes"); // Add "Grapes" at index 2
    // array_splice($fruits, 2, 0, $test); // Add Strawberry and Orange at index 2
    // print_r($fruits);

    // This is a multidimensional array

    // $food = [
    //     array("Apple", "Grapes"),
    //     "Banana",
    //     "Mango"]
    //     ;

    //     echo $food[0][1]; // Display the second element of the first array

    // $food = [
    //     "fruits" => array("Apple","Banana","Cherry"),
    //     "meat" => array("Chicken","Pork","Fish"),
    //     "vegetables" => array("Cucumber","Carrot","Potato"),
    // ];

    // echo $food["vegetables"][0]; // Display the first element of the vegetables array

    // Built-in functions in PHP

    //$string = "Hello World!"; // String
    //$number = -5.5; // Number
    // $array = [
    //     "Apple",
    //     "Banana",
    //     "Mango"
    // ];

    // $array2 = [
    //     "Grapes",
    //     "Cherry",
    //     "Strawberry"
    // ];

    //echo strlen($string); // Get the length of the string
    //echo strpos($string, "o"); // Get the position of the first occurrence of "o" in the string
    //echo str_replace("World!", "Daniel", $string); // Replace "World!" with "Daniel" in the string
    //echo strtolower($string); // Convert the string to lowercase
    //echo strtoupper($string); // Convert the string to uppercase
    //echo substr($string, 2, -2); // Get a substring of the string starting from index 2 and length 2
    //print_r(explode(" ", $string)); // Split the string into an array using space as a delimiter
    
    //echo abs($number); // Get the absolute value of the number
    //echo round($number); // Round off the number to the nearest integer
    //echo pow(2, 3); // Get the power of 2 to the power of 3
    //echo sqrt(16); // Get the square root of 16
    //echo rand(1, 100); // Get a random number between 1 and 100

    //echo count($array); // Get the number of elements in the array
    //echo is_array($array); // Check if the variable is an array
    //echo array_push($array, "Kiwi"); // Add "Kiwi" to the end of the array
    //echo array_push($array, "Kiwi"); // Add "Kiwi" to the end of the array
    //print_r($array); // Display the array in a readable format

    //array_pop($array); // Remove the last element of the array
    //print_r($array); // 

    //print_r(array_reverse($array)); // Reverse the array

    //print_r(array_merge($array, $array2)); // Merge two arrays

    //echo date("Y-m-d H:i:s");  // Get the current date and time
    //$date = "2025-05-22 13:00:00"; // Example date
    //echo time(); // Get the current timestamp
    //echo strtotime($date); // Convert the date to a timestamp
    ?> 
    
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
    
    // User-defined functions in PHP 

    // function sayHello($name, $lastname, $pet) { // Function to say hello
    //     return "Hello " . $name . " " . $lastname."! His Favourite pet is ".$pet; // Concatenate the string with the name
    // }

    // $test = sayHello("Daniel","Craig","Dog"); // Call the function
    // echo $test; // Display the result of the function

    // function sayHello($name = "Basse") { // default value of the parameter is Basse
    //     return "Hello " . $name . "!";
    // }

    // $test = sayHello("Daniel"); // Call the function with the parameter
    // echo $test;

    // Type declaration in PHP

    // function sayHello(string $name) { // Type declaration
    //     return "Hello " . $name . "!"; // Concatenate the string with the name
    // }

    // $test = sayHello("123"); // Call the function with the parameter
    // echo $test; //  Display the result of the function
    
    // function calculator(int $num01, int $num02) {
    //     $result = $num01 + $num02; // Add the two numbers
    //     return $result; // Return the result
    // }

    // $test = calculator(2, 5); // Call the function with the parameters
    // echo $test; // Display the result of the function

    // $test = "Daniel";
    // function calculator(int $num01, int $num02) {
    //     global $test; // Use the global variable
    //     $result = $num01 + $num02; 
    //     return $test; // Return the result
    // }

    // $test = calculator(2, 5); 
    // echo $test; // Display the result of the function

    // Scopes in PHP

    // $test = "Daniel"; // Global variable
    
    // function myFunction() {
    //     global $test; // Use the global variable

    //     $localVar = "Hello World!"; // Local variable

    //     return $test; // Display the local variable
    // }

    // echo myFunction(); // Call the function with the parameter
    
    // $test = "Daniel"; // Global variable
    // function myFunction() {
    //     $localVar = "Hello World!"; // Local variable

    //     return $GLOBALS["test"]; // Display the local variable
    // }

    // echo myFunction(); // Call the function with the parameter

    // function myFunction() {
    //     static $staticVar = 0; // Static variable

    //     $staticVar++; // Increment the static variable

    //     return $staticVar; // Display the static variable
    // }

    // echo myFunction(); // Call the function with the parameter
    // echo myFunction();

    // class MyClass { // Class declaration

    //     public $classVar = "Hello World!"; // Static variable

    //     public function myMethod() {
    //         echo $this->classVar; // Display the class variable
    //     }
    // }

    // Constants in PHP

    // define("PI", 3.14); // Define a constant its case sensitive
    // define("NAME", "DANIEL"); // This will not change the value of the constant
    // define("IS_ADMIN", true); // This is a boolean constant because 1 is equal to true

    // echo IS_ADMIN; // Display the variable

    // function test() { // Function to display the constant
    //     echo PI; // Display the constant
    // }

    // test(); // Call the function to display the constant

    // Loops in PHP

    // for loop - loops through a block of code a specified number of times
    // $test = 5; // Variable to be used in the loop
    // for ($i = 0; $i < $test; $i++) { // For loop
    //     echo "This is iteration number " . $i . "<br>"; // Display the value of i after the loop ends
    // }

    // while loop - loops through a block of code as long as the specified condition is true
    // $test = 5; // Variable to be used in the loop
    // while ($test < 10) { // While loop
    //     echo $test; // Display the value of test
    //     $test++; // Increment the value of test
    // }

    // do while loop - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    // $test = 10; // Variable to be used in the loop
    // do { 
    //     echo $test; // Display the value of test
    //     $test++; // Increment the value of test
    // } while ($test < 10); // This will not execute because the condition is false

    // foreach loop - loops through a block of code for each element in an array

    // $fruits = array("Apple", "Banana", "Mango"); // Array to be used in the loop

    // foreach ($fruits as $fruit) { // $fruit is the variable that will hold the value of each element in the array
    //     echo "This is a " . $fruit . "<br>"; // Display the value of fruit
    // }

    // $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange"); // Associative array to be used in the loop
    
    // foreach ($fruits as $fruit => $color) { // $fruit is the variable that will hold the value of each element in the array
    //     echo "This is a " . $fruit . ", that has a color of " . $color . "<br>"; // Display the value of fruit and color
    // }
    

    // Database in SQL
    
    // CREATE DATABASE myfirstdatabase;

    // CREATE TABLE users(
	//     id INT(11) NOT NULL AUTO_INCREMENT,
    //     username VARCHAR(30) NOT NULL,
    //     pwd VARCHAR(255) NOT NULL,
    //     email VARCHAR(100) NOT NULL,
    //     created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    //     PRIMARY KEY (id)
    // );

    // CREATE TABLE comments(
	//     id INT(11) NOT NULL AUTO_INCREMENT,
    //     username VARCHAR(30) NOT NULL,
    //     comment_text TEXT NOT NULL,
    //     created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    //     users_id INT(11) NOT NULL,
    //     PRIMARY KEY (id),
    //     FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE NO ACTION // no action will make
    // );

    // CREATE TABLE comments(
	//     id INT(11) NOT NULL AUTO_INCREMENT,
    //     username VARCHAR(30) NOT NULL,
    //     comment_text TEXT NOT NULL,
    //     created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    //     users_id INT(11),
    //     PRIMARY KEY (id),
    //     FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
    // );
    
    // INSERT INTO users (username, pwd, email) VALUES ('Basse','basse123','basse@gmail.com'); // insert data to SQL

    // UPDATE users SET username = 'BasseIsCool', pwd = 'basse456' WHERE id = 1; // update data to SQL

    // DELETE FROM users WHERE id = 1; // delete date from SQL

    // INSERT INTO comments (username, comment_text, users_id) VALUES ('Krossing','This is a comment on a website', 2); // insert data to SQL with a foreign key

    // SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id; // This is a inner join query

    ?>

</body>
</html>