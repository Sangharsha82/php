<?php
$array = ["First", "second", "third"];
//echo $array;      //prints out error

echo "<br>";

var_dump($array);

echo "<br>";

var_dump($array[0]);

echo "<br>";

var_dump($array[1]);

echo "<br>";

$index = [ 1=> "first", "THREE"=> "third" ] ; //array with string indexes are called Associative indexes
var_dump($index); 
// also you can write codes in multiple lines 
$mul = [ 
    "one"=> "first", 
    2=> "second ",
    "last"=> "3"
] ;

echo "<br>";

$name = "Laptop ";
$price = 2000;
$new = [$name,$price];
var_dump($new);

echo "<br>";

$alice =[
    "name"=> "Alice",
    "email"=> "alice@gmail.com",
    "phone"=> "998877"
];


$carol =[
    "name"=> "carol",
    "email"=> "carol@gmail.com",
    "phone"=> "96655"
];

$bob =[
    "name"=> "bob",
    "email"=> "bob@gmail.com",
    "phone"=> "334447"
];
$people = [$alice,$carol,$bob];
$people2=[ 
[
    "name"=> "bob",
    "email"=> "bob@gmail.com",
    "phone"=> "334447"],
[
    "name"=> "bob",
    "email"=> "bob@gmail.com",
    "phone"=> "334447"],
["name"=> "bob",
    "email"=> "bob@gmail.com",
    "phone"=> "334447"]
];                  //same same 

var_dump($people[1]["email"]);
