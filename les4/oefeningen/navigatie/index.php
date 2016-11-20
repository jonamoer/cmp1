<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 21/10/16
 * Time: 13:22
 */

//Oefening 1: Array

//Doorloop een array zoals hieronder en bouw een html navigatie met behulp van ul/li.
//Tip: Gebruik een foreach (zie php.net)

$navigation = [
    'index' => 'Home',
    'about' => 'Over ons',
    'portfolio' => 'Portfolio',
    'contact' => 'Contacteer ons'];
?>

    <!doctype html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            .active{
                background: yellow;
            }
        </style>
    </head>
    <body>

    <?php
    $html="<ul>";
    $current = $_SERVER['PHP_SELF'];
    echo $current;

    foreach($navigation as $url => $titel){
if($current == "/cmp1/les4/oefeningen/navigatie/".$url.".php"){
    
    $html .= "<li class='active'>
        <a href='{$url}.php'>{$titel}</a>
    </li>";

}else
    $html .= "<li>
        <a href='{$url}.php'>{$titel}</a>
    </li>";
    }


    $html .= "</ul>";
    echo $html
    ?>

    </body>
    </html>


<?php
