<?

require 'vendor/autoload.php';
require 'Database.php';

$db = new Database();

$db->executeSql('CREATE DATABASE ' . getenv('DATABASE_NAME'));
$db->executeSql('CREATE TABLE ' . getenv('DATABASE_NAME') . '.records (
    id int NOT NULL AUTO_INCREMENT,
    nm_id varchar(255) NOT NULL,
    price int,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);');
