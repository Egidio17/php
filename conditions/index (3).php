 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    ($option = array('genre' => 'homme', 'age' => 22)) { 
    
        $pgenre = $option['genre'];                                 
        $age = $option['age'];                                     
        if ($genre == 'Homme')
            $texte = 'Vous etes un homme ';
        else if ($genre == 'Femme')
            $texte = 'Vous etes une femme ';
        if ($age < 18)
            $texte .= 'et vous etes mineur';
        else
            $texte .= 'et vous etes majeur';
        echo $texte;
    }
    ?>
</body>
</html>