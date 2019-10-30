<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php   

echo "<h1>HelloOo this is my second PHP page</h1>";

$text = "this is new text";
$new_text = "some more text";

$num1 = 3;
$num2 = 2;
$num2 = $num1++;
echo $num1 ." , ". $num2; 
 ?>
<p> <?php echo "$text"; ?>
<br>
    <?php echo "$new_text"; ?>
    <br>
    <?php echo "$new_text i mix variabels together  . $new_text"; ?>
</p>
</body>
</html>

