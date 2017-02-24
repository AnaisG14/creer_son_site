
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <p><?php

echo '<h1>Bonjour à tous, hello world</h1>';
/* création de variable*/
$name = 'Fred'; /* variable string */
$age = 48; // variable int
$height = 1.82; // variable float
$age_month = $age * 12; // exemple de calcul

echo 'Bonjour ' . $name . ', tu mesures' . $height. ' m, tu as ' . $age . 'ans, ce qui correspond à ' . $age_month . 'mois.';
if ($age < 18) 
	{
		$old = true;
		echo 'Bonjour' . $name . ', vous n\'avez pas l\âge requis pour visiter ce site';
	}
else
 	{
		$old = false;
		echo 'Bonjour' . $name . ', vous avez l\'âge requis pour entrer';
	}
if($old)
{
	echo 'Désolé, il va falloir vieillir un peu';
}
else
{
	echo 'Vous êtes le bienvenue.';
}
?></p>
    </body>
</html>





