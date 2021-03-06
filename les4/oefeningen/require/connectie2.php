<?php

// Gebruik de SQLite configuratie.
$isSQLite = true;

if ($isSQLite) {
    /**
     * Configuratie voor SQLite.
     */
    
    // Data Source Name samenstellen.
    $dsn = 'sqlite:'
         . ':memory:'; // Sla de database tijdelijk op in het RAM geheugen.
    
    $dbconfig = [
        'dsn'      => $dsn,
        'user'     => null,
        'password' => null,
        'options'  => null,
    ];

} else {
    /**
     * Configuratie voor MySQL Server.
     */

    $dsn_properties = [
        'dbname'  => 'mijn_db',   // Naam van het Database Schema (moet al bestaan in MySQL).
        'host'    => 'localhost',
        'port'    =>  3306,       // 3306 is de standaardpoort voor MySQL.
        'charset' => 'utf8',      // Zorgt ervoor dat de verbinding tussen PHP en MySQL in UTF-8-tekencodering gebeurt.
    ];

    // Data Source Name samestellen.
    $dsn = 'mysql:';
    foreach ($dsn_properties as $property => $value) {
        $dsn .= "{$property}={$value};";
    }

    $dbconfig  = [
        'dsn'      => $dsn,
        'user'     => 'root', // Naam van de databasegebruiker.
        'password' => 'root', // Wachtwoord voor de databasegebruiker.
        'options'  =>  null,
    ];

}

// Foutmeldingen
error_reporting(0); // Standaardfoutmelding afzetten.
try {               // Eigen foutmelding.
    /**
     * Verbinding maken met de database via een nieuwe PDO object.
     */
    $db = new PDO(
        $dbconfig['dsn'], // Data Source Name
        $dbconfig['user'],
        $dbconfig['password'],
        $dbconfig['options']
    );
    var_dump('Databaseverbinding met ' . ($isSQLite ? 'SQLite3' : 'MySQL') . ' geopend.');
} catch (PDOException $e) {
    die('Databaseverbinding mislukt: <pre>' . $e->getMessage() .'</pre>');
}

/**
 * Alle foutmeldingen weer aanzetten, inclusief die van PDO.
 * Gebruik deze opties NOOIT op een productieserver, want dit is een schat aan informatie voor hackers!
 */
error_reporting(E_ALL);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);