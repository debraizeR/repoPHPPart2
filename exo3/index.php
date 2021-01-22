<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$age = 2;
$gender = "Femme";

//if($age >= 18 && $gender == "homme") elseif()

if($age >= 18)
{
    if($gender == "Homme")
    {
        echo "Vous êtes un homme et vous êtes majeur";
    }
    if($gender == "Femme")
    {
        echo "Vous êtes une femme et vous êtes majeure";
    }
}
else
{
    if($gender == "Homme")
    {
        echo "Vous êtes un homme et vous êtes mineur";
    }
    if($gender == "Femme")
    {
        echo "Vous êtes une femme et vous êtes mineure";
    }
}
?>
</body>
</html>