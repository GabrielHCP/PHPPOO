<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php    
    require_once("Luta.php");
    require_once("Lutador.php");
    require_once("Lutadoras.php");


/* CRIAR LUTADORAS
LUTADORAS NÃO PODE LUTAR COM LUTADORES */

    //Lutadores
    $l = array();
    $l[0] = new Lutador("PrettyBoy", "França", 31, 1.75, 68.9, 11, 2, 1);
    $l[1] = new Lutador("PutsCript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow" , "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);


    //Lutadoras
    $m = array();
    $m[0] = new Lutadora("Javeira", "Canada", 20, 1.68, 55.5, 5, 3, 1);
    $m[1] = new Lutadora("Ruby" , "EUA", 35, 1.75, 65.4, 10, 2, 1);
    $m[2] = new Lutadora("Annie" , "Brasil", 41, 1.80, 70.8, 30, 10, 2);
    $m[3] = new Lutadora("Jessie", "Polonia", 20, 1.80, 80.5, 10, 5, 2);
    $m[4] = new Lutadora("Kisse", "Argentina", 23, 1.60, 90.2, 5, 1, 2);
    $m[5] = new Lutadora("Jibelia", "Brasil", 19, 1.70, 80.2, 5, 2, 1);
   
    $m[5]->apresentar();
 
    ?>
    </pre>
</body>
</html>