<?php
// $mySalary = 4000;
// $myTaxes = 3000;
// print("<pre>");
// print_r($_POST);
// // print_r($GLOBALS);
// print("</pre>");
// calculateRest();
// echo($rest)
// function calculateRest(){
//     // global $mySalary;
//     // global $myTaxes;
//     // $rest = mySalary - $myTaxes;
//     // echo ($rest);
//     //when we call object we dont need $ sin if globle aready have that
//     $GLOBALS[rest] = $GLOBALS["mySalary"] - $GLOBALS["myTaxes"];
// }
session_start();
$_SESSION['user']['fname'] = "Susanne";
$_SESSION['user']['lang'] = "de";
$_SESSION['loggedIn'] = "true";

setcookie("user", $_SESSION['user']['fname'], time() + (86400 * 30), '/');

// print


$lang = "en";
if(isset($_GET["lang"])){
    $lang = $_GET["lang"];
}
var_dump ($lang);
$lang = $_GET["lang"];
$text = '';
switch($lang){
   case "en":
   $text = 'This is my text in English';
   break;
   case "de":
   $text = 'Das ist mein Dutscher Text';
   break;
   default:
   $text = 'lorem ipsum dolor sit.';
}
foreach($_POST as $key => $value){
   echo $key.": ".$value."<br>";
}
// Psot SuperGloble
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HTML Form</title>
</head>
<body>
<nav>
   <ul>
   <li><a href="?lang=en">English</a></li></ul>
   <li><a href="?lang=de">Deutsch</a></li></ul>
   <li><a href="?lang=lt">Latin</a></li></ul>
   </ul>
</nav>
<p><?php echo $text; ?></p>
<form method="post">
<label for="user">Username: </label>
<input type="text" name="user" id="user"><br>
<label for="pwd">Password: </label>
<input type="password" name="pwd" id="pwd"><br>
<input type="submit" name="submit" value="Login">
</form>
</body>
</html>