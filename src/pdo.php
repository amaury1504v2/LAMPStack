<?php

$pdo = new PDO('mysql:host=amaury_mysql', 'root', 'root');
$databases = $pdo->query('SHOW DATABASES')->fetch(PDO::FETCH_ASSOC);

print_r($databases);

// try {
    // $pdo = new PDO('mysql:host=amaury_mysql', 'root', 'root');
    // $databases = $pdo->query('SHOW DATABASES')->fetch(PDO::FETCH_ASSOC);
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // print_r($databases);
// }
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }