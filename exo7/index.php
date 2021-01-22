<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$var_b = "Je suis une variable qui a une valeur";
echo $var_b ?? "Je suis une variable sans valeur";

if(isset($var_b))
{
    echo $var_b;
}
else
{
    echo "je suis une variable sans valeur";
}

?>
    
</body>
</html>