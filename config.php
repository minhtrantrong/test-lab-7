<?php
# Heroku credential
$host_heroku = "ec2-54-91-188-254.compute-1.amazonaws.com";
$db_heroku = "dbf0u8s56n2c6v";
$user_heroku = "xnpzoivrmjxdxw";
$pw_heroku = "ee8111af4daa8dc68091f2c376512f5b1cc936dde53fdcd8abcd79a0c845fe1a";
# Create connection to Heroku Postgres
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
?>