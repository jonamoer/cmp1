<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 14/11/2016
 * Time: 12:45
 */

session_start();

$_SESSION['kleur'] = 'yellow';
$_SESSION['getal'] = '22';
$_SESSION['land'] = 'USA';

echo 'sessievariabelen zijn aangemaakt!';

?>