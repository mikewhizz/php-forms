<?php
#define our variables and set them to empty
$name=$email=$gender=$comment=$website="";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name= test_input($_POST['name']);
    $email= test_input($_POST['email']);
    $gender= test_input($_POST['gender']);
    $comment= test_input($_POST['comment']);
    $website= test_input($_POST['website']);

}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
echo "<br>";
echo "<h2>this is the information you have provided</h2>";
echo  "<br>";
echo $name;
echo  "<br>";
echo $email;
echo  "<br>";
echo $website;
echo  "<br>";
echo $comment;
echo  "<br>";
echo $gender;


