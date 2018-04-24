<?php
include 'classes/database.class.php';

session_start();
define("DB_HOST", "127.0.0.1");  /* Your Database host (standard 127.0.0.1 or localhost) */
define("DB_USERNAME", "root"); /* Your Database user or username (standard root) */
define("DB_PASSWORD", ""); /* Your Database password (standard empty) */
define("DB_NAME", "CodeFest"); /* Your Database name (standard test) */

$database = new database();
$database->query('SELECT site_maintenance FROM site_settings');
$maintenance = $database->fetchColumn();

if($maintenance == 1) {
    header("location: /maintenance.php");
}