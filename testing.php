<?php

# Import environment settings from DotCloud
$envjson = json_decode(file_get_contents("/home/dotcloud/environment.json"),true);

# Create MySQL Connection
$mysqli = new mysqli($envjson['DOTCLOUD_DB_MYSQL_HOST'],
                     'latebarter',         # username
                     '7dsfjkh78',   # password
                     'latebart',       # db name
                     $envjson['DOTCLOUD_DB_MYSQL_PORT']);

print_r($mysqli->query('SELECT now();'));

?>