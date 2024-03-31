<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // echo "<h1>Christina's Site</h1>";
    // echo "<hr>";
    // echo "<p>This is my site</p>";

    $characterName = "Harry";
    $characterAge = 35;

    // echo "There once was a man named $characterName <br>";
    // echo "He was $characterAge years old <br>";
    // $characterName = "Ron";
    // echo "He really liked the name $characterName <br>";
    // echo "But didn't like being $characterAge <br>";


    // DATA TYPES

    //string with quotations
    // $phrase = "I open at the close";
    // echo strtoupper($phrase);
    // echo strlen($phrase);
    // echo $phrase[4];
    // echo str_replace("open", "close", $phrase);
    // echo substr($phrase, 7, 4);

    //numbers - whole number/integer
    // $age = 30;
    // echo 40;
    // $num = 10;
    // $num++;
    // $num--;
    // echo $num;
    // absolute value
    // echo abs(-100);
    // echo (4 + 5) * 10;
    // echo pow(2, 4);
    // echo sqrt(144);
    // compare numbers which one is bigger
    // echo max(3, 10);
     // compare numbers which one is smaller
    //  echo min(3, 10);

    //decimal numbers
    // $gpa = 3.7;
    // echo -40.823;

    //boolean 
    // $isMale = true;

    // $myArray = [1, 2, 3, 4];
    // var_dump($myArray);
    ?>
    

<!-- user input form -->
    <!-- <form action ="site.php" method="get">
       Name: <input type="text" name="name">
       <br>
       Age: <input type="number" name="age">
       <input type="submit">
    </form>
    <br>
    Your name is <?php 
        // if(isset($_GET["name"])) {
        // echo $_GET["name"]; 
        // }
        ?>


      Your age is <?php 
        // if(isset($_GET["age"])) {
        // echo $_GET["age"]; 
        // }

        ?> -->

<!-- Build a basic Calculator -->
<!-- <form action ="site.php" method="get"> -->
    <!-- <input type="number" name="num1"> -->
    <!-- <br> -->
    <!-- <input type="number" name="num2"> -->


<!-- <input type="submit"> -->
        <!-- </form> -->
        <?php // if(isset($_GET["num1"]) && isset($_GET["num2"])): ?>
           <!-- Answer: <?php // echo $_GET["num1"] + $_GET["num2"]      -->
           ?>       
           <?php //endif; ?>

<!-- Mad Libs Game -->
<!-- <form action ="site.php" method="get">
            Color: <input type="text" name="color"> <br>
            Plural Noun: <input type="text" name="pluralNoun"> <br>
            Celebrity: <input type="text" name="celebrity"> <br>


    <input type="submit">
        </form>
        <br><br> -->
        
        <?php 
        
        // if(isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])) {
        
        //     $color = $_GET["color"];
        //     $pluralNoun = $_GET["pluralNoun"];
        //     $celebrity = $_GET["celebrity"];


        //     echo "Roses are $color <br>";
        //     echo "$pluralNoun are blue <br>";
        //     echo "I Love $celebrity <br>";

        // }
        ?>

        <!-- URL Parameters -->

        <!-- <form action="site.php" method="get">
            Name: <input type="text" name="name"> <br>
            <input type="submit">

        </form>
        <br><br> -->

        <?php
        // if(isset($_GET["name"]))
        //     echo $_GET["name"];
        ?>

<!-- When to use GET vs. POST -->
<!-- Ex. Password security -->

<!-- <form action="site.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">

        </form>
<br><br> -->

<?php
    // if(isset($_GET["password"]))
    // echo $_POST["password"];

?>    

<!-- Arrays -->

<?php

// $friends = array("Kevin", "Karen". "Oscar", "Jim");
// Update value
// $friends[1] = "Dwight";
// echo $friends[1];

// Add value at next index
// $friends[4] = "Angela";
// echo $friends[4];

?>

<!-- Checkbox -->
<!-- <form action="site.php" method="post">
Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
Pears: <input type="checkbox" name="fruits[]" value="pears"><br>


    <input type="submit">
</form> -->

    <?php
        // $fruits = $_POST["fruits"];
        // echo $fruits[0];
    ?>

<!-- Associative Arrays - store key-value pairs-->
<!-- <form action="site.php" method="post">
<input type="text" name="student">


    <input type="submit">
</form> -->

<?php

// if(isset($_POST["student"]) && !empty($_POST["student"])) {
// $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
// echo $grades[$_POST["student"]];
// echo $grades["Jim"];
// echo count($grades);
// }
?>

<!-- Functions -->

<?php

// function sayHi($name){
//     echo "Hello $name";
// }

// sayHi("Christina");

?>

<!-- Return Statements -->

<?php
// function cube($num){
//     return $num * $num * $num;
// }

// $cubeResult = cube(4);
// echo $cubeResult;
?>

