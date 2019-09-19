<?php

/*
  naijacrawl
 */
session_start();
try {
    $db = new PDO('sqlite:../db/db_users.sqlite3');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, full_name TEXT, email TEXT, password TEXT)";

    $db->exec($query);
} catch (PDOException $e) {
    //show error
    echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
    exit;
}


