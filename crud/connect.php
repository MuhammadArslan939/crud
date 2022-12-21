<?php
try {
    /* Database config */
    $db_host        = 'mariadb-server';
    $db_user        = 'root';
    $db_pass        = '123';
    $db_database    = 'crud_db';

    /* End config */
    $db = new PDO("mysql:host=$db_host;dbname=$db_database", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit($e->getMessage());
}
