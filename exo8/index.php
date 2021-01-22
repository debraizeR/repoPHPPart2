<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


$number = 11;
if(fmod($number, 5) == 0 && fmod($number, 3))
{
    echo "FizzBuzz";
}
elseif(fmod($number, 3))
{
    echo "Fizz";
}
elseif(fmod($number, 5))
{
    echo "Buzz";
}
else
{
    echo $number;
}
?>
</body>
</html>