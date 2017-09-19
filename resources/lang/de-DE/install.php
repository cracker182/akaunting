<?php
return [
    'next'                  => 'Weiter',
    'refresh'               => 'Aktualisieren',
    'steps' => [
        'requirements'      => 'Bitte erfüllen Sie die folgenden Voraussetzungen!',
        'language'          => 'Schritt 1/3 : Sprache Wählen,
        'database'          => 'Schritt 2/3 : Datenbanksetup',
        'settings'          => 'Schritt 3/3 : Firmen- und Administrationsdetails',
    ],
    'language' => [
        'select'            => 'Sprache wählen',
    ],
    'requirements' => [
        'php_version'       => 'PHP 5.6.4 oder höher wird benötigt',
        'enabled'           => ':feature muss aktiviert werden!',
        'disabled'          => ':feature muss deaktiviert werden!',
        'extension'         => ':extension Erweiterung muss geladen sein',
        'directory'         => ':directory Verzeichnis muss schreibbar sein',
    ],
    'database' => [
        'hostname'          => 'Hostname',
        'username'          => 'Benutzername',
        'password'          => 'Passwort',
        'name'              => 'Datenbank',
    ],
    'settings' => [
        'company_name'      => 'Firmenname',
        'company_email'     => 'Firmen E-Mail',
        'admin_email'       => 'Admin E-Mail',
        'admin_password'    => 'Admin Passwort',
    ],
    'error' => [
        'connection'        => 'Fehler: Datenbankverbindung konnte nicht hergestellt werden. Bitte prüfen Sie die Daten.',
    ],
];
