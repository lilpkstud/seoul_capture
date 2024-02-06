<?php
if(isset($_ENV[`JAWSDB_URL`])) {
    $db = parse_url($_ENV[`JAWSDB_URL`]);
    define("DB_NAME", trim($db[`path`],`/`));
    define("DB_USER", $db[`user`]);
    define("DB_PASSWORD", $db[`pass`]);
    define("DB_HOST", $db[`host`]);
    define("DB_CHARSET", ‘utf8’);
    define("DB_COLLATE", ‘’);
} else {
    die("No Database credentials!" + $_ENV['JAWSDB_URL'] + $_ENV['Testing']);
}