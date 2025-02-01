<?php
$DB_host = "bypt420ycdrlcrvehad9-mysql.services.clever-cloud.com";
$DB_user = "uh24mqaavomifklq";
$DB_pass = "i4cEGDLglCox9Yr4BUYP";
$DB_name = "bypt420ycdrlcrvehad9";
try {
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
}