<!-- If Statements -->

<?php 
    // $isMale = true;
    // $isTall = false;
    // if ($isMale && $isTall){
    //     echo "You are a tall male";
    // } else if ($isMale && !$isTall) {
    //     echo "You are a short male";
    // } else {
    //     echo "You are not male";
    // }
?>

<!-- Comparisons -->

<?php
// echo max(3, 6);
// function getMax($num1, $num2){
//     if($num1 > $num2) {
//         return $num1;
//     } else {
//         return $num2; 
//     }
// }

// echo getMax(2, 5);
?>

<!-- Build a better calculator -->

<!-- <form action="site.php" method="post">
    First Num: <input type="number" name="num1"> <br>
    Operator: <input type="textbox" name="operator"> <br>
    Second Num: <input type="number" name="num2"> <br>

    <input type="submit">
</form> -->

<?php 

// $num1 = $_POST["num1"];
// $num2 = $_POST["num2"];
// $operator = $_POST["operator"];

// if ($operator == "+") {
//     echo $num1 + $num2;
// } else if ($operator == "-") {
//     echo $num1 - $num2;
// } else if ($operator == "/") {
//     echo $num1 / $num2;
// } else if ($operator == "*") {
//     echo $num1 * $num2;
// } else {
//     echo "Invalid Operator";
// }
?>

<!-- Switch statements -->

<!-- <form action="site.php" method="post">
    What was your grade? 
    <input type="text" name="grade">
    <input type="submit">
</form> -->

<?php 
// $grade = $_POST["grade"];
// switch($grade) {
//     case "A":
//         echo "You did amazing!";
//         break;
//     case "B":
//         echo "You did pretty well";
//         break;
//     case "C":
//         echo "You did poorly";
//         break;
//     case "D":
//         echo "You did very bad";
//         break;    
//     case "F":
//         echo "You failed!";
//         break;        
//     default:
//         echo "Invalid Grade";    
// }
?>

<!-- While Loops -->

<?php

// $index = 1;

// while($index <= 5) {
//     echo "$index <br>";
//     $index++;
// }

?>

<!-- For loops -->

<?php

// $luckyNumbers = array(4, 8, 15, 16, 23, 42);
// for ($i = 0; $i <= count($luckyNumbers); $i++) {
//     echo "$luckyNumbers[$i] <br>";
// }
?>

<!-- Including HTML -->

<?php
// include "header.html"
?>
<!-- <p>Welcome to my website</p> -->
<?php
// include "footer.html"
?>

<!-- Include PHP -->

<?php

// $title = "My First Post";
// $author = "Christina";
// $wordCount = 400;

// include "article-header.php"

?>

<!-- Classes & Objects -->

<?php

// class Book {

//     var $title;
//     var $author;
//     var $pages;

// Constructors

//     function __construct($aTitle, $aAuthor, $aPages) {
//         $this->title = $aTitle;
//         $this->author = $aAuthor;
//         $this->pages = $aPages;

//     }
// }

// $book1 = new Book("Harry Potter", "JK Rowling", 400);
// $book2 = new Book("Lord of the Rings", "JRR Tolkien", 700);


// echo $book2->title;

?>

<!-- Object Functions -->

<?php

// class Student {
//     var $name;
//     var $major;
//     var $gpa;

//     function __construct($name, $major, $gpa) {
//         $this->name = $name;
//         $this->major = $major;
//         $this->gpa = $gpa;
//     }

//     function hasHonors() {
//         if ($this->gpa >= 3.5) {
//             return "true";
//         }
//         return "false";
//     }
// }

// $student1 = new Student("Jim", "Business", 2.8);
// $student2 = new Student("Pam", "Art", 3.6);

// echo $student1-> hasHonors();
// echo $student2-> hasHonors();

?>

<!-- Getters & Setters -->

<?php

// class Movie {
//     public $title;
//     private $rating;

//     function __construct($title, $rating) {
//         $this->title = $title;
//         $this->rating = $rating;
//     }

//     function getRating() {
//         return $this->rating;
//     }

//     function setRating($rating) {
//         // $this->rating = $rating;
//         if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
//             $this->rating = $rating;
//         } else {
//             $this->rating = "NR";
//         }
//     }
// }

// $avengers = new Movie("Avengers", "PG-13");

// $avengers->setRating("PG-13");
// echo $avengers->getRating();

?>

<!-- Inheritance -->

<?php

class Chef{
    function makeChicken() {
        echo "The chef makes chicken <br>";
    } 
    function makeSalad() {
        echo "The chef makes salad <br>";
    }
    function makeSpecialDish() {
        echo "The chef makes bbq ribs <br>";
    }
}

class ItalianChef extends Chef {

}

$chef = new Chef();
$chef->makeChicken();

$italianchef = new ItalianChef();
$italianchef->makeChicken();

?>

</body>
</html>